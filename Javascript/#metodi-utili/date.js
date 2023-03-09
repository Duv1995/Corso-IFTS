// STRINGS
// metodi e proprietà utili da usare con le date
// https;//developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date?retiredLocale=it

new Date().getFullYear(); 
// restituisce il valore di “year” (anno).

new Date().getMonth(); 
// restituisce il valore di “month” (mese).

new Date().getDate(); 
// restituisce il valore di “day” (giorno).

getHours(), getMinutes(), getSeconds(), getMilliseconds(); 
// Fornisce il valore del corrispettivo parametro.

new Date().getDay(); 
// restituisce il giorno della settimana, da 0 (Domenica) a 6 (Sabato). Il primo giorno è sempre Domenica;

new Date().getTime(); 
// Ritorna il timestamp della data – il numero di millisecondi trascorsi dal 1 Gennaio 1970 in UTC+0.

Date.now(); 
// Ritorna il timestamp della data – il numero di millisecondi trascorsi dal 1 Gennaio 1970 in UTC+0.

Date.parse(str); 
// Esegue il parse di una Stringa e la converte in un oggetto Date.
