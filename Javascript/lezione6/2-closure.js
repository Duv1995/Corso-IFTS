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
        // questa è una closure (vedi dopo)
        // perchè si ricorda della variabile 
        // count = 0 che ho definito fuori da questa funz (nella funz sopra)
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


// CLOSURE
/*Una closure è una funzione che ricorda le sue variabili esterne ed è in grado di
accedervi. In alcuni linguaggi questo non è possibile, oppure è richiesto che la
funzione venga scritta in un determinato modo (in PHP non funziona cosi). 
In JavaScript tutte le funzioni sono closure di natura. */

/*le CLOSURE sono funzioni che memorizzano variabili esterne, 
è l'esempio che abbiamo fatto ora con il counter, ogni volta che utilizza 
la variabile counter nel consolelog andava ad incrementare il suo valore!
le closure sono funzioni che ricordano tutte le variabili esterne, e in JS questo
comportamento è previsto di default! 
ogni funzione si ricorda delle variabili esterne, ad ogni consolelog 
counter aumenta di +1*/

let totale = 0;

function stampaTotale(){
    console.log(totale);
    // anche questa è una closure perche
    // recepisce la variabile esterna 'totale'
    // e la utilizza all'interno della mia funz
}