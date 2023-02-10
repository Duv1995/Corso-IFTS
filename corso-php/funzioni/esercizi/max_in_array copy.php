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

    //definire la funzione somma2 che somma 2 numeri
    function somma2($x, $y)
    {
        return $x + $y;
    }

    echo "somma2 = " . somma2(1.2, 1.3);

    //definire la funzione somma3 che somma 3 numeri, usando la somma2
    function somma3($a, $b, $c)
    {
        // return $a + $b + $c; troppo facile così, devo usare la somma2
        return somma2(somma2($a, $b), $c);
        // utilizzo somma2 dandogli come input un altro somma 2 di due numeri e un terzo numero!
    }

    echo "<br>somma3 = " . somma3(1, 2, 3);

    //stessa cosa degli esercizi sopra ma con la media

    function mediaInventata2($x, $y)
    {
        return $x + $y / 2;
    }

    function mediaInventata3($a, $b, $c)
    {
        return mediaInventata2(mediaInventata2($a, $b), $c);
    }

    $m = mediaInventata3(3, 3, 3);

    echo "<br>mediaInventata2 = "
        . number_format($m, 2, ",", ".")
    // uso una funzione standard per arrotondare il risultato









    ?>
</body>

</html>