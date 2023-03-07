<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo "Titolo dinamico in php"; ?> </title>
    <!-- posso mettere una parte in php dentro qualunque parte del codice html -->
</head>

<body>
    <p>Ciao mondo!!!
        <!-- Qui dentro possiamo solo scrivere linguaggio HTML, a meno che non cambio l'estensione del file in PHP -->
        <!-- qui sotto inserisco la prima parte dinamica in PHP, inizio scrivendo un tag particolare -->
        <?php
        //qui dentro posso scrivere in PHP, tutto quello che viene scritto qua non verrà interpretato dal browser
        //Commento in linea con doppio slash
        /*Commento delimitato
        fino alla chiusura del */
        echo "Ciao a tutti fellas!";
        //il comando ECHO stampa quello che gli dai tra virgolette, ricorda sempre il ; alla fine di un istruzione
        
        //tutto ciò che sta dentro il php non viene visualizzato sul browser come codice sorgente, 
        //ma viene rielaborato e visualizzi solo il risultato
        
        echo date("H:i:s");
        //stai chiedendo a echo di scrivere il riultato di questa funzione php, 
        //chiedendogli di scrivere ore minuti secondi dell'istante in cui l'interprete php ricarica la pagina
        ?>
    </p>
    <!-- ----------------------------------------------------------------------------------------------------------------------------- -->
    <!-- rinomino questo file index-1.php così non te lo da di default 
    appena scrivi nell'URL accanto local host il nome della cartella corso-php -->
</body>

</html>