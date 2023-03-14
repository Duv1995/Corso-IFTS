<?php
// CONNESSIONE AL DATABASE
// File con funzione per connettersi al database

function connessione()
{
    global $connessione;
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        //1. connessione
        $connessione = new PDO($dsn, "root", "");

    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
    }
}


function sql($sql)
// questa funzione è separata dalla connessione ed esegue le query SQL
{
    global $connessione;

    // mi chiedo prima se la variabile $connessione è stata settata prima di partire
    if (!isset($connessione)) {
        connessione();
    }


    //2. praparo lo statement (istruzione sql = query)
    $statement = $connessione->prepare($sql);

    //4. eseguo lo statement preparato
    $statement->execute();

    //5. fetch
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $records;
}
