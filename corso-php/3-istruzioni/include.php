<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISTRUZIONE INCLUDE</title>
</head>

<body>
    <?php

    // ISTRUZIONE INCLUDE
    // Permette di scrivere all'interno dell'istruzione ciò che si vuole includere
    include("funzione.php"); //dentro ci metto un file dove ci ho salvato varie funzioni

    // prende il contenuto del file scritto dentro le tonde e fa una copia di tutte
    // le righe di codice presenti in quel file e lo include nel mio file nuovo!
    // utile per includere tutte le funzioni piu comuni che potrei richiamare
    // nel mio codice! comodissima!!!

    // attenzione! se dentro il file incluso ci sono altri include a sua volta, 
    // può succedere che vengano inclusi due funzioni diverse ma con lo stesso nome
    // però è possibile dare un istruzione alternativa che mi elimina i doppioni
    include_once("funzione.php");


    // ISTRUZIONE REQUIRE 
    // Funzione identica all'include, ma è vincolante che il file sia presente!
    // a diff di include se il file non viene trovato o non hai i permessi
    // il mio codice viene bloccato e non parte proprio
    require("funzione.php");
    require_once("funzione.php");

    // per silenziare i messaggi di errore quando magari non trova il file
    // con il require normale devo mettere la chiocciola davanti a include
    @include("pippo.php"); // così l'errore viene silenziato























































    ?>

</body>

</html>