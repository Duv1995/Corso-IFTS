// VERIFICA JS DAVIDE GIARDI

/*ESERCIZIO 1
Scrivi una funzione che dati 5 numeri in input, 
dia in output la somma e la media.  */

function sommaMedia(a, b, c, d, e) {
    let risultato = [];
    let somma = a + b + c + d + e;
    risultato.push(somma);

    let media = somma / 5;
    risultato.push(media);

    return risultato;
}

let result = sommaMedia(2, 3, 5, 8, 10);
console.table(result);






/*ESERCIZIO 2 
Scrivi una funzione che dato un numero di secondi, 
calcoli la quantità di ore, minuti e secondi corrispondenti 
e  poi stampi il risultato in console. 
L'output avrà solo numeri interi.   
Esempio:    
Input: 54000   Output: 15 ore, 0 minuti e 0 secondi.*/

function contaSecondi(tempo) {
    // 3600 secondi in un ora => divido per i miei secondi e trovo le ore, arrotondo il risultato
    let ore = Math.round(tempo / 3600);
    // 60 secondi in un minuto => tolgo le ore riconvertite in secondi (che avevo gia trovato prima) ai miei secondi, e poi divido per 60 
    let minuti = Math.round((tempo - (ore * 3600)) / 60);
    // tolgo al mio tempo ore e minuti riconvertite in secondi che avevo gia trovato prima, e trovo quanti secondi rimangono
    let secondi = tempo - (ore * 3600) - (minuti * 60);

    return console.log(ore + " ore, " + minuti + " minuti, " + secondi + " secondi.");
}

contaSecondi(54000);





/*ESERCIZIO 3 
Scrivi una funzione che dato un numero intero 
(massimo 9999) conti da quante cifre è formato.*/

function contaCifre(numero) {
    if (numero <= 9999) {
        // converto numero in stringa
        let n = numero.toString();
        // stampo la lunghezza della stringa
        return (console.log(n.length));
    } else {
        return console.log("numero inserito troppo grande");
    }
}

contaCifre(9999);






/*ESERCIZIO 4 
Scrivi una funzione che prenda in input un numero intero 
e restituisca 0 se è pari o 1 se è dispari.*/

function pariDispari(n) {
    if (n % 2 === 0) {
        return console.log(0);
    } else {
        return console.log(1);
    }
}

pariDispari(2);






/*ESERCIZIO 5 
Scrivi un programma che prenda in input un array multidimensionale 
e stampi in output la sua trasposta.  
Esempio: Input: [[1, 2],[3, 4],[5, 6]] Output:[[1, 3, 5],[2, 4, 6]]*/

// per questo esercizio non sono riuscito ad arrivarci ragionandoci da solo, 
// quindi ho trovato una soluzione nei forum online e ho cercato di comprenderla
// adesso ci sono arrivato ma non credo ci sarei mai riuscito per conto mio,
// quindi se mi toglie punti non ci rimango male lol

function trasposta(array_originale) {
    let array_trasposto = [];

    for (let y = 0; y < array_originale.length; y++) {
        // ciclo per scorrere il mio array
        for (let x = 0; x < array_originale[y].length; x++) {
            // ciclo per scorrere dentro ogni elemento interno del mio array

            // per ognuno dei valori interni creo una cella vuota
            if (array_trasposto[x] === undefined) array_trasposto[x] = [];
            
            // per ogni cella vuota che creo vado ad assegnargli
            // il valore che avevo nell'array originale ma invertendo la posizione
            array_trasposto[x][y] = array_originale[y][x];
        }
    }
    return array_trasposto;
}

let array_input = [[1, 2], [3, 4], [5, 6]];
console.table(array_input);
let trasp = trasposta(array_input);
console.table(trasp);