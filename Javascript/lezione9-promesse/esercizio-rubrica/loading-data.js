



function creaDivColonne(valoreTesto, classeCss) {
    let divCol = document.createElement("div");
    divCol.className = classeCss;
    divCol.innerHTML = valoreTesto;
    return divCol;
}

// creo la funzione per creare i bottoni di azione
// che all'interndo di una colonna div aggiunge in maniera dinamica un pulsante
// dove creo uno switch con le varie azioni che uno vuole compiere su quel contatto 
// (per ora c'è solo cancella)
function creaBtnAzione(id, azione) {
    let divCol = document.createElement("div");
    divCol.className = "col-md-2";
    let btn = document.createElement("button");
    btn.className = "btn btn-block";
    btn.innerHTML = azione;
    switch (azione) {
        case "Cancella":
            btn.onclick = function () {
                if (rubrica !== null && rubrica !== undefined) {
                    rubrica.eliminaContatto(id);
                    stampaContatti();
                }
            }
            break;
        default:
            break;
    }
    divCol.appendChild(btn);
    return divCol;
}

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

function stampaContatti(lista) {
    let divRowRoot = document.getElementById("rubrica-row");
    let listaContatti = [];
    if (lista === null || lista === undefined) {
        listaContatti = rubrica.stampaContatti("az");
    } else {
        listaContatti = lista;
    }

    let divLoader = document.getElementById("loader");
    divLoader.className = "d-none";
    divRowRoot.innerHTML = "";
    for (let index = 0; index < listaContatti.length; index++) {
        const contatto = listaContatti[index];
        let divRiga = creaDivRighe(index);
        divRiga.appendChild(creaDivColonne(index, "col-md-1"));
        divRiga.appendChild(creaDivColonne(contatto.nome, "col-md-3"));
        divRiga.appendChild(creaDivColonne(contatto.cognome, "col-md-3"));
        divRiga.appendChild(creaDivColonne(contatto.telefono, "col-md-3"));
        // creo un bottone che passa l'id del mio contatto
        divRiga.appendChild(creaBtnAzione(index, "Cancella"));
        divRowRoot.appendChild(divRiga);
    }

}

// creo funzione per salvare un contatto inserito con il form
function salvaContatto() {
    let nome = document.getElementById("nome").value;
    let cognome = document.getElementById("nome").value;
    let numero = document.getElementById("nome").value;

    // nuovo oggetto contatto che creo tramite la classe contatto che avevo gia fatto prima
    let contattoDaAggiungere = new Contatto(nome, cognome, numero);
    // verifico che la mia variabile globale rubrica sia diversa da undefined e null
    if (rubrica !== undefined && rubrica != null) {
        if (rubrica !== undefined && rubrica != null) {
            rubrica.aggiungiContatto(contattoDaAggiungere);
            stampaContatti();
            // dopo che stampo resetto i campi di input
            // altrimenti uno continua a spammare salva
            // e inserisce lo stesso contatto 50 volte
            document.getElementById("nome").value = "";
            document.getElementById("cognome").value = "";
            document.getElementById("numero").value = "";

        }
    }
}

// per cancellarea la rubrica basta assegnargli 
// alla proprietà database un array vuoto lol
function cancellaRubrica() {
    if (rubrica !== undefined && rubrica != null) {
        rubrica.database = [];
        stampaContatti();
    }
}

// richiamo la mia funzione di ricerca che ho su rubrica
function cercaContatto() {
    let cerca = document.getElementById("ricerca").value;
    if (rubrica !== undefined && rubrica !== null) {
        let lista = rubrica.ricercaContatto(cerca);
        stampaContatti(lista);
    }
}


setTimeout(stampaContatti(), 5000);
