<?php
// CONNESSIONE AL DATABASE
// File con funzione per connettersi al database

function fz_connessione()
// questa funzione non restituisce nulla, ha solo lo scopo di 
// effettuare la connessione e valorizzare la mia variabile globale $con (connessione)
{
    global $con;
    // in entrambe le funzioni inserisco questa varaibile che è globale

    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        //1. connessione
        $con = new PDO($dsn, "root", "");
        //echo "connessione effettuata";

    } catch (PDOException $e) {
        // variabile che viene automaticamente valorizzata con i dettagli dell'errore catturato
        // è un oggetto della classe PDOException con i suoi metodi e proprietà!
        echo "Errore di connessione ";
        echo $e->getMessage();
    }
}


function fz_sql($sql, $binds = [])
// questa funzione è separata dalla connessione ed esegue le query SQL
// ha in input anche un array di elementi che hanno il bind
{
    global $con;
    // in entrambe le funzioni inserisco questa varaibile che è globale

    // mi chiedo prima se la variabile $con è stata settata prima di partire
    if (!isset($con)) {
        // se non è stata settata la setto adesso io
        fz_connessione();
        // richiamo la funzione connessione che ha lo scopo di valorizzare la connessione
    }


    //2. praparo lo statement (istruzione sql = query)
    $st = $con->prepare($sql); //$st è un oggetto della classe PDOStatement
    //echo "statement preparato";
    //3. bind 
    print_r($binds);
    echo $sql;
    foreach ($binds as $bind) {
        $st->bindParam($bind['segnaposto'], $bind['var']);
        // il primo argomento è la chiave segnaposto dell'array dei binds che ho in input
        // il secondo è la chiave var dello stesso array
    }


    //4. eseguo lo statement preparato
    $st->execute();
    //echo "statement eseguito";
    //5. fetch - recupero dei dati estratti (solo con select)
    $righe = $st->fetchAll(PDO::FETCH_ASSOC);

    return $righe;
}
