let contatto = new Contatto("Giuseppe", "Rossi", "05412345678");
let contatto2 = new Contatto("Giuseppe", "Rossini", "05412345556789");
let contatto21 = new Contatto("Giuseppe", "Rossini", "0541244456789");
let contatto3 = new Contatto("Ilaria", "Bianchi", "0541234367589");
let contatto4 = new Contatto("Ilaria", "Bianchi", "10541234367589");

let rubrica = new Rubrica();
rubrica.aggiungiContatto(contatto);
rubrica.aggiungiContatto(contatto2);
rubrica.aggiungiContatto(contatto21);
rubrica.aggiungiContatto(contatto3);
rubrica.aggiungiContatto(contatto4);

