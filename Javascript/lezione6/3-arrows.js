// ARROWS CLOSURE

/* Un nuovo tipo di funzione introdotta dalle specifiche di ECMASCript 2015 è
rappresentato dalle arrow function. Si tratta di funzioni anonime con una sintassi
molto concisa ed alcune specifiche caratteristiche.
Le arrow functions non sono semplicemente una “scorciatoia” per scrivere codice
più breve. */

// metodo tradizionale 
// function nome (){}
let somma = function (x, y) {
    return x + y;
}

// con le arrow function 
// () => ...;
let somma1 = (x, y) => x + y;
let totale = somma(3, 2);

/*La sintassi generale di una arrow function prevede le parentesi tonde intorno
alla lista dei parametri e le parentesi graffe per delimitare il corpo della
funzione. */

// un altro modo per scrivere la stessa cosa
let somma2 = (x, y) => { return x + y };
// posso anche metterci le graffe ma devo ricordarmi 
// di mettere anche 'return'in questo caso
let moltiplica_per_due = x => x * 2
// se ho solo un valore input non servono le parentesi
let saluta = () => "Ey b0ss!";
// ma se l'input è vuoto devo mettercele


// QUANDO USARE LE ARROWS
/*Data la sintassi compatta delle arrow function, esse si prestano molto bene ad
essere utilizzate come callback. */

// definisco un array
let numeri = [1, 2, 3];

// ciclo con il metodo foreach (metodo della classe array)
// che prende in input una funzione 'valore' che esplicito non prima
// ma direttamente dentro il valore in input, che lui poi esegue
numeri.forEach(valore => console.log(valore));
// foreach è un metodo standard della classe array

// altrimenti avrei dovuto fare tipo
let scorri = function(elemento){
    console.log(elemento);
}
numeri.forEach(scorri);


// IMPORTANTE
/*L’aspetto più importante da tener presente è che la parola chiave this all’interno
di una arrow function non rappresenta il contesto di esecuzione a runtime come
avviene per le funzioni standard. Per questo motivo non possono essere utilizzate
come Costruttori e non possono essere utilizzate per la creazione di metodi negli
oggetti e nelle classi. Un’altra limitazione è che le arrow function non accedono
alla variabile arguments. */

// RECAP
/*Arrow functions:
● Non possiedono MAI this
● Non possiedono MAI arguments
● Non possono essere invocate con new (Classi e Costruttore)
● Non possiedono super in quanto non hanno il costruttore */