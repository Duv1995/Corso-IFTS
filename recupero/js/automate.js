// chiamo il file javascript automate.js
// lego le funzioni ai pulsanti, dico al mio browser che quando
// l'utente preme un pulsante deve innescare la chiamata 
// a una specifica funzione

// alla pressione del pulsante con ID btnRosso 
// chiamo la funzione aggiungirosso
document.getElementById("btnRosso").addEventListener("click", aggiungi_rosso);
// gli sto dicendo, sfogliati il mio document DOM e restituiscimi l'elemento ID btnRosso
// che io specifico tra parentesi, se lo trova me lo restituisce dentro questa variabile
// dopodichè io lo piloto da qui!
// dunque una volta trovato gli dico di aggiungere un evento, 
// gli dico che azione lo triggera (click) e cosa deve fare in quel caso (aggiungi_rosso)
// che è una funzione che andiamo a scrivere in JS (non in PHP!!!)
// è uuna logica a cascata, parto dal documento generale, trovo il bottone, 
// inserisco l'evento e quale azione lo triggera

// scrivo la funzione JS
function aggiungi_rosso() {
    
    // prima carico i DIV in una variabile mieiDIV, chiedo al mio DOM di trovarli tutti
    var mieiDIV = document.getElementsByClassName("quadrato");
    // sranno tutti i div con classe quadrato che devo cambiare in rossi

    // ciclo sul contenuto della variabile mieiDIV
    // e aggiungo la classe bgrosso ad ogni elemento
    for (i = 0; i < mieiDIV.length; i++) {
        // mieiDIV.length è come dire count(mieiDIV), 
        // mi da il numero di elementi contenuti in mieiDIV
        // e per tutti i miei div, me li cambi tutti in rosso!

        mieiDIV[i].classList.remove("bgBlu", "bgVerde");
        // rimuovo gli altri colori perchè sennò ogni volta che clicco
        // i div assumono tutte e 3 le classi colore e non va bene
        // posso anche farlo richiamando la funzione

        mieiDIV[i].classList.add("bgRosso");
        // classlist mi da le due classi del mio elemento (quadrato e bianco)
    }
}

// così facendo dico al mio document di aggiungere un gestore di evento
// quando succede il browser richiama questa funzione
// che modifica questo pezzo specifico di codice!


// faccio la stessa cosa per il verde
document.getElementById("btnVerde").addEventListener("click", aggiungi_verde);

function aggiungi_verde() {
    var mieiDIV = document.getElementsByClassName("quadrato");
    for (i = 0; i < mieiDIV.length; i++) {
        mieiDIV[i].classList.remove("bgRosso", "bgBlu");
        mieiDIV[i].classList.add("bgVerde");
    }
}

// faccio la stessa cosa per il blu
document.getElementById("btnBlu").addEventListener("click", aggiungi_blu);

function aggiungi_blu() {
    var mieiDIV = document.getElementsByClassName("quadrato");
    for (i = 0; i < mieiDIV.length; i++) {
        mieiDIV[i].classList.remove("bgRosso", "bgVerde");
        mieiDIV[i].classList.add("bgBlu");
    }
}

// creo una funzione che rimuove tutte le classi da un div
// così quando clicco su un altro pulsante il colore viene subito preso
// anche se prima glie ne avevo assegnati altri

