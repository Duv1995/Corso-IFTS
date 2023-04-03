// ESERCIZIO
/*Utilizzando le Classi Rubrica e Contatto
dell’esercizio svolto la volta scorsa creiamo una
pagina web che visualizzi la lista dei contatti
presenti nella rubrica, la lista deve essere
numerata e avere un colore di background
diverso alternato. */

// Metto un po di contatti in questo file

let contattoA = new Contatto("lol", "lmao", "05412345671");
let contattoB = new Contatto("Giuseppe", "Rossini", "054123456782");
let contattoC = new Contatto("Giuseppe", "Rossini", "054123456783");
let contattoD = new Contatto("Ilaria", "Bianchi", "054123456784");

let rubrica1 = new Rubrica();
rubrica.aggiungiContatto(contattoA);
rubrica.aggiungiContatto(contattoB);
rubrica.aggiungiContatto(contattoC);
rubrica.aggiungiContatto(contattoD);