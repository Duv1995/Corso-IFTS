<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3: a good day to array hard</title>
</head>

<body>
    <?php
    /* ARRAY BIDIMENSIONALI
    Fin ora abbiamo visto solo array con un solo valore dentro ciascun indice/chiave, 
    ma ci sono anche quelli con piu dimensioni (bidimensionali e multidimensionali)*/
    $studente1 = ['nome' => "mario", 'cognome' => "rossi", 'voto' => 10];
    $studente2 = ['nome' => "luigi", 'cognome' => "verdi", 'voto' => 8];

    // se volessi raggruppare in una variabile/array tutte queste info
    $studenti = [$studente1, $studente2];
    // il primo valore ha chiave 0, il secondo ha chiave 1
    // la variabile che abbiamo creato è a sua volta un array che contiene 
    // come primo elemento un array dove sono memorizzati tutti i suoi elementi specifici

    // se io volessi raggiungere il valore "mario" partendo da $studenti, come faccio?
    // $studenti[0] coincide con $studente1
    // $studente1[nome] coincide con "mario"
    // dunque:
    $studenti[0]['nome']; //semplicemente unisco entrambi!
    echo $studenti[0]['nome']; //mi stamperà "mario"
    echo "<hr>";

    // SCORRERE L'ARRAY 
    // cosa vuol dire a questo punto fare un FOREACH di $studenti?
    foreach ($studenti as $s) {
        //do un nome all'elemento valore $i-esimo di $studenti => $s è come scrivere $a[$i] => mi trova i valori
        //ad ogni iterazione di quella variabile viene memorizzato l'array coi dati di ogni singolo studente
        //echo $s; //non lo posso assolutamente fare cosi!!
        echo $s['nome'] . "<br>"; // devo infatti specificare la cella/chiave e mi stamperà 
        // tutti i nomi che trova in quella posizione per ciascun array che sta dentro il mio gruppo
    }
    echo "<hr>";

    // ESERCITAZIONE
    $sekiro = ['storia' => 10, 'gameplay' => 10, 'design' => 10];
    $elden_ring = ['storia' => 5, 'gameplay' => 7, 'design' => 5];
    $giochi = [$sekiro, $elden_ring];

    // stampo i valori di un array con foreach
    foreach ($sekiro as $key => $val) {
        echo "$key => $val <br>";
    }
    echo "<hr>";

    foreach ($giochi as $hehe) {
        foreach ($hehe as $key => $val) {
            echo "$key => $val ";
        }
        echo "<br>";
    }
    echo "<hr>";


    // FOREACH INNESTATI
    // per scorrere tutti i valori dentro tutti gli array bidimensionali 
    // devo per forza utilizzare due foreach innestati!
    foreach ($studenti as $s) {
        foreach ($s as $k => $v) {
            echo "$v "; //stampo tutti i valori presenti nei miei array bidimensionali
        }
        echo "<br>";
    }
    echo "<hr>";


    // ESERCIZIO: DUE MODI DI SCORRERE UN ARRAY BIDIMENSIONALE
    $s1 = ['nome' => "Mario", 'cognome' => "Rossi", 'voto' => 10];
    $s2 = ['nome' => "Luigi", 'cognome' => "Verdi", 'voto' => 8];
    $s3 = ['nome' => "Maria", 'cognome' => "Rossini", 'voto' => 5];
    $s4 = ['nome' => "Osvaldo", 'cognome' => "Faustini", 'voto' => 3];

    $s = [$s1, $s2, $s3, $s4]; //questo bad mf li contiene tutti!

    print_r($s1); //stampo tutti i valori dentro il primo array
    echo "<br>";
    print_r($s); //così invece stampa tutto con davanti la chiave 0,1,2,3 per elencare i vari array che contiene
    echo "<br>";

    echo "<br>";
    // tabella THML dentro la quale inserisco i dati
    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Cognome</th>";
    echo "<th>Voto</th>";
    echo "</tr>";

    foreach ($s as $studente) { //chiamiamo $studente il $a di $i di ciascun elemento per scorrerli
        // print_r ($studente);
        echo "<tr>";
        echo "<td>" . $studente['nome'] . "</td>"; //così vedrò tutti i nomi
        echo "<td>" . $studente['cognome'] . "</td>"; //così i cognomi
        // così facendo non vedrò tutti i nomi e poi tutti i cognomi, vedo un nome e sotto il cognome!
        echo "<td>" . $studente['voto'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";


    // ESERCIZIO PER CASA
    // creare la tabella sopra senza conoscere le chiavi dei singoli elementi di $s
    // (basically due for each innestati)
    echo "<table>";
    echo "<tr>";
    echo "<th>Nome</th>";
    echo "<th>Cognome</th>";
    echo "<th>Voto</th>";
    echo "</tr>";
    foreach ($s as $studente) { //il primo ciclo scorre tutti gli elementi 
        // del primo array principale (i nomi degli studenti)
        echo "<tr>";
        foreach ($studente as $k => $v) { //il secondo dice che per ogni studente scorro  
            // tutti gli elementi che lo contraddistinguono 
            echo "<td> $v </td>";
            // gli dico di stampare tutti i singoli valori contenuti negli array interni degli studenti
        }
        echo "</tr>";
    }
    echo "</table>";



    // ASSEGNARE L'INDIRIZZO DI UN VALORE
         foreach ($array as $value)
        // se voglio assegnare a $value non un valore, ma un riferimento al valore 
        // di un altra cella $key dell'array devo usare la & davanti alla value
        foreach ($array as &$value)
        // in questo caso specifico $value ad ogni ciclo ha l'indirizzo del
        // primo elemento, al secondo ciclo ha l'indirizzo del secondo elemento, etc...

        // & si usa tantissimo nei cicli in cui vuoi modificare 
        // i singoli elementi dell'array





















    ?>
</body>

</html>