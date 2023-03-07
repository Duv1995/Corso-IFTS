<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATI RICEVUTI</title>
</head>

<body>
    Dati ricevuti dal form!!!<br>
    <?php
    // i dati del form vengono salvate in una variabile globale di sistema $_
    // che equivalgono a GET o POST, che saranno ovviamente degli array lmao
    // echo $_GET['txtCognome'];
    // qui sono memorizzati tutti i dati del form! 
    // è un array associativo dove le chiavi sono i campi del form seguiti dai valori immessi
    // quindi richiamando la chiave txtCognome mi stamperà il valore immesso!
    // la chiave txtCognome è il NAME del tag INPUT che ho nella pagina HTML, non è l'ID!!!

    echo "GET: ";
    print_r($_GET);
    echo "<br>";

    echo "POST: ";
    print_r($_POST);
    echo "<br>";

    echo "POST: ";
    print_r($_REQUEST); // contiene cio che è stato inviato sia con metodo GET che con POST
    echo "<br>";


    // siccome GET è un array posso sfogliarlo come sappiamo benissimo fare
    foreach ($_REQUEST as $chiave => $valore) {

        if ($chiave == 'dataNascita') {
            echo "$chiave: " . data_db_2_user($valore) . "<br>";
            // gli dico che se la chiave è quella della data deve prima convertire
            // il formato della data db in data user
        } else {
            echo "$chiave: " . $valore . "<br>";
        }
    }
    // in questo modo vedrò tutti i dati inviati dal form, che giuncata


    // le date però non voglio vederle nel formato database, le voglio in formato utente
    // quindi creo la funzione che cambia la formattazione delle date
    function data_db_2_user($data)
    {
        // posso farlo tramite la SUBSTR
        $anno = substr($data, 0, 4);
        // in ordine nelle parentesi: stringa che voglio cambiare, da dove parto, quanti elementi prendo dall'inizio
        $mese = substr($data, 5, 2);
        // parto dal 5 perche nella posizione 4 c'è il trattino, attento ai trattini!
        $giorno = substr($data, 8);
        // posso anche omettere il 2 alla fine, così facendo mi prende tute le stringhe fino alla fine
        return "$giorno/$mese/$anno";
        // formato user
    }

    // PER CASA
    // fai la funzione che restituisce la data in formato utente e la riporta in formato DB
    // un metodo alternativo senza usare il substr
    function data_user_2_db($data)
    {
        // explode splitta una stringa dato un elemento separatore, restituendomi un array
        //$data = "31/12/1990"; => se gli dico che il simbolo separatore è lo slash /
        // splitterà la mia stringa in tanti pezzettini in corrispondenza degli slash
        $array_data = explode("/", $data);
        // restituirà un array, a cui assegnamo alle varie parti una variabile
        $giorno = $array_data[0];
        $mese = $array_data[1];
        $anno = $array_data[2];
        // e poi ricompongo il tutto col return
        return "$anno-$mese-$giorno";
        // formato database
    }






    ?>
</body>

</html>