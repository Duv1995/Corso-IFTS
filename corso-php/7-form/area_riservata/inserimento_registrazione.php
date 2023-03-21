<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    print_r($_REQUEST);
    // per vedere cosa ci arriva dall'altra pagina

    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
    // un altra variabile superglobale che contiene tutti i dati degli input di tipo FILE
    // che riguardano i file inviati col form dalla pagina precedente (icona e cv)
    // ognuno di questi due array contiene al suo interno altri dati relativi a icona e cv
    // a noi interessa name (nome locale del file) e tmp_name (nome temporaneo con cui lo salvo sul server)

    // i file uploadati in questo modo dovranno essere caricati sul database e mostrati
    // in questa pagina nuova
    // la funzione che si utilizza per traslocare il file appena uploadato è questa

    move_uploaded_file($from, $to);
    // nelle parentesi metto in input il from e il to:
    // e mi restituisce TRUE o FALSE per dirmi se è riuscito a uploadare
    $from = $_FILES['icona']['tmp_name'];
    // parto dalla posizione in cui è temporaneamente allocato il file 
    // (la chiave tmp_name del mio array che memorizza il percorso temporaneo sul server)
    $to = "./img/" . $_FILES['icona']['name'];
    // mentre il percorso in cui andrò a metterla è la cartella img di questo percorso file
    // e per il nome si utilizza lo stesso che aveva quando è stato caricato da client
    // quindi uso il parametro della chiave 'name' dell'array del file

    // facendo questo mi apparirà la cartella img dentro questo file con dentro la propic.png
    echo "<img src='$to'>";


    // ora faccio l'upload anche del CV
    foreach ($_FILES as $file) {

        $from = $file['tmp_name'];
        $to = "./img/" . $file['name'];
        if (!move_uploaded_file($from, $to))
            // faccio una if in modo che se la funzione mi da false (!true)
            // ottengo un messaggio di errore
            echo "Errore nell'upload del file $file";

        // così carico tutti i files sul server 
        // (la nostra cartella è il server in questo caso) con un solo ciclo!
    }

    // oltre al server dovremo però uploadare questi dati in una nuova tabella che contiene i dati utente!
    // vado su phpmyadmin e creo una nuova tabella (vado all'elenco tabelle e faccio nuova)
    // dovrà avere i seguenti campi: ID, nome, cognome, email, pass, icona, CV (numero di campi 7)

    // mi appare la tabella coi valori vuoti, qui inserisco i nomi dei campi standard:
    // 1) ute_id (tipo INT, 11 lunghezza, AI autoincrement ON e specifico chiave primaria), 
    // gli indici di una tabella sono ciò che mi permette di 
    // accedere direttamente a quel campo, velocizzando la ricerca!
    // se decido di mettere un indice ad un campo, posso accedere subito al suo record!
    // 2) ute_nome (tipo VARCHAR, 256 lunghezza), 3) ute_cognome (uguale)
    // 4) ute_email (tipo VARCHAR, 256 lunghezza, AI chiave UNIQUE perche di solito gli utenti 
    // si cercano per mail e non possono esserci due utenti con la stessa mail)
    // 5) ute_password (anche questa deve avere indice AI chiave INDEX, 
    // perche sta volta le pass non devono essere tutti uniche/diverse)
    // 6) ute_icona (VARCHAR), 7) ute_cv (uguale)
    // ... come si memorizza un file su DB? si memorizza il percorso in cui è salvato!
    // ecco perchè varchar, ci scriverò il percorso della cartella

    // finito di compilare i campi faccio salva e ottengo così la nuova tabella UTENTI
    // che per ora è vuota e posso andarla a riempire con una query!

    // creo il codice che serve per inserire il record
    // per fare questo mi porto dentro la cartella include 
    // coi file per connettersi al DB
    include_once("include/con_db.php");
    // richiamo la funzione SQL
    
    // inserimento record
    $sql = "INSERT INTO utenti 
    (ute_nome, ute_cognome, ute_email, ute_password, ute_icona, ute_cv)
    VALUES 
    (:nome, :cognome, :email, :password, :icona, :cv)";
    $binds = [
        ['segnaposto' => "nome", 'var' => $_REQUEST['nome']],
        // per gli altri elementi stessa cosa...
    ];
    
    fz_sql($sql,$binds);




    ?>


</body>

</html>