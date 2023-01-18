<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Debugging is(not) Fun!</title>
</head>

<body>
    <?php
    echo "ciao mondo!";
    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    ?>
</body>
</html>

<?php
//calcolo il fattoriale di un numero
function fattoriale ($valore) {
    if ($valore ==1) {
        return 1; //mi fermo quando arrivo a 1
    } else {
        return fattoriale($valore - 1) * $valore; //moltiplico il suo valore per quello che è tornato
    }
}
?>