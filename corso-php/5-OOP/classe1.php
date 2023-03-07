<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREIAMO UNA CLASSE</title>
</head>

<body>
    <?php

    // CREO UNA CLASSE
    class Esempio
    {
        // una classe è un contenitore di proprietà e metodi
        // è ciò che i suoi oggetti possono fare e contengono
        // ma di default non fa nulla, sta ferma come un sasso

        public $stringa = ""; 
        //inizializzo sempre le variabili che uso dentro la classe

        function stampa_qualcosa($stringa)
        {
            echo $stringa . "<br>";
        }

        function stampa_qualcosa_in_grassetto($stringa)
        {
            echo "<b>";
            echo $this->stampa_qualcosa($stringa);
            // richiama una funzione presente in QUESTA classe
            echo "</b><br>";
        }
    }
    $e = new Esempio();
    // questo oggetto funziona correttamente, 
    // anche se la classe esempio è vuota e non ha costruttore!
    // ovviamente però, una classe senza funzionalità non ci serve a niente...

    // posso scegliere se usare le due funzioni della classe di appartenenza di $e
    $e->stampa_qualcosa("L M A O");
    $e->stampa_qualcosa_in_grassetto("L M A O");

    // voglio cambiare il nome della stringa della classe (che è pubblica)
    $e->stringa = "Nuovo valore di stringa";
    // poi lo stampo in grassetto
    $e->stampa_qualcosa_in_grassetto($e->stringa);
    echo "<hr>";

    



    ?>
</body>

</html>