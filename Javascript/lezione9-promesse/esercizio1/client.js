function eseguiGet() {
    // inizializzo oggetto richiesta
    let xhr = new XMLHttpRequest();
    // imposto metodo get e URI di una API che voglio richiedere
    xhr.open("GET", "https://dev.entrainhotel.com/wp-json/wao-portali/v1/mappaHotels?pagina=1&per_page=-1&comune=Rimini&trattamenti=&categorie_struttura=&servizi=&family=&bnb=")
    // invio la richiesta
    xhr.send();

    // se la risp va a buon fine
    xhr.onload = function () {
        console.log(xhr.status);
    }

    // se mi da errore
    xhr.onerror = function () {
        console.log(xhr.statusText);
    }
}

// mi aspetto come risposta un errore dei CORS
// perche la nostra paginetta non è autorizzata 
// a richiedere le API di questo sito lol
setTimeout(function () { eseguiGET(); }, 5000 );