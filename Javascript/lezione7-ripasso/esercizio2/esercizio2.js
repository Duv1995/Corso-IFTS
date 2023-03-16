// creo la funzione che fa i calcoli

function calcolaOperazione(operatore) {
    // vado a prendere i miei operatori dal document
    let operatore1 = document.getElementById("operatore1");
    let operatore2 = document.getElementById("operatore2");
    // ho preso i due tag html <input> ho preso il tag non il valore
    // per prendere il valore dei due input dobbiamo utilizzare la proprietà value
    // sennò prende solo il tag e non puoi farci le operazioni

    // let op1 = operatore1.value;
    // però il valore di input che inserisce l'utente è sempre una stringa
    // allora devo assicurarmi che sia un numero e se non lo è lo converto
    // utilizzo la funzione parseInt
    let op1 = parseInt(operatore1.value);
    let op2 = parseInt(operatore2.value);

    // uso uno switch per fare le varie operazioni
    // tra i due operatori che ho inizializzato
    switch (operatore) {
        case '+':
            risultatoOperazione = op1 + op2;
            break;

        case '-':
            risultatoOperazione = op1 - op2;
            break;


        case '/':
            risultatoOperazione = op1 / op2;
            break;


        case '*':
            risultatoOperazione = op1 * op2;
            break;

        default:
            break;
    }

    // questo switch mi ritornerà il risultato dell'operazione
    // che dovrò iniettare nell'elemento html in cui voglio andare a stamparlo

    document.getElementById("risultato").innerHTML = risultatoOperazione;




}