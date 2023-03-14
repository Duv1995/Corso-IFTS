<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VERIFICA</title>
</head>


<body>
    <?php
    //VERIFICA
    // 1) Collegamento al database
    include_once("include/connect_database.php");

    // 2) Elenca data partenza di TUTTE le prenotazioni e il loro num totale
    $partenze = sql("SELECT partenza
    FROM prenotazioni
    LIMIT 0,10"); // metto un limit per non avere il foglio inondato da dati
    // $tot_prenotazioni = sql("SELECT count(partenza) AS 'numero prenotazioni'
    // FROM prenotazioni"); // sta roba non era necessaria lol

    echo "Elenco Partenze <br>";
    foreach ($partenze as $partenza) {
        echo $partenza['partenza'] . "<br>";
    }
    echo "Totale prenotazioni: " . count($partenze) . "<br>";
    echo "<hr>";

    // 3) Restituisci nome cognome dell'ultimo cliente partito
    $ultimo_cliente = sql("SELECT nome, cognome, partenza
    FROM prenotazioni INNER JOIN clienti ON cliente = id_cliente
    ORDER BY partenza ASC
    LIMIT 0,1");

    echo "L'ultimo cliente partito è ";
    foreach ($ultimo_cliente as $cliente) {
        echo $cliente['nome'] . " " . $cliente['cognome'] . "<br>";
    }
    echo "<hr>";

    // 4) calcola il totale dei giorni di permanenza di TUTTE le prenotazioni
    $tot_giorni_perm = sql("SELECT SUM(giorni_permanenza) AS 'totale giorni permanenza'
    FROM prenotazioni");

    echo "Il totale giorni di permanenza è: ";
    foreach ($tot_giorni_perm as $valore) {
        echo $valore['totale giorni permanenza'] . "<br>";
    }
    echo "<hr>";

    // 5) crea classe prenotazione con proprietà private data di partenza e importo
    // e i metodi necessari per assegnare e leggere il loro valore (set e get)
    include_once("include/classi.php");
    $new_p = new Prenotazione("2020-03-14 00:00:00", "100,00");
    echo "Nuova prenotazione aggiunta! <br>";
    echo "Data di partenza: " . $new_p->getPartenza() . "<br>";
    echo "Importo: " . $new_p->getImporto() . "<br>";
    echo "Nuova prenotazione modificata <br>";
    echo "Data di partenza: " . $new_p->setPartenza("2023-03-14 00:00:00") . "<br>";
    echo "Importo: " . $new_p->setImporto("150,00") . "<br>";
    echo "<hr>";


    // 6) definire la funzione che dati in ingresso un array di prenotazioni
    // restituisce il numero di prenotazioni con la data di partenza nell'anno corrente
    include_once("include/funzioni.php");
    // OPPURE 
    // definire il metodo di Prenotazione (consigliato) 
    // che verifica se la prenotazione ha come data di partenza l'anno corrente

    verifica_partenza_1($partenze);





    ?>

</body>

</html>