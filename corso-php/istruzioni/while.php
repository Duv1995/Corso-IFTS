<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While</title>
</head>

<body>
    <?php
    /* WHILE 
    Esegue un istruzione tra le graffe finchè è vera la mia condizione,
    è molto simile al FOR e può essere usata per fare le stesse cose
    ma l'istruzione finale $i++ deve essere scritta alla fine del ciclo prima di chiudere l'ultima graffa!
    Finche è vera la condizione X continua ad iterare. 
    Devo assicurarmi che dentro al while ci sia prima o poi la possibilità di concludere il ciclo.*/
    $i = 1;
    while ($i < 10) {
        echo $i++; //qui faccio le mie malefatte
        $i++; //ultima istruzione
    }

    // FOR e WHILE

    //PER CASA somma dei soli n. pari
    // for ($i = 1; $i <= 10; $i++) {
    //     echo $i;
    // }


    $i = 1;
    while ($i >= 10) {
        echo "$i"; //stampo come prima
        $i++; //questa è l'istruzione necessaria per far diventare falsa l'istruzione
    }

    echo "<hr>";
    // ESERCIZIO
    // Scrivere i primi interi positivi a partire da $start che sommati 
    // raggiungano il $target (il primo che supera il target e poi l'ultimo che non lo supera)
    $start = 3;
    $target = 10;
    $somma = 0;

    // faccio prima col for
    for ($i = $start; $somma < $target; $i++) {
        $somma = $somma + $i;
        echo "$i <br>";
        // per sapere quando fermarmi ho due modi:

        // if ($somma >= $target) { //verifico ogni volta che la mia somma ha raggiunto il target
        //     break; //interrompe il ciclo
        // }

        // l'altra soluzione è cambiare la seconda condizione dentro le parentesi del for
        // ($i < 10) AND ($somma < $target) // in realtà volendo ($i < 10) si potrebbe togliere del tutto
    }
    echo "la somma dei primi interi positivi è $somma <br>";
    echo "<br>";

    // ora rifaccio lo stesso esercizio col while
    $i = 1;
    $target = 10;
    $somma = 0;

    echo "inizio la somma partendo da $i ";
    while ($somma < $target) { //sommo fino a che la somma non è minore del target
        $somma += $i; //si scrive anche così
        // voglio stampare solo il primo e l'ultimo
        $i++;
    }
    echo "fino ad arrivare a " . ($i - 1) . "<br>";
    //faccio -1 perchè altrimenti scrive 5 ma l'ultimo numero incrementato a fine ciclo non lo calcolo
    echo "la somma dei primi interi positivi è $somma <br>";
    echo "<hr>";

    // voglio sapere quali numeri devo sommare affinchè la somma non superi il target,
    // ovvero togliere l'ultimo valore perche mi farebbe sfociare oltre il target
    $start = 3;
    $target = 10;
    $somma = 0;

    for ($i = $start; $somma < $target; $i++) {
        $somma = $somma + $i;
        if ($somma <= $target) { //se la somma è ancora minore del target
            echo "$i <br>"; //scrivo gli $i finchè vanno ancora bene
        }
    }
    echo "la somma dei primi interi positivi è $somma <br>";
    echo "<br>";

    // con il ciclo while invece
    $i = $start -1;
    $target = 10;
    $somma = 0;

    echo "inizio la somma partendo da $i ";
    while ($somma < $target) {
        $somma += $i;
        if ($somma < $target){
            $i++; //lo tolgo da sopra e lo sposto qua dentro la IF
            // se la somma supera il target non incremento piu la $i
        }
    }
    echo "fino ad arrivare a " . ($i - 1) . "<br>";
    echo "la somma dei primi interi positivi è $somma <br>";
    echo "<hr>";


// il for viene usato per gli array, il while per valutare condizioni logiche!

    ?>

</body>

</html>