// da qui modifico l'HTML

let divRowRoot = document.getElementById("rubrica-row");
// questo elemento rappresenta il div che mi farà da contenitore per le mie righe
// che per il momento sono vuote e devo andare a fare apparire nel HTML

// devo andare a modificare il codice della funzione stampa contatti per farle 
// ritornare il nostro array 

let listaContatti = rubrica.stampaContatti("az");
// la lista contatti sarà un array che posso ciclare per andarmi a creare le 
// righe e colonne che mi servono nella pagina HTML

// posso anche creare un metodo che mi genera le 3 colonne id, nome, cognome, tel
function creaDivColonne(valoreTesto) {
    // input valore di testo che dovrò mettere nelel colonne
    let divCol = document.createElement("div");
    // al mio div dovrò aggiungere la classe col-3 per farla uguale alle altre
    divCol.className = "col-3";
    // ora devo aggiungere il valore dentro questo tag
    divCol.innerHTML = valoreTesto;
    // ritorna tutto il bel div che ho impostato
    return divCol;
    // questa funzione creerà il div della colonna
}

// ogni contatto mi rappresenta una riga, quindi devo creare una riga per ogni contatto
function creaDivRighe(indice) {
    let divRow = document.createElement("div");
    // alle righe devo dare anche un id per sapere a quale contatto si riferiscono
    divRow.setAttribute("data-id", indice);
    // voglio fare le righe di colore alternato, quindi
    if (indice % 2 === 0) {
        divRow.className = "row";
        // non la faccio dark la faccio normale perche senno troppo scuro
    } else {
        divRow.className = "row bg-light";
    }
    return divRow;
    // questa funzione creerà il div delle righe
}

/*
// adesso dobbiamo andare a popolare le righe e le colonne coi dati presi dal mio altro file
for (let index = 0; index < listaContatti.length; index++) {
    const contatto = listaContatti[index];
    // per ogni contatto dovrò creare una riga
    // le creo con la funzione di prima
    let divRiga = creaDivRighe(index);
    // devo appendere una colonna per ogni div riga creato
    divRiga.appendChild(creaDivColonne(index));
    // lo faccio appenando la funzione che crea colonne,
    // in input gli do l'ID
    divRiga.appendChild(creaDivColonne(contatto.nome));
    divRiga.appendChild(creaDivColonne(contatto.cognome));
    divRiga.appendChild(creaDivColonne(contatto.telefono));
    // ma ogni riga che creo la devo aggiungere al divRowRoot
    // sennò crea righe ma non le aggiunge al nostro DOM
    divRowRoot.appendChild(divRiga);
    // se abbiamo fatto tutto bene quando eseguiremo questo codice 
    // nella nostra pagina web dovremo vedere apparire la lista contatti
}
*/


// metto un timeout che fa eseguire una funzione dopo tot secondi
// per metterci il simbolino della ruota che gira durante il caricamento
setTimeout(function () {
    // vado a prendere il loader ceh ho messo su HTML
    let divLoader = document.getElementById("loader");
    divLoader.className = "d-none";
    // e qua dentro ci metterei la funzione col ciclo for che ho messo sopra
    for (let index = 0; index < listaContatti.length; index++) {
        const contatto = listaContatti[index];
        // per ogni contatto dovrò creare una riga
        // le creo con la funzione di prima
        let divRiga = creaDivRighe(index);
        // devo appendere una colonna per ogni div riga creato
        divRiga.appendChild(creaDivColonne(index));
        // lo faccio appenando la funzione che crea colonne,
        // in input gli do l'ID
        divRiga.appendChild(creaDivColonne(contatto.nome));
        divRiga.appendChild(creaDivColonne(contatto.cognome));
        divRiga.appendChild(creaDivColonne(contatto.telefono));
        // ma ogni riga che creo la devo aggiungere al divRowRoot
        // sennò crea righe ma non le aggiunge al nostro DOM
        divRowRoot.appendChild(divRiga);
        // se abbiamo fatto tutto bene quando eseguiremo questo codice 
        // nella nostra pagina web dovremo vedere apparire la lista contatti
    }
}, 5000);