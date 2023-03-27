/*Esercitazione 2
Scrivere un nuovo oggetto, Contatto, usando il
costruttore. L’oggetto contatto deve avere tre
proprietà: nome, cognome e età e un metodo
toJson() che restituisce una stringa in formato
Json dell’oggetto. */

class Contatto {
    constructor(nome, cognome, eta) {
        this.nome = nome;
        this.cognome = cognome;
        this.eta = eta;
    }

}

let studente1 = new Contatto("Davide", "G", 28);
console.log(JSON.stringify(studente1));


/* Esercitazione 3
Scrivere una funzione che abbia in input una
stringa contenente un Json e restituisca in
output l'oggetto contatto rappresentato nel json */

console.log(JSON.parse(studente1));
