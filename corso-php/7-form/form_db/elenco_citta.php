<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco citta</title>
</head>

<body>
    <?php
    /* questo è il file a cui si collega il form
    questo file deve tirare fuori un elenco di città */

    // 1) selezionare le città di un'area geografica
    // scelta nella pag precedente
    
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1. connessione
        $connessione = new PDO($dsn, "root", "");

        //2. praparo lo statement (istruzione sql = query)
        $sql = "SELECT * FROM citta";
        $statement = $connessione->prepare($sql);

        //4. eseguo lo statement preparato
        $statement->execute();

        //5. recupero dei dati estratti con fetch
        $righe = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // variabile che viene automaticamente valorizzata con i dettagli dell'errore catturato
        // è un oggetto della classe PDOException con i suoi metodi e proprietà!
        echo "Errore di connessione ";
        echo $e->getMessage();
    }


    // 2) istanziare un nuovo oggetto di classe Citta (classe che dovremo definire)
    // per ogni città selezionata in $righe
    // vado a definire le mie classi in un file diverso!
    include("citta.php");

    // per ogni riga creo un nuovo oggetto con il nome della citta
    foreach ($righe as $riga){
        $c = new Citta($riga['citta']);
        // ora stampo l'attributo 'nome' dell'oggetto $c
        echo $c->getNome() . "<br>";
    }


?>
</body>

</html>