<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1° funzione</title>
</head>

<body>
    <?php
    function mia_somma($a, $b){
        $ris = $a + $b;
        return $ris;
    }

    $r = mia_somma(2, 3);
    echo $r;

    ?>

</body>

</html>