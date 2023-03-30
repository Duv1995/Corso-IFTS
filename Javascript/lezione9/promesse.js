// PROMISE
/* Le promesse permettono di innescare all'interno del nostro codice 
dei processi asincroni in background.
Iniziamo col dire che le Promise sono state concepite per rappresentare operazioni incomplete
al momento corrente che saranno però complete in futuro; per questo motivo parliamo di un
costrutto adottato nel caso di elaborazioni asincrone e differite, infati permettono di gestire
in modo asincrono il mio codice, perche i miei processi rimangono in attesa di risposte
mentre continuano a lavorare. 
Data la loro natura le Promise prevedono tre stati differenti:
● pending, cioè in attesa, che è lo stato iniziale
● fulfilled, cioè "soddisfatto", che si verifica quando un'operazione ha avuto successo.
● rejected, cioè "respinto", nel caso del fallimento di un'operazione.
Un pending può esitare sia in fulfilled che in rejected, nel primo caso verrà generato un valore,
nel secondo avremo una notifica di errore, ecco perché le Promise possono risultare
particolarmente utili se usate in associazione ad istruzioni condizionali. */

let promise = new Promise(handler);
/* Il costruttore Promise() prevede un parametro rappresentato da una
funzione (promise handler) che ha il compito di gestire la risoluzione o il
rigetto della promise stessa. */

let promise1 = new Promise(function (resolve, reject) {
    if (condizione) {
        resolve(valore);
    } else {
        reject(motivo);
    }
})
/* Il primo parametro RESOLVE rappresenta la funzione da invocare quando il valore restituito
dell'operazione asincrona è disponibile. Il valore restituito dalla attività asincrona
viene passato a tale funzione.*/

/*Il secondo parametro REJECT è la funzione da invocare quando la promise non può
essere risolta, ad esempio perché si è verificato un errore o perché il valore
restituito non è considerato valido. In questo caso alla funzione viene passato il
motivo del rigetto, come può essere ad esempio l’eccezione che si è verificata. */

function getHttp() {
    // questa è una funzione asincrona che ritorna quindi una promise
    return new Promise(function (resolve, reject) {
        // nella promise faccio una richiesta al server
        let xhr = new XMLHttpRequest();
        xhr.onload = function () {
            let data;
            if (xhr.status === 200) {
                // se la richiesta va a buon fine
                resolve(xhr.response);
                // la promessa si risolve con la risposta del server
            } else {
                // se invece la promessa non va a buon fine
                reject(new Error(xhr.statusText));
                // lancio un errore
            }
        }
        xhr.open("GET", "https://jsonplaceholder.typicode.com/todos");
        xhr.send();
    })
}


// PROMISE: METODO THEN 
/*Per verificare se la mia promessa è stata eseguita o meno uso il metodo then.
Il primo argomento di then è una funzione che esegue quando una promise viene
risolta, e ne riceve il risultato.
Il secondo argomento di then è una funzione che esegue quando una promise
viene rifiutata e riceve l’errore. */

let promessa = getHttp();
// il then mi dice di eseguire la prima funzione 
// quando finalmente ottengo una risposta dalla mia promessa
promessa.then((data) => disegnaContenuto(data))
// altrimenti se la chiamata ha esito negativo
// lancio l'errore
        .then((error) => console.dir(error));
// con resolve e reject personalizzo il comportamento del mio client

/*Then è diverso da try e catch, perche non gestisce gli errori
ma solo i casi in cui la richiesta non va a buon fine.
Le richieste possono essere rifiutate dal server, ma posso anche
fare richieste non http,  */

function provaPromesse(){
    return new Promise(
        function(resolve, reject){
            let array = [1,2,3,4,5,6,7,8,9,10];
            let totale = 0;
            for (let index = 0; index < array.length; index++) {
                const element = array[index];
                totale = totale + element;
                let x = 0;
                while (x <= 1000000) {
                    // gli faccio fare un operazione che impiega un bel po di tempo
                    // da eseguire in modo asincrono senza bloccarmi la pagina
                    x++;
                }
                if (totale > 4) {
                    resolve(totale);
                } else {
                    reject(index);
                }
            }
        }
    );
}

let promessa2 = provaPromesse();

promessa2.then((totale) => console.log("Totale: " + totale), 
            (error) => console.log("Indice: " + error));
// quando faccio una nuova promise devo sempre mettere il then
// così inizia a lavorare in modo asincrono sulla mia pagina
// e si interrompe quantro incontra la condizione di reject
console.log("ciao");
// la mia pagina esegue prima il 'ciao' e nel mentre fa lavorare la promise

// PROMISE METODO CATCH 
/* Posso utilizare il catch all'interno delle mie promesse per rappresentare lo status
di reject della mia promessa.
Sostanzialmente andiamo a sostituire la reject.
Catch alla fine rappresenta sempre il reject, non cambia nulla, il catch semplicemente
è piu leggibile! 
Se siamo interessati solo agli errori, allora possiamo usare null come primo
argomento: then(null, errorHandlingFunction), oppure possiamo usare il metodo
catch(errorHandlingFunction).
La chiamata catch(f) è completamente analoga a then(null, f), è solo
un’abbreviazione.*/

// PROMESSE METODO FINALLY
/* Anche le promesse hanno il metodo finally per fare pulizia delle mie funzioni
in entrambi i casi in cui si verifichi una promessa accettata rifiutata 
eseguo una parte di codice (es faccio spuntare una rotellina che gira e carica 
mentre lui aspetta la risp lol)  */



