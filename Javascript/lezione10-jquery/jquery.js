/*JQUERY
Jquery è una libreria che aiuta gli sviluppatori a manipolare
in maniera piu facile il DOM di una pagina.
Al suo interno ha dei metodi utili anche per fare chiamate API, animazioni, etc.
Essendo una delle librerie JS piu utilizzata (è integrata dentro wordpress)
i web dev ne hanno sempre abusato lol. */


/*La prima cosa da imparare con Jquery è che essendo una libreria esterna 
devo includere un javascript dentro la mia pagina web.
Basta prendere la URI del javascript che trovi su jquery.com
(esattamente come bootstrap) e lo si linka, oppure lo scarichi in locale
nella cartella di XAMPP. */

/*Una volta importata, Jquery per essere utilizzato all'interno della pagina web
utilizza una variabile sua speciale, il $, a cui possiamo aggiungere le parentesi ()
e al suo interno un di oppure un selettore. Se ci sono piu elementi con lo stesso 
selettore ci ritorna un array con tutti i selettori di quel tipo.
Una volta che ho un elemento ci posso applicare moltissimi metodi! (li trovo tutti nel sito) 
Tutti questi metodi sono suddivisi in base alla tipologia di azione che voglio compiere
sul mio elemento (es manipolare il CSS, gestire gli eventi script, chiamate ajax, etc).
Con questa libreria possiamo utilizzare questi metodi per sviluppare codice javascript 
mooooolto piu facilmente. */

// -------------------------------------------------------------------------------------- //

/*SINTASSI 

DOM manipulation
$("lista elementi").html("...");
// html è uno dei metodi, mi serve per manipolare la pagina HTML
(come se fosse innerhtml)

Gestore eventi (script)
$("elemento html").on("click", function(event) {...});
// è come fare getelementbyid e poi addeventlistener e la funzione
// con jquery è tutto molto piu semplice!

Ajax
$.ajax({url:"api/...", data: ..., success: function (result){...}});
ho un parametro che mi dice la URL su cui fare la get
data sono i parametri che andiamo a mettere su questa url
la funzione success è la funzione che all'onload (stato 200) si attiva
(è una formula molto simile al fetch)
*/

// -------------------------------------------------------------------------------------- //

/*METODI

ADD()
Serve per aggiungere elementi al document HTML (simile ad appendchild).
Es er aggiungere un li a un ul, gli passo il valore che voglio che venga aggiunto

ADDCLASS()
Aggiunge al nostro elemento html una classe CSS senza togliere le classi che aveva gia

AFTER()
Inserisce un elemento html successivo a quello su cui eseguo il metodo

ANIMATE()
Posso aggiungere un animazione attraverso JS prendendo un elemento e con le proprietà CSS
decido quale animazione fargli compiere (manipolo il CSS)

APPENDTO()
Utile per manipolare ulteriormente il DOM

.ATTR()
Va a recuperare il valore di un attributo di un tag html.
E' utile aggiungere questi attributi nel tag per fare es menu a tendina e altre robe.

.BIND()
Deprecato ma molto utilizzato, è la stessa cosa del metodo .ON
va ad attachare un evento a l'elemento selezionato

.BLUR()
Quando si perde il focus di un elemento attiva uno script

.CHANGE()
Strautilizzato, va a eseguire una funzione all'on.change di un elemento

.CLICK()
Stessa cosa del change, va a triggerare il click di quell'elemento

.CONTENTS()
Va a cercare degli elementi all'interno del DOM

.CSS()
Permette di manipolare gli attributi CSS del nostro elemento
(simile a document.style)

.DATA()
Ci fa vedere tutti gli attributi salvati nel tag html che hanno
il prefisso data (data-id, data-name, etc), si utilizzano molto

.EACH()
Permette di ripetere gli elementi presenti all'interno del nostro selettore
che abbiamo utilizzato

.EMPTY()
Rimuove tutti gli elementi dal tag che abbiamo selezionato

.FADEIN/FADEOUT/FADETO()
Funzioni per far comparire e scomparire elementi con un nimazione di fade

.FILTER()
Permette di filtrare gli elementi figli presenti nel tag selezionato
Ci aiuta a prendere ad es in un div, tutti i p contenuti
escludendo tutto il resto, li filtri

.FIRST()
Ci da il primo elemento figlio del tag html
Molto utile

.HASCLASS()
Ci dice se l'elemento ha una classe CSS

.HEIGHT()
Ci dice l'altezza in px di un tag html nella pagina
utile se voglio modificarlo in base a degli eventi

.HIDE()
Nasconde un tag

.HTML()
Permette di manipolare la pagina html

JQUERY.READY
Permette di fare un attach su un evento che viene triggerato solo su jquery
Es se noi abbiamo un elemento completamente visualizzato sul nostro browser
possiamo compiere un azione 
Es vogliamo che la nostra pagina venga prima caricata completamente e poi 
verrà eseguito del codice a cui vogliamo fare modifiche

.LAST()
Restituisce l'ultimo elemento presente

.PARENT()
Ci da l'elemento padre di quello selezionato

.REPLACEWITH()
Va a sostituire a un elemento tutto il suo contenuto, compreso il tag stesso
Utile nelle chiamate ajax, es un div viene sostituito completamente
nel contenuto e ccambia pure il div

.SCROLL()
Va a gestire un trigger che si attiva allo scroll del mouse su un elemento specifico (un div, etc)
e attivo uno script (si apre un menu, faccio scomparire alcuni elementi in alto, etc)

.SHOW()
Ci mostra l'elemento che abbiamo selezionato

.TOGGLE()
Fa un toggle per mostrare o nascondere un elemento

.VAL()
Ritorna il valore di un elemento

.WIDTH()
Ritorna la larghezza di un elemento
*/

// -------------------------------------------------------------------------------------- //

/* */

/* */
