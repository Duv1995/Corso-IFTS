<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio cicli innestati</title>
</head>

<body>
    <!-- ESERCIZIO: crea una tabella in HTML con contenuto in PHP -->
    <table border=1 style=border-collapse:collapse>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>

        <tr>
            <td>2</td>
            <td>4</td>
            <td>6</td>
        </tr>

        <tr>
            <td>3</td>
            <td>6</td>
            <td>9</td>
        </tr>

    </table>


    <hr>
    <!-- Voglio creare una tabella utilizzando i cicli con for per ogni riga -->

    <table border=1 style="border-collapse:collapse">
        <!-- non utilizzo echo dentro php, ma utilizzo multiple sezioni in PHP diverse -->
        <?php
        $fine = 10;
        //apro un ciclo che racchiude il mio ciclo che ho fatto in basso, per ripetere il tutto piu volte
        for ($riga = 1; $riga <= $fine; $riga++) { //per 10 volte aggiungo una riga <tr> in cui il contenuto è quello del ciclo for sottostante

            echo "<tr>";
            for ($cella = 1; $cella <= $fine; $cella++) { //per 10 volte aggiungo una cella <td> in cui il contenuto $i cambia per ogni iterazione
                echo "<td>$cella</td>";
            } /*se voglio ripetere tutto questo blocco di istruzioni per tot volte 
            devo innestarlo in un ciclo di livello superiore che lo rinchiude*/
            echo "</tr>";
        }
        ?>
    </table>
    <!-- In questo modo ottengo una tabella dove però ci son solo numeri da 1 a 10, io però voglio una tabella pitagorica delle tabelline -->

    <hr>
    <!-- Voglio creare una tabella utilizzando i cicli con for per ogni riga -->

    <table border=1 style="border-collapse:collapse">
        <!-- non utilizzo echo dentro php, ma utilizzo multiple sezioni in PHP diverse -->
        <?php
        $fine = 10;
        //apro un ciclo che racchiude il mio ciclo che ho fatto in basso, per ripetere il tutto piu volte
        for ($riga = 1; $riga <= $fine; $riga++) { //per 10 volte aggiungo una riga <tr> in cui il contenuto è quello del ciclo for sottostante
            echo "<tr>";
            for ($cella = 1; $cella <= $fine; $cella++) { //per 10 volte aggiungo una cella <td> in cui il contenuto $i cambia per ogni iterazione
                echo "<td>" . ($riga * $cella) . "</td>"; /*il contenuto delle celle però deve cambiare, 
                e deve contenere il prodotto tra il numero di colonna e il numero di riga per darmi le tabelline*/
            } /*se voglio ripetere tutto questo blocco di istruzioni per tot volte 
            devo innestarlo in un ciclo di livello superiore che lo rinchiude*/
            echo "</tr>";
        }
        ?>
    </table>



















</body>

</html>