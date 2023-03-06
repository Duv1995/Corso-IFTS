// CLASSI IN JS
/*Nella programmazione orientata agli oggetti una classe è un costrutto di
un linguaggio di programmazione usato come modello per creare oggetti.

Il modello comprende proprietà (attributi) e metodi che saranno condivisi
da tutti gli oggetti creati (istanze) a partire dalla classe. 
Un “oggetto” è, di fatto, l’istanza di una classe. */

// EREDITARIETA'= le classi possono ereditare comportamenti da altre classi
// è la base della programmazione ad oggetti!

// ---------------------------------------------------------------------- //

// SINTASSI DI CLASS
/*Quindi se utilizzassimo new LaMiaPrimaClasse() creerà un nuovo oggetto con
tutti i metodi presenti nella classe.
Il metodo constructor() viene chiamato automaticamente da new, dunque
possiamo usarlo per inizializzare l’oggetto e le sue proprietà. */

class Mia_Classe {
    constructor() {/*...*/ }
    // c'è sempre prima il costruttore degli oggetti di questa classe

    // metodi della classe
    metodo1() {/*...*/ }
    metodo2() {/*...*/ }
    metodo3() {/*...*/ }
    /*...*/
}

// alla fine tra classe e oggetto non c'è molta differenza 
// se non che con le classi puoi far ereditare metodi e proprietà
// agli oggetti di quella classe

// es ho la classe animale che ha al suo interno la proprietà 'specie'
// poi ho la classe mammiferi, che al suo interno ha la prioprietà 'specie = mammiferi'
// la vediamo piu avanti...

// ---------------------------------------------------------------------- //

// SINTASSI (again)
class Cantante {
    constructor(nome) {
        this.nome = nome;
        // creo una proprietà di tipo nome con questo costruttore
    }
    canta_canzone() {
        let canzone = this.nome + ": canta una nuova canzone";
        console.log(canzone);
    }
}

// la richiamo:
let cantante = new Cantante("Jon");
// invoco il costruttore di cantante
// e poi il suo metodo canta
cantante.canta_canzone();

/*Quando l’interprete di Javascript invoca new Cantante("John"):
● Crea un nuovo oggetto;
● Il metodo constructor() viene invocato e assegna a this.nome l’argomento
dato in input al costruttore.
● Successivamente si possono invocare i metodi della classe, ad esempio
cantante.cantaUnaCanzone(). */

// ---------------------------------------------------------------------- //

// PROPRIETA DI UNA CLASSE 
// posso anche memorizzarle con =
class Cantante {
    nome = "Joji";

    come_mi_chiamo() {
        console.log(this.nome);
    }
}

let c = new Cantante();
c.come_mi_chiamo(); // Joji

// ---------------------------------------------------------------------- //

// GETTERS E SETTERS
/* Sono un modo in cui possiamo recuperare o scrivere valori all'interno
delle nostre proprietà. Possiamo utilizzare GET e SET per fare alcuine
operazioni logiche e controllare gli input e outpu.

Quando creiamo GET e SET  */

class Cantante {
    constructor(canzone) {
        this.canzone = canzone;
    }

    get canzone() {
        return this._canzone;
        // _underscore prima di una proprietà la rende privata
    }

    set canzone(canzone) {
        if (canzone == "Bollicine") {
            console.log("Vasco");
            this._canzone = "bollicine";
        } else {
            this.canzone = canzone;
        }
    }

}

// il vantaggio di avere GET e SET è quello di poter fare operazioni
// sulle nostre propreità che fanno validazioni o modifiche
// nel return del nostro oggetto

let c1 = new Cantante ("Fabbizio");
c.canzone = "Bollicine";
console.log(c.canzone); // Vasco bollicine
c.canzone = "vado al massimo"
console.log(c.canzone); //  vado al massimo
c._canzone = "bollicine"
console.log(c.canzone); //  bollicine