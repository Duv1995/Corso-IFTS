// FILE IN CUI MODIFICO L'HTML
// voglio che al caricamento della pagina web mi compare tutta la lista
// dopo che lo spinner ha girato un pochetto

// in questo file quindi metterò le funzioni jquery per caricare i dati nella pagina
// devo fare quello che avevo sul file loading-data ma con jquery

// prima cosa voglio vedere lo spinner al caricamento della mia pagina
// finchè la mia pagina intera non è stata caricata tutta

// prima definisco costante globale che richiamo qua sotto
const modificaContattoModal = new bootstrap.Modal('#modificaContattoModal', {});
const aggiungiContattoModal = new bootstrap.Modal('#aggiungiContattoModal', {});


$(document).ready(
    // ready esegue una funzione quando il document è stato caricato
    function () {
        // Devo prendere la lista contatti dall'oggetto rubrica
        // inizializzo lista contatti estraendola tramite la funzione della classe rubrica
        if (rubrica !== null && rubrica !== undefined) {
            // funzione della classe rubrica che ritorna i contatti con ordinamento a-z
            // pescandoli dal file init-data.js

            // prendo la rotellina che ho nella pagina html e la tolgo
            // #canelletto prima del nome dell'id del div html con id "loader"
            $("#loader").hide();

            // stampo la lista contatti con la funzione che ho messo sotto
            stampaContatti();

            // tasto per salvare le modifiche
            $("button.salva-contatto").on("click", function () {
                // prima dovrei fare la validazione dei campi (sono tutte stringhe)
                // ma per ora la skippo

                const nome = $("#mod-nome").val();
                const cognome = $("#mod-cognome").val();
                const email = $("#mod-email").val();
                const telefono = $("#mod-numero").val();
                const id = $("#mod-id-contatto").val();
                // creo un nuovo oggetto contatto da passare 
                // al nostro service manager rubrica.js
                let contatto = new Contatto(nome, cognome, email, telefono);
                if (rubrica !== null && rubrica !== undefined && id !== undefined) {
                    // faccio le modifiche
                    rubrica.modificaContatto(id, contatto);
                    stampaContatti();
                    modificaContattoModal.hide();
                }
            });

            // copincollo la funzione per salvare modifiche e la cambio
            // per creare nuovi contatti!

            $("button.crea-contatto").on("click", function () {
                const nome = $("#nome").val();
                const cognome = $("#cognome").val();
                const email = $("#email").val();
                const telefono = $("#numero").val();
                //creiamo un oggetto contatto da passare al nostro serviceManager Rubrica
                let contatto = new Contatto(nome, cognome, email, telefono);
                if (rubrica !== null && rubrica !== undefined) {
                    rubrica.aggiungiContatto(contatto);
                    stampaContatti();
                    aggiungiContattoModal.hide();
                }
            });

            $("#aggiungi-contatto").on("click", function () {
                // i campi devono essere vuoti quando fai nuovo contatto
                $("#nome").val("");
                $("#cognome").val("");
                $("#email").val("");
                $("#numero").val("");
                aggiungiContattoModal.show();
            });

            // voglio fare si che quando scrivo nella search dopo qualche carattere
            // mi scompaia la lista e mi appaia quella dei suggerimenti coi nomi che matchano
            // faccio il bind dell'evento per fare la ricerca dei nomi nella rubrica
            $("#ricerca").on("keyup", function () {
                // on keyup sarebbe quando uno ha finito di premere un tasto
                let valore = $(this).val();
                if (valore.length <= 3) {
                    // se la lunghezza del valore in input che sto scrivendo è meno di 3 caratteri
                    // faccio apparire il loader e nascondo la lista 
                    $("#loader").show();
                    $("#rubrica-row").hide();
                } else {
                    // se invece l'input diventa maggiore di 4 caratteri
                    // nascondo il loader e faccio apparire la lista
                    // ma solo coi contatti che mathcano
                    $("#loader").hide();
                    const lista = rubrica.ricercaContatto(valore);
                    stampaContatti(lista);
                    $("#rubrica-row").show();
                }
            });

            // bindo il tasto per la ricerca che sostanzialmente è inutile lol
            $("button.cerca").on("click", function () {
                let valore = $("#ricerca").val();
                const lista = rubrica.ricercaContatto(valore);
                stampaContatti(lista);
                $("#loader").hide();
                $("#rubrica-row").show();

            });

        }
    }

);






// funzione per creare la lista dei contatti che apparirà nella pagina

function stampaContatti(listaContatti) {
    if (listaContatti === undefined) {
        listaContatti = rubrica.stampaContatti("az");
    }
    // creo una variabile per manipolare la root dove inserirò i contatti
    let divRoot = $("#rubrica-row");
    // così tutti i div con id rubrica-row li manipolo usando questa variabile
    // ogni volta ripuliamo la root sennò si duplica somehow lol
    divRoot.html("");

    // array vuoto per mettere i div delle righe che creerò dinamicamente
    let divRighe = [];

    // ciclo la mia rubrica di contatti e per ogni contatto creo una row
    for (let index = 0; index < listaContatti.length; index++) {
        const contatto = listaContatti[index];
        // per creare nuovi div da appendere al div padre rubrica-row
        // utilizzo la funzione crea div righe del file loading-data.js*
        let divRiga = creaDivRighe(index);
        // in base all'index del contatto alterno righe colorate e non
        // uso crea div righe del file rubrica.js 

        // creo le mie 4 colonne facendo appendchild della mia colonna
        divRoot.append(divRiga);
        divRiga.appendChild(creaDivColonne(index, "col-1")); // ID
        divRiga.appendChild(creaDivColonne(contatto.nome, "col-2"));
        divRiga.appendChild(creaDivColonne(contatto.cognome, "col-2"));
        divRiga.appendChild(creaDivColonne(contatto.email, "col-2"));
        divRiga.appendChild(creaDivColonne(contatto.numeroDiTelefono, "col-2"));

        // creo i bottoni di azione con la funzione sotto modificata
        let divActions = creaDivColonne(creaBtnAzione(index, "Cancella"), "col-2");
        divActions.appendChild(creaBtnAzione(index, "Modifica", contatto));
        divRiga.appendChild(divActions);

        // spingo tutte le righe dentro l'array creato sopra
        divRighe.push(divRiga);
    }

    // infine appendo l'array delle righe al div padre rubrica-row
    divRoot.append(divRighe);

    // copio la roba interna per nserire la funzione dell'evento on click sul pulsante cancella
    // uso i selettori jquery per fare il bind della nostra funzione
    // per cancellare il nostro contatto
    // che andrà a trovare l'id del contatto per cancellarlo hehe
    $("button.cancella").on("click", function (event) {
        // prendo tutto l'elenco dei pulsanti cancella e gli bindo questa funzione
        // che però faccio eseguire a javascript solo quando il dom è stato tutto
        // visualizzato sulla pagina, quindi lo fa una volta sola!
        // per fare in modo che venga eseguito anceh dopo il caricamento del dom
        // devo inserire tutta sta manata dentro la mia funzione ceh stampa i contatti!

        // id lo trovo tramite il data-id che ho messo ai bottoni!
        let id = $(this).attr("data-id");
        console.log(id);
        if (rubrica !== null && rubrica !== undefined && id !== undefined) {
            rubrica.eliminaContatto(id);
            stampaContatti();
        }
    });

    $("button.modifica").on("click", function (event) {
        let id = $(this).attr("data-id");
        // memorizzo i dati di ciascun contatto in una variabile
        const contatto = $(this).attr("data-model");
        // trasformo l'oggetto contatto in json
        // così per inserire i suoi campi nel modulo modifica
        // non devo fare un ciclo for ma prendo direttamente
        // le chiavi-valori del json
        let contattoobj = JSON.parse(contatto);
        console.dir(contattoobj); // per vedere se ho fatto bene

        if (rubrica !== null && rubrica !== undefined && id !== undefined) {
            // all'onclick devo andare a fare apparire la modale
            // tramite l'oggetto modale che trovo su bootstrap
            const modificaContattoModal = new bootstrap.Modal('#modificaContattoModal', {});
            // metto id della mia modale che ho su index.html

            // ma se clicco e basta la modale appare ma ha i campi vuoti!
            // voglio che appaiano di default i campi precompilati del
            // contatto che sto modificando
            const listaContatti = rubrica.stampaContatti("az");
            const contatto = listaContatti[id];
            // underscore sono proprietà private che vado a ripescare così perchè
            // le ho jsonificate prima (for reasons...)
            $("#mod-nome").val(contattoobj._nome);
            $("#mod-cognome").val(contattoobj._cognome);
            $("#mod-email").val(contattoobj._email);
            $("#mod-numero").val(contattoobj._numeroDiTelefono);
            $("#mod-id-contatto").val(id);

            // al click mostrerò la mia modale tramite il suo metodo show 
            // (lo trovo sempre su bootstrap)
            modificaContattoModal.show();
        }
    });
}


// copincollo la funzione per modificare e 





// *copio le funzioni per crare i div righe e colonne dal file che non uso piu lol
function creaDivRighe(indice) {
    let divRow = document.createElement("div");
    divRow.setAttribute("data-id", indice);

    if (indice % 2 === 0) {
        divRow.className = "row";
    } else {
        divRow.className = "row bg-light";
    }

    return divRow;
}

// modifico la funzione delle colonne
function creaDivColonne(valore, classeCss) {
    let divCol = document.createElement("div");
    divCol.className = classeCss;
    // se valore è un oggetto di html (div, bottoni, etc) 
    // gli faccio fare l'append direttamente
    // in caso sia altro inserisco il valore come testo
    if (valore instanceof HTMLElement) {
        divCol.appendChild(valore);
    } else {
        divCol.innerHTML = valore;
    }
    return divCol;
}

function creaBtnAzione(id, azione, model) {

    let btn = document.createElement("button");

    //vado ad inserire un attributo con l'id del elemento della riga 
    // in modo da richiamarlo successivamente
    btn.setAttribute("data-id", id);
    if (model !== null && model !== undefined) {
        btn.setAttribute("data-model", JSON.stringify(model));
    }
    btn.className = "btn btn-block btn-primary " + azione.toLowerCase();
    btn.innerHTML = azione;

    return btn;
}