<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nuova Citta</title>
</head>

<body>

    <!-- creo un altro form per inserire una nuova regione 
        nell'area geografica selezionata sopra -->

    Inserimento nuova regione dell'area geografica <!-- nome area geografica selezionata -->
    <?php
    // per sapere quale regione ricevo dalla pagina precedente devo usare la variabile superglobale!
    // print_r($_GET); 
    // stampa l'array dell'area geografica selezionata precedentemente
    // quindi mi basta specificare la chiave area geografica e stamparla!
    echo $_GET['area_geografica'] . "<br>";
    ?>
    <!-- l'area geografica è $area_geografica, aka quella che ho messo 
    in modo dinamico nel link -->
    <form action="inserimento_nuova_regione.php" method="GET">
        Nome <input type="text" name="regione" value="<?php 
        // mi devo prima assicurare che regione esista nel link, 
        // perchè se non c'è stampa errore!
        if (array_key_exists('regione', $_GET)){
            echo $_GET['regione'];
        } // se non c'è non stamperò nulla!
        ?>">
        <!-- nell'input il tag fondamentale è il name perchè sennò 
        la pagina dopo non sa come chiamarlo, 
        come valore predefinito prendo il nome della regione 
        che ci viene passato dal link URL -->

        <!-- metto come altro campo area geografica che apparirà anche questa precompilata -->
        Area geografica <input type="text" name="area_geografica" value="<?php echo $_GET['area_geografica'] ?>">
        
        <button>Inserisci</button>
        <!-- creo il file inserimento_nuova_regione.php -->
    </form>

</body>

</html>