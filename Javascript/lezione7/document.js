// DOCUMENT
/*Ricordiamo che JS serve principalmente per rendere dinamiche le pagine HTML,
quindi ci serve un modo per farlo interagire con la nostra pagina web.

La struttura portante di un documento HTML è rappresentata dai tags.
Secondo il Document Object Model (DOM), ogni tag HTML è un oggetto. I tags
annidati vengono chiamati “figli” del tag che li racchiude.
Tutti questi oggetti sono accessibili usando JavaScript.
Ad esempio, document.body è l’oggetto che rappresenta il tag <body> */

// per interagire col DOM devo ovviamente legare il mio file JS alla pagina HTML
document.body.style.background = 'red'; // rende il background rosso
setTimeout(() => document.body.style.background = '', 5000);
// imposta un timeout di 5 secondi dopo il quale lo sfondo torna normale 


// PERCORRERE IL DOM
/*Document è importante perche ci permette di percorrere ogni parte HMTL
della nostra pagina web.
Il DOM ci consente di fare qualsiasi cosa con gli elementi ed il loro contenuto, ma
prima dobbiamo essere in grado di raggiungere l’oggetto DOM corrispondente.
Tutte le operazioni sul DOM iniziano con l’oggetto DOCUMENT. Questo è il
principale “punto d’ingresso” per il DOM, dal quale possiamo accedere a qualsiasi
nodo. */

/*I nodi in cima del documento HTML sono disponibili direttamente come proprietà di document:
<html> = document.documentElement
Il nodo del DOM più in alto è document.documentElement, esso corrisponde al tag <html>,
quindi alla root.

<body> = document.body
Un altro nodo DOM largamente utilizzato è l’elemento <body>, ossia document.body.

<head> = document.head
Il tag <head> è disponibile come document.head.*/

/* Con Document abbiamo anche altre proprietà molto utili:
● La proprietà childNodes raccoglie tutti i nodi figlio, inclusi quelli di testo.
Es uso childNodes sull'elemento head mi tornano il titolo e il testo che vi sono contenuti.
Per fare questp si fa un ciclo perchè childNodes trasforma in un array tutti gli elementi di quel nodo!
● Le proprietà firstChild e lastChild permettono un accesso più veloce al
primo ed all’ultimo nodo figlio. */

<html>
    <body>
        <div>Questo è un DIV</div>
        <ul>
            <li>Questo è un LI</li>
        </ul>
        <div>Questo è un altro DIV</div>
        <script>
            {/* qui metterei il ciclo che ho messo sotto... */}
        </script>
    </body>
</html>
for (i = 0; i < document.body.childNodes.length; i++) {
    alert(document.body.childNodes[i]); // Text, DIV, Text, UL, ..., SCRIPT
}


// NEXT SIBLING, PREV SIBLING, PARENTNODE
/*Il fratello successivo è nella proprietà nextSibling, quello precedente in
previousSibling.
Il genitore è disponibile come parentNode. 
*/
alert(document.body.parentNode === document.documentElement);
// Es se uso parentNode sul tag body vado a prendere il padre, che è il tag HTML principale.
alert(document.head.nextSibling);
// Se vado a prendere il nextSibling di head mi darà body.
alert(document.head.previousSibling);
// Se vado a prendere il previousSibling di body mi darà head.


// PERCORRERE SOLO GLI ELEMENTI DEL DOM
/*Le proprietà di navigazione viste finora fanno riferimento a tutti i nodi. Ad esempio, in childNodes
possiamo trovare: nodi elemento, nodi di testo, ed anche nodi commento se ce ne sono.
Ma per alcuni compiti non vogliamo nodi di testo o di commento. Vogliamo solo manipolare nodi
che rappresentano i tags e che costituiscono la struttura della pagina.
Come per i nodes abbiamo:
● children – solo i figli che sono nodi elemento (e non testo).
● firstElementChild, lastElementChild – il primo e l’ultimo elemento figlio (e non testo).
● previousElementSibling, nextElementSibling – gli elementi vicini (e non testo).
● parentElement – l’elemento genitore (e non testo). */

for (let elem of document.body.children) {
    alert(elem); // prendo solo DIV, UL, SCRIPT ma senza testo e identazione
}


// RICERCA TRAMITE GETELEMENT
/*Ci sono dei metodi che recuperano attraverso dei selettori dei tag HTML.
Le proprietà di navigazione del DOM funzionano bene per gli elementi vicini. 
E quando non lo sono? Come possiamo ottenere un elemento arbitrario della
pagina?
Ci sono altri metodi di ricerca per questo. */

<div id="elemento">
    <div id="elemento-conent">Ciao</div>
</div>

let elem = document.getElementById('elemento');
// trovo al volo quel tag tramite l'ID
elem.style.background = 'red';
// e poi gli cambio colore bg

/*Ci sono anche altri modi per trovare elementi specifici:
● elem.getElementsByTagName(tag)
○ cerca gli elementi con il tag specificato e ritorna una loro collection. Il parametro tag può
anche essere *, che equivale a “qualsiasi tag”

● elem.getElementsByClassName(className)
○ ritorna gli elementi con la data classe.

● document.getElementsByName(name)
○ ritorna gli elementi con l’attributo name, ovunque nel documento.*/


// RICERCA TRAMITE SELETTORE CSS
/*Ci sono anche altri metodi che utilizzano i selettori CSS, che se non ti ricordi
sono quelli tipo div#container > ul {...}
● querySelectorAll
○ Tra i metodi più versatili, elem.querySelectorAll(css) ritorna tutti gli elementi contenuti in elem
che combaciano con il selettore CSS specificato.

● querySelector
○ La chiamata a elem.querySelector(css) ritorna il primo elemento che combacia con il selettore
CSS specificato.

● matches
○ Il metodo elem.matches(css) non cerca nulla; controlla semplicemente se elem combacia con
il selettore CSS specificato, e ritorna true o false.

● closest
○ Il metodo elem.closest(css) cerca l’antenato più vicino che combacia il selettore CSS
specificato. elem stesso è incluso nella ricerca. */

// ------------------------------------------------------------------------------------------------- //

// LE CLASSI DEL DOM
/* Ogni metodo che utilizziamo ritorna degli oggetti, non delle stringhe 
(es getElementByID ritorna un oggetto che è un istanza di html, div, element, e che ha una serie di proprietà
tra cui style che ne determina lo stile)
EventTarget – è la classe radice (root class) “astratta”. Gli oggetti di questa classe non vengono mai creati. 
Serve solo come base, in questo modo tutti i nodi del DOM supportano i cosiddetti “eventi” 
che vedremo nelle slides successivamente.

Node – anche questa è una classe “astratta” che serve da base per i nodi del DOM. 
Fornisce le funzionalità principali della struttura gerarchica:
parentNode, nextSibling, childNodes e così via (si tratta di getter). 
Dalla classe Node non vengono mai creati oggetti, tuttavia da questa ereditano
classi corrispondenti a nodi concreti, nella fattispecie: 
Text per i nodi di testo, Element per i nodi elemento e quelli meno ricorrenti 
come Comment per i nodi commento.

Element – è la classe base per gli elementi del DOM. Fornisce le funzionalità 
di navigazione tra elementi come nextElementSibling, children ed i
metodi di ricerca come getElementsByTagName, querySelector. 
Un browser non supporta solo HTML, ma anche XML e SVG. La classe Element
serve da base per le classi più specifiche: SVGElement, XMLElement e HTMLElement.

HTMLElement – è, infine, la classe base per tutti gli elementi HTML. 
Essa è ereditata da elementi HTML concreti:
● HTMLInputElement – la classe per gli elementi <input>,
● HTMLBodyElement – la classe per gli elementi <body>,
● HTMLAnchorElement – la classe per gli elementi <a>,
…e così via, ogni tag ha una propria classe che espone proprietà e metodi specifici
(es <body> non avrà l'attributo ref che invece ha <a>). */

// per vedere tutta la documentazione delle classi del DOM: https://dom.spec.whatwg.org/

// INNER HTML
/*La proprietà innerHTML consente di ottenere una stringa contenente l’HTML
dentro l’elemento. 
Con innerHTML non facciamo altro che inserire del testo o del codice HTML all'interno del tag.
Es inserisco dentro una tabella <tbody> nuove righe aggiuntive <tr> e <td>.
Andiamo quindi a manipolare l'HTML della nostra pagina web!
Possiamo anche modificarla e pertanto è uno dei più potenti strumenti per
cambiare l’HTML di un elemento della pagina. */

<html>
    <body>
        <p>A paragrafo</p>
        <div>A div</div>
        <div>Questo è un altro DIV</div>
        <script>
            {/* qui metterei il ciclo che ho messo sotto... */}
        </script>
    </body>
</html>
alert(document.body.innerHTML); // legge il contenuto corrente
document.body.innerHTML = 'The new BODY';
// rimpiazza tutto il body con una stringa che dice the new body!
// cancellando tutti i tag che vi erano contenuti aswell lol


// OUTER HTML
/*La proprietà outerHTML si differenzia dall'inner perchè questa contiene tutto il 
contenuto HTML di un elemento, compresi i tag che vi sono contenuti. 
In pratica equivale a innerHTML più l’elemento (il tag) stesso. */


<html>
    <body>
        <div>Hello world!</div>
        <script>
            {/* qui metterei il ciclo che ho messo sotto... */}
        </script>
    </body>
</html>
let div = document.querySelector('div');
// sostituisce div.outerHTML con <p>...</p>

div.outerHTML = '<p>A new element</p>';
// wow! 'div' non è cambiato!

alert(div.outerHTML);
// <div><p> A new element </p></div>
// cambia il contenuto ma non cambia il tag in sostanza!

/*È molto semplice commettere un errore a questo punto: modificare div.outerHTML
e procedere con div come se avesse recepito il nuovo contenuto. Ma questo non
avviene. Tale convinzione è corretta per innerHTML, ma non per outerHTML.
Possiamo scrivere tramite elem.outerHTML, ma dovremmo tenere bene presente
che non cambia l’elemento (‘elem’) su cui stiamo scrivendo, sostituisce invece il
nuovo HTML al suo posto. Per avere un riferimento valido al nuovo elemento
dobbiamo interrogare nuovamente il DOM. */

// ----------------------------------------------------------------------------------------- //

// ALTRE PROPRIETA'
/*
● hidden
○ L’attributo “hidden” e la corrispettiva proprietà del DOM specificano se l’elemento debba
essere visibile o meno.
● value
○ il valore di <input>, <select> e <textarea> (HTMLInputElement, HTMLSelectElement…).
● href
○ il valore dell’attributo “href” di <a href="..."> (HTMLAnchorElement).
● id
○ il valore dell’attributo “id” per tutti gli elementi (HTMLElement). */


// GLI ATTRIBUTI DI UN TAG HTML
/*Come sappiamo i tag thml hanno degli attriubti (es class).
Tutti gli attributi sono accessibili utilizzando i seguenti metodi:
● elem.hasAttribute(name) – controlla l’esistenza di un attributo.
● elem.getAttribute(name) – ritorna il valore di un attributo.
● elem.setAttribute(name, value) – imposta un valore di un attributo.
● elem.removeAttribute(name) – rimuove l’attributo.*/

<html>
    <body something="non-standard">
        <script>
            {/* qui metterei il ciclo che ho messo sotto... */}
        </script>
    </body>
</html>
alert(document.body.getAttribute('something')); 
// mi ritorna il contenuto di quell'attributo => 'non-standard'


// MODIFICARE IL DOM
/*Per creare nodi DOM, ci sono due metodi:
● document.createElement(tag)
○ Crea un nuovo nodo elemento con il tag fornito in input
● document.createTextNode(text)
○ Crea un nuovo nodo di testo con il testo fornito 
Quando vado ad eseguire questi due metodi, JS non mi cambia nulla nella pagina, 
ma mi crea degli oggetti che vanno a rappresentare quel tag e nodo che poi dovrò
andare a inserire io nella posizione che voglio del mio DOM.*/

<html>
    <body something="non-standard">
        <script>
            {/* qui metterei il ciclo che ho messo sotto... */}
        </script>
    </body>
</html>
// 1) creo l'elemento div
let div = document.createElement('div');  
// 2) imposto la sua classe ad alert
div.className = "alert";
// 3) lo riempio con un contenuto
div.innerHTML = "<strong>Ciao!</strong> Forza Roma!";
// ora mi resta solo da aggiungere questo tag nella mia pagina
// per farlo apparire!


// METODI DI INSERIMENTO
/* Per inserire il codice HTML che genero con JS ho diversi metodi.
Ecco i metodi d’inserimento; specificano i differenti posti dove inserire un
elemento:
● node.append(...nodi o stringhe) – appende nodi o stringhe alla fine di node,
● node.prepend(...nodi o stringhe) – inserisce nodi o stringhe all’inizio di node,
● node.before(...nodi o stringhe) –- inserisce nodi o stringhe prima di node,
● node.after(...nodi o stringhe) –- inserisce nodi o stringhe dopo node,
● node.replaceWith(...nodi o stringhe) –- rimpiazza node con i nodi o le stringhe passate. 
● Per rimuovere un nodo, abbiamo a disposizione il metodo node.remove().*/


// DOCUMENT WRITE
/*Un altra funzione che ci permette di modificare la pagina HTML. 
La chiamata a document.write(html) inserisce html nella pagina “all’istante”. La
stringa html può essere generata dinamicamente, quindi in un certo senso è
flessibile.
Negli script moderni possiamo trovarlo raramente a causa della seguente
importante limitazione:
La chiamata a document.write funziona solo mentre la pagina sta caricando.*/