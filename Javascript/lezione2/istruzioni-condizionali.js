// ISTRUZIONI CONDIZIONALI

// IF
let numero1 = 5;

// voglio vedere se il numero è pari o dispari
if (numero1 % 2) { // se il modulo mi da resto zero
    console.log("se resto è 0 è un numero pari");
} else {
    console.log("se resto è 1 è un numero dispari");
}

// IF INNESTATI
let numero2 = 11;
const MAX_INTERI1 = 10;

if (numero2 >= MAX_INTERI1) {
    console.log("il numero inserito non è valido");
    // eseguo i successivi blocchi di istruzione solo se
    // la prima condizione non è valida
} else {
    let resto = numero2 % 2;
    //memorizzo il resto in una variabile
    if (resto == 0) {
        console.log("numero e' un numero pari");
    } else {
        console.log("numero e' un numero dispari");
    }
}

// ELSE IF
const MAX_INTERI2 = 10;
const MIN_INTERI2 = 1;
let numero3 = -1;

if (numero3 >= MAX_INTERI2){
    console.log("numero " + numero3 + " inserito non valido.");
}else if (numero3 < MIN_INTERI2){
    console.log("numero " + numero3 + " inserito < a 1");
}else{
    let resto = numero3 % 2;
    if (resto == 0){
        console.log("numero e' un numero pari");
    }else{
        console.log("numero e' un numero dispari");
    }    
}


// IF CON OR
const MAX_INTERI3 = 10;
const MIN_INTERI3 = 1;
let numero4 = 12;

if (numero4 >= MAX_INTERI3 || numero4 < MIN_INTERI3){ //OR
    console.log("numero: " + numero4 + " inserito non valido.");
} else {
    let resto = numero4 % 2;
    if (resto == 0){
        console.log("numero e' un numero pari");
    }else{
        console.log("numero e' un numero dispari");
    }    
}


// SWITCH 
let auto1 = "500L";

switch(auto1){
    // guarda che tipo di variabile è la mia auto
    // e confronta caso per caso per capire quale blocco di codice deve eseguire
    case "bmw":{
        console.log("la mia auto è una bmw");
        break;
    }
    case "audi":{
        console.log("la mia auto è una audi");
        break; 
    }
    case "500L":{
        console.log("la mia auto è una 500L");
        break; 
    }
    default:{ //default non è obbligatorio ma andrebbe messo 
        // perche se non trova nulla non ti stampa niente
        console.log("i dunno lol");
        break; 
    }
}


