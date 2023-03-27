// EVENTI
/* Come abbiamo visto la volta scorsa gli eventi sono qualcosa che “accade”
su una pagina web. Come ad esempio il click su un pultsante o un div
oppure la digitazione di un tasto sulla tastiera. Abbiamo visto che
possiamo definire il Gestore di un evento in diversi modi. */

/* Eventi del mouse:
- click
- contextmenu = tasto destro su un elemento
- mouseover/mouseout = quando il cursore passa sopra un elemento
- mousedown/mouseup = quando viene premuto/rilasciato il pulsante del mouse su un elemento
- mousemove = quando si muove il mouse 
- scrolldown/scrollup = scrollando (anche da telefono) la pagina si modifica (anche swipe laterale da cell)

Eventi da tastiera:
- Keyup/keydown = quando premo e quando rilascio un tasto della tastiera

Eventi degli elementi del form:
- submit = quando invio il modulo compilato
- focus = quando l'utente seleziona un campo di input 
- onchange = quando qualcosa cambia su un campo di input (es da vuoto si inserisce un valore)

Eventi del document:
- DOMContentLoad = mentre la pagina viene caricata sul browser posso inizializzare nella pagina alcuni componenti (es plugin) 

Eventi dei CSS:
- transitioned = eventi legati alle animazioni, quando termina un anzimazione CSS viene scaturito un evento
*/


/* EVENT HANDLER
Sono funzioni che assegnamo a un determinato evento.
Quell'evento eseguirà a runtime quella funzione. Permettono anche allo sviluppatore di avere informazioni sull'evento stesso!
Es possiamo sapere qual'è stato il tag HTML che ha scaturito l'evento (gli eventi vengono propagati sui tag), 
o se vogliamo che quell'evento continui a catena, etc. */

/* ADD EVENT LISTENER
La funzione addEventListener() è un metodo esposto dagli elementi del DOM e
rappresenta la più comune tra le modalità usate per associare un evento al
rispettivo handler. */
button.addEventListener(event, handler, [options]);
/*
event - Nome dell’evento, ad esempio "click"
handler - La funzione che fa da gestore
options - Un oggetto opzionale aggiuntivo con delle proprietà:
● once: se true, il listener viene rimosso automaticamente una volta innescato.
● capture: la fase in cui deve essere gestito l’evento.
● passive: se true, il gestore non chiamerà preventDefault(). */


/*OGGETTO EVENT
Il DOM prevede che ad ogni gestore di eventi venga passato come parametro
l’oggetto event contenente informazioni su di esso. Alcune di queste informazioni
sono generiche, cioè presenti per qualsiasi tipo di evento, altre sono specifiche
per il particolare evento */

/*PROPRIETA E METODI DI EVENT
- target: L'elemento da cui l'evento è stato scatenato (il contenitore del div su cui clicchi).
- currentTarget: L’elemento da cui l’evento è stato scatenato durante lo stack di
propagazione degli eventi (il div specifico che clicchi)
- type: Il tipo di evento che è stato scatenato (click, mouseover, mouseout,
submit e etc…)
- preventDefault(): Questo metodo annulla l’esecuzione del gestore, se è
possibile
- stopPropagation(): Questo metodo impedisce che un evento venga
propagato agli altri (div) figli*/

/*EVENT STOP PROPAGATION
Quando si clicca su di un elemento che è contenuto da un altro elemento ed
entrambi hanno l’evento “click” gestito con un Gestore, vengono eseguiti entrambi
i gestori. Se non vogliamo che un Gestore venga eseguito dobbiamo utilizzare il
metodo dell’oggetto Event: stopPropagation();*/

/*REMOVE EVENT LISTENER
Toglie la gestione di un evento da un tag HTML. Talvolta può servire che un gestore
venga eliminato da un tag, e lo si fa tramite questa funzione*/