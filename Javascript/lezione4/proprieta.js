// OGGETTI E PROPRIETA' IN JS

// PROPRIETA' CALCOLATE 
// utilizzano una variabile esterna per assegnare un nome a una proprieta di un oggetto
let etichetta = "nome_proprieta"; // creo una nuova variabile

let oggetto1 = {
    [etichetta]: "ciao"
    // richiamo quella proprieta piu in alto come nome della mia proprieta
    // poi gli assegno il valore ciao
    // nome_proprieta = "ciao"
    // ATTENZIONE, scrivere solo etichetta: "ciao" senza le quadre
    // ti restituirà come valore etichetta = "ciao"
    // quindi non referenzia la variabile sopra!
}

// questi sono i tre modi per recuperare il valore di una proprieta
console.log(oggetto1.nome_proprieta);
console.log(oggetto1[etichetta]);
console.log(oggetto1["nome_proprieta"]);
// stampa in tutti e tre i casi "ciao" che è il valore della proprieta

// il vantaggio di sta cadrega è che puoi rendere dinamico il nome della proprietà
// e utilizzarla piu volte

let oggetto2 = {
    [etichetta]: "hello"
}

let oggetto3 = {
    [etichetta]: "tchuss"
}

// FUNZIONE CHE CREA UN OGGETTO
// creo una nuova funzione che costruisce un oggetto nuovo
function make_player(nome, cognome, eta) {
    return {
        nome: nome,
        // nome, 
        // se scrivo solo questo assegna in automatico in maniera implicita 
        // i nomi delle proprietà (nome: "Francesco")
        cognome: cognome,
        eta: eta
    };
}
let player = make_player("Francesco", "Totti", 45);
console.log(player.nome);


// CONTROLLO DI ESISTENZA
// Mi serve se voglio sapere se un oggetto ha la proprietà X 
// (es voglio sapere se nell'oggetto player c'è la proprietà nome)
let player_empy = {}; // oggetto vuoto
console.log(player_empy.nome === undefined);
// gli chiedo se la proprietà nome ha valore undefinied (quindi non esiste), 
// se mi stampa true allora so che quell'oggetto al suo interno non ha la proprietà nome

let player_in = { nome: "francesco" }
console.log("nome" in player); // true significa che player.nome esiste
console.log("cognome" in player); // false significa che player.cognome NON esiste

// attenzione! (caso molto estremo lol)
// quando ho una proprietà con valore undefined 
// il confronto stretto con "=== undefined" non funzionerà! devo invece usare IN
let player_in2 = { nome: "francesco", cognome: undefined }
console.log("nome" in player); // true significa che player.nome esiste
console.log("cognome" in player); // false significa che player.cognome NON esiste
console.log(player.cognome); // undefined, quindi non esiste la proprietà? 
// no esiste ma si chiama undefined!

// CICLO FOR IN 
// Per attraversare tutte le chiavi di un oggetto, esiste una speciale forma di ciclo: il FOR IN. 
// Fin ora lo abbiamo usato con gli array, ma funziona anche per ciclare le proprietà degli oggetti! 
for (chiave in oggetto){
    // se l'oggetto non è vuoto, esegue il corpo del ciclo per ogni proprietà dell'oggetto
}

let player_forin = {nome: "Francesco", cognome: "Totti", eta: 45};
for(var key in player_forin){
    // keys
    console.log(player_forin); // nome, cognome, eta
    // valori delle keys
    console.log(player_forin[key]); // francesco, totti, 45

}


// ORDINE DELLE PROPRIETA
let classifica = {
    "1": "based",
    "6": "kino",
    "4": "chad"
};
for (var posto in classifica){
alert(posto); // mi stampa prima 1, 4, 6 in ordine numerico!
}

let player_kino = {nome: "Francesco", cognome: "Totti"};
player.eta = 45; // aggiungo eta
for(var key in player_kino){
    alert(key); // nome, cognome, eta in ordine di creazione
}

// CANCELLARE PROPRIETA 
let player_canc = {nome: "Francesco", cognome: "Totti", eta: 45};
delete player.cognome; // controlla se la proprietà cognome esiste e la cancella
console.log(cognome in player); // false, significa che cognome è stato cancellato
// se volessi cancellare solo il valore di una proprietà gli do cognome = null