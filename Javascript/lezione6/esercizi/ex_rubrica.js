// ESERCIZIO 2
// simile al garage

/*Scrivi un programma per la gestione di una rubrica telefonica. 
Definisci una classe che rappresenti un contatto. 
L'unico vincolo che hai è di inserire almeno il nome, cognome e il numero di telefono 
come stringhe.

Definisci un’altra classe che rappresenti la Rubrica che implementa i metodi
per le seguenti operazioni:
 - Visualizzazione dell'intera lista contatti con la possibilità di scegliere 
   il tipo di ordinamento (A->Z, Z->A)
 - Inserimento di un nuovo Contatto che non sia già presente in Rubrica.
 - Modifica di uno contatto passando in input l'indice dell'array
 - Cancellazione di un contatto passando in input l'indice dell'array
 - Ricerca passando il nome, o parte del nome, e restituendo il singolo contatto. 
 */

// classe contatto
class Contatto {
    constructor(nome, cognome, tel) {
        this.nome = nome;
        typeof nome === "string";
        this.cognome = cognome;
        typeof cognome === "string";
        this.tel = tel;
        typeof tel === "string";
    }



}

let contatto1 = new Contatto("mario", "sigma", "0541*******")
console.log(contatto1);

// classe rubrica coi vari metodi
class Rubrica {
    constructor() {
        this.contatti = [];
    }

    // inserimento nuovo contatto in array contatti
    inserisci_contatto(contatto) {
        this.contatto.push(contatti);
    }

    // rimuovi contatto esistente da array contatti
    rimuovi_contatto(contatto) {
        if (this.contatti.includes(contatto)) {
            let indice = this.contatti.indexOf(contatto);
            this.contatti.splice(indice, 1);
        }
    }






}