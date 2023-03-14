<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h2>FORM</h2>
    <!-- ESERCIZIO
    Vogliamo elencare le città di un area geografica, scelta dinamicamente da un form -->

    <?php
    // faccio la connessione al database da qui
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1. connessione
        $connessione = new PDO($dsn, "root", "");

        //2. praparo lo statement (istruzione sql = query)
        $sql = "SELECT DISTINCT area_geografica FROM regioni";
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
    ?>


    <div>Seleziona l'area geografica</div>
    <form action="elenco_citta.php" method="POST">

        <select name="area-geografica">
            <!-- voglio che il mio elenco di opzioni sia dinamico 
            in base alla query SQL -->
            <?php
            foreach ($righe as $riga) {
                // stampo la chiave area geografica delle singole righe trovate
                echo "<option>" . $riga['area_geografica'] . "</option>";
            }
            ?>

        </select>
        <button>INVIA</button>

        <!-- creo il file elenco_citta.php nella stessa cartella -->



    </form>





</body>

</html>