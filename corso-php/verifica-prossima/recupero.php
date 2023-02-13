<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECUPERO</title>
</head>

<body>
    <?php
    /* INTRODUZIONE A PHP
    PHP è un linguaggio che nasce con il preciso scopo di rendere dinamico HTML
    quindi deve integrarsi all'interno della pagina HTML creando pezzi di codice in maniera programmatica
    (è simile somehow a python)

    VARIABILE
    Una variabile è un nome associato ad uno spazio di memoria RAM, 
    il codice di programmazione utilizza il nome della variabile per leggere e scrivere la RAM.
    VARIABILE = è una cella di dati he contiene un singolo valore

    ARRAY
    Un array è un nome associato ad una serie di spazi di memoria RAM, 
    il codice di programmazione utilizza il nome dell'array e l'indice per leggere e scrivere la RAM.
    ARRAY = stessa cosa ma l'array ha piu di un cassetto in cui mettere multipli valori

    A seconda della chiave, un array può essere enumerativo (chiavi 0,1,2,3) oppure associativo (nomi delle chiavi)
    In genere si tende a usare quelli associativi perche si capisce meglio con cosa stai lavorando (nome => davide)

    ARRAY BIDIMENSIONALE
    Un array bidimensionale è un nome associato ad una tabella, 
    dove le chiavi del mega array rappresentano le colonne
    e le chiavi degli array al suo interno rappresentano le colonne.

    Esempio tabella:
    $s1=[‘cognome’=>”Primini”, ‘nome’=>”Primo”,’corso’ => “Autocad”];
    $s2=[‘cognome’=>”Secondini”, ‘nome’=>”Secondo”,’corso’ => “Autocad”];
    $s3=[‘cognome’=>”Giannini”, ‘nome’=>”Gianni”,’corso’ => “Informatica”];
    …
    $studenti = [$s1, $s2, $s3, …];
    In questo caso le colonne sono $s1, $s2, $s3, 
    mentre le righe sono [‘cognome’=>”Primini”, ‘nome’=>”Primo”,’corso’ => “Autocad”], etc...
    sotto a ciascuna colonna!


    Ognuno dei record/righe è semplicemente un array a sua volta.
    Sono comodi per rappresentare qualcosa che non so a priori quanto sia grande
    e poi processarla molto comodamente con un ciclo for!

    Un array bidimensionale è un array di arrays: ogni elemento identificato dal primo indice è un array, 
    che utilizza il secondo indice per identificare lo slot di memoria RAM da indirizzare.
    */

    // ----------------------------------------------------------------------------------------------------------//
    // ESERCIZIO
    // Sono forniti i 2 array elencati di seguito:

    // definisco il primo array
    $p1 = ['Primini Primo', 'Secondini Secondo'];
    $p2 = ['Giannini Gianni', 'Stefanini Stefano', 'Mariolini Maria', 'Giacomini Giacomo'];
    $p3 = ['Violetti Viola', 'Gaietti Gaia'];
    $partecipanti = [$p1, $p2, $p3];
    $corsi = ['Autocad', 'Informatica', 'Inglese'];

    var_dump($partecipanti);
    // faccio un VAR-DUMP per vedere cosa contengono i nostri array bidimensionali
    // in questo modo vedo la tabella con le varie colonne e righe di array
    echo $partecipanti[0][0] . "<br>";
    // in questo modo vado a stampare il primo elemento del primo array
    echo $partecipanti[1][0] . "<br>";
    // in questo modo vado a stampare il primo elemento del secondo array
    echo "<hr>";

    // definisco il secondo array
    $s1 = ['cognome' => 'Primini', 'nome' => 'Primo', 'corso' => 'Autocad'];
    $s2 = ['cognome' => 'Secondini', 'nome' => 'Secondo', 'corso' => 'Autocad'];
    $s3 = ['cognome' => 'Giannini', 'nome' => 'Gianni', 'corso' => 'Informatica'];
    $studenti = [$s1, $s2, $s3];

    var_dump($studenti);
    echo $studenti[0]['nome'] . ' ' . $studenti[0]['cognome'] . "<br>";
    // stessa cosa che ho fatto prima ma qui ho una chiave associativa
    echo $studenti[1]['nome'] . ' ' . $studenti[1]['cognome'] . "<br>";
    echo "<hr>";

    /* 
    Nell'array bidimensionale $partecipanti ogni elemento rappresenta un array di partecipanti ai vari corsi svolti dall'ente di formazione Enaip. I singoli array $p1, $p2, ecc contengono i cognomi e nomi dei partecipanti ad un corso specifico.
    L'array $corsi contiene i nomi dei corsi, nello stesso ordine del primo, cioè il corso Autocad è stato seguito dai partecipanti elencati in $p1, Informatica è stato seguito dai partecipanti di $p2, ecc.

    Si chiede di svolgere le seguenti attività:
    1 - aggiungere il nuovo partecipante 'Novella Novellini' al corso di Informatica 
    2 - elencare i nomi di tutti i partecipanti (di tutti i corsi)
    3 - calcolare il numero medio dei partecipanti ai corsi
    4 - indicare il nome del corso con il maggior numero di partecipanti
    5 - tutti i partecipanti devono superare un esame di selezione, 
    che si svolge nello stesso giorno e con la stessa commissione: 
    scrivere il nome del partecipante che sarebbe il primo in ordine alfabetico 
    a sostenere l'esame (tra tutti i partecipanti di tutti i corsi).
    6 - si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, 
    con chiave 'corso' e valore il nome del corso, fornito nel secondo array.
    */

    // aggiungere il nuovo partecipante 'Novella Novellini' al corso di Informatica
    $partecipanti[1][] = "Novella Novellini";
    // apro la cella vuota per aggiungere il nuovo studente nella prima cella vuota disponibile
    echo "dopo aver aggiunto il nuovo partecipante:";
    var_dump($partecipanti); //vedo che ora è stato aggiunto
    echo "<hr>";

    // Nel caso però io non sapessi a quale array corrisponde il corso di informatica, utilizzo il ciclo FOR
    for ($i = 0; $i < 3; $i++) {
        // confidando del fatto che $corsi e $partecipanti hanno lo stesso indice!
        if ($corsi[$i] == 'Informatica') {
            $indice = $i;
            // gli dico di memorizzarsi il valore della chiave 'Informatica' appena la trova
        }
    }
    // poi aggiungo il nuovo partecipante usando la chiave che ho trovato
    // echo '$indice vale ' . $indice .'<br>';
    // $partecipanti[$indice][] = "Novella Novellini";
    // commento per evitare di aggingere due novelle lol
    echo "<hr>";

    // con il secondo stack di array come aggiungo Novella Novellini? qui non ho array enumerativi!
    $studenti[] = ['cognome' => 'Novellini', 'nome' => 'Novella', 'corso' => 'Informatica'];
    // gli dico direttamente di aggiungere un nuovo array scrivendo tutti i suoi valori lmao
    var_dump($studenti);
    echo "<hr>";
    // -----------------------------------------------------------------------------------------------------------//

    // 2 - elencare i nomi di tutti i partecipanti (di tutti i corsi)
    foreach ($partecipanti as $array_p) {
        // il FOREACH valorizza una nuova variabile $array_p e le assegna il valore dei miei array ogni volta
        // ad ogni ciclo questa variabile cambia, al primo ciclo vale $p1, al secondo $p2, etc
        foreach ($array_p as $studente) {
            echo $studente . '<br>';
            // a questo punto dentro ogni $array_p, valorizzo una variabile $studente
            // che ad ogni ciclo assume tutti i valori (nome, cognome, etc) dei vari studenti
        }
        echo '<br>';
    }
    echo "<hr>";

    // con l'altro stack di array invece faccio con un solo foreach
    foreach ($studenti as $array_s) {
        echo $array_s['cognome'] . ' ' . $array_s['nome'] . '<br>';
        // concateno nome e cognome assieme con uno spazio
    }
    echo "<hr>";
    // -----------------------------------------------------------------------------------------------------------//

    // 3 - calcolare il numero medio dei partecipanti ai corsi
    // calcolo il numero di corsi
    $numero_corsi = count($corsi);
    // count mi conta automaticamente il NUMERO di elementi dentro $corsi (3)
    echo "ci sono $numero_corsi corsi <br>";

    // per trovare la somma del numeri di partecipanti posso usare un solo FOREACH
    $numero_partecipanti = 0; //prima inizializzo la nuova variabile
    foreach ($partecipanti as $array_p) {
        $numero_partecipanti += count($array_p);
        // conto il numero di partecipanti dentro ogni array e li sommo ad ogni ciclo
    }

    echo "ci sono $numero_partecipanti partecipanti <br>";
    $media_p = $numero_partecipanti / $numero_corsi;
    echo "la media di partecipanti ai corsi è $media_p persone per corso <br>";
    echo "<hr>";


    // per l'altro stack di array associativi questa operazione è piu difficile!
    // devo sempre trovare il numero di corsi e il numero di partecipanti, ma sta volta non ho i numeri gia pronti
    // inoltre devo stare attento a non inserire piu volte lo stesso corso
    $numero_corsi = 0;

    foreach ($studenti as $studente) {
        // mi serve un array nuovo a partire dall'array associativo, in cui inserirò i corsi univoci per contarli
        // inserisco il corso in un array, ma solo se non è gia presente (attento ai duplicati!)
        echo $studente['corso'] . "<br>";
        // così mi escono scritti tutti i nomi dei corsi per ciascun array di studente
        // li inserisco in un array nuovo
        $elenco_corsi[] = $studente['corso'];
    }
    // devo ora eliminare i corsi duplicati
    // ARRAY UNIQUE = elimina i duplicati dell'array che metti come input
    $elenco_corsi = array_unique($elenco_corsi);
    // ora conto il numero di elenco corsi ripulito!
    $numero_corsi = count($elenco_corsi);
    echo "i corsi (non duplicati) sono $numero_corsi <br>";

    // conto gli studenti che sono contenuti nell'array studenti, easy
    $numero_partecipanti = count($studenti);
    //  calcolo la media
    $media_s = $numero_partecipanti / $numero_corsi;
    echo "la media di studenti per corso è $media_s persone per corso <br>";
    echo "<hr>";
    // -----------------------------------------------------------------------------------------------------------//

    // 4 - indicare il nome del corso con il maggior numero di partecipanti

    $massimo = 0; //inizializzo nuova variabile
    for ($i = 0; $i < count($corsi); $i++) {
        if (count($partecipanti[$i]) > $massimo) {
            // trovo il numero di partecipanti di ogni corso
            $massimo = count($partecipanti[$i]);
            // ad ogni passaggio paragono per vedere se è piu grande del mio vecchio massimo
            // a inizio ciclo il mio massimo vale 0 quindi prende subito valore del primo corso
            $corso_massimo = $i;
            // quando aggiorno il massimo mi faccio una copia della $i sennò continua a incrementarsi
        }
    }
    echo "il corso con piu iscritti è " . $corsi[$corso_massimo];
    echo "<hr>";

    // con l'array associativo E' ANCORA PIU IGNORANTE da gestire... lmao
    // ci dobbiamo creare un array di corsi e di numero partecipanti, un po come abbiamo fatto con la media
    $elenco_corsi = array(); //lo inizializzo come array vuoto
    $numero_studenti = array();

    // foreach ($studenti as $studente) {
    //     //scorro e verifico se il corso è già presente nell'array
    //     if (in_array($studente['corso'], $elenco_corsi)) {
    //         // IN_ARRAY (se studente chiave corso è gia presente in array elenco corsi)
    //         // verifico che il 'corso' non sia gia presente nel mio array vuoto $elenco_corsi
    //         //se il corso esiste già, aumento i partecipanti
    //         $numero_studenti[$studente['corso']]++;
    //     } else {
    //         // se non è gia presente nel mio array lo aggiungo a $elenco_corsi
    //         $elenco_corsi[] = $studente['corso'];
    //         $numero_studenti[] = 1;
    //     }
    // }

    // UN ALTERNATIVA PIU BELLA per fare questo lavoro è usando KEY_EXISTS
    foreach ($studenti as $studente) {
        //verifico se il corso è già presente nell'array
        if (key_exists($studente['corso'], $numero_studenti)) {
            // gli chiedo c'è la chiave 'corso'?  
            // se c'era già la incrementi di +1
            $numero_studenti[$studente['corso']]++;
        } else {
            // se non esiste la chiave di un corso la aggiungo come nuova e la inizializzo a 1
            //il corso non esiste, lo aggiungo all'array e inizializzo i partecipanti a 1
            $numero_studenti[$studente['corso']] = 1;
        }
    }

    $massimo = 0;
    foreach($numero_studenti as $key => $value){
        echo 'key: ' . $key . '<br>';
        echo 'value: ' . $value . '<br>';
        if($value > $massimo){
            //se il valore di numero di studenti è superiore al massimo, segno i valori
            $massimo = $value;
            $corso_massimo = $key;
        }
    }
    echo "il corso con più iscritti è " . $corso_massimo;
    echo "<hr>";






























    ?>
</body>

</html>