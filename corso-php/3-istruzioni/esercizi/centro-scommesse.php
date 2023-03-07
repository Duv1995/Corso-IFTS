<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Un mf fa una scommessa e sceglie un numero e scommette che è uguale alla media*/
    $numero = 2;
    $estrazioni = 5;
    $somma = 0;
    /*la cosa importante è che ogni volta che in un ciclo for voglio prendere in considerazione 
    un contenuto da elaborare e tenerne traccia per le elaborazioni successivi, 
    devo prima mettere questa variabile neutra (zero) che poi ad ogni iterazione 
    cambia il suo valore (somma = r + somma) che all'iterazione successiva avrà 
    il valore aggiornato a cui sommo un altro numero e così via*/
    for ($i = 0; $i < $estrazioni; $i++) {
        $r = rand(1, 10);
        echo $r . " ";
        $somma = $r + $somma;
    }
    echo "<br>somma = $somma";
    echo "<br>media = " . $somma / $estrazioni;

    $media_intera = ($somma - ($somma % $estrazioni)) / $estrazioni;
    if ($media_intera == $numero) {
        echo "HAI VINTO!!!";
    } else {
        echo "ritenta, sarai piu fortunato :3";
    }

    ?>
</body>

</html>