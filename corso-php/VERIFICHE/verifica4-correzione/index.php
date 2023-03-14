<?php
include("funzioni.php");
include("Prenotazione.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica3</title>
</head>

<body>
    <?php
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1
        $connessione = new PDO($dsn, "root", "");
        //2
        $sql = "SELECT partenza, arrivo FROM prenotazioni ";
        $st = $connessione->prepare($sql);
        //3 bind non serve
        //4 execute
        $st->execute();
        //5
        $righe = $st->fetchAll();
    } catch (PDOException $e) {
        echo "Errore di connessione" . $e->getMessage();
    }

    echo "Totale prenotazioni: " . count($righe) . "<hr>";
    foreach ($righe as $riga) {
        //echo data_db_2_user($riga['arrivo']) . " " . data_db_2_user($riga['partenza']) . "<br>";
        $p = new Prenotazione($riga['arrivo'], $riga['partenza']);
    }

    //cerco il max
    $sql = "SELECT nome, cognome FROM prenotazioni 
    INNER JOIN clienti ON id_cliente = prenotazioni.cliente
    ORDER BY partenza
    LIMIT 0,1 ";
    $st = $connessione->prepare($sql);
    //3 bind non serve
    //4 execute
    $st->execute();
    //5
    $righe = $st->fetchAll();
    echo "Ultimo cliente :" . $righe[0]['nome'] . " " . $righe[0]['cognome'];


    ?>
</body>

</html>