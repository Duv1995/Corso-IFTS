<?php
// CONNESSIONE AL DATABASE
// File con funzione per connettersi al database

function funz_connessione()
// questa funzione non restituisce nulla, ha solo lo scopo di 
// effettuare la connessione e valorizzare la mia variabile globale $connessione (connessione)
{
    global $connessione;
    // in entrambe le funzioni inserisco questa varaibile che è globale

    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        //1. connessione
        $connessione = new PDO($dsn, "root", "");
        echo "CONNESSIONE EFFETTUATA! <hr>";
    } catch (PDOException $errore) {
        // variabile che viene automaticamente valorizzata con i dettagli dell'errore catturato
        // è un oggetto della classe PDOException con i suoi metodi e proprietà!
        echo "Errore di connessione ";
        echo $errore->getMessage();
    }
}


function funz_query($sql, $binds = [])
// questa funzione è separata dalla connessione ed esegue le query SQL
// ha in input anche un array di elementi che hanno il bind
{
    global $connessione;
    // in entrambe le funzioni inserisco questa varaibile che è globale

    // mi chiedo prima se la variabile $connessione è stata settata prima di partire
    if (!isset($connessione)) {
        // se non è stata settata la setto adesso io
        funz_connessione();
        // richiamo la funzione connessione che ha lo scopo di valorizzare la connessione
    }

    //2. praparo lo statement (istruzione sql = query)
    $statement = $connessione->prepare($sql); //$statement è un oggetto della classe PDOStatement
    //echo "statement preparato";


    /*
    //3. bind 
    print_r($binds);
    echo $sql;
    foreach ($binds as $bind) {
        $statement->bindParam($bind['segnaposto'], $bind['var']);
        // il primo argomento è la chiave segnaposto dell'array dei binds che ho in input
        // il secondo è la chiave var dello stesso array
    }
    */


    //4. eseguo lo statement preparato
    $statement->execute();
    //echo "statement eseguito";
    //5. fetch - recupero dei dati estratti (solo con select)
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $records;
}
