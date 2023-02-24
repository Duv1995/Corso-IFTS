// ISTRUZIONI ITERATIVE

// WHILE
let x1 = 0;
while (x1 >= 0 && x1 <= 10) { //se x compreso tra 0 e 10
    console.log(x1);
    x1++; //alla fine del while aumento la mia x per progredire
}
// stamperà x da 0 a 10


// DO WHILE
let x2 = 0;
// stamperò x una volta, e continuerò a farlo fino a che non arrivo a 10
do {
    console.log(x2);
    x2++;
} while (x2 < 10);
// stamperà x solo una volta

let x3 = 0;
let check = true;

while (check) {
    console.log("DEEZ NUTS");
    if (x3 >= 20) {
        // quando x arriva a 20 la condizione diventa false e smette di stampare DEEZ
        check = false;
    }
    x3++; //a fine di ogni ciclo aumento la x di 1
}

// FOR 
// solo se abbiamo un array possiamo fare un ciclo con questa sintassi
let quantita = [1, 2, 3, 4, 5];
let totale = 0;
let indice; // non lo inizializzo
for (indice in quantita) { // IN gli dice valorizza l'indice in base alla quantita
    totale = totale + quantita[indice];
}

let valore;
for (valore of quantita) { // FOR gli dice di valorizzare il valore in base alla quantita
    totale = totale + valore;
}

// CONTINUE E BREAK
let x4 = 0;
while (true) {
    console.log(x4);
    // la condizione di uscita dal ciclo sarà
    if (x4 > 10) break; //mi fermo appena x arriva a 10
    // il ciclo viene proprio fermato appena raggiungi il 10
    x4++;
}

let x5 = 0;
while (x5 < 10) {
    x++;
    if (x > 3) continue;
    // fin quando x non supera il 3, avrà il via libera di continuare quindi stampare x
    // appena supera il 3 non ha piu il continua e si ferma il ciclo!
    // in realtà il ciclo continua a venire eseguito per 10 volte, ma non stampa nulla dopo il 3
    console.log(x5);
}