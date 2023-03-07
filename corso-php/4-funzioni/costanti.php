<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSTANTI</title>
</head>

<body>
    <?php

    // COSTANTI

    // le costanti di solito si esprimono tutte in maiuscolo
    define("ENTE", "EnAip Centro Zavatta");
    // con questa funzione associo EnAip Centro Zavatta alla costante ENTE
    echo "ENTE"; // mi stamperà EnAip Centro Zavatta

    // le costanti hanno visibilità globale, aka sono visibili ovunque 
    // ANCHE DENTRO LE FUNZIONI!!!
    $a = 1;
    function esempio()
    {
        // echo $a; 
        // mi darà errore perche la funzione vede solo quello che viene aperto dentro di se
        echo "ENTE";
        // questo invece verrà stampato perche ha visibilità globale!
    }

    // ISTRUZIONE GLOBAL
    // Mi rende di visibilità globale una variabile!
    global $a;
    function esempio_2()
    {
        // echo $a; // ora non da piu errore! (lo da invece lol...)
    }



















































    ?>

</body>

</html>