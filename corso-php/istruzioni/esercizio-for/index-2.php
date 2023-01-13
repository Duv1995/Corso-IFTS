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
    /* ESERCIZIO PASSO A PASSO*/

    $background_color1 = "#ccc";
    $background_color2 = "#fff";
    $start = 10;
    $repeat = 20;
    $numero_iterazioni = 0;
    $numeri_pari = 0;
    $date = date("m");


    /*3. Modificare l'algoritmo che produce la lista del punto 1, inserendo la condizione che non si
    devono considerare i numeri negativi.
    FACOLTATIVO: realizzare una seconda pagina identica alla precedente con una istruzione ciclica
    differente*/
    for ($i = $start; $i > ($start - $repeat) and ($i >= 0); $i--) { /*aggiungo un AND per assegnare una condizione aggiuntiva, 
        per cui $i deve essere maggiore o uguale a zero, quindi non negativo*/

        if ($i % 2) {
            $background_color = $background_color1;
        } else {
            $background_color = $background_color2;
        }
        echo "<div style = background-color:$background_color>";

        echo $i;
        if ($i % 2 == 0) {
            $numeri_pari++;
        }

        if ($i == $date) {
            echo " - " . "<i> $date </i>";
        }

        echo " - " . "<span style=color:red>" . ($i * 2) . "</span>";
        if (($i * 2) % 2 == 0) {
            $numeri_pari++;
        }

        echo "</div>";
        $numero_iterazioni++;
    }

    echo "<hr>";

    echo "<hr>";
    echo '$start: ' . "$start";
    echo "<br>";
    echo '$repeat: ' . "$repeat";

    echo "<hr>";
    echo '$numero_iterazioni: ' . "'$numero_iterazioni'";

    echo "<hr>";
    echo '$numeri_pari: ' . "'$numeri_pari'";



    ?>
</body>

</html>