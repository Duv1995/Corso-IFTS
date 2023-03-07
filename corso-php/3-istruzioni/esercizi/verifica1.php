<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio completo difficilissimo</title>
</head>

<body>
    <?php
    /* Esercizio completo sui cicli

1. Realizzare una pagina php che presenti una sequenza di numeri interi con sfondo alternato per
ogni riga. I dati elencati devono rispettare le seguenti regole:

> la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $start) e
analizzare tutti gli interi precedenti;
(due soluzioni: $i che conta il numero di ripetizioni o che rappresenta il numero da analizzare)*/
    /*> L'analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile
$repeat);
> se il numero considerato corrisponde al mese della data corrente, deve essere scritto in
corsivo; (if poi uso il tag thml per il corsivo)
> di ogni numero considerato, scrivere sulla stessa riga il suo valore e il valore doppio (in
rosso)*/

    /*2. Al termine dell'elenco, separando con una riga orizzontale (hr), scrivere:
> i dati assegnati, con questa specifica frase: “$start: "valore variabile"; $repeat: "..."; “;
> quanti numeri pari sono stati scritti (considerando anche i valori del doppio);
> il numero di ripetizioni effettivamente eseguite.*/

    /*3. Modificare l'algoritmo che produce la lista del punto 1, inserendo la condizione che non si
devono considerare i numeri negativi.
FACOLTATIVO: realizzare una seconda pagina identica alla precedente con una istruzione ciclica
differente*/

    //vediamo com'è il ciclo normale di default
    for ($i = 1; $i <= 5; $i++) { //(valore iniziale, finchè $i >= 5 continuo il ciclo, incremento il ciclo)
        echo $i; //gli faccio scrivere i primi 5 num
    } //arrivati a 5 l'istruzione successiva sarà quella dopo la graffa
    echo "<hr>";

    /* ESERCIZIO PASSO A PASSO

1. Realizzare una pagina php che presenti una sequenza di numeri interi con sfondo alternato per
ogni riga. I dati elencati devono rispettare le seguenti regole:*/
    $background_color1 = "#ccc"; //uso una variabile per definire il colore dello stile che linkerò dopo
    $background_color2 = "#fff"; //colore per le righe alternate

    /*> la sequenza deve iniziare da un numero assegnato (memorizzato nella variabile $start) e
analizzare tutti gli interi precedenti;
(due soluzioni: $i che conta il numero di ripetizioni o che rappresenta il numero da analizzare)*/
    $start = 10; //uso la variabile invece che un numero fisso da cui partire
    $repeat = 5; //uso la variabile per capire quanti cicli fare

    //l'esercizio vuole che DECREMENTIAMO, quindi:
    $numero_iterazioni = 0; //aggiungo questa variabile perche voglio calcolare il numero di iterazioni/cicli
    // L'analisi deve essere ripetuta per un numero di volte assegnato (memorizzato nella variabile $repeat);

    $numeri_pari = 0; //aggiungo un altra variabile per la parte finale dell'esercizio, che mi chiede di trovare i numeri pari trovati

    $date = date("m");

    for ($i = $start; $i > ($start - $repeat); $i--) {
        //vogliamo fare un num di iterazioni all'indietro definito dalla variabile $repeat partendo da $start
        //continuerà a ciclare finchè $i (che varia ogni ciclo) è maggiore dei cicli iniziali - numero di ripetizioni che voglio fare

        //voglio fare si che il background color sia uno o l'altro a righe alternate, dunque a seconda che la $i sia pari o dispari
        if ($i % 2) { //utilizzo il modulo 2 per capire se le $i del ciclo sono pari o dispari
            $background_color = $background_color1;
        } else {
            $background_color = $background_color2;
        }
        echo "<div style = background-color:$background_color>"; //apro un div per metterci lo stile di sfondo con il tav html e una variabile

        echo $i; //gli faccio scrivere i primi 6 num decrementati
        if ($i % 2 == 0) { //se $i è pari (quindi con resto zero) allora incremento il numero dei $numeri_pari trovati
            $numeri_pari++;
        }

        /*> se il numero considerato corrisponde al mese della data corrente, deve essere scritto in
        corsivo; (fai if e metti date poi uso il tag thml per il corsivo)*/
        if ($i == $date) {
            echo " - " . "<i> $date </i>";
        }

        //> di ogni numero considerato, scrivere sulla stessa riga il suo valore e il valore doppio (in rosso)*/
        echo " - " . "<span style=color:red>" . ($i * 2) . "</span>"; //span per cambiare il colore nella stessa riga
        if (($i * 2) % 2 == 0) { //se $i*2 è pari (quindi con resto zero) allora incremento il numero dei $numeri_pari trovati
            $numeri_pari++;
        }


        echo "</div>"; //e chiudo il div per definire fin dove si estende il colore di sfondo
        $numero_iterazioni++; //aumento il ciclo
        //echo "numero iterazioni " . $numero_iterazioni; //faccio apparire il numero di iterazioni gia aumentato
    }

    echo "<hr>";


    /*2. Al termine dell'elenco, separando con una riga orizzontale (hr), scrivere:
    > i dati assegnati, con questa specifica frase: “$start: "valore variabile"; $repeat: "..."; “;*/
    echo "<hr>";
    echo '$start: ' . "$start";
    echo "<br>";
    echo '$repeat: ' . "$repeat"; 

     /*> il numero di ripetizioni effettivamente eseguite.*/
    echo "<hr>";
    echo '$numero_iterazioni: ' . "'$numero_iterazioni'"; //indico il numero di iterazioni che ottengo alla fine ciclo

    /*> quanti numeri pari sono stati scritti (considerando anche i valori del doppio);*/
    echo "<hr>";
    echo '$numeri_pari: ' . "'$numeri_pari'";

   


/*3. Modificare l'algoritmo che produce la lista del punto 1, inserendo la condizione che non si
devono considerare i numeri negativi.
FACOLTATIVO: realizzare una seconda pagina identica alla precedente con una istruzione ciclica
differente*/




    ?>
</body>

</html>