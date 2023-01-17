<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio in classe</title>
</head>

<body>
    <!-- Esercizio PHP

Viene fornito un array di interi, dove ogni numero rappresenta l'età degli abitanti di un piccolo
comune. Si chiede di svolgere le seguenti attività:
1. elencare tutte le età presenti nell'array con uno sfondo alternato nelle varie righe,
scrivendo in grassetto le età dei maggiorenni e in corsivo quelle dei minorenni (0 corrisponde ad un neonato);
2. in un riquadro, riportare il numero dei neonati e l'età del più anziano;
3. calcolare e visualizzare l'età media dei maggiorenni.
4. Per aver diritto al voto si deve avere almeno 18 anni: calcolare e visualizzare quante
schede servono in totale per le elezioni. -->

    <?php
    //RIPASSONE SUGLI ARRAY
    //sono variabili che possono memorizzare piu di un dato, se la variabile è un cassetto l'array è una cassettiera

    //ESERCIZIO
    // inizializzo gli array delle variabili
    $eta = []; //inizializzo l'array vuoto (opzionale)
    for ($i = 0; $i < 20; $i++) { //ciclo che inizializza l'array e gli assegna valori random
        $eta[$i] = rand(0, 90); //valorizzo a random le età dell'array
        //echo "$i) " . $eta[$i] . "<br>"; //stampo i vari valori
    }

    // print_r($eta); //oppure faccio questo per stampare tutti gli elementi dell'array senza fare un ciclo
    // var_dump($eta); //oppure faccio così per stampare ricorsivamente il contenuto dell'array

    // 1. elencare tutte le età presenti nell'array con uno sfondo alternato nelle varie righe,
    // scrivendo in grassetto le età dei maggiorenni e in corsivo quelle dei minorenni (0 corrisponde ad un neonato);

    //2. in un riquadro, riportare il numero dei neonati e l'età del più anziano;
    $max = $eta[0]; //prima inizializzo il valore massimo che prima del ciclo è sempre 0 che mi servirà per trovare il piu anziano
    $neonati = 0; //inizializzo anche il numero dei neonati che partono da 0

    //3. calcolare e visualizzare l'età media dei maggiorenni.
    $eta_maggiorenni = 0; //questo mi servirà per calcolare la media
    $numero_maggiorenni = 0; //questo mi servirà per calcolare la media e le schede elettorali richieste

    for ($i = 0; $i < count($eta); $i++) { //count lo posso usare solo se ho gia inizializzato un array dicendogli quanti elementi ha ($i < 10)
        if ($eta[$i] >= 18) {
            echo "$i) " . "<b>" . $eta[$i] . "</b>";
            //se invece voglio sommare tutte le età dei maggiorenni per farci la media
            $eta_maggiorenni += $eta[$i]; //sommo al totale dell'età dei maggiorenni l'ultima età dei maggiorenni trovata
            $numero_maggiorenni++;
        } else {
            echo "$i) " . "<i>" . $eta[$i] . "</i>";
        }
        echo "<br>";

        //per trovare il piu anziano
        if ($eta[$i] > $max) { //se trovo un età piu grande del max trovato fin ora
            $max = $eta[$i]; //lo indico come il nuovo max che stamperò come il piu anziano
        }

        //per trovare il numero di neonati
        if ($eta[$i] == 0) {
            $neonati++; //incremento il valore ogni volta che ne trovo uno
        }
    }


    echo "il più anziano ha $max anni e si trova all'indice ???? <br>"; //trova l'indice $i del numero piu anziano
    echo "numero di neonati è $neonati <br>";

    if ($numero_maggiorenni > 0) {
        echo "l'età media dei maggiorenni è " . ($eta_maggiorenni / $numero_maggiorenni) . "<br>";
        echo "le schede per le elezioni dovranno essere $numero_maggiorenni <br>";
    } else {
        echo "non ci sono maggiorenni"; //per testarlo cambia i numeri random da 0 a 17
    }

    ?>

<!-- VERIFICA: massimi, minimi, somme, medie, IF, FOR, ARRAY -->

</body>

</html>