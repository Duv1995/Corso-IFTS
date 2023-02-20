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
    /*Esercizio PHP

Sono forniti i 2 array elencati di seguito:
$p1 = ["Primini Primo", "Secondini Secondo"]; (partecipanti corso 1)
$p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria","Giacomini Giacomo"], (partecipanti corso 2)
$p3 = ["Violetti Viola","Gaietti Gaia"]; (partecipanti corso 3)
$partecipanti= [$p1, $p2, $p3];
$corsi = ["Autocad","Informatica","Inglese"];*/
/*Nell'array bidimensionale $partecipanti ogni elemento rappresenta un array di partecipanti ai
vari corsi svolti dall'ente di formazione Enaip. I singoli array $p1, $p2, ecc contengono i
cognomi e nomi dei partecipanti ad un corso specifico.
L'array $corsi contiene i nomi dei corsi, nello stesso ordine del primo, cioè il corso Autocad è
stato seguito dai partecipanti elencati in $p1, Informatica è stato seguito dai partecipanti di $p2,
ecc.*/

    $p1 = ["Primini Primo", "Secondini Secondo"]; //corso 1
    $p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"]; //corso 2
    $p3 = ["Violetti Viola", "Gaietti Gaia"]; //corso 3

    $partecipanti = [$p1, $p2, $p3];
    // un altro modo per scrivere il contenuto di $partecipanti
    // $partecipanti = [
    //     ["Primini Primo", "Secondini Secondo"],
    //     ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"]    
    //     ["Violetti Viola", "Gaietti Gaia"]
    // ]; 
    $corsi = ["Autocad", "Informatica", "Inglese"];

    // Si chiede di svolgere le seguenti attività:
    // 1. aggiungere il nuovo partecipante "Novella Novellini" al corso di Informatica 
    // (aggiungere un elemento ad un array in posizione non specificata)
    // 2. elencare i nomi di tutti i partecipanti (di tutti i corsi)
    // 3. calcolare il numero medio dei partecipanti ai corsi
    // 4. indicare il nome del corso con il maggior numero di partecipanti
    // 5. tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
    // giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
    // primo in ordine alfabetico a sostenere l'esame (tra tutti i partecipanti di tutti i corsi).
    // 6. si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, con
    // chiave 'corso' e valore il nome del corso, fornito nel secondo array (in $p1 avrò gli studenti e il corso corrispettivo).

    // ---------------------------------------------------------------------------------------------------------------------------------------------------------- //

    // 2. elencare i nomi di tutti i partecipanti (di tutti i corsi) => devo scorrere tutti i partecipanti

    foreach ($partecipanti as $i => $p) { // questa riga dice 'per ogni elemento di $partecipanti 
        // lo chiamerò $p per ogni iterazione decido io di chiamare i contenuti di $partecipanti => $p
        // questo mi serve per prendere in mano i singoli valori $a[$i-esimi] di $partecipanti
        // $p = $partecipanti[$i] è quindi la variabile generica che memorizza 
        // un elemento di $p1, $p2, $p3 ad ogni iterazione!
        // voglio scorrere l'intero array $p per fare la echo dei suoi contenuti
        echo "Elenco dei partecipanti del corso " . $corsi[$i] . ":<br>";
        // ho inizializzato nel primo ciclo l'indice $i => di ciascun elemento $p
        // in questo modo posso utilizzarlo anche per l'array $corsi 
        // perche ha lo stesso indice di $partecipanti (0,1,2)
        // $p = $partecipanti[$i]; 
        // $nome_corso = $corso[$i]; //visto? hanno entrambi indice $i
        echo "<ol>"; //faccio un elenco per separarli meglio
        foreach ($p as $nome) { //decido di chiamare i contenuti di ogni $p = $partecipanti[$i] => $nome
            // in questo modo scorro tutti gli elementi di $p1, $p2, $p3
            echo "<li> $nome </li>";
            // due foreach perche sono array BI-dimensionali, devo scorrerli entrambi!
        }
        echo "</ol>";
    }

    //punto 2 svolto con il FOR
    // for ($i = 0; $i < count($partecipanti); $i++) {
    //     $p = $partecipanti[$i]; //array monodimensionale
    //     //echo $p[$i];
    //     for ($j = 0; $j < count($p); $j++) {
    //         $nome = $p[$j];
    //         echo $nome . "<br>";
    //     }
    // }

    echo "<hr>";

    // 1. aggiungere il nuovo partecipante "Novella Novellini" al corso di Informatica 
    // (aggiungere un elemento ad un array in posizione non specificata)

    // 3. calcolare il numero medio dei partecipanti ai corsi
    // (quindi faccio la somma di tutti i partecipanti che ci sono)
    $somma = 0; //inizializzo la somma

    // 4. indicare il nome del corso con il maggior numero di partecipanti
    // per assegnare dinamicamente 0 basandosi sul primo array di partecipanti faccio così:
    $primo_array_di_partecipanti = $partecipanti[0];
    $max_partecipanti = count($primo_array_di_partecipanti);
    //in questo modo il primo array parte di default come il corso con piu partecipanti
    $corso_max_partecipanti = ""; //lo inizializzo, così nel caso non trovassi un num max partecipanti 
    // ho la stringa vuota

    // riporto qui il punto 2 in modo semplice senza troppe beghe:
    foreach ($partecipanti as $i => $p) {
        if ($corsi[$i] == "Informatica") {
            // devo chiedermi 'è proprio il corso che ci serve? in quel caso aggiungi il partecipante nuovo'
            $p[] = "Novellini Novella"; //uso $p generico perche così li confronta uno ad uno i miei 3 $p
        }
        // somma dei partecipanti
        $numero_partecipanti = count($p);
        // in questo modo sommo il numero di elementi che conto con count($p)
        $somma += $numero_partecipanti;

        // trovo il max dei partecipanti
        if ($max_partecipanti < $numero_partecipanti) {
            // se è vero il max diventerà del valore del numero_partecipanti piu alto trovato fino ad ora
            $max_partecipanti = $numero_partecipanti;
            // se è vero il nuovo max partecipanti prende il valore del num partecipanti piu alto
            $corso_max_partecipanti = $corsi[$i];
            // una volta trovato il max assegno alla nuova variabile corso max 
            // il nome del corso col max di partecipanti che ho appena trovato e gli dico THATS HIM OFFICER!
        }

        //variante del 4: scrivi tutti i corsi che hanno il max n. partecipanti
        // devo quindi memorizzare il nome dei corsi dentro un array
        if ($max_partecipanti <= $numero_partecipanti) {
            if ($max_partecipanti < $numero_partecipanti) {
                //mi chiedo: ho trovato un nuovo max?
                $max_partecipanti = $numero_partecipanti;
                //questa parte rimane uguale perche mi serve per trovare il num max
                $corsi_max_partecipanti = [];
                // reinizializzo l'array per svuotarlo
            }
            $corsi_max_partecipanti = $corsi[$i];
            // aggiungo il nuovo elemento all'array man mano che trovo un nuovo max
        }

        echo "Elenco dei partecipanti del corso " . $corsi[$i] . ":<br>";
        echo "<ol>";
        foreach ($p as $nome) {
            echo "<li>" . $nome . "</li>";
        }
        echo "</ol>";
    }
    echo "<hr>";
    // scrivo la media ma solo se non ho un array vuoto lol
    if ($corsi) { //equivale a dire che se $corsi è vero contiene almeno un elemento
        echo "La media dei partecipanti vale " . $somma / count($corsi) . "<br>";
    } else {
        echo "Non ci sono corsi :c";
    }
    echo "Il corso con il numero massimo di partecipanti è $corso_max_partecipanti <br>";

    // echo "L'elenco dei corsi col massimo dei partecipanti è ";
    // foreach ($corsi_max_partecipanti as $c){
    //     echo "$c <br>";
    // }
    echo "<hr>";

    // DA FARE A CASA
    // 5. tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
    // giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
    // primo in ordine alfabetico (aka il minore dei nomi) a sostenere l'esame (tra tutti i partecipanti di tutti i corsi).


    echo "<hr>";

    // 6. si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, 
    // con chiave 'corso' e valore il nome del corso, fornito nel secondo array 
    // (in $p1 avrò gli studenti e il corso corrispettivo).

    $p1 = ["Primini Primo", "Secondini Secondo"];
    $p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria", "Giacomini Giacomo"];
    $p3 = ["Violetti Viola", "Gaietti Gaia"];

    $partecipanti = [$p1, $p2, $p3];
    $corsi = ["Autocad", "Informatica", "Inglese"];

    foreach ($partecipanti as $i => $p) { 
        //$p è un array dei partecipanti, alla fine voglio aggiungerci un elemento con chiave corso
        $nome_corso = $corsi[$i];
        // il nome corso è un elemento di $corsi, ovvero quello che si trova nella stessa posizione (indice)
        $p['corso'] = $nome_corso;
        print_r($p);
        echo "<br>----<br>"; //finito un corso passo a quello dopo
    }


    foreach ($studenti as $studente) {
        //2)
        echo $studente['cognome'] . "<br>";

        //3 e 4 prossima volta!
        $nome_corso = $studente['corso'];
        // if(esiste la chiave $nome_corso)
        //     $partecipanti_corsi[$nome_corso]++;
        // else $partecipanti_corsi[$nome_corso]=1;


    }


















    ?>
</body>

</html>