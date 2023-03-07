<?php
// CONNESSIONE AL DATABASE
// File con funzione per connettersi al database

function fz_connessione($sql)
{
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";

    try {
        //1. connessione
        $con = new PDO($dsn, "root", "");
        //echo "connessione effettuata";
        //2. praparo lo statement (istruzione sql = query)

        $st = $con->prepare($sql); //$st è un oggetto della classe PDOStatement
        //echo "statement preparato";
        //3. bind - da fare
        //4. eseguo lo statement preparato
        $st->execute();
        //echo "statement eseguito";
        //5. fetch - recupero dei dati estratti (solo con select)
        $righe = $st->fetchAll(PDO::FETCH_ASSOC);


    } catch (PDOException $e) {
        echo "Errore di connessione ";
        echo $e->getMessage();
    }

    return $righe;
}

?>



