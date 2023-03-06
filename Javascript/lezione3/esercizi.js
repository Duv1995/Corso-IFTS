// PER TESTARE IL CODICEJS
// https://www.programiz.com/javascript/online-compiler/

/*ESERCIZIO 1
Scrivere un blocco di codice Javascript che
stampi a console i primi dieci interi pari compresi
tra 20 e 0, partendo da 20. Importante non
bisogna usare delle costanti, ma solo le
istruzioni if e for */

for (i = 20; i > 0; i--) {
    // ciclo per 20 volte partendo da 20 
    // e diminuendo fino ad arrivare a 0
    if (i % 2 == 0)
        // se modulo i non da resto è un numero pari
        console.log(i)
    // e lo stampo in console
}

/*ESERCIZIO 2
Scrivere un blocco di codice Javascript che
stampi a console i primi dieci numeri interi,
escluso lo zero, in lingua italiana.
 */

// for per pigliare i 10 numeri che incrementano ogni volta
for (i = 0; i <= 10; i++) {
    switch (i) {
        // switch per valutare ogni caso in cui i aumenta
        case 1: {
            console.log("uno");
            break;
        }
        case 2: {
            console.log("due");
            break;
        }
        case 3: {
            console.log("tre");
            break;
        }
        case 4: {
            console.log("quattro");
            break;
        }
        case 5: {
            console.log("cinque");
            break;
        }
        case 6: {
            console.log("sei");
            break;
        }
        case 7: {
            console.log("sette");
            break;
        }
        case 8: {
            console.log("otto");
            break;
        }
        case 9: {
            console.log("nove");
            break;
        }
        case 10: {
            console.log("dieci");
            break;
        }
    }
}



/* ESERCIZIO 3
Scrivere un blocco di codice Javascript che dato
un numero stampi la tabellina corrispondente.*/

function tabellina(x) {
    let z = 0;
    for (i = 0; i <= 10; i++) {
        z = x * i;
        console.log(z);
    }
}

tabellina(2);


/* ESERCIZIO 4
Scrivi un blocco di codice che dato un array di
numeri, calcoli la media dei valori e restituisca in
output la media e tutti i valori minori della media.
 Esempio:
 Input: a = [3, 5, 10, 2, 8]
 Output: media = 5.6, valori minori = [3, 5, 2]
 */


function media(input_array) {

    let totale = 0;
    let valore;
    for (valore of input_array) {
        totale = totale + valore;
    }
    console.log(totale);

    let numeri = input_array.length;
    console.log(numeri);


    media = totale / numeri;
    return media;

}

let array = [3, 5, 10];
console.log(media(array));


/*ESERCIZIO 4
Scrivi una funzione che prenda in input un numero e
restituisca TRUE se è un numero primo, FALSE altrimenti.
Scrivi una seconda funzione, che prenda in input un
numero N e stampi i primi N numeri primi.
 Esempio:
 Input: n = 5
 Output: true 2 3 5 7 11
 */

//  creo una funzione che verifica se un numero è primo oppure no
// i numeri primi sono quelli divisibili solo per se stessi e per 1
// posso fare un ciclo che va da 1 al num che inserisco e valuta se
// il mio numero è divisibile per tutti i numeri precedenti
// per capire se è numero primo oppure no

function is_numeri_primi(num) {
    if (typeof num === "number" && num >= 1) {
        // prima verifico che sia tipo number e che non sia 0
        for (i = num - 1; i > 1; i--) {
            // parto da num -1 (perche tanto tutti i numeri sono divisibili per se stessi)
            // e vado indietro di 1 fino ad arrivare a 1
            if (num % i == 0) {
                // se mi da resto 0 allora non è un numero primo
                // perche i numeri primi devono darmi sempre resto se divisi
                // per qualcosa di diverso da se stessi o 1, che abbiamo escluso nel ciclo!
                return false;
            }
        } return true;
        // se trovo resto tutte le volte è un numero primo!
    } return false;
}

// funzione che stampa i primi N numeri primi
// parto dalla mia funzione

function stampa_numeri_primi(n) {
    if (typeof n === "number" && n >= 1) {
        // stessa condizione di prima
        let i = 1; // inizializzo
        while (n >= 1) {
            // es metto 10 cicla finchè n non sarà 0
            // finchè n non arriva a 1
            if (is_numeri_primi(i)) {
                // se i è numero primo stampo 10?
                console.log(n);
                n--;
                // 10 diminuisce di 1 ogni volta
            }
            i++;
            // e i sali di 1 ogni volta
        }
    }
}


// ESERCIZIO
/*Scrivi una funzione che prenda in input una stringa e restituisca
TRUE se è palindroma, FALSE se non lo è. Nel controllo scarta gli
spazi e i segni di punteggiatura.
 Esempio:
 Input: i topi non avevano nipoti
 Output: true
Consigli:
Puoi eliminare spazi e segni di punteggiatura usando le espressioni
regolari o il metodo del tipo stringa chiamato replace, in questo
modo: str.replace(/\W/g, ""). */

// BASTA FARE DUE CICLI, UNO CHE PARTE DALL'INIZIO E UNO CHE PARTE DALLA FINE
// E VERIFICARE CHE LE LETTERE SIANO UGUALI, EASY (non credo)

function check_palindrome(str) {
    str = str.replace(/\W/g, "");
    // è un metodo della classe stringa che è REPLACE
    // questa regola mi ritrova la stessa stringa ma senza " " spazio vuoto
    let len = str.length;
    for (i = 0; i < len / 2; i++) {
        // calcolo il ciclo della mia sigla fino a metà
        // perche per essere palindromo basta che sia uguale fino a metà lol
        if (str[i] !== str[len - 1 - i]) {
            // non è chiaro per niente...
            return false;
        }
    }
    return true;
}


// ESERCIZIO
/*Scrivi una funzione che calcoli la vicinanza tra
tre numeri: A, B e N, e restituisca:
 - 0 Se A e B sono equidistanti da N
 - 1 Se B è più vicino a N rispetto ad A
 - -1 Se A è più vicino a N rispetto a B */

// FACCIO LA DIFF TRA I DUE VALORI E POI TRA QUELLO PIU PICCOLO E IL PIU VICINO (eh????)

function distanza(a, b, n) {
    var z = a - n;
    var x = b - n;
    if (z === x) {
        return 0;
    } else if (x < z) {
        return 1;
    } else {
        return -1;
    }
}