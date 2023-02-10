<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi funzioni</title>
</head>

<body>
    <?php
    /**1) Scrivere una funzione che riceve come parametro di ingresso un array 
     * e restituisce il valore del primo elemento in ordine crescente 
     * soluzione in min_in_array.php
     */

     $a = ['nome' => "primo", 'a' => "aaa", 'b' => "terzo"];
    //  min_in_array($a);
    $a = [10, 1, 2, 3, 4];
    echo "il primo valore del mio array è: " . min_in_array($a);




    // FUNZIONI

    /**
     * Restituisce il valore del primo elemento in ordine crescente
     */
    function min_in_array($a)
    { // inizializzo il mio minimo, ma non so se il mio array ha valori numerici o stringhe
        // $min = " ";  // ma questo va bene solo se ho valori numerici quindi non va bene!

        foreach ($a as $v) { // scorro il mio array trovando i vari valori
            if (isset($min)) {
                // funzione isset mi dice se una variabile (in questo caso $min) è ettata oppure no
                // non è settata se è la prima iterazione
                $min = $v; // quindi metto in min il primo valore per inizializzarla
            }
            if ($min > $v) {
                $min = $v; //il nuovo min diventa l'ultimo valore trovato
            }
        }
    }



    ?>
</body>

</html>