<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>
</head>

<body>
    <?php
    //CICLI FOR
    /* serve per ripetere un certo numero di volte un operazione in ciclo
    for (5 volte) {
    echo "ciao <br>";
} in questo modo otterrò ciao, ciao, ciao x5 volte

dentro la parentesi del ciclo for ho sempre 3 elementi: for (elemento 1; elemento 2; elemento 3)
> elemento 1 = inizializzazione giri, $i=1 parto da 1; 
> elemento 2 = condizione per continuare il ciclo senza finire in loop, $i <= 5 finchè $i è minore o uguale a 5 il ciclo continua;
> elemento 3 = istruzione di fine iterazione, $i++ (incrementato di 1) 
così ad ogni ciclo la variabile incrementa finchè non è superiore a 5 e a quel punto si ferma;
*/

    for ($i = 1; $i <= 10; $i++) {
        echo "$i) ciao <br>"; //così vedo anche come varia il valore di $i per ogni ciclo
    }
    echo "i=$i"; //vediamo a che valore è arrivato $i alla fine del ciclo

    echo "<hr>";

    //ora voglio sapere se ogni numero che salta fuori è multiplo di 2 oppure no
    for ($i = 1; $i <= 10; $i++) {

        if (($i % 2) == 1) { //inserisco la condizione se $i modulo 2 ha resto, dunque se non è vero che è un multiplo di 2
            echo "<p style=background-color:#ccc>"; //gli diamo anche uno sfondo bellino nel caso non siano multipli
            echo "$i NON "; //aggiungo il NON se da resto 1 quindi se non è multiplo
        } else { //se altrimenti è multiplo di 2 allora...
            echo "<p style=background-color:#fff>"; //gli diamo anche uno sfondo di colore diverso
            echo "$i "; //così stampo il numero e basta se è multiplo
        }
        echo "multiplo di 2 <br>"; //questo viene stampato sempre
    }
    echo "<hr>";

    //ora voglio che vengano stampati solo i multipli di 3 e che mi conti quanti sono questi multipli
    //mi servirà una variabile che mi dice quanti multipli ho trovato
    $multipli = 0; //parte da zero ma poi aumenta ogni volta che ne trovo uno

    for ($i = 1; $i <= 10; $i++) {


        if (!($i % 3)) { //punto esclamativo davanti significa NOT, dunque se $i non è multiplo e ha resto diverso da 0
            //$i %3 == 1 -> NON è multiplo perche ha resto
            //$i %3 -> identico alla riga sopra, quindi NON multiplo
            //!($i % 3) -> ! davanti significa NEGAZIONE, quindi NON non è multiplo (due negazioni è multiplo)

            echo "$i multiplo di 3 <br>";  //stampo il numero se è multiplo di 3
            $multipli++; //aggiungo +1 ogni volta che trovo un multiplo 
        } else { //se altrimenti è multiplo di 3 allora non stampo niente, posso anche non scrivere ELSE
        }
    }
    echo "i multipli di 3 da 1 a 10 sono $multipli";
    echo "<hr>";

    //contare i multipli di 3 da $inizio a $iterazioni
    $multipli = 0;
    $inizio = 5;
    $iterazioni = 10;

    for ($i = $inizio; $i <= ($inizio + $iterazioni); $i++) {
        if (!($i % 3)) {
            echo "$i multiplo di 3 <br>";
            $multipli++;
        }
    }

    echo "i multipli di 3 da $inizio a $iterazioni sono $multipli";
    echo "<hr>";

    //ESERCIZIO: elenca i primi 11 multipli di 3 
    //da 1 a 100, utilizzando i numeri dinamici (variabili)

    $num = 0; //numeri multipli trovati
    $numeri = 11; //quanti multipli voglio trovare
    $inizio = 1;
    $fine = 100;

    for ($i = $inizio; $i <= $fine; $i++) {
        if (($i % 3) == 0) { //se è multiplo
            //oppure (!($i % 3)) stessa cosa
            $num++; //ogni volta che ne trovo uno aumento
            if ($num == $numeri)
                break; //gli dico di smettere di contarli se ne trovo 11
                /*OPPURE creo la variabile $finito e scrivo
                $finito = true; */
            echo "$num) $i multiplo di 3 <br>"; //così elenco tutti i numeri trovati, ma a me servono solo i primi 11
        }
    }

    echo "I primi $num multipli di 3 da $inizio a $fine sono questi";
    echo "<hr>";













    ?>

</body>

</html>