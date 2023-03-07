<?php
// includo il file della cartella INCLUDE per refernziare la funzione di connessione
include("include/connect_database.php");
include("include/funzioni.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESERCIZIO CONNESSIONE DATABASE</title>
</head>

<body>
    <?php
    // recupero la funzione del mio file 
    $citta = fz_sql("SELECT * FROM citta LIMIT 0,10");
    // per cambiare la query modifico il file 
    // connect_db dentro esercizio connessione
    // facendo si che accetti la query come input

    // creo una funzione che mi tira fuori dai record estratti
    // le loro chiavi e valori, e la metto nel file FUNZIONI

    elenca_records($citta, 'citta');
    // referenzio la mia funzione per elencare i record estratti
    // che vive in un altro file lol

    $prenotazioni = fz_sql("SELECT * FROM prenotazioni LIMIT 0,10");
    elenca_records($prenotazioni, 'ID_prenotazione');

    $nome_citta = "Rimini";
    // voglio trovare la citta rimini
    $sql = "SELECT * FROM citta WHERE citta = :nome_citta ";
    // metto nome citta aka rimini come segnaposto per il bind
    echo "SQL: $sql => ";
    // echo per stampare la query e vederla a schermo vicino al risultato
    $citta = fz_sql(
        $sql, // ho in input la mia SQL
        [ //e l'array bidimensionale dei binds
            ['segnaposto' => "nome_citta", 'var' => $nome_citta]
        ]
    );
    // inserisco la SQL e l'array bidimensionale dei binds
    // mi uscirà un solo record
    elenca_records($citta, 'citta');




























    ?>
</body>

</html>