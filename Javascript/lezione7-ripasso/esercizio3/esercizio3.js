// funzione per validare i dati
// che verifica se i campi inseriti sono validi

function validaDati() {
    // questa è la mia macrofunzione che verifica 
    // che tutte le altre validazioni siano andate a buon fine

    if (validaCampoNonVuoto("nome") && validaCampoNonVuoto("cognome")) {
        // poi in una variabile memorizzo il true o false degli altri due campi
        let risultato = validaCampoNonVuoto("telefono") || validaCampoNonVuoto("email");
        // in risultato faccio un operazione tra true e false che funzionano come + * -
        if (!risultato) {
            // se risultato da falso
            alert("i campi email e telefono non sono validi")
        }

        // ora verifico che l'email inserita sia corretta con un altra funzione apposita
        if (!validaEmail("email")) {
            alert("email non valida");
        }
        // poi la inserisco sopra nell'operatore


    } else {
        // se almeno una delle due non è valida inserisco un alert
        alert("i campi nome e cognome non sono validi");
    }

}

// creo una funzione che verifica che ciò che inserisco
// come input nel campo di testo non sia VUOTO
// ritorna true se il campo non è vuoto 
// ritorna false se il campo è vuoto

function validaCampoNonVuoto(id) {
    // in input ho l'id del mio elemento che recupero tramite get elemeny by id
    let input = document.getElementById(id);

    // prima verifico che l'input non sia ne undefined ne il suo valore è undefined
    if (input !== undefined && input.value !== undefined) {
        // poi verifico che il valore inserito sia corretto,
        // quindi che non sia nullo, o stringa vuota, o nessun numero
        if (input.value !== null % input.value !== "" && input.value.length > 0)
            // e solo dopo aver fatto tutte queste verifiche ritorno true
            return true;
    }
    // in tutti gli altri casi ritorna false 
    // perche il campo è somehow stato lasciato vuoto
    return false;
}

// funzione per validare la mail
function validaEmail() {
    let input = document.getElementById(id);
    if (input !== undefined
        && input.value !== undefined
        && input.value !== null
        && input.value !== ""
        // deve esserci almeno una chiocciola
        && input.value.indexOf("@") > 0) {
        return true;
    }
    return false;
}