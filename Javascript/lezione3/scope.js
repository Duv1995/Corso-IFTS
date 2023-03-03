// SCOPE DI UNA VARIABILE

let totale1 = 2;
// definisco una variabile globale

function incrementa1() {
    totale1 = totale1 + 1;
    // totale va a prendere la variabile globale
    // e la incrementa di 1
}

incrementa1();
console.log("Il valore di totale e' : " + totale1);
// avrà valore 2+1=3

incrementa1();
console.log("Il valore di totale e' : " + totale1);
// avrà valore 3+1=4

// in alternativa
let totale2 = 2;
function incrementa2() {
    let totale2 = 0;
    // dichiaro una nuova variabile locale 
    // che sovrascrive quella globale con lo stesso nome!
    totale2 = totale2 + 1;
    // totale va a prendere la variabile locale
    // e la incrementa di 1
    console.log("Il valore di totale e' : " + totale2);
    // avrà valore 0+1=1, perche va a prendere solo la sua variabile locale
}

incrementa2();
console.log("Il valore di totale e' : " + totale2);
// andrà a recuperare il totale globale! quindi sempre 2


// facciamo un altra funzione diversa
let non_stampare= true;
// definisco variabile globale che è sempre vera

function stampa(){
    if (!non_stampare){
        // se stampa (che è true) dovesse mai essere falso invece
        console.log("Stampo");
        // nella console stampo questa stringa
    } // altrimenti non faccio nulla
}

stampa();
// non succede nulla perche non_stampare è true!

// invece se faccio così
let non_stampare2= true;
// definisco variabile globale che è sempre vera

function stampa2(){
    non_stampare2 = !non_stampare2;
    // vado a modificare la mia var globale invertendola
    if (!non_stampare2){
        // se stampa (che è true) dovesse mai essere falso invece
        console.log("Stampo");
        // nella console stampo questa stringa
    } // altrimenti non faccio nulla
}

stampa2();
// ora invece stampa perchè non_stampare è diventato false

// invece se faccio così
let non_stampare3= true;
// definisco variabile globale che è sempre vera

function stampa3(){
    let non_stampare3 = non_stampare3;
    // inizializzo una variabile locale che prende il valore di quella globale
    if (!non_stampare3){
        // se stampa (che è true) dovesse mai essere falso invece
        console.log("Stampo");
        // nella console stampo questa stringa
    } // altrimenti non faccio nulla
}

stampa3();
// darà errore perchè sta cosa è stata deprecata e non la legge piu come locale!