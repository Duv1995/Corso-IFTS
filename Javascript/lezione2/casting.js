// Proviamo la funzione di CASTING di JS
// utile perche potrebbe capitare di fare confronti o operazioni
// con variabili di tipo diverso

let stringa01 = "Lezione 2";
let stringa02 = "1";
let stringa03 = "true";
let stringa04 = "null";
let stringavuota = "";
let stringa06 = "1";

let intero01 = 7;
let decimale01 = 7.5;

let boolean01 = true;
let boolean02 = false;

let nonvalorizzata = null;
let nondefinita; //non valorizzata

// ora facciamo le operazioni

let x1 = stringa01 + stringa02;
// in questo caso non fa un operzione matematica, 
// fa una concatenazione delle stringhe e mi restituisce: "Lezione 21"
console.log(x1); //per stampare sulla console

let x2 = intero01 + stringa02;
// in questo caso fa di nuovo una concatenazione
// con il + tra stringa e numero vincono sempre le stringhe e quindi concatena
// risultato 71

let x3 = intero01 - stringa02;
// siccome l'operatore - non esiste per le stringhe
// questa volta farà la sottrazione matematica
// risultato -6

let x4 = stringa02 + boolean01;
// in questo caso converte il booleano in stringa e le concatena
// risultato "1true"

let x5 = stringa02 + nonvalorizzata;
// anche qui converte il null in stringa
// risultato "1null"

let x6 = stringa02 + nondefinita + intero01;
// anche se c'è un valore undefined non inizializzato 
// se c'è almeno una stringa viene convertito in stringa e concatenato
// risultato 1undefined7

let x7 = intero01 + stringavuota;
// se concateno numero e stringa vuota
// risultato 7 ma è una stringa perche ha convertito tutto in stringhe
// e le ha poi concatenate

let x8 = intero01 + boolean01;
// in questo caso convertisce il boolean in 1 
// vince il numero perche nei booleani il + non esiste
// risultato 8

let x9 = intero01 % boolean02;
// qui sto dividendo per 0 (false) 
// e quindi non riesce a fare l'operazione
// risultato NaN 

let x10 = intero01 + nondefinita;
// non riesce a fare l'operazione
// risultato NaN

let x11 = intero01 + nonvalorizzata;
// converte il null in 0
// risultato 7



// CONFRONTI
let y1 = stringa02 == boolean01;
// converte stringa2 in true e confronta true = true?
// risultato vero

let y2 = stringa02 === boolean01;
// non si applica alcuna conversione
// risultato falso

let y3 = stringa02 === stringa06;
// tipo e valore sono gli stessi
// risultato vero