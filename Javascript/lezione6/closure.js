// FUNZIONI AVANZATE E CLOSURE

/*
LINGUAGGIO FUNZIONALE
JavaScript è un linguaggio fortemente orientato alle funzioni. Una funzione può
essere creata in qualsiasi momento, copiata su una variabile o passata comen argomento 
ad un’altra funzione ed è possibile richiamarla da qualsiasi punto del codice.
Sappiamo che una funzione può accedere alle variabili esterne, questa
caratteristica viene spesso utilizzata.
*/

// FUNZIONI ANNIDATE
/* Una funzione si definisce “annidata” quando viene creata all’interno di un’altra funzione.*/

function conta() {
    let count = 0;

    // il mio return è un altra funzione annidata al suo interno
    // una funzione annidata non deve per forza essere il return
    return function () {
        return count++;
    }
}

// inizializzo un counter con la mia funzione conta
// che quando la invoco mi inizializza la funzione
let counter = conta();
// dentro counter ho solo la parte che dice
// return function () {return count++;} 
// perche prende solo il return quando invochi una funz
console.log(counter()); // 0
console.log(counter()); // 1
console.log(counter()); // 2
// quindi se lo invoco piu volte aggiungo ogni volta +1