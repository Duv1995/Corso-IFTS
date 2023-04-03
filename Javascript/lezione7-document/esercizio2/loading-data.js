// In questo file modifico l'HTML

let divRowRoot = document.getElementById("lista-row");
// questo elemento rappresenta il div che mi farà da contenitore per le mie righe
// che per il momento sono vuote e devo andare a fare apparire nel HTML

// posso anche creare un metodo che mi genera le 3 colonne id, nome, cognome, tel
function creaDivColonne(valoreTesto) {
    // input valore di testo che dovrò mettere nelle colonne
    let divCol = document.createElement("div");
    // al mio div dovrò aggiungere la classe col-3 per farla uguale alle altre
    divCol.className = "col-3";
    // ora devo aggiungere il valore dentro questo tag
    divCol.innerHTML = valoreTesto;
    // ritorna tutto il bel div che ho impostato
    return divCol;
    // questa funzione creerà il div della colonna
}

// creaUL
    // simile a quello sopra ciclo l'array prodotti e per ogni prodotto creo un ul li
    function creaUlOrdini(array) {
        for (let index = 0; index < array.length; index++) {
        let ulRow = document.createElement("ul");
        // alle righe devo dare anche un id per sapere a quale ordine si riferiscono
        return ulRow;
    }
}

// adesso dobbiamo andare a popolare le righe e le colonne coi dati presi dal mio altro file
for (let index = 0; index < ordini.length; index++) {
    const ordinazione = ordini[index];
    // per ogni contatto dovrò creare una riga
    // le creo con la funzione di prima
    let divRiga = creaDivRighe(index);
    // devo appendere una colonna per ogni div riga creato
    divRiga.appendChild(creaDivColonne(index));
    // lo faccio appenando la funzione che crea colonne,
    // in input gli do l'ID
    divRiga.appendChild(creaDivColonne(ordinazione.contatto));
    divRiga.appendChild(creaDivColonne(ordinazione.indirizzo));

    // poi sostituisco questo con creaUL
    divRiga.appendChild(creaUlOrdini(ordinazione.prodotti));

    // ma ogni riga che creo la devo aggiungere al divRowRoot
    // sennò crea righe ma non le aggiunge al nostro DOM
    divRowRoot.appendChild(divRiga);
    // se abbiamo fatto tutto bene quando eseguiremo questo codice 
    // nella nostra pagina web dovremo vedere apparire la lista contatti
}


