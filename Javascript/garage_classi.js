/*ESERCIZIO GARAGE
Scrivi un programma per la gestione di un garage.
Definisci una classe per creare le automobili,
dovrà contenere almeno marca del veicolo e nome del modello.

Definisci una classe che rappresenti il garage.
Scrivi una funzione che inserisca un veicolo nel garage.
Scrivi una funzione che prenda in input una marca e
stampi i modelli presenti nel garage di quella stessa marca.
Scrivi una funzione che rimuove un veicolo dal garage.

Puoi usare un array come base per salvare le automobili 
presenti nel tuo garage. */

class Auto {
    constructor(modello, marca, targa) {
        this.modello = modello;
        this.marca = marca;
        this.targa = targa;
    }

    stampa(){
        console.log(this.modello);
        console.log(this.marca);
        console.log(this.targa);
    }

}

let carriola1 = new Auto("modello1", "marca1", "targa1");
console.log(carriola1);
let carriola2 = new Auto("modello2", "marca2", "targa2");
console.log(carriola2);
automobili = [];
automobili[0] = carriola1;
automobili[1] = carriola2;

console.log(automobili);

class Garage {
    constructor(automobili = []) {
        this.automobili = automobili;
        // definisco una proprietà al suo interno che è un array
        // e che utilizzeremo per salvere le nostre auto al suo interno
    }

    valida_auto(auto) {
        // prima controllo che il valore in input di auto non sia nullo o undefined
        if (auto === null || auto === undefined) {
            console.log(auto + "non valida");
            return false; // in questo caso non faccio niente e non aggiungo i valori al mio array

        }
        // ora verifico se il mio valore input auto abbia sia modello che marca
        if ("marca" in auto && "modello" in auto && "targa" in auto) {
            console.log(auto + "validata");
            return true; // se ci sono queste proprietà ritorno true
        } else {
            console.log(auto + "non valida");
            return false; // negli altri casi è false
        }
    }


    // definisco i metodi del mio oggetto
    inserisci_auto(auto) {
        // qui vado ad aggiungere gli elementi dentro l'array automobili
        // che rappresenta le auto presenti nel mio garage
        // THIS serve per accedere alle proprietà di ogni oggetto diverso ogni volta


        // verifico che l'auto sia valida
        if (this.valida_auto(auto)) {
            // se valida auto mi da true proseguo e inserisco l'auto

            let indice = this.automobili.length;
            // gli dico in che posizione aggiungere le mie auto nell'array
            // ogni volta l'indice prende il valore della lunghezza dell'array 
            // (all'inizio è vuoto è 0, poi diventa 1, etc ad ogni oggetto inserito)
            // perche in JS non si può lasciare l'indice vuoto come in PHP
            this.automobili[indice] = auto;
            // inserisco auto in automobili nell'indice trovato
        }
    }

    /*
        // creo funzione per rimuovere un veicolo
        rimuovi_auto(auto) {
            // per rimuovere un elemento in un array non posso usare delete
            // devo prima trovare il suo indice nell'array e poi toglierlo
    
            // memorizzo l'indice da eliminare in una variabile
            let indice_da_eliminare = -1;
    
            for (i = 0; i < this.automobili.length; i++) {
                // ciclo for con indice i per tutti gli oggetti contenuti in array
                let auto_in_garage = this.automobili[i];
                // per ogni oggetto auto devo controllare marca e modello per capire quale auto è
                // e per vedere se è l'auto con marca e modello che io voglio eliminare
                if (auto_in_garage.marca == auto.marca &&
                    auto_in_garage.modello == auto.modello &&
                    auto_in_garage.targa == auto.targa) {
                    indice_da_eliminare = indice;
                    break;
                    // se è marca e modello che voglio cancellare gli assegno a indice da eliminare
                    // l'indice della auto che ho trovato
                }
            }
    
            if (indice_da_eliminare >= 0) {
                this.automobili[indice_da_eliminare] = undefined;
            }
        }
    
    
    
        // creo funzione che prende la marca e stampa i modelli presenti in garage di quella marca
        stampa_auto(marca) {
            for (const auto of this.automobili) {
                // stampa tutte le automobili dato il nome di quella marca
                // uso const su auto perche non devo andare a modificare auto
                // quindi lo posso lasciare come costante
                console.log(auto.marca + " " + auto.modello)
            }
        }
    
    
    */

}


// richiamo
let carriola1 = new Auto("modello1", "marca1", "targa1");
console.log(carriola1);
let carriola2 = new Auto("modello2", "marca2", "targa2");
console.log(carriola2);

let garage = new Garage;
console.log(garage.automobili)
garage.valida_auto(carriola1);
garage.inserisci_auto(carriola1);
console.log(garage.automobili);
// Garage.rimuovi_auto(carriola1);
// console.log(Garage.automobili);
// Garage.valida_auto("marca1");



