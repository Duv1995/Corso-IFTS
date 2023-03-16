// creo le funzioni per scorrere le immagini
// per cambiare le immagini devo andare a togliere e mettere la classe dsiplay none
// posso utilizzare la proprietà children su UL
// e cambiare il dnone ai figli

function avanti_esempio() {
    // prendo UL con l'id
    let carosello = document.getElementById("carosello");
    // faccio un ciclo perche ad ogni giro l'immagine che prende
    //  il dnone è sempre diversa in base all'indice

    // mi serve quindi una funzione per prendere l'indice del carosello
    // che vado a creare in fondo*

    let index = getLiActive();
    // vado a prendere l'index con la mia funzione
    if (index === -1) {
        return;
    }



    // trovato l'indice gli assegno display none
    carosello.children[index].className = "d-nome";

    // se l'index arriva a 3 quindi sfora oltre il 2 che è l'ultimo dei miei index
    // devo farlo ritornare a 0, altrimenti darà errore!
    if (index === carosello.children.length -1) {
        carosello.children[0].className = "";
    } else {
        // e quella successiva rimuove la classe!
        carosello.children[index + 1].className = "";
    }
}


// *che vado a creare qua fuori!
function getLiActive(carosello) {
    let carosello = document.getElementById("carosello");
    // questa funzione mi ritorna l'indice posizionale 
    // del mio LI attivoche quindi non ha il dnone

    for (let index = 0; index < carosello.children.length; index++) {
        // ciclo per la lunghezza dei children di UL

        // la mia costante è l'index di UL che corrisponde al LI figlio
        const element = carosello.children[index];

        // quando l'index arriva a 0 
        if (element.classList.length === 0) {
            return index;
        }
    }
    return -1;
}

// oppure incorporo tutto in una funzione
function avantiIndietro(direzione) {
    let carosello = document.getElementById("carosello");
    let index = getLiActive();
    if (index === -1) {
        return;
    }

    carosello.children[index].className = "d-none";
    if (direzione === "+") {
        if (index === carosello.children.length - 1) {
            carosello.children[0].className = "";
        } else {
            carosello.children[index + 1].className = "";
        }
    } else {
        if (index === 0) {
            carosello.children[carosello.children.length - 1].className = "";
        } else {
            carosello.children[index - 1].className = "";
        }
    }
}

function avanti(){
    avantiIndietro("+");
}

function indietro(){
    avantiIndietro("-");
}