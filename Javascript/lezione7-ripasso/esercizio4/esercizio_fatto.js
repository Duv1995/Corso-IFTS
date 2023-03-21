// creo le funzioni per scorrere le immagini
// per cambiare le immagini devo andare a togliere e mettere la classe dsiplay none
// posso utilizzare la proprietà children su UL
// e cambiare il d-none ai figli

// prima però devo sapere qual'è tra i miei LI quello che ha il d-none
/** mi ritorna l'indice posizionale del mio li che non ha d-none */
function getLiActive() {
    // vado a prendere la UL di carosello
    let carosello = document.getElementById("carosello");

    // ciclo per quanti LI ho dentro UL (4)
    for (let index = 0; index < carosello.children.length; index++) {

        // memorizzo in una costante l'indice corrente aka il LI
        let li_corrente = carosello.children[index];

        if (li_corrente.classList.length === 0) {
            // classList accede alla lista di tutte le classi di quell'elemento
            // nel mio caso guarda se il mio LI corrente non ha alcuna classe
            // quindi non ha il d-none
            return index;
            // in questo caso ritorna l'indice
        }
    }
    // in tutti gli altri casi in cui trova l'indice fa -1 fino a raggiungere lo zero, 
    // e in quel caso fa il ciclo qua sopra e ritorna l'indice
    return -1;
}

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

function avanti() {
    avantiIndietro("+");
}

function indietro() {
    avantiIndietro("-");
}


