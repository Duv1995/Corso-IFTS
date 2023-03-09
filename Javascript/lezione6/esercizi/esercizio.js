/*
ESERCIZIO 1
Si chiede di definire una serie di classi
indipendenti, che rappresentano delle forme
geometriche piane: Triangolo, Quadrato,
Rettangolo e Cerchio.
Per ciascuna classe:
Definire il costruttore con i parametri necessari a
descrivere la sua forma geometrica.
Implementare la classe padre FiguraGeometrica
che contiene i seguenti metodi:
● calcolaPerimetro
● calcolaArea
 */

class FiguraGeometrica {
    constructor() { }

    calcolaPerimetro() {
        let perimetro = 0;
        if (this.tipo_figura == "trilatera" || this.tipo_figura == "quadrilatera") {
            perimetro = this.lato1 + this.lato2 + this.lato3 + this.lato4;
        }
        if (this.tipo_figura == "cerchio") {
            perimetro = (this.raggio * 2) * 3.14;
        } return perimetro;
    }

    calcolaArea() {
        let area = 0;
        if (this.tipo_figura == "trilatera") {
            area = (this.base * this.altezza) / 2;
        }
        if (this.tipo_figura == "quadrilatera") {
            area = this.base * this.altezza;
        }
        if (this.tipo_figura == "cerchio") {
            area = (this.raggio * this.raggio) * 3.14;
        } return area;

    }

}

class Triangolo extends FiguraGeometrica {
    tipo_figura = "trilatera";
    constructor(a, b, c, d) {
        super();
        this.lato1 = a;
        this.lato2 = b;
        this.lato3 = c;
        this.lato4 = 0;

        this.altezza = d;
        this.base = a;
    }
}
let triangolo1 = new Triangolo(6, 3, 3, 2.5);
console.log("il perimetro di questo triangolo è : " + triangolo1.calcolaPerimetro());
console.log("l'area di questo triangolo è : " + triangolo1.calcolaArea());


class Quadrato extends FiguraGeometrica {
    tipo_figura = "quadrilatera";
    constructor(a) {
        super();
        this.lato1 = a;
        this.lato2 = a;
        this.lato3 = a;
        this.lato4 = a;

        this.altezza = a;
        this.base = a;
    }
}

let quadrato1 = new Quadrato(4);
console.log("il perimetro di questo quadrato è : " + quadrato1.calcolaPerimetro());
console.log("l'area di questo quadrato è : " + quadrato1.calcolaArea());


class Rettangolo extends FiguraGeometrica {
    tipo_figura = "quadrilatera";
    constructor(a, b) {
        super();
        this.lato1 = a;
        this.lato2 = a;
        this.lato3 = b;
        this.lato4 = b;

        this.altezza = a;
        this.base = b;
    }
}

let rettangolo1 = new Rettangolo(2, 4);
console.log("il perimetro di questo rettangolo è : " + rettangolo1.calcolaPerimetro());
console.log("l'area di questo rettangolo è : " + rettangolo1.calcolaArea());


class Cerchio extends FiguraGeometrica {
    tipo_figura = "cerchio";
    constructor(a) {
        super();
        this.raggio = a;
    }
}

let cerchio1 = new Cerchio(6);
console.log("il perimetro di questo cerchio è : " + cerchio1.calcolaPerimetro());
console.log("l'area di questo cerchio è : " + cerchio1.calcolaArea());