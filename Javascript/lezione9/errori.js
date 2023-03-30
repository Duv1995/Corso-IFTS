// TRY CATCH
/*Non importa quanto siamo bravi a programmare, a volte purtroppo il
nostro codice contiene degli errori. Questo può accadere a causa di un
nostro errore, un input da parte dell’utente inatteso, o una risposta
sbagliata da parte del server e per un altro centinaio di motivi.
Di solito, uno programma “termina” in modo inaspettato (si ferma
immediatamente) al verificarsi di un errore, stampandolo in console o in
un log di sistema.
Ma esiste il costrutto try...catch che permette di “catturare” gli errori e,
anziché farlo morire, ci permette di gestire l’errore. */

try {
    // blocco di codice
    // il mio codice prosegue normalmente
} catch (err) {
    // gestione dell'errore
    // viene attivato solo se si verifica un errore
    // blocca l'esecuzione del codice
    // err è un oggetto della classe error
    // che ha di default tutte le info di un errore
}

// try e catch viene generalmente usato per le risposte alle API
// che sono essenziali per il funzionamento della nostra pagina
// normalmente però non lo uso per il normale codice perche
// try catch consuma molte risorse e rallenta l'esecuzione


// OPERATORE THROW
/*L’operatore throw serve a generare e inviare noi stessi un errore.
Es in una funzione che calcola dei numeri se metto in input un valore non num
voglio che la nostra pagina lanci un errore, per farlo uso throw
La sintassi è molto semplice: throw <error object> 
Quando la mia pagina incontra un errore stoppa l'esecuzione
e lancia l'errore che gli ho definito */

let error0 = new Error(message);
// errore generico
let error1 = new SyntaxError(message);
// quando ho scritto male
let error2 = new ReferenceError(message);
// quando definisco un nome di variabile che non esiste

// poi per lanciarlo
alert(error.message);

// esempio
function validaNumero(valore) {
    if (typeof valore !== "number") {
        // se metto qualsiasi valore diverso da un number 
        // lancio il mio errore e blocco l'esecuzione
        let error3 = new Error("valore numerico non valido");
        throw error3;
    }
    // qui invece continuo il mio codice
}

// TRY CATCH FINALLY
/* Finally viene sempre eseguito dal nostro try catch anche se ci sono errori!
Viene eseguito il catch dell'errore ma prima di bloccare l'esecuzione
esegue anche quello che c'è dentro il finally. Può servire per prevenire eventuali loop
che possono verificarsi in caso di interruzione improvvisa (es chiudere la connessione al server) */
try { }
catch { }
finally {
    // viene eseguito sempre, sia senza che con errori!
}


