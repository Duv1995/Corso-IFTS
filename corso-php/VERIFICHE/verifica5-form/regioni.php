<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regioni Trovate</title>
</head>

<body>
    <?php
    // print_r($_REQUEST);
    $nome = $_REQUEST['nomeRegione'];


    // faccio la connessione al database da qui
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1. connessione
        $connessione = new PDO($dsn, "root", "");

        //2. praparo lo statement (istruzione sql = query)
        $sql = "SELECT *
        FROM regioni
        WHERE (area_geografica LIKE '%$nome%') OR (regione LIKE '%$nome%')";
        $statement = $connessione->prepare($sql);

        //3. bind
        // $statement->bindParam("area_geografica", $nome);
        // $statement->bindParam("regione", $nome);
        // alla fine non sono comunque riuscito a bindare

        //4. eseguo lo statement preparato
        $statement->execute();

        //5. recupero dei dati estratti con fetch
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
    }

    // print_r($records);
    echo "<h1>Regioni trovate:</h1>";
    foreach ($records as $record) {
        $nome_regione = $record['regione'];
        echo "<ul>";
        echo "<li name = \"$nome_regione\"><a href= \"regione.php?name=$nome_regione\">". $nome_regione. "</a></li>";
        echo "</ul>";
    }



    ?>




</body>

</html>