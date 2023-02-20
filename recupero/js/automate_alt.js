// chiamo il file javascript automate_alt.js
// UTILIZZO UNA VERS ALTERNATIVA PIU LEGGIBILE E FACILE DA MANUTENERE

// lego le funzioni ai pulsanti
//alla pressione del pulsante con ID "btnRosso" chiamo la funzione aggiungiRosso
document.getElementById("btnRosso").addEventListener("click", aggiungi_rosso);
document.getElementById("btnVerde").addEventListener("click", aggiungi_verde);
document.getElementById("btnBlu").addEventListener("click", aggiungi_blu);
document.getElementById("btnAlterna").addEventListener("click", alterna_classi);

function aggiungi_rosso() {
	aggiungi_classe("bgRosso");
}

function aggiungi_verde() {
	aggiungi_classe("bgVerde");
}

function aggiungi_blu() {
	aggiungi_classe("bgBlu");
}


// però posso ottimizzare ancora di piu il codice facendo una funzione 
// che prende il colore come variabile e fa sempre la stessa cosa!
function aggiungi_classe(classe) {
	//carico i DIV nella variabile mieiDIV
	var mieiDIV = document.getElementsByClassName("quadrato");

	//tolgo le classi già presenti
	rimuovi_classi();

	//ciclo sul contenuto di mieiDIV e aggingo la classe 
	// "bgRosso/Verde/Blu" ad ogni elemento
	for (i = 0; i < mieiDIV.length; i++) {
		mieiDIV[i].classList.add(classe);
	}
}

function rimuovi_classi() {
	//carico i DIV nella variabile mieiDIV
	var mieiDIV = document.getElementsByClassName("quadrato");

	//ciclo sul contenuto di mieiDIV e aggingo la classe "bgRosso" ad ogni elemento
	for (i = 0; i < mieiDIV.length; i++) {
		mieiDIV[i].classList.remove("bgRosso");
		mieiDIV[i].classList.remove("bgVerde");
		mieiDIV[i].classList.remove("bgBlu");
	}
}



// ESERCIZIO
// Aggiungere un pulsante alterna che mostra i colori a rotazione 
// (primo div rosso, secondo verde, terzo blu, e poi si ricomincia).
// Il pulsante deve avere ID btnAlterna.
function alterna_classi() {
	//carico i DIV nella variabile mieiDIV
	var mieiDIV = document.getElementsByClassName("quadrato");

	//tolgo le classi già presenti
	rimuovi_classi();

	//ciclo sul contenuto di mieiDIV e aggingo la classe 
	// "bgRosso/Verde/Blu" ad ogni elemento

	// faccio un ciclo dove vado di 3 in 3 lmaoooo
	for (i = 0; i < mieiDIV.length; i+=3){
		mieiDIV[i].classList.add("bgRosso");
	}
	for (i = 1; i < mieiDIV.length; i+=3){
		mieiDIV[i].classList.add("bgVerde");
	}
	for (i = 2; i < mieiDIV.length; i+=3){
		mieiDIV[i].classList.add("bgBlu");
	}
}