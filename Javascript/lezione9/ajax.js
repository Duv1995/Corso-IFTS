/* AJAX (ASYNC JAVASCRIPT AND XML)
Utilizzo asincrono di Javascript che attraverso l’interfacciamento con XML,
può permettere ad un client di richiamare informazioni lato server in modo
veloce e trasparente.
La richiesta è asincrona, il che significa che non bisogna necessariamente
attendere che sia stata ultimata per effettuare altre operazioni, stravolgendo 
sotto diversi punti di vista il flusso dati tipico di una pagina web */

// normalmente la risposta del server al client restituisce una nuova pagina web
// con AJAX invece la risposta contiene solo una piccola porzione di dati che 
// servono alla stessa pagina del client che si aggiornerà con javascript
// Tutta la programmazione moderna ha un approccio asincrono


/* XML HTTP REQUEST
XMLHttpRequest è un oggetto built-in fondamentale che ci permette di eseguire 
delle richieste HTTP al server remoto in JavaScript.
A dispetto del suo nome, contenente il termine “XML”, può funzionare con qualunque tipo di dato, e
non solo con il formato XML (es accetta dati dal JSON al binario!). 
Possiamo usarlo per effettuare upload e download di files, tenere traccia dei loro progressi 
e molto altro ancora. Tuttavia oggi c’è il più moderno metodo fetch, che in qualche modo
ha soppiantato XMLHttpRequest per fare le chiamate HTTP.
Nello sviluppo web attuale XMLHttpRequest viene utilizzato ancora oggi per tre principali ragioni:
● Ragioni storiche: per il supporto degli script già esistenti che fanno ancora uso di XMLHttpRequest.
● Se abbiamo bisogno di supportare i vecchi browser, e non vogliamo fare uso di librerie esterne.
● Se abbiamo bisogno di fare qualcosa che fetch non può ancora fare, ad esempio tenere traccia dei
progressi in fase di upload. */

/*XMLHttpRequest ha due modalità operative per fare chiamate al server: sincrona e asincrona.
Per prima cosa vediamo la modalità asincrona, dato che è usata nella maggior parte dei casi
(di default fa sempre chiamate async).
Per fare una richiesta, dividiamo l’operazione in quattro fasi:
1. Creiamo un oggetto di tipo XMLHttpRequest
2. Inizializziamo l’oggetto con la richiesta HTTP che vogliamo 
(inserendo metodo e URI, dati input da passare nel body, tipo di file da passare)
3. Invio della richiesta
4. Ci mettiamo in ascolto in attesa della risposta */

// 1) creo nuovo oggetto XML request
// il costruttore non ha argomenti in input
let xhr = new XMLHttpRequest();

// 2) inizializzo la richiesta HTTP
// ho un parametro che mi dice il metodo (GET, POST, PUT, etc) e l'URI
/*Questo metodo specifica i parametri principali della richiesta:
● method – metodo HTTP. Solitamente "GET" o "POST".
● URL – l’URL della richiesta, una stringa che può anche essere un oggetto URL.
● async – se impostato esplicitamente a false, la richiesta sarà sincrona.
● user, password – login e password per l’autenticazione HTTP di base (se richiesto).
Nota bene che la chiamata a open, contrariamente al suo nome, non apre la connessione.
Configura solo la richiesta, ma l’attività di rete comincia solo dopo la chiamata a send. */
xhr.open('GET', 'https://...');

// 3) invio la richiesta alla rete 
/*Questo metodo apre la connessione ed invia la richiesta al server. 
Il parametro opzionale body contiene il corpo della richiesta.
Alcuni metodi, come ad esempio GET non supportano il body nella richiesta,
mentre altri, come POST usano un body per inviare dati al server.  */
xhr.send();

// 4) mi metto in ascolto per la risposta del server
/*Ci mettiamo in ascolto sugli eventi xhr per la risposta.
Questi tre eventi sono quelli utilizzati più di frequente:
● on load – quando la richiesta è completa (anche se lo status HTTP è 400 o 500),
e la risposta è stata scaricata del tutto.
● on error – quando la richiesta non può essere espletata, ad esempio per
problemi di rete o URL non validi.
● on progress – viene innescato periodicamente mentre la risposta viene
scaricata, e dà informazioni su quanti dati sono stati scaricati. */
xhr.onload = function () {
    // questa risposta viene scaturita se la richiesta è andata a buon fine
};
xhr.onprogress = function (event) {
    // questa risposta viene scaturita periodicamente 
    // e indica il progresso della ricchiesta in corso
};
xhr.onerror = function () {
    // questa risposta viene scaturita se ricevo un errore 400, 500, etc
};
// queste tre funzioni possono essere customizzate da noi
// il 90% delle volte si prendono i dati ricevuti in HTML
// e si buttano dentro la pagina tramite JS

/*Una volta che il server ha risposto, otteniamo il risultato dentro le seguenti proprietà xhr:
● status HTTP status code (un valore numerico): 200, 404, 403 e così via, e può
essere 0 in caso di fallimento non HTTP.
● statusText messaggio dello status HTTP (è una stringa): solitamente OK per 200, Not
Found per 404, Forbidden per 403 e via dicendo.
● response (alcuni vecchi browser potrebbero usare responseText) 
questa è la risposta del server. */


// TIPO DI RISPOSTA - RESPONSE TYPE
/*Utilizziamo la proprietà xhr.responseType per impostare il formato 
che vogliamo ottenere dalla risposta:
● "" (default) – ottenerlo come stringa,
● "text" – ottenerlo come stringa,
● "arraybuffer" – ottenerlo come ArrayBuffer (per dati di tipo binario, guardare il
capitolo ArrayBuffer, array binari),
● "blob" – ottenerlo come un Blob (per dati binari, guardare Blob),
● "document" – ottenerlo come un documento XML (può usare XPath e altri
metodi XML) o un documento HTML (basato sul MIME type del dato ricevuto),
● "json" – ottiene un JSON (effettua il parsing automaticamente). */
xhr.responseType = 'json'; // durante il punto 2

// HEADERS HTTP
/* Gli header sono coppie chiave valore che vengono impostate 
in fase di richiesta al nostro server.
XMLHttpRequest permette di personalizzare le richieste HTTP, 
sia tramite l’invio di headers personalizzati che la loro lettura
nelle risposte. 
I metodi per gli header HTTP sono 3:
● setRequestHeader(name, value)
● getResponseHeader(name)
● getAllResponseHeaders() */
xhr.setRequestHeader('Content-Type', 'application/json'); 
// imposta il contenuto della richiesta (questo è il MIME type)
xhr.setResponseHeader('Content-Type'); 
// ritorna il tipo di contenuto della risposta (il tipo di risp dipende dal server)
xhr.getAllResponseHeaders; 
// ritorna tutti gli header della risposta


// FORMDATA E POST
/*Con JS posso fare la chiamata post di un form che invio al server.
per inviare il nostro form dobbiamo wrapparlo all'interno di un oggetto
chiamato formdata, e dopo aver fatto questo invio con l'oggetto xhr.
Questo è importante perche alcuni server accettano solo l'invio di dati
sottoforma di form! */

//CORS
/*Si parla di cross-origin HTTP request (CORS) quando un client richiede una
risorsa di un differente dominio, protocollo o porta. Ad esempio una web
application con dominio X non può richiedere una risorsa ad un dominio Y tramite
AJAX request se Y non ha abilitato il CORS.

Lo standard CORS funziona aggiungendo un nuovo HTTP headers che permette
ai server di specificare i domini a cui è permesso fare richieste per recuperare
dati. E’ possibile anche inserire come dominio abilitato * per abilitare qualsiasi
dominio.

Per lo standard CORS esistono due tipologie di richieste:
● Simple Request
● Prefilight Request*/