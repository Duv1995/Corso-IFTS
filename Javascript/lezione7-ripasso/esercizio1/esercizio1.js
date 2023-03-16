// SUDDIVIDI IL PROBLEMA
// e razionalizza, quindi non fare copincolla ma ragiona e semplifica

// creo la funzione che stampa tabelline, in ingresso posso decidere che numero mettere (10 in questo caso)
function stampaTabelline(numeroInteri) {
    // prendo il div del contenitore root con ID
    let div = document.getElementById("tabelline");
    // ciclo for che parte da 1 al numero che metto in input
    for (let index = 1; index <= numeroInteri; index++) {
        // la parte dentro la scrivo dopo... prima creo colonne e righe

        // ....

        // dopo aver fatto tutto creo colonne e righe con le funzioni fatte sotto
        let cols = creaColonne(index);
        let riga = creaRiga(index, cols);
        // e poi le appendo al mio div contenitore
        div.appendChild(riga);
    }
}

// funzione che crea le colonne, che in input prendo 
// il numero della riga corrispondente che mi da il moltiplicatore
// ritorna un array di colonne che le passa a un altra funzione che le inserisce all'interno di una riga

function creaColonne(index) {
    // inizializzo l'array di colonne
    let cols = [];
    // ciclo che parte da 1 a 10
    for (let y = 1; y <= 10; y++) {
        // creo una colonna per ogni numero
        let colonna = document.createElement("div");
        colonna.className = "col";
        // inserisco dentro ogni cella della colonna il prodotto della moltiplicazione
        colonna.innerHTML = y * index;
        // inserisco il div che ho creato nel mio array cols
        cols.push(colonna);
    }
    // ritorna l'array dei div
    return cols;
}

// ora devo creara la funzione per creare le righe, 
// prende in input l'indice e l'array delle colonne
function creaRiga(index, cols) {
    // creo la riga
    let riga = document.createElement("div");
    riga.className = "row";
    for (let i = 0; i < cols.length; i++) {
        const element = cols[i];
        // scorro l'array delle colonne e ci appendo le mie righe
        riga.appendChild(element);
    }
    return riga;
}