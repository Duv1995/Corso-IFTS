/*ESERCIZIO GARAGE
Scrivi un programma per la gestione di un garage.
Definisci un oggetto che rappresenti un automobile,
dovrà contenere almeno marca del veicolo e nome del modello.

Definisci un oggetto che rappresenti il garage.

Scrivi una funzione che inserisca un veicolo nel garage.

Scrivi una funzione che prenda in input una marca e
stampi i modelli presenti nel garage di quella stessa marca.

Scrivi una funzione che rimuove un veicolo dal garage.

Puoi usare un array come base per salvare le automobili 
presenti nel tuo garage. */

// creo una funzione che genera un nuovo oggetto automobile
function make_auto(modello, marca) {
    return {
        modello,
        // modello: modello,
        marca
        // marca: marca,
    }
}

// definisco l'oggetto garage
let garage = {
    automobili: []
    // definisco una proprietà al suo interno che è un array
    // e che utilizzeremo per salvere le nostre auto al suo interno
}



// opz. creo funzione per validare che un auto inserita abbia tutto il necessario
garage.valida_auto = function (auto) {
    // prima controllo che il valore in input di auto non sia nullo o undefined
    if (auto === null || auto === undefined) {
        return fase; // in questo caso non faccio niente e non aggiungo i valori al mio array
    }
    // ora verifico se il mio valore input auto abbia sia modello che marca
    if ("marca" in auto && "modello" in auto) {
        return true; // se ci sono queste proprietà ritorno true
    } else {
        return false; // negli altri casi è false
    }
}



// definisco i metodi del mio oggetto
garage.inserisci_auto = function (auto) {
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

    }

}

// creo funzione per rimuovere un veicolo
garage.rimuovi_auto = function (auto) {
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
            auto_in_garage.modello == auto.modello){
                indice_da_eliminare = indice;
                break;
                // se è marca e modello che voglio cancellare gli assegno a indice da eliminare
                // l'indice della auto che ho trovato
            }
    }

    if (indice_da_eliminare >= 0){
        this.automobili[indice_da_eliminare] = undefined;
    }
}

// creo funzione che prende la marca e stampa i modelli presenti in garage di quella marca
garage.stampa_auto = function (marca) {
    for (const auto of this.automobili) {
        // stampa tutte le automobili dato il nome di quella marca
        // uso const su auto perche non devo andare a modificare auto
        // quindi lo posso lasciare come costante
        console.log(auto.marca + " " + auto.modello)
    }
}