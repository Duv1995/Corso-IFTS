// ESERCIZI

/*Esercitazione 1
Scrivi un costruttore Calcolatrice che crea oggetti con 4 metodi:
1) leggi() richiede due valori come argomento della
funzione e li memorizza nelle proprietà dell’oggetto.
2) somma() ritorna la somma delle proprietà.
3) moltiplica() ritorna il prodotto delle proprietà.
4) dividi() ritorna la divisione delle proprietà */

function Calcolatrice() {
    this.leggi = function (x, y) {
        // qui dentro memorizzo i valori di input
        // mi basta farlo solo una volta
        this.valore1 = x;
        console.log("valore 1: " + this.valore1);
        this.valore2 = y;
        console.log("valore 2: " + this.valore2);
        // inserisci un modo per valutare se x e y sono effettivamente numeri
    }

    this.somma = function () {
        // refernziando this.valori vado a prendere
        // x e y che ho memorizzato nella funzione precedente
        somma = this.valore1 + this.valore2;
        console.log("somma = " + somma);
    }

    this.moltiplica = function () {
        prodotto = this.valore1 * this.valore2;
        console.log("prodotto = " + prodotto);
    }

    this.dividi = function () {
        // ovviamente non posso dividere per zero
        // quindi metto il caso specifico
        if (this.valore2 !== 0) {
            divisione = this.valore1 / this.valore2;
            console.log("divisione = " + divisione);
        }
        else {
            console.log("impossibile dividere per zero!")
        }
    }

}


let calcolo = new Calcolatrice();
calcolo.leggi(5,3);
// i valori in input li devo mettere solo su leggi!
calcolo.somma();
calcolo.moltiplica();
calcolo.dividi();

// ----------------------------------------------------------------------- //

// IN ALTERNATIVA
function Calcolatrice_alt(){
    this.x = 0,
    this.y = 0,
    this.leggi = function(x, y){
        // controllo se i valori x e y sono di tipo numerico
        // tramite operatore ternario (se vero lascio x : se falso 0)
        this.x = typeof x == "number" ? x : 0;
        // se non sono di tipo numero li setto a 0
        this.y = typeof y == "number" ? y : 0;
    };
    this.somma = function(){
        return this.x + this.y;
    };

    this.moltiplica = function(){
        return this.x * this.y;
    };

    this.dividi = function(){
        if (this.y <= 0){
            return NaN;
        }
        return this.x / this.y;
    }
}

let calc = new Calcolatrice_alt();

calc.leggi(5, 6);
console.log(calc.somma());
console.log(calc.moltiplica());
console.log(calc.dividi());