// ESERCIZI
/*Esercitazione 1
Scrivere la classe Calcolatrice che contiene al
suo interno due proprietà di tipo intero
parametro1 e parametro2 che non possono
essere inferiore a zero. 
La classe dovrà avere anche tre metodi:
somma() ritorna la somma delle proprietà.
moltiplica() ritorna il prodotto delle proprietà.
dividi() ritorna la divisione delle proprietà */

class Calcolatrice {
    constructor(parametro1, parametro2) {
        if (parametro1 >= 0) {
            this.parametro1 = parametro1;
        }
        if (parametro2 >= 0) {
            this.parametro2 = parametro2;
        }
    }

    somma() {
        return this.parametro1 + this.parametro2;
    }

    moltiplica() {
        return this.parametro1 * this.parametro2;
    }

    dividi() {
        if (this.parametro2 !== 0) {
            return this.parametro1 / this.parametro2;
        } else {
            console.log("impossibile dividere per zero!")
        }
    }

}

let calc = new Calcolatrice(5,3);
console.log(calc.somma());
console.log(calc.moltiplica());
console.log(calc.dividi());