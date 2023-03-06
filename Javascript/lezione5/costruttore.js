// FUNZIONE COSTRUTTORE OGGETTI JS
// per creare nuovi oggetti utilizzeremo il 90% delle volte questa funzione
/*I costruttori sono solo delle normali funzioni; seguono però una convenzione
comune che prevede di denominarle con la prima lettera maiuscola.
Un costruttore dovrebbe essere chiamato solamente utilizzando new. Questo tipo
di chiamata implica la creazione di un oggetto vuoto, this, che verrà popolato
entro la fine della funzione.
Possiamo utilizzare i costruttori per creare molti oggetti simili tra loro.
JavaScript fornisce costruttori per la maggior parte degli oggetti integrati nel
linguaggio: come Date per le date, Set per gli insiemi e molti altri. */

// Quello che succede quando richiamo la funzione costruttore
function Giocatore(nome, cognome, maglia) {
    // Giocatore è il nuovo oggetto e va messo con la maiuscola
    // this = { }; (implicito)

    // blocco di istruzioni
    this.nome = nome;
    this.cognome = cognome;
    this.maglia = maglia;
    this.is_capitano = false;

    // return this; (implicito)
}

let giocatore = new Giocatore("Francesco", "Totti", 10);

console.log(giocatore.nome); // Francesco
console.log(giocatore.is_capitano); // false

// Cosa succede se nel costruttore inserisco il RETURN?
// 1. Se return viene invocato con un oggetto diverso da quello del this, 
// questo verrà ritornato al posto di this.
// 2. Se return viene invocato con un tipo primitivo (stringhe, num, bool, array),
// il return verrà ignorato.
// per evitare errori non mettercelo MAI lol

function Squadra() {
    this.nome = "Roma";
    return { nome: "Milan" };
    // return ritornerà questo oggetto a fine funzione quindi milan e non roma!
}

// METODI DI UN COSTRUTTORE
/*Utilizzare costruttori per creare degli oggetti ci dà un grande vantaggio in termini di
flessibilità e di riusabilità. Il costruttore può avere dei parametri che definiscono
come costruire l’oggetto, e cosa “metterci dentro”.
Ovviamente, possiamo aggiunger a this non solo proprietà, ma anche metodi (funzioni) */

function Cantante(nome, canzone) {
    this.nome = nome;
    this.canzone = canzone;

    this.canta = function () {
        alert("Adesso canto: " + this.canzone);
    }
}

let joji = new Cantante("Joji", "PINK")
joji.canta(); // adesso canto PINK