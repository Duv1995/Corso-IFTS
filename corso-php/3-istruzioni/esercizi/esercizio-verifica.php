<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ripasso verifica</title>
</head>

<body>
    <?php
    /*Esercizio completo sui cicli

1. Realizzare una pagina php che presenti una sequenza di numeri interi con sfondo alternato per
ogni riga. I dati elencati devono rispettare le seguenti regole:
a) la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $inizio) e
analizzare tutti gli interi successivi;
b) l'analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile
$ripetizioni);
c) se il numero considerato corrisponde al giorno della data corrente, deve essere scritto in
grassetto;
d) di ogni numero considerato, scrivere sulla stessa riga il valore del precedente e del
successivo: In mezzo a questi due valori, scrivere il numero considerato in rosso

2. Al termine dell'elenco, separando con una riga orizzontale, scrivere:
e) i dati assegnati, con questa specifica frase: “$inizio: '…' $ripetizioni: '…' “;
f) l'ultimo numero scritto (tra quelli considerati): “ultimo numero considerato: '…' ” ;
g) quante volte è stato scritto un numero successivo multiplo di 10.

3. Modificare l'algoritmo che produce la lista del punto 1, inserendo la condizione che non si deve
mai superare il numero rappresentato dall'anno corrente.

FACOLTATIVO: realizzare una seconda pagina identica alla precedente con una istruzione ciclica
differente*/


    // a) la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $inizio) e
    // analizzare tutti gli interi successivi;
    $inizio = 1;
    // b) l'analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile
    // $ripetizioni);
    $ripetizioni = 100;

    // 1. Realizzare una pagina php che presenti una sequenza di numeri interi con sfondo alternato per ogni riga.
    $bg_color1 = "#ccc";
    $bg_color2 = "#fff";
    // c) se il numero considerato corrisponde al giorno della data corrente, deve essere scritto in
    // grassetto;
    $oggi = date("j");
    echo "oggi è il giorno $oggi<br>";
    //inizializzo questa variabile che deve essere zero a inizio ciclo
    $multipli10 = 0;

    //inizializzo il ciclo con le variabili
    for ($i = $inizio; $i <= $ripetizioni; $i++) {

        //definisco il colore delle righe alternate
        if ($i % 2) {
            $bg_color = $bg_color1;
        } else {
            $bg_color = $bg_color2;
        }
        //ottengo le righe di colori alternati
        echo "<div style = background-color:$bg_color>";

        //inizializzo la variabile $numero che utilizzerò per stampare dopo
        if ($i == $oggi) {
            //in grassetto se equivale al giorno di oggi
            $numero = "<b> $i</b>";
        } else {
            //normale è uguale a $i
            $numero = "$i";
        }
        //inizializzo altre due variabili all'interno del ciclo
        $precedente = ($i - 1);
        $successivo = ($i + 1);

        //stampo i numeri tenendo conto delle varie condizioni, con i successivi e i precedenti
        echo $precedente . "<span style=color:red>" . " $numero " . "</span>" . $successivo . "<br>";

        //aumento il numero di successivi multipli di 10 ogni volta che ne trovo
        if ($successivo % 10 == 0) {
            $multipli10++;
        }
    }

    // 2. Al termine dell'elenco, separando con una riga orizzontale, scrivere:
    echo "<hr>";
    // e) i dati assegnati, con questa specifica frase: “$inizio: '…' $ripetizioni: '…' “;
    echo '$inizio: ' . "$inizio <br>";
    echo '$ripetizioni: ' . "$ripetizioni <br>";
    // f) l'ultimo numero scritto (tra quelli considerati): “ultimo numero considerato: '…' ” ;
    echo "ultimo numero considerato: $numero <br>";
    // g) quante volte è stato scritto un numero successivo multiplo di 10.
    echo "numeri successivi multipli di 10: $multipli10";









    ?>

</body>

</html>