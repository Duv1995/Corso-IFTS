<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>

<body>
    <?php
    /* OPERATORE SWITCH (PHP.NET per consultare il manuale PHP)
Funziona come gli switch delle porte ethernet.
The switch statement is similar to a series of IF statements on the same expression. 
In many occasions, you may want to compare the same variable (or expression) with many different values, 
and execute a different piece of code depending on which value it equals to. This is exactly what the switch statement is for.

Switch (tra parentesi una variabile $x) e poi seguono tutti i valori possibili di UGUAGLIANZA della variabile che ho scritto qui
    Case 1: (se vale 1 allora eseguo l'operazione dopo i due punti)
    switch ($m) { //valuto quanti giorni ha un mese
        case 1 : $giorni = 31; //in caso fosse gennaio di giorni ne ho 31
        case 2 : $giorni = 28, break; //in caso fosse febbraio di giorni ne ho 28
        BREAK serve per dire basta, ho finito di valutare le mie istruzioni, 
        perche se non metto break se ne trova altre le esegue entrambe
        default : $giorni = 30; /*è il caso che è sempre vero, quindi se non metto il break in tutte le righe, 
        oltre a eseguire quella giusta eseguirà sempre anche quella di default
    }
    
    //supponiamo di essere a Febbario
    $m=2; //febbraio
    switch ($m) { //valuto quanti giorni ha un mese
        case 1, 3, 5, 7, 8, 10, 12 : $giorni = 31, break; //tutti i mesi che hanno 31 giorni
        case 2 : $giorni = 28, break; //solo feb ha 28 giorni
        default : $giorni = 30; //gli altri rimasti ne han 30
        
    }
    

    switch ($i) {
        case 0: //lo comparo con il valore 0, è come scrivere == 0, valuta il valore della variabile $i
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
    }

    // è letteralmente equivalente a scrivere:

    if ($i == 0) {
        echo "i equals 0";
    } elseif ($i == 1) {
        echo "i equals 1";
    } elseif ($i == 2) {
        echo "i equals 2";
    }

    //questo è come si racchiudono piu case nello stesso blocco di istruzioni:

    switch ($i) {
        case 0:
        case 1:
        case 2:
            echo "i is less than 3 but not negative";
            break;
        case 3:
            echo "i is 3";
    }

    //per vedere una situazione di default che è sempre vera:

    switch ($i) {
        case 0:
            echo "i equals 0";
            break;
        case 1:
            echo "i equals 1";
            break;
        case 2:
            echo "i equals 2";
            break;
        default:
            echo "i is not equal to 0, 1 or 2";
    }
*/

    //ESERCIZIO: quanti giorni mancano alla fine del mese?

    //prima devo calcolare qual'è il mese corrente, utilizzando la funzione DATE
    echo date("d/m/Y"); //metto dentro le parentesi tonde delle stringhe, come d o M o n, per far apparire il mese automaticamente
    echo "<br>";
    //ora che so il giorno e il mese faccio una sottrazione e ci sono
    $m = date("m"); //assegno la variabile mese corrente mettendo date e la stringa m tra virgolette
    switch ($m) {
        case 2: //metto 02 perche ho scelto "m" per segnarmi il mese che ha 2 digits
            $giorni_del_mese = 28;
            break; //mettilo sempre il break
        case 4:
        case 6:
        case 9:
        case 11:
            $giorni_del_mese = 30;
            break;
        default: //invece che mettere tutti gli altri casi con dei case, metto default, che sarebbe tipo un else,
            //default va messo sempre per ultimo per valutare tutti i casi rimasti
            $giorni_del_mese = 31;
    }

    //ora dobbiamo calcolare quanti giorni del mese mancano
    $giorno = date("d"); //assegno una variabile al giorno di oggi, oppure no
    $giorni_mancanti = $giorni_del_mese - date("d");
    echo "giorni mancanti = $giorni_mancanti";


    //PER CASA: quanti giorni mancano al tuo compleanno?
    //mi serve la data di oggi e quella del compleanno, poi andare a calcolare ogni mese 
/* se il compleanno è gia passato faccio la somma tra il mio comple alla fine dell'anno + i giorni dall'inizio dell'anno a oggi
devo calcolare quanti giorni mancano alla fine del mese corrente + tutti i giorni degli altri mesi
DEVI PRENDREDRE DUE VARIABILI, IL MESE E I GIORNI
poi fai la differenza tra giorni passati dall'inizio del mese
fai il calcolo di quanti giorni mancano e di quanti mesi mancano poi li sommi assieme
PER METTERE UNA DATA FISSA
*/




    ?>
</body>

</html>