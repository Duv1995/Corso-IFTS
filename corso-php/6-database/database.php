<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTEGRAZIONE COI DATABASE</title>
</head>

<body>
    <?php
    // CONNESSIONE AI DATABASE
    // Avviene tramite i PDO (PHP data objects), cioè oggetti che consentono di accedere ai dati
    // si basa sulla programmazione ad oggetti, sono un gruppo/classe che ci fornisce gia
    // tutti gli strumenti per accedere ai database, indipendentemente dal DBMS che voglio utilizzare

    // Noi che lavoriamo lato server abbiamo bisogno di sapere su quali database 
    // sono immagazzinati i dati che il client vuole richiedere
    // quindi devo sapere in quale server è memorizzato il mio database

    // utilizzeremo quindi una serie di classi di default in PHP che mi permettono
    // di interagire coi DBMS

    // PDO (PHP DATA OBJECTS)
    // Sono delle classi che contengono vari metodi oppure altre classi:
    // PDO::__construct => metodo costruttore per creare istanze 
    // che rappresentano una connessione al database

    // PDO::prepare => serve per preparare un istruzione da inviare al database (query)
    // che restituisce un oggetto di tipo 'statement' (è a sua volta un altra classe)
    // da eseguire sul DBMS
    // PDOStatement => è una classe che contiene una query gia eseguita e gli eventuali
    // risultati che può produrre questa query

    // COME EFFETTUARE LA CONNESSIONE AL DATABASE
    // il costruttore PDO ha come elenco di dati essenziali tutti quegli elementi
    // che servono per creare una connessione tra server web e server dove si trova il database
    // per individuare il database ho bisogno di esplicitare ogni volta:
    // 1) IP della macchina/server in cui è immagazzinato il datbase (host)
    // 2) il nome del database tra i tanti che sono immagazzinati
    // 3-4) i dati di accesso per entrare nel database (utente e password)

    // DSN (data source name) è una stringa che mi dice:
    // tipologia di DBMS, nome del database a cui mi voglio connettere, IP del server
    // $dsn = 'mysql:dbname=testdb;host=127.0.0.1';


    // ESEMPIO COMPLETO DI CONNESSIONE
    // tutto sto codice è sempre uguale e va messa in un file esterno 
    // che includerò ogni volta che in un progetto devo accedere al database

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "ifts";
    // trovo l'host su cui è ospitato il mio database (IP), 
    // sono queste le 4 info fondamentali, per ora sono messe in modo statico
    // ma tendenzialmente ogni volta li devi cambiare per andare su altri database
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
    // sequenza di coppie chiave e valore, su host metto 127.0.1.1
    // sotto dbname metto IFTS (nome del mio database)

    try { //il mio primo tentativo
        $connessione = new PDO($dsn, $user, $pass);
        //inserisco nuovo oggetto PDO mettendo utente e password e dsn
        $st = $connessione->prepare("SELECT * FROM regioni WHERE ID_regione = :id ");
        // questa è la chiamata al metodo prepare della classe PDO
        // è il metodo che mi dice 'quale query vuoi eseguire in questo DB?'
        $id = 2;
        $st->bindParam(':id', $id, PDO::PARAM_INT);
        $st->execute();
        // eseguo lo statement che ho preparato prima, 
        // è un metodo dell'oggetto $st (statement)
        $records = $st->fetchAll(PDO::FETCH_ASSOC);
        // memorizzo in un array tutti i record che ho estratto col mio statement
        // fetch è un operazione che recupera e mi riporta un informazione
    } catch (PDOException $e) {
        die("Errore durante la connessione al database!: " . $e->getMessage());
    }
    echo "estratti n. record = " . count($records);



    // PER LA VERIFICA
    // DEFINIZIONE CLASSE E METODO 
    /*Esercizio PHP
    Si chiede di realizzare una sezione di un sito web che permetta di consultare l’elenco
    delle città, memorizzate nel database ifts.
    In particolare, le operazioni richieste sono le seguenti:
    1. Collegarsi al db ifts
    2. Elencare tutte le città
    3. Indicare il numero di città elencate
    4. Scrivere la sigla provincia con più città collegate
    5. Definire la funzione che, dato in ingresso il nome di una regione, restituisce il
    numero delle città collegate
    function nome_funzione ($nome_regione) */





















    ?>

</body>

</html>