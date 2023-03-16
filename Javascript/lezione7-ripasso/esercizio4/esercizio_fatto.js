function avanti() {
    avantiIndietro("+");
}

function indietro() {
    avantiIndietro("-");
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

/** mi ritorna l'indice posizionale del mio li che non ha d-none */
function getLiActive() {
    let carosello = document.getElementById("carosello");
    for (let index = 0; index < carosello.children.length; index++) {
        const element = carosello.children[index];
        if (element.classList.length === 0) {
            return index;
        }
    }
    return -1;
}