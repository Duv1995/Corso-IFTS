// FUNZIONI IN JAVASCRIPT

// Molto simili a quelle in PHP
function somma(x, y) {
    let z = x + y;
    return z
}

// ARGUMENTS
function somma1() {
    let tot = 0;
    let valore; // non inizializzo valore, non so ancora quanto sarà
    console.dir(arguments); // questo lo faccio per capire che cos'è arguments
    // arguments mi va a recuperare i valori di input della mia funzione!
    // è utile se non sai quanti input andrai a mettere nella tua funzione
    for (valore of arguments) {
        // valore of mi ricava i valori degli arguments della nostra funzione
        // ci permette di recuperare il valore di x argomenti (non sai quanti sono)
        // e restituirli sottoforma di array, anche se non li hai inizializzati
        tot = tot + valore;
    }
}

let risultato1 = somma1(1, 3, 4, "54");
// non darà una somma numerica ma una concatenazione perchè c'è una stringa
console.log(risultato1);

// un modo alternativo per fare questa funzione sarebbe
function somma2() {
    let tot = 0;
    let valore;
    console.dir(arguments);
    for (valore of arguments) {
        // faccio un if per castare i miei valori in numeri prima di sommare
        if (typeof valore == "string") {
            tot = tot + parseInt(valore);
        } else {
            tot = tot + valore;
        }
    }
    return tot;
}

let risultato2 = somma2(1, 3, 4, "54");
// adesso mi darà invece un risultato numerico, anche se ho una stringa!
console.log(risultato2);

// FUNZIONI VOID
// sono quelle dove non ho il return ma solo il blocco di istruzioni
function stampa_a_console_i_primi_10_numeri() {
    for (let i = 1; i <= 10; i++) {
        console.log(i);
    } // non ho alcun return!
}

stampa_a_console_i_primi_10_numeri();
// stamperà a console i primi 10 numeri

function is_numero_pari_o_dispari(x = 2) {
    // definisco x = 2 come comportamento di default nel caso x non venisse valorizzato
    // potrei anche mettere solo x, in quel caso se non metto nulla quando la richiamo però
    // mi darà errore
    let y = x % 2;
    if (y === 0) {
        console.log("E' un numero pari");
    } else {
        console.log("E' un numero dispari");
    }
}

is_numero_pari_o_dispari(10);
// 10 prende il posto di x = 2 quando vado ad eseguire 

// un modo alternativo è fare una funzione che mi dice solo se un numero è pari
function is_numero_pari(x) {
    if (x === null || x === undefined){
        // se x è uguale a null o undefined
        return false; // ritornerà sempre falso
    }
    if (typeof x == "string"){
        x = parseInt(x);
        // se x è di tipo stringa lo trasformo in numero intero se possibile
    }
    if (typeof x !== "string" && typeof x !== "number"){
        // se x non è di tipo stringa o numero dopo il primo controllo 
        // ritorno falso
        return false;
    }
    if (x % 2 === 0) {
        return true;
        // se è pari esce true
    } else {
        return false;
    }
}

let risultatoN = is_numero_pari("lmao");
// mi dirà falso
console.log(risultatoN);

// FUNZIONE CON FUNZIONE
// è una funzione che richiama un altra funzione precedentemente dichiarata
function se_numero_pari_stampa_ciao(){
    let x = prompt();
    // prompt apre una modale sul browser che ci richiede di inserire 
    // un valore in un campo, che verrà poi inserita nella nostra variabile x
    if (is_numero_pari(x)){
        // x diventa l'input di isnumeropari, se mi esce true stamperò ciao
        console.log("Ciao");
    }
}

se_numero_pari_stampa_ciao();
// il prompt mi fa inserire il mio numero come stringa
// grazie alla mia funzione che tollera tutti i casi possibili
// il numero verrà convertito da tipo stringa a tipo intero
// e mi stamperà ciao