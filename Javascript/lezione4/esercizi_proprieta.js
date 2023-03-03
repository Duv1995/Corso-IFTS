// ESERCIZIO 1
/*Scrivi il seguente codice, una riga per ogni azione:
1. Crea un oggetto vuoto Calciatore.
2. Aggiungi la proprietà nome con valore Lorenzo.
3. Aggiungi la proprietà cognome con valore Pellegrini.
4. Cambia il valore di nome con Giuseppe.
5. Rimuovi la proprietà cognome dall’oggetto. */

let calciatore = {};

calciatore.nome = "Lorenzio";
console.log(calciatore.nome);

calciatore.cognome = "NPC_surname";
console.log(calciatore.cognome);

calciatore.nome = "Zuzeppe";
console.log(calciatore.nome);

delete calciatore.cognome;
console.log(calciatore.cognome === undefined);


// ESERCIZIO 2
/*Scrivi la funzione isEmpty(obj) che ritorna true
se l’oggetto non ha proprietà, altrimenti ritorna false.*/

function isEmpty(obj) {
    for (key in obj) {
        // se ho deglle proprieta entra in automatico nel ciclo
        // se non ne ha non entra nemmeno
        return false;
        // quindi ritorno falso se entra perche vuol dire che ha delle proprietà
    }
    return true;
    // e ritorno true se non riesce a entrare nel ciclo 
    // perche non ci sono proprietà da ciclare
}

let oggetto_vuoto = {};
console.log(isEmpty(oggetto_vuoto));
// uso il console log per vedere la stampa true o false


// ESERCIZIO 3
/*Scrivi una funzione che stampi il nome e il cognome 
dei calciatori che hanno il numero della maglia uguale a 10. */

let calciatori = [
    { nome: "Lorenzo", cognome: "Pellegrini", maglia: 10 },
    { nome: "Edin", cognome: "Dzeko", maglia: 23 },
    { nome: "Federico", cognome: "Chiesa", maglia: 99 },
    { nome: "Paulo", cognome: "Dybala", maglia: 10 },
    { nome: "Lorenzo", cognome: "Insigne", maglia: 10 },
    { nome: "Andrea", cognome: "Belotti", maglia: 9 },
    { nome: "Antonio", cognome: "Vacca", maglia: undefined },
];

function stampa_10(calciatori) {
    for (calciatore of calciatori) {
        // ciclo l'array contenitore andando a referenziare i VALORI con OF
        // non le chiavi, qui vuoi vedere il contenuto che sono i vari arrays
        if (calciatore.maglia === 10) {
            // e di ogni array al suo interno controllo se la chiave maglia è 10
            console.log(calciatore.nome + " " + calciatore.cognome);
            // e in quel caso stampo nome concatenato con cognome
        }
    }
}

stampa_10(calciatori);