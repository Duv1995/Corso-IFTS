<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ES CONNESSIONE DATABASE</title>
</head>

<body>
    <?php
    // PHPMYADMIN
    // Fa schifo ma tocca imparare a utilizzarlo lol
    // accedi da localhost, fai importa in alto a destra e scegli il file .sql

    // CONNESSIONE AL DATABASE

    // nella TRY racchiudi il codice che potrebbe generare situazioni impreviste lol
    // queste situazioni anomale sono molto utilizzate nella OOP
    // è importante riuscire a catturare queste situazioni per segnalare che qualcosa
    // ha fatto qualcosa di imprevisto, 'lanciando' delle eccezioni!

    // nel caso si verifichi appunto un errore, l'esecuzione si blocca e si passa al CATCH
    // che cattura quello che è successo in un nuovo oggetto $e
    // e restituirà un messaggio che mi descrive l'eccezione che mi sono ritrovato, 
    // e fa morire DIE l'esecuzione del programma lol
    // es un eccezione puo verificarsi se sbaglio alcuni dei dati per accedere al DB

    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    // il dsn lo faccio in modo statico sta volta

    try {
        // qui scrivo il codice che potrebbe lanciare un eccezione


        $con = new PDO($dsn, "root", "");
        // STEP 1 - NUOVA CONNESSIONE
        // una volta fatta la connessione posso poi eseguire 
        // tutti gli statement che voglio con quel DB
        // $con è una nuova connessione che è un oggetto di classe PDO
        // quando crei nuovo PDO devi definire almeno il DSN
        // subito dopo inserisco i dati di accesso al DB di default (user:root, pass:vuoto)
        echo "Connessione effettuata!<br>";

        // STEP 2 - PREPARO LO STATEMENT
        // statement sarebbe la query da mandare al DBMS
        $st = $con->prepare("SELECT *
        FROM citta INNER JOIN regioni ON citta.regione = id_regione
        WHERE area_geografica = 'Sud'");
        // qui dentro scrivo la query, il prepare produrrà un nuovo oggetto
        // di classe PDOStatement, che salverò nell'oggetto $st
        echo "Oggetto statement preparato<br>";

        // STEP 3 - BIND (da vedere dopo)

        // STEP 4 - ESEGUO LO STATEMENT
        // devo eseguire lo statement che ho preparato in $st
        $st->execute();
        // per eseguirlo utilizzo il metodo tipico della classe PDOStatament 
        echo "Statement eseguito<br>";

        // STEP 5 - FETCH DEI DATI ESTRATTI
        // ora voglio recuperare tutto quello che ho tirato fuori con la mia query
        // ovviamente questo step lo faccio solo se nella query ho SELECT
        $righe = $st->fetchAll(PDO::FETCH_ASSOC);
        // restituisce l'elenco di TUTTI dati estratti che memorizzerò in un nuovo array
        // dentro le parentesi inserisco il modo in cui viene restituita la risposta
        // di questo metodo, in questo caso me li restituisce in un array associativo
        // se tutto è andato bene $righe conterrà l'array bidimensionale dei record estratti!


    } catch (PDOexception $e) {
        // PDOException è il nome della classe dell'oggetto che scrivo subito dopo ($e)
        echo "Errore di connessione ";
        // messaggio di errore per l'utente che mi fa capire che ho captato un eccezione
        echo $e->getMessage();
        // uso il metodo della classe PDOException per sapere che tipo di errore ho ottenuto
    }

    // se tutto è andato bene $righe conterrà l'array bidimensionale dei record estratti!
    echo "<pre>";
    var_dump($righe);
    echo "</pre>";


    // PER CASA
    // query di insert sulla tabella regioni, 
    // poi la delete della stessa regione appena inserita
    // se volete cercate il metodo di PDOStatement 
    // che restituisce l'ID del record appena inserito!








    ?>

</body>

</html>