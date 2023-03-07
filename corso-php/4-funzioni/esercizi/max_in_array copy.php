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
// --------------------------------------------------------------------------------------------------------- //
    //definire la funzione sommina che somma 2 numeri
    function sommina($x, $y)
    {
        return $x + $y;
    }

    echo "sommina = " . sommina(1.2, 1.3);
    echo "<hr>";

// --------------------------------------------------------------------------------------------------------- //

    //definire la funzione sommina_alt che somma 3 numeri, usando la sommina
    function sommina_alt($a, $b, $c)
    {
        // return $a + $b + $c; troppo facile così, devo usare la sommina
        return sommina(sommina($a, $b), $c);
        // utilizzo sommina dandogli come input un altro somma 2 di due numeri e un terzo numero!
    }

    echo "<br>sommina_alt = " . sommina_alt(1, 2, 3);
    echo "<hr>";

// --------------------------------------------------------------------------------------------------------- //

    //stessa cosa degli esercizi sopra ma con la media

    function media_inventata($x, $y)
    {
        return ($x + $y) / 2;
    }

    echo "<br>media_inventata = " . media_inventata(10, 5);
    echo "<hr>";


    function mediaInventata3($a, $b, $c)
    {
        return media_inventata(media_inventata($a, $b), $c);
    }

    $m = mediaInventata3(3, 3, 3);

    echo "<br>media_inventata = "
        . number_format($m, 2, ",", ".");
    // uso una funzione standard per arrotondare il risultato
    echo "<hr>";

    // --------------------------------------------------------------------------------------------------------- //
    








    ?>
</body>

</html>