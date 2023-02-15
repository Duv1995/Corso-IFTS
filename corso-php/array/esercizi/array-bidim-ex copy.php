<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESERCIZIO SIMIL-VERIFICA</title>
</head>

<body>
    <?php
    // ESERCITAZIONE

    $sekiro = ["Genichiro", "Isshin", "Owl"];
    $elden = ["Morgott", "Malenia", "Godfrey", "Elden Beast"];
    $blood = ["Cleric Beast", "Gehrman"];

    $fromsoft = [$sekiro, $elden, $blood];

    $giochi = ["Sekiro", "Elden Ring", "Bloodborne"];

    // ---------------------------------------------------------------------------------------------------- //

    // 1. elencare i nomi di tutti i boss (di tutti i giochi) => devo scorrere tutti i giochi
    foreach ($fromsoft as $k => $v) {
        echo "I boss di " . $giochi[$k] . " sono: ";
        echo "<ol>";
        foreach ($v as $k2 => $v2) {
            echo "<li>$v2</li>";
        }
        echo "</ol>";
    }
    echo "<hr>";

    //2. aggiungi il boss Lady Maria a Bloodborne
    foreach ($fromsoft as $k => $v) {
        if ($giochi[$k] == "Bloodborne")
            $v[] = "Lady Maria";
        //devo usare $v perche deve aggiungerlo all'array che indica il gioco (bloodborne)
        echo "I boss di " . $giochi[$k] . " sono: ";
        echo "<ol>";
        foreach ($v as $k2 => $v2) {
            echo "<li>$v2</li>";
        }
        echo "</ol>";
    }
    echo "<hr>";


    // ---------------------------------------------------------------------------------------------------- //
    // 3. calcolare il numero medio di boss in ciascun gioco
    // ho bisogno di totale num di boss / num di giochi
    $somma = 0; //inizializzo somma

    foreach ($fromsoft as $k => $v) {

        if ($giochi[$k] == "Bloodborne")
            $v[] = "Lady Maria";

        $num_boss = count($v);
        // con questo conto quanti valori stanno dentro ogni $v gioco (ripetuto per ogni ciclo)
        $somma += $num_boss;
        // e man mano li sommo tutti per trovare il totale dei boss (10)
    }
    echo "Ci sono in media " . $somma / count($giochi) . " boss per ciascun gioco <br>";
    echo "<hr>";

    // 4. indicare il nome del gioco con il maggior numero di boss
    // ho bisogno di contare quanti boss in ciascun gioco, poi paragonarli tra loro, 
    // paragonarli tra loro e assegnare alla variabile $max_num_boss quello piu grande
    $max_num_boss = 0; //inizializzo il max num di boss

    foreach ($fromsoft as $k => $v) {
        if ($giochi[$k] == "Bloodborne")
            $v[] = "Lady Maria";

        $num_boss = count($v);
        // con questo conto quanti valori (boss) stanno dentro ogni $v gioco (ripetuto per ogni ciclo)
        if ($max_num_boss < $num_boss) {
            // chiedo 'il numero di boss trovati in questo ciclo (1 gioco per volta)
            // è piu grande del mio precedente numero di boss trovati (inizializzato a zero)
            $max_num_boss = $num_boss;
            // se è vero il nuovo max boss prende il valore del num boss piu alto

            $gioco_max_boss = $giochi[$k];
            // ogni volta che trovo un nuovo max
            // assegno a questa nuova variabile il nome dell'array che contiene i giochi
            // non devo preoccuparmi delle successive verifiche perchè una volta trovato
            // il max, anche se lo paragono ai successivi questi non si sostituiranno al max num boss!
        }
        // esco dal ciclo avendo su max num boss quelli dell'array che ne contiene di piu
        // e su gioco max boss il nome dell'array giochi che conteneva quel max!
    }
    echo "Gioco con il maggior numero di boss è $gioco_max_boss";
    echo "<hr>";


    // ---------------------------------------------------------------------------------------------------- //

    // 5. tutti i boss devono scontrarsi con il protagonista di Demons Souls: 
    // scrivere il nome del boss che sarebbe il primo in ordine alfabetico (aka il minore dei nomi) 
    // a combattere il mc (tra tutti i boss di tutti i giochi).

    // $a = "A";
    // $b = "B";
    // if ($a < $b) {
    //     echo "$a maggiore di $b";
    // }

    $primo_boss = "Z"; //inizializzo variabile primo boss partendo dalla lettere piu bassa lol
    foreach ($fromsoft as $k => $v) {

        if ($giochi[$k] == "Bloodborne")
            $v[] = "Lady Maria";

        foreach ($v as $k2 => $v2) {
            // scorro dentro ciascun array di ciascun gioco paragonando ogni volta
            // il nome dei boss che ci sono dentro ogni valore con Z
            if ($primo_boss > $v2)
                // se è maggiore in senso alfabetico prenderà il nome del boss diventa
                // il nuovo valore di primo boss!
                $primo_boss = $v2;
        }
    }
    echo "Il primo a combattere il mc di DeS sarà $primo_boss <br>";
    echo "<hr>";

    // ---------------------------------------------------------------------------------------------------- //

    // 6. si chiede di aggiungere in fondo ad ogni array dei boss un ulteriore elemento, 
    // con chiave 'gioco' e valore il nome del gioco corrispettivo, fornito nel secondo array 

    $sekiro = ["Genichiro", "Isshin", "Owl"];
    $elden = ["Morgott", "Malenia", "Godfrey", "Elden Beast"];
    $blood = ["Cleric Beast", "Gehrman"];

    $fromsoft = [$sekiro, $elden, $blood];
    $giochi = ["Sekiro", "Elden Ring", "Bloodborne"];

    foreach ($fromsoft as $k => $v) {
        $nome_gioco = $giochi[$k];
        // inizializzo $nome_gioco, che è un elemento di $giochi 
        // che prende il valore di quello che c'è scritto nei suo indice $k (quindi sekiro, ER, bb, etc)
            $v['gioco'] = $nome_gioco;
            print_r($v);
    }
    echo "<hr>";

























    ?>
</body>

</html>