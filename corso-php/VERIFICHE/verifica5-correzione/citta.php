<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Città</title>
</head>

<body>
    <?php
    $id = ($_GET) ? $_GET['id'] : 261;
    echo $id;

    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        $con = new PDO($dsn, "root", "");
        $sql = "SELECT * FROM clienti WHERE 
                citta = :id
                ";
        $st = $con->prepare($sql); //$st è un oggetto della classe PDOStatement
        $st->bindParam('id', $id);
        $st->execute();
        $righe = $st->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
    }
    //print_r($righe);
    foreach ($righe as $riga) {
        echo $riga['nome'] . "<br>";
    }
    ?>

</body>

</html>