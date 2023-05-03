<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco</title>
</head>

<body>
    <?php
    $cerca = ($_REQUEST) ? "%{$_REQUEST['cerca']}%" : "%";
    // faccio un check per vedere di non aver ricevuto stringa vuota


    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        $con = new PDO($dsn, "root", "");
        $sql_regioni = "SELECT * FROM regioni WHERE 
        regione LIKE :cerca 
        OR
        area_geografica LIKE :cerca 
        ";
        $sql = "SELECT * FROM citta WHERE 
                citta LIKE :cerca 
                OR
                provincia_nome LIKE :cerca 
                ";
        // cerca = %{$_REQUEST['cerca']}%
        // array racchiuso tra graffe e con apici
        $st = $con->prepare($sql);
        //$st è un oggetto della classe PDOStatement
        $st->bindParam('cerca', $cerca);
        // il bind permette di mettere una sola variabile!

        $st->execute();
        $righe = $st->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
    }

    // print_r($righe);
    foreach ($righe as $riga) {
        echo "<a href= 'citta.php?id={$riga['id_citta']}' >" . $riga['citta'] . "<br>";
        // le graffe permettono di gestire gli array 
        // in modo isolato nonostante le virgolette!
    }


    ?>

</body>

</html>