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

    print_r($_POST);
    // stampo la post che è un array che contiene la regione selezionata
    // se nell'index.php ho messo method GET qui dovrò sostituire $_POST con $_GET
    // post è quello che mi arriva dal form, tutti i dati delle città
    // della regione selezionata, sottoforma di array
    // le variabili superglobali sono quelle visibili ovunque, iniziano con $_

    $area_geografica = ($_REQUEST) ? $_REQUEST['area_geografica'] : "Sud";
    // c'è qualcosa in request/post? se si allora request/post è l'array area geografica, 
    // altrimenti sud operatore ternario per verificare se è stato inserito qualcosa nel form,
    // se non selezioni nessuna area e dai invio, ti darà di default "Sud"
    // $_REQUEST è un altra variabile superglobale che memorizza quello 
    // che mi viene inviato sia dal metodo POST che dal metodo GET
    echo "<h1>Elenco delle città dell'area geografica " . $area_geografica . "</h1>";


    // per il secondo form creo ed inserisco il link che cliccando 
    // inserisce la regione selezionata nel form all'area che ho cercato nel primo form
    echo "<a href='form_nuova_regione.php?area_geografica=$area_geografica'>Aggiungi regione di questa area geografica</a><br><br>";
    // la query string URL è composta da ? che separa il link dalla query, 
    // poi una serie di coppie chiave valore collegate tra loro dalla &

    // il link mi porta a una pagina che devo ancora creare, che contiene la query string
    // php?area_geografica=$area_geografica che è esattamente quello che viene fuori quando invii un form
    // tramite il metodo GET, quello che fa apparire la query string nel link della pagina
    // possiamo quindi fare una query anche semplicemente inserendola nel link!

    // facendo così il link che creo si porta dietro i dati dalla prima pagina dei form 
    // memorizzando quindi l'area geografica con tutte le sue città e regioni!

    // IMPORTANTE:
    // il passaggio di dati da una pagina all'altra può avvenire quindi tramite FORM (coi metodi GET e POST)
    // oppure tramite LINK, che passa le info tramite la query URL che ha solo il metodo GET

    // creo il form in una nuova pagina per inserire la regione!





    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    try {
        //1. connessione
        $connessione = new PDO($dsn, "root", "");

        //2. praparo lo statement (istruzione sql = query)
        $sql = "SELECT citta FROM citta 
        INNER JOIN regioni ON ID_regione = citta.regione
        WHERE area_geografica = :area_geografica";
        // troviamo le città delle regioni dell'area geografica selezionata nel form
        // area_geografica la metto con il segnaposto del bind, non con la variabile!
        $statement = $connessione->prepare($sql);

        //3. bind di area_geografica
        // questa volta serve perche voglio inserire una variabile php dinamica 
        // dentro la mia query SQL, quindi devo assicurarmi con il bind che sia corretta
        $statement->bindParam("area_geografica", $area_geografica);
        // (parametro segnaposto che voglio sostituire, variabile con cui lo sostituisco)

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
    foreach ($righe as $riga) {
        $c = new Citta($riga['citta']);
        // ora stampo l'attributo 'nome' dell'oggetto $c
        echo $c->getNome() . "<br>";
    }


    ?>
</body>

</html>