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