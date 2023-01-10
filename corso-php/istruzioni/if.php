<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatore logico IF</title>
</head>

<body>
    <?php
    /*OPERATORE LOGICO IF
    Abbiamo gia visto l'operatore ternario (il SE di excel) che verifica se una condizione è vera,
    l'operatore logico IF è molto simile ma permette di programmare da vero chad
    
    IF (condizione vera?)
    allora posso eseguire un operazione 
    THEN "testo vero"
    altrimenti eseguo ciò che viene fatto quando la condizione non è vera
    ELSE "testo falso"
    
    Questa è la funzione IF, che mi permette di eseguire un istruzione 
    se una condizione è vera e un altra istruzione se invece è fake
    si utilizza la parentesi {alt+123 oppure shift+[alt+è]} per mettere in blocco le varie istruzioni, 
    che possono essere anche molto complicate magari mettendo altri IF dentro le graffe
    IF (condizione) {"testo vero"} ELSE {"testo falso"}*/

    if (true) {
        echo "condizione vera";
    } else {
        echo "condizione falsa";
    }
    echo "<br>";

    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//

    //Esercizio: dati due numeri x e y voglio assegnare alla variabile $m il valore maggiore tra x e y
    $x = 1;
    $y = 2;

    if ($x > $y) {
        $m = $x; //se è vero m assumerà il valore di x (è falso quindi verrà ignorata questa linea)
    } else {
        $m = $y; //se è falso m assumerà il valore di y
    }
    echo "il max tra $x e $y è $m";
    echo "<br>";

    //nell'altro caso
    $x = 10;
    $y = 5;

    if ($x > $y) {
        $m = $x; //questa volta è vero quindi m assume valore di x
    } else {
        $m = $y; //questa linea non viene considerata perche è gia vera quella sopra
    }
    echo "il max tra $x e $y è $m";
    echo "<br>";


    //cosa succede se sono uguali?
    $x = 3;
    $y = 3;

    if ($x > $y) {
        echo "condizione vera"; //la prima condizione non è verificata
    } else {
        echo "condizione falsa"; //quindi di default ti da come vera la seconda condizione, anche se non è vera, 
        //questo perche non puo mai dare entrambe le condizioni vere
    }
    echo "<br>";

    //vediamo se vogliamo fare una condizione piu complicata, mettendo un IF dentro un IF
    $x = 1;
    $y = 1;

    if ($x >= $y) { //verifico se è vera la condizione x maggiore o uguale a y
        if ($x == $y) { //apro una IF nuova dentro la mia IF, per verificare il caso in cui i due valori sono uguali uguali
            echo "x uguale a y <br>"; //prendo atto del fatto che x è uguale a y, quindi stampo questo
            //ma non c'è bisogno che metto un else anche qui, sarebbe ridondante
        }
        echo "condizione vera"; //la condizione iniziale è comunque vera quindi stampo anche questo
    } else {
        echo "condizione falsa"; //se fosse stata falsa la condizione iniziale averei stampato questo
    }






    ?>
</body>

</html>