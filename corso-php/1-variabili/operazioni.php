<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni</title>
</head>

<body>
    <?php
    //oggi vediamo le operazioni con le variabili
    $a = 10;
    $b = 2;
    $c = $a + $b; //la somma è mega intuitiva!
    echo '$c=' . $c; //stampo la somma
    echo "<br>";
    echo '$a + $b = $c <br>'; //così lo faccio apparire tutto testualmente
    echo "$a + $b = $c"; //così faccio apparire i valori delle variabili in numero
    echo "<br>";
    echo $a * $b; //così è come scrivere la somma all'inizio, senza le virgolette i simboli eseguono le loro operazioni
    echo "<br>";
    echo "$a * $b = " . $a * $b; //abbiamo scritto una parte statica a cui concateniamo solo il risultato perche lo calcoliamo fuori virgolette,
    echo "<br>";
    echo "$a * $b = " . ($a * $b);
    //per essere sicuro posso anche mettere tra parentesi per dare priorità all'operazione che voglio fare per prima, funziona come nella maths
    echo "<br>";
    /*in PHP può capitare di fare operazioni tra stringhe e numeri*/
    $s = "stringa";
    echo $s . " " . $a; //in questo modo mi uscirà 'stringa 10' vengono concatenate perche pure il numero diventa una stringa
    //echo $s + $a; //in questo caso darebbe errore lol
    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//
    
    //OPERATORE MODULO %
    /*il modulo è il resto intero di una divisione
    5 / 2 = mi darebbe il risultato 2,5
    5 % 2 = mi darebbe risultato intero 2 con resto di 1
    il modulo è lo strumento che di solito si usa per fare sfondi alternati per facilitare la lettura*/

    echo $a != $b; //!= serve per verificare se due valori sono DIVERSI, se mi da 1 significa vero, se non mi da nulla significa falso
    echo "<br>";
    echo $a == $b; //== verifica se due valori sono UGUALI, in questo caso mi da vuoto quindi è falso
    echo "<br>";
    //echo $a = $b; //attenzione, mettere un solo = equivale ad assegnare un nuovo valore, trasformo a (10) in b (2)
    echo "<br>";
    echo $a >= $b; // maggiore o minore per confrontare
    echo "<br>";
    /*Operatore ternario = simile alla funzione SE di excel, condizione? se vero faccio X se falso faccio Y*/
    echo "A = $a e B = $b allora ";
    echo ($a >= $b ? "A maggiore di B" : "B maggiore di A");
    //il primo elemento è la condizione $a >= $b ? (le parentesi sono opzionali)
    //il secondo elemento è la condizione vera "a maggiore di b"
    //il terzo elemento è la condizione falsa "b maggiore di a"
    
    echo "<br>";
    //e se invece ho due valori uguali? di default mi da che A maggiore di B perche la prima condizione è verificata
    $a = 2;
    $b = 2;
    echo "A = $a e B = $b allora ";
    //$risultato = ($a >= $b ? (condizione? se vero x : altrimenti y) : "B maggiore di A");
    $risultato = ($a >= $b ? ($a == $b ? "A uguale a B" : "A maggiore di B") : "B maggiore di A");
    //ho aggiunto un altra condizione dentro la mia condizione iniziale per valutare il caso in cui siano uguali
    echo $risultato; //questa volta ti da che A è uguale a B
    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//
    
    //ESERCIZI
    echo '1) Dati $a e $b, calcolare la media tra i 2 numeri <br>';
    $a = 6;
    $b = 10;
    $media = ($a + $b) / 2;
    echo "la media tra $a e $b è " . $media;
    echo "<br>";

    echo '2) Invertire il contenuto di $a e $b <br>';
    $a = 9;
    $b = 4;
    echo "prima a = $a e b = $b <br>";
    //ho bisogno di una variabile temporanea, una sorta di contenitore in cui passare le mie variabili per invertirne i contenuti
    $temp = $a;
    $a = $b;
    $b = $temp;
    //uso $temp come contenitore per switcharne i valori
    echo "dopo a = $a e b = $b <br>"; //questa deve rimanere identica
    



    echo '2) Scrivere se la variabile $x è multipla di 3 <br>';
    $x = 9;
    $x % 3; //modulo per vedere se da resto zero
    $condizione = $x % 3 ? "$x non è multiplo di 3" : "$x è multiplo di 3";
    echo $condizione;
    echo "<br>";
    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//
    
    /*OPERATORE ++ E --
    Sono operatori che hanno bisogno di un solo operando, 
    serve per incrementare/diminuire di una singola unità l'operando a cui è applicato*/
    $a = 3;
    echo "prima a = $a <br>"; //a vale 3
    $a++; /*gli dico di incrementare di una unità,
     è uguale a scrivere $a = $a +1; è praticamente una shortcut, ma potevo anche scrivere ++$a; 
     la differenza è che con $a++; prima restituisce il valore di $a poi lo incrementa, 
     con ++$a; invece prima incremento $a poi restituisce il valore gia incrementato*/
    echo "dopo a = $a <br>"; //ora a vale 4
    //vediamola concatenata:
    echo "dopo ancora a = " . $a++ . "<br>"; //se la concateno con $a++; non mi da subito valore 5 ma sempre 4 perche ancora doveva calcolarlo
    echo "risultato calcolato = $a <br>";
    //se invece uso subito $a++; concatenandola vedi subito il risultato
    echo "dopo ancora a = " . ++$a;
    //con il -- è la stessa identica cosa
    
    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//
    
    //OPERATORI LOGICI
    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//
    

    /*OPERATORE LOGICO AND
    Sono operatori che uniscono invece che valori numerici dei valori logici (if, and, or), e quindi danno risultati booleani (true/false)
    ad esempio se vuoi creare una condizione logica del tipo "la gf è buona SE è bella E simpatica*/
    //Esercizio: mi voglio chiedere se $x è compreso tra 200 e 90, quindi se è minore di 100 e maggiore di 90
    $x = 100;
    $a = 90;
    $b = 200;
    $compreso = ($x >= $a) and ($x <= $b); /*questo è l'operatore logico AND che posso anche scrivere come &&*/
    //in questo modo mi restituisce vero solo se ENTRAMBE le condizioni sono vere
    echo $compreso ? "x compreso" : "x non compreso";
    echo "<br>";
    //oppure potevo anche scriverlo come
    echo (($x >= $a) and ($x <= $b)) ? "x compreso" : "x non compreso";
    echo "<br>";


    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//
    /* OPERATORE LOGICO OR
    OR invece restituisce vero anche se solo una delle due operazioni è vera, può essere una o l'altra*/
    //Esercizio: puoi entrare solo se ti chiami Mario o Giovanni
    
    $nome1 = "Mario";
    $nome2 = "Giuseppe";
    $nome_mio = "Mario";

    $nome_corretto = (($nome_mio == $nome1) or ($nome_mio == $nome2)) ? "nome corretto" : "nome non corretto";
    /*la condizione da valutare è se il nome mio è uguale uguale a mario OPPURE giuseppe, almeno a una delle due*/
    echo $nome_corretto;
    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//
    


















    echo "<hr>";
    //----------------------------------------------------------------------------------------------------------------------//
    //COMPITI PER CASA
    /*Esercizi 1 slide powerpoint + esercizio su classroom!!! (puoi anche eseguire gli esercizi con la funzione IF invece che la ternaria)*/








    ?>
</body>

</html>