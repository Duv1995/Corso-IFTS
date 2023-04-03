/* Esercitazione
Utilizzando l’html, css e js realizzare una pagina html, la pagina dovrà chiamarsi
contatti.html, che mostri l’elenco dei contatti recuperati attraverso l’api GET
https://ifts.adriasonline.com/contatti
Utilizzando l’html, css e js realizzare una pagina html con un form contenente i
seguenti campi: nome*, cognome*, email e numero di telefono* (* obbligatori). La
pagina si dovrà chiamare aggiungi-contatto.html e al submit del form dovrà inviare
i dati all’api POST https://ifts.adriasonline.com/contatti in formato JSON */


function eseguiGet() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "https://jsonplaceholder.typicode.com/todos/")
    // voglio la risposta in json che sarà un array chiavi valori
    xhr.responseType = "json";
    xhr.send();

    xhr.onload = function () {
        // se la chiamata va a buon fine inserisco nella funzione
        // di onload una funzione che disegna la tabella
        // con la todo list che ho richiesto!
        disegnaContenuto(xhr.response);
        //ha in input la risposta delle API
    }

    xhr.onerror = function () {
        console.log(xhr.statusText);
    }
}

// creo la funzione che crea il contenuto partendo dall'oggetto di risp
function disegnaContenuto(resp) {
    let divRoot = document.getElementById("result")
    // ogni volta reinizializzo la root per evitare 
    // che prenda contenuto gia presente
    divRoot.innerHTML = "";
    // il nostro response è un json, quindi un array che posso ciclare
    for (let index = 0; index < resp.length; index++) {
        const element = resp[index];
        //"userId": 1,
        //"id": 1,
        //"title": "delectus aut autem",
        //"completed": false
        let riga = creaDivRighe(index);
        riga.appendChild(creaDivColonne(element.id));
        riga.appendChild(creaDivColonne(element.title));
        // per l'ultima colonna uso la funzione delle iconcine sotto
        riga.appendChild(creaDivColonne(creaStato(element.completed)));
        // prendo la mia riga e la appendo alla root principale
        divRoot.appendChild(riga);
    }

}

// funzioncina per gestire le icone di stato
function creaStato(stato) {
    // metto dei tag i di bootstrap per far comparire 
    // le iconcine al posto di true e false
    if (stato) {
        return '<i class="bi bi-check-circle-fill"></i>';
    } else {
        return '<i class="bi bi-check-circle"></i>';
    }
}

function creaDivColonne(valoreTesto) {
    let divCol = document.createElement("div");
    divCol.className = "col-md-3";
    divCol.innerHTML = valoreTesto;
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

// eseguo la get e mi appare sulla pagina HTML tutta la lista che ho richiesto
eseguiGet();


