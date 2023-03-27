/* JSON IN JAVASCRIPT
JSON (JavaScript Object Notation) è un semplice formato per lo scambio di dati.
Per le persone è facile da leggere e scrivere, mentre per le macchine risulta facile
da generare e analizzarne la sintassi. Si basa su un sottoinsieme del Linguaggio
di Programmazione JavaScript, e andava a sostituire XML che aveva lo stesso ruolo
ma era poco flessibile e performante.*/

/*Il JSON in Javascript
JSON è basato su due strutture:
● Un insieme di coppie nome/valore. In diversi linguaggi, questo è realizzato come un oggetto, 
un record, uno struct, un dizionario, una tabella hash, un elenco di chiavi o un array associativo.
● Un elenco ordinato di valori. Nella maggior parte dei linguaggi questo si realizza con un array, 
un vettore, un elenco o una sequenza.
● Queste sono strutture di dati universali. Virtualmente tutti i linguaggi di programmazione moderni 
li supportano in entrambe le forme. E' sensato che un formato di dati che è interscambiabile 
con linguaggi di programmazione debba essere basato su queste strutture.
In JSON, assumono queste forme:
● Un oggetto è una serie non ordinata di nomi/valori. 
Un oggetto inizia con {parentesi graffa sinistra e finisce con } parentesi graffa destra. 
Ogni nome è seguito da :due punti e la coppia di nome/valore sono separata da ,virgola.
● Un array è una raccolta ordinata di valori. 
Un array comincia con [parentesi quadra sinistra e finisce con ] parentesi quadra destra. 
I valori sono separati da ,virgola. */

// questo è un JSON
// {
//     "proprietà": {
//         "nome": "Manuel",
//         "cognome": "Rossi",
//         "eta": 1
//     }
// }

/* UTILIZZARE JSON IN JS
JavaScript fornisce i seguenti metodi per utilizzare il JSON:
● JSON.stringify per convertire oggetti in JSON.
● JSON.parse per convertire JSON in oggetto. */

/*JSON.stringify
Il metodo JSON.stringify() converte un valore JavaScript in una stringa JSON,
sostituendo i valori se è specificata una funzione di sostituzione, o includendo le
proprietà specificate se un array di valori è specificato. */

/*JSON.parse
Il metodo JSON.parse() parserizza una stringa JSON, opzionalmente
trasforma il valore ottenuto dal parsing. Può trasformare un JSON in oggetto o array. */