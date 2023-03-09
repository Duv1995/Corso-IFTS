// EREDITARIETA
/*
Quando lavoriamo con le classi possiamo lavorare con l'ereditarietà
● L’ereditarietà consente di definire nuove classi per specializzazione o
estensione di classi preesistenti, in modo incrementale (prima definisco una classe generica 
poi ne definisco una piu specializzata che estende la classe precedentemente creata
che eredita il comportamento della classe generica con tutti i suoi metodi
e in questo modo definiamo in modo incrementale le sue funzionalità)
● L’ereditarietà è una caratteristica che permette ad una classe di estendere
le proprietà di altre classi. Come il nostro esercizio del garage 
*/

/*
Andiamo così a costruire una gerarchia tra le classi (il nipote eredita metodi sia della 
classe padre che della classe figlio, quindi l'ultima classe è quella con piu metodi)
● Il meccanismo dell'ereditarietà è di fondamentale importanza nella programmazione ad
oggetti, in quanto induce una strutturazione gerarchica nel sistema software da costruire.
● L’ereditarietà consente infatti di realizzare relazioni tra classi di tipo
generalizzazione-specializzazione, in cui una classe, detta base, realizza un
comportamento generale comune ad un insieme di entità, mentre le classi derivate
(sottoclassi) realizzano comportamenti specializzati rispetto a quelli della classe base.
○ Esempio
    ■ Tipo o classe base: Animale (racchiude il comportamento di tutti gli animali)
    ■ Tipi derivati (sottoclassi): Cane, Gatto e Etc.. 
    (ognuna ha sia i comportamenti base ereditati, ma anche specifici)
● In una gerarchia gen-spec, le classi derivate sono specializzazioni (cioè casi particolari)
della classe base. 
● Generalizzazione: dal particolare al generale (dalla classe figlio a quella padre)
● Specializzazione: dal particolare al generale (dalla classe padre a quella figlio)
*/

class Mammifero {
    presentati() {
        console.log("Ciao io sono un " + this.tipo);
        // se lo stampo così com'è mi stampa "ciao io sono un undefined lol"
    }
}


class Gatto extends Mammifero {
    // extends eredita il comportamento della classe mammifero
    constructor() {
        this.verso = "miagolo"
        this.tipo = "gatto"
    }
    miagola() {
        console.log("Io " + this.verso + ": MEEEEOOOWWW")
    }
}

Gatto.presentati(); // posso utilizzare la funzione del padre

class Cane extends Mammifero {
    // anche qui posso richiamare la funzione presentati, 
    // ma non potrei mai utilizzare la funzione miagola,
    // perche è un metodo specifico della classe gatto
    constructor() {
        this.verso = "abbaio"
        this.tipo = "cane"
    }
    abbaia() {
        console.log("Io " + this.verso + ": WOOF WOOF")
    }

    presentati() {
        // volendo posso anche sovrascrivere un metodo ereditato
        // dal padre, cambiandolo solo per questa classe specifica
    }
}

// ------------------------------------------------------------------------------------- //

// IL SUPER
/*
Con la parola chiave SUPER possiamo andare a richiamare la classe padre.
Generalmente non vogliamo “rimpiazzare” completamente il metodo ereditato, ma
piuttosto modificarlo leggermente o estendere le sue funzionalità.
Le classi forniscono la parola chiave "super" per questo scopo.
● super.method(...) per richiamare un metodo dal padre;
● super(...) per richiamare il costruttore del padre (valido solo all’interno del
nostro costruttore).
 */

class Gatto1 extends Mammifero {
    // extends eredita il comportamento della classe mammifero
    constructor() {
        this.verso = "miagolo"
        this.tipo = "gatto"
    }
    miagola() {
        console.log("Io " + this.verso + ": MEEEEOOOWWW")
    }

    // super serve solo per richiamare un metodo della classe padre
    // e inserirlo dove vuoi dentro la classe figlio
    presentati() { // così stampo "io sono un gatto"
        super.presentati(); // e poi stampo anche
        console.log("Mi piacciono molto i RATTI") // mi piacciono molto i ratti
        // basically invece che copincollare richiamo il metodo qua e gli aggiungo una parte
    }
}

// con il super posso sovrascrivere il costruttore
class Mammifero1 {
    constructor(nome) {
        this.nome = nome;
    }
    presentati() {
        console.log("Ciao io sono un " + this.tipo);
    }
}

class Gatto2 extends Mammifero1 {
    constructor(name) {
        super(name);
        this.verso = "miagolo"
        this.tipo = "gatto"
    }

    miagola() {
        console.log("Io " + this.verso + ": MEEEEOOOWWW")
    }
}