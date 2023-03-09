// ARRAY
// metodi e proprietà utili da usare con gli array
// https;//developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array?retiredLocale=it

array.length; 
// restituisce il numero di elementi dell’array.

array.join(sep); 
// restituisce una stringa ottenuta dalla concatenazione di tutti gli elementi.

array.reverse(); 
// inverte l’ordine degli elementi usando l’indice.

array.sort(); 
// ordina gli elementi utilizzando l’ordine lessicografico.

array.concat(); 
// restituisce un array con gli elementi dell’array sorgente più i valori passati come parametri.

array.slice(); 
// restituisce un array con un sottoinsieme degli elementi, 
// dall’indice del primo argomento all’indice del secondo argomento escluso.

array.push(); /*e*/ array.pop(); 
// consentono di trattare l’array come uno stack(pila).

array.push(); 
// inserisce alla fine dell’array gli elementi passati come parametri e restituisce 
// la nuova lunghezza dell’array.

array.pop(); 
// elimina e restituisce l’ultimo elemento.

array.forEach(); 
// itera l’array ed esegue la funzione in input.

array.unshift(); /*e*/ array.shift(); 
// come push() e pop(), ma inseriscono/rimuovono elementi dall’inizio dell’array.
