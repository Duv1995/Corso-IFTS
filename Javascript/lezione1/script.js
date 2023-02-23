// definisco una variabile molto easy
let numero = 10;
alert(numero);
// alert è una funzione di JS che fa comparire 
// una finestra popup sul browser che mi dice 10

// ora creo un oggetto
// let oggetto_ristorante = { "menu": {} }
// nel menu che è una proprietà posso inserire a sua volta un altro oggetto
// che contiene degli array al suo interno

// inizializzo prima due array che contengono 
// al loro interno altri due oggetti
let primi = [
    { "nome_piatto": "Carbonara", "prezzo": 12 },
    { "nome_piatto": "Spaghetti n meatballs", "prezzo": 15 },
];
let secondi = [
    { "nome_piatto": "Coda", "prezzo": 20 },
    { "nome_piatto": "Trippa", "prezzo": 15 },
];
// questo è il mio oggetto che contiene come proprietà i due array sopra
let oggetto_menu = { "primi": primi, "secondi": secondi};

// ora voglio farmi stampare gli elementi dentro il mio oggetto menu
console.log(oggetto_menu.secondi[1]);
// dentro il mio menu prendo secondi e il valore che sta dentro il valore 1
console.log(oggetto_menu.secondi[1].prezzo);
// così se voglio vedere solo il prezzo