/*ESERCIZIO
Proviamo a riscrivere l’esercizio della rubrica visto nella lezione precedente
utilizzando le Promise per effettuare le chiamate HTTP verso le REST API.
La pagina di modifica e di creazione devono effettuare una validazione di dati
prima che quest’ultimi vengano inviati alle REST API. */


let promise1 = new Promise(function (resolve, reject) {
    if (condizione) {
        resolve(valore);
    } else {
        reject(motivo);
    }
})








class Contatto {
    constructor(nome, cognome, telefono) {
        this.nome = nome;
        this.cognome = cognome;
        this.telefono = telefono;
    }
    get nome() {
        return this._nome;
    }
    get cognome() {
        return this._cognome;
    }
    get telefono() {
        return this._telefono;
    }
    set nome(nome) {
        if (typeof (nome) === "string") {
            this._nome = nome;
        }
    }
    set cognome(cognome) {
        if (typeof (cognome) === "string") {
            this._cognome = cognome;
        }
    }
    set telefono(telefono) {
        if (typeof (telefono) === "string") {
            this._telefono = telefono;
        }
    }
}

class Rubrica {
    constructor() {
        this.database = [];
    }

    stampaContatti(ordinamento) {
        let compare = (a, b) => (a.cognome > b.cognome) ? 1 : ((b.cognome > a.cognome) ? -1 : 0);
        if (ordinamento.toLowerCase() === "az") {
            this.database.sort(compare);
        } else {
            this.database.sort(compare);
            this.database.reverse();
        }
        /*for (let i = 0; i < this.database.length; i++) {
            let contatto = this.database[i];
            console.log(contatto.nome + " " + contatto.cognome + " " + contatto.telefono);
        }*/
        return this.database;
    }
    aggiungiContatto(contatto) {
        let esisteContatto = false;
        if (contatto instanceof Contatto) {
            for (let i = 0; i < this.database.length; i++) {
                if (contatto.telefono === this.database[i].telefono) {
                    esisteContatto = true;
                }
            }
            if (!esisteContatto) {
                this.database.push(contatto);
            }
        }
    }
    modificaContatto(posizione, contatto) {
        if (contatto instanceof Contatto) {
            this.database[posizione].nome = contatto.nome;
            this.database[posizione].cognome = contatto.cognome;
            this.database[posizione].telefono = contatto.telefono;
        }
    }
    eliminaContatto(posizione) {
        this.database.splice(posizione, 1);
    }
    ricercaContatto(nome) {
        // questo mi serve per lo script di ricerca
        let lista = [];
        for (let i = 0; i < this.database.length; i++) {
            let contatto = this.database[i];
            if (contatto.nome.indexOf(nome) > -1 || contatto.cognome.indexOf(nome) > -1) {
                // console.log(contatto.nome + " " + contatto.cognome + " " + contatto.telefono);
                // mando dentro il mio array il contatto che ho cercato
                lista.push(contatto);
            }
        }
        return lista;
    }
}



