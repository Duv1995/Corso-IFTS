<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuova regione inserita</title>
</head>

<body>
    <!-- copincollo il file per la connessione al DB -->
    <?php
    $regione = $_REQUEST['regione'];
    $area_geografica = $_REQUEST['area_geografica'];

    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1
        $connessione = new PDO($dsn, "root", "");
        //2
        $sql = "INSERT INTO 'regioni' (regione, area_geografica)
                VALUES (:regione, :area_geografica) ";
        // nei values devo mettere i segnaposto del bind
        $st = $connessione->prepare($sql);

        //3 bind serve perche i dati provengono da un modulo/form
        $st->bindParam("regione", $regione);
        $st->bindParam("area_geografica", $area_geografica);
        // devo bindare entrambi i due values

        //4 execute
        $st->execute();
        //5
        $righe = $st->fetchAll();
    } catch (PDOException $e) {
        echo "Errore di connessione" . $e->getMessage();
    }

    // metto questa funzione che mi rimanda alla pagina index.php dopo che ho fatto l'inserimento
    header('location: index.php');
    ?>

</body>

</html>