// METODI DEGLI OGGETTI
// sono le funzioni delle classi che possono essere utilizzate dai loro oggetti

let player = { nome: "francesco", cognome: "totti" };
player.esulta = function () {
    console.log("Goooooal!");
};
player.esulta(); // viene stampato gooaaaal!


// la sintassi piu breve è questa
player = {
    esulta() { // equivale a "esulta: function(){...}"
        console.log("Goooooal!");
    }
}

// THIS 
// serve per accedere alle proprieta del mio oggetto
// uguale al this di PHP ma a seguire uso il . non la freccina
let player = {
    nome: "francesco",
    esulta() {
        console.log(this.nome + "Goaaaal!") // stamperò "francesco: Goaaaal!"
        // perche con il this vado a richiamare il nome di QUESTO oggetto
    }
}

// quando uso il this al di fuori di un oggetto non mi da alcun errore
// ma se non ho definito alcuna variabile mi stamperà un undefined
function esulta() {
    console.log(this.nome); // this nome de che? stamperà undefined
}

// THIS si usa anche in modo implicito perche va ad accedere alle prprietà
// dell'oggetto corrispondente

let player = { nome: "francesco" };
let professore = { nome: "zuzeppe" };
let fn = function () { console.log(this.nome); };
// assegno la mia funzione a una variabile chiamata "fn"
// dove gli dico che deve prendere il valore nome di QUESTO oggetto

player.f = fn; 
// aggiungo la mia funzione fn all'oggetto player
// esattamente come faccio quando aggiungo proprietà/valori
professore.f = fn;
// aggiungo la mia funzione fn all'oggetto professore
// esattamente come faccio quando aggiungo proprietà/valori

// richiamo le funzioni da dentro i miei oggetti e vedo che il THIS va a prendere
// il nome dell'oggetto dentro il quale è stata inserita la funzione
player.f(); // francesco
professore.f(); // zuzeppe
professore["f"](); // zuzeppe
// per l'esercuzione della funzione metto le tonde perche servono per inserire gli inpu
// ma in questo caso la mia funzione non prevede input quindi lascio vuoto


