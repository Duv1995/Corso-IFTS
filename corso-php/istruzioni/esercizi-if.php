<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi</title>
</head>

<body>
    <?php
    /*OPERATORE LOGICO IF
    Abbiamo gia visto l'operatore ternario (il SE di excel) che verifica se una condizione è vera,
    l'operatore logico IF è molto simile ma permette di programmare da vero chad
    
    IF (condizione vera?)
    allora posso eseguire un {operazione}
    THEN {"testo vero"}
    altrimenti eseguo ciò che viene fatto quando la condizione non è vera
    ELSE {"testo falso"}
    
    Questa è la funzione IF, che mi permette di eseguire un istruzione 
    se una condizione è vera e un altra istruzione se invece è fake
    si utilizza la parentesi {alt+123 oppure shift+[alt+è]} per mettere in blocco le varie istruzioni, 
    che possono essere anche molto complicate magari mettendo altri IF dentro le graffe
    IF (condizione) {"testo vero"} ELSE {"testo falso"}*/


    //ESERCIZI

    /*ESERCIZIO 1: Dato un numero, si stampi il suo valore assoluto*/

    $x = 10;
    /* $y = voglio stampare il suo valore assoluto, 
    quindi se è maggiore di 0 è il valore stesso, se è min di 0 è lo stesso numero ma senza il meno*/

    if ($x > 0) {
        $y = $x;
    } else {
        $y = $x * (-1); //così se fosse -10 diventerebbe +10 perche -*- fa +
    }
    echo "$y";
    echo "<hr>";

    //-----------------------------------------------------------------------------------------------------------------------------------------//
    $a = 9 + 5 + 1;
    $b = 8 + 5 + 1;
    $c = 11 + 4 + 1;
    echo "$a ";
    echo "$b ";
    echo "$c ";
    echo "<br>";


    /*ESERCIZIO 2: Se decidessero di dividere in parti uguali, arrotondando all’euro,
    quanto lascerebbero di mancia? per scoprirlo devo utilizzare il MODULO % */
    if (($a+$b+$c %3)==0) { //se il modulo da resto 0???? allora???
        echo "condizione vera";
    } else {
        echo "condizione falsa";
    }
    echo "<br>";

    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------------------------//

    /*Un supermercato offre una politica di sconto ai propri clienti: 
    con l’acquisto di 3 prodotti applica il 10% di sconto sull’oggetto meno costoso. 
    Determinare il totale (imponibile + iva, supponendo l’iva al 22%)*/

    //assegno prima le 3 variabili, di cui cambierò il valore per vedere se tutto funziona

    $p1 = 10;
    $p2 = 9;
    $p3 = 8;
    echo '$p1 = ' . "$p1 <br>";
    echo '$p2 = ' . "$p2 <br>";
    echo '$p3 = ' . "$p3 <br>";

    echo "<br>";

    //prima trovo il minore dei tre costi prodotto con l'operatore IF
    if ($p1 < $p2) {
        if ($p1 < $p3) {
            echo "$p1 minore"; //stampo $p1 se esce che è minore di p2 e p3
            $p1 = $p1 - ($p1 * 10 / 100);
            /*e assegno alla variabile che mi individua sempre il prezzo minore, così lo trovo subito*/
        } else
            echo "$p3 minore"; //stampo $p3 se è minore di p2 (e p1 che è gia stato analizzato)
        $p3 = $p3 - ($p3 * 10 / 100);
    } else {
        if ($p2 <  $p3) {
            echo "$p2 minore"; //se le altre condizioni non sono vere stampo $p2 se è minore di p3
            $p2 = $p2 - ($p2 * 10 / 100);
        } else {
            echo "$p3 minore"; //se le altre condizioni non sono vere stampo $p3 se è minore di p2
            $p3 = $p3 - ($p3 * 10 / 100);
        }
    } //così ho trovato il minore tra i tre prodotti con lo sconto gia applicato
    echo "<br>";

    //per verificare se è tutto ok faccio un echo dei nuovi valori delle 3 variabili scontate se sono minori

    echo '$p1 = ' . "$p1 <br>";
    echo '$p2 = ' . "$p2 <br>";
    echo '$p3 = ' . "$p3 <br>";

    //adesso devo trovare il totale
    echo "<br>";
    $totale = ($p1 + $p2 + $p3);
    echo "Il totale vale: " . $totale;
    echo "<br>";

    //ora scorporo l'IVA
    $iva = 22;
    $valore_iva = $totale * ($iva / 100);
    $imponibile = $totale - $valore_iva;
    echo 'Imponibile (totale - IVA): ' . "$imponibile <br>";
    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------------------------//


















    ?>

</body>

</html>