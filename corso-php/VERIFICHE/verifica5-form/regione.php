<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati Regione</title>
</head>

<body>
    <?php
    // print_r($_REQUEST);
    $nome_regione = $_REQUEST['name'];

    // faccio la connessione al database da qui
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1. connessione
        $connessione = new PDO($dsn, "root", "");

        //2. praparo lo statement (istruzione sql = query)
        $sql = "SELECT *
        FROM regioni INNER JOIN citta ON citta.regione = regioni.id_regione
        WHERE regioni.regione = '$nome_regione'";
        $statement = $connessione->prepare($sql);

        //3. bind
        // non pervenuto non sono capace a bindare :/

        //4. eseguo lo statement preparato
        $statement->execute();

        //5. recupero dei dati estratti con fetch
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
    }

    // print_r($records);
    $area = $records[0]['area_geografica'];
    echo "Hai selezionato la regione $nome_regione che si trova nell'area geografica $area.<br>";
    echo "Le sue città sono:";
    foreach ($records as $record){
        $citta = $record['citta'];
        $sigla = $record['provincia_sigla'];
        $provincia = $record['provincia_nome'];
        echo "<ul>";
        echo "<li> $citta, $sigla, $provincia</li>";
        echo "</ul>";
    }


    ?>
</body>

</html>