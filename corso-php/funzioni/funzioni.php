<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUNZIONI</title>
</head>

<body>
    <?php
    /*FUNZIONI
    Sono delle sorta di scatolette che ricevono qualcosa e restituiscono qualcos'altro di trasformato
    input (1,2) ==> [FUNZIONE SOMMA] ==> output (3)
    Abbiamo gia visto alcune funzioni, tra cui DATE, COUNT, RAND 
    che vogliono sempre qualcosa in ingresso come input per poter fornire il loro output
    Queste sono funzioni standard previste dal codice, ma ne possiamo anche creare di nostre personalizzate
    Definire queste funzioni cusom mi permette di riutilizzare il loro codice senza scrivere tutto ogni volta!
    Un altro vantaggio è che rende molto piu leggibile il codice, 
    soprattutto grazie ai commenti che mi dicono cosa fa ciascuna funzione*/

    // tutte le funzioni hanno questa sintassi:
    $r = rand(1, 100);
    // prima un nome poi tra parentesi gli input, che si chiamano parametri, $r è il risultato
    // i parametri di ingresso talvolta potrebbero non essere necessari!

    // creiamo una funzione custom
    $r = mia_somma(3, 2);
    // ogni volta che l'interprete php trova una sintassi che definisce una funzione si mette a cercare
    // in un punto qualunque del mio codice corrente se ho gia definito questa funzione

    // come si definisce una funzione?
    // per prima cosa scrivo la parola chiave FUNCTION, serve per dire 'sto definendo una funzione'
    function mia_somma($a, $b) { // così definisco la mia funzione, indicandone i parametri di input
        // dentro le graffe scrivo il codice che deve eseguire la funzione
        $risultato = $a + $b; //questa è l'operazione da svolgere
        // le variabili che appaiono dentro la FUNCTION sono celle di memoria
        // temporanee, che hanno visibilità solo dentro alla funzione e non interferiscono
        // con ciò che c'è fuori dalla mia funzione!
        // finita la funzione le mie variabili $risultato, $a, $b si resettano,
        // hanno ciclo di vita e visibilità solo interne alla funzione!
        return $risultato
    // utilizzando RETURN posso salvarmi il valore della mia operazione 
    // e RESTITUIRLA alla funzione che la ha richiamata => $r = mia_somma(3, 2);
    // inoltre, tutto ciò che scrivo dopo return non conta 
    // perche è il terminatore della mia funzione
    } 



    ?>
</body>

</html>