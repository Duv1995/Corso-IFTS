// Inizializzo una variabile OGGETTO in JS
let persona = {"nome": "Goro", "cognome": "Akechi", "eta": null};
// copincollo questa riga nella sezione CONSOLE sotto ispeziona F12 su un qualsiasi browser

// console ci permette di accedere alla console
// log ci permette di scrivere una riga nella consola
// in questo caso scriverò l'età direttamente nella console
console.log(persona.eta);
// stamperà NULL

let persona_2 = {"nome": "Goro", "cognome": "Akechi"};
console.log(persona_2.eta);
// in questo caso invece stamperà UNDEFINED, perchè l'età non è stata definita!