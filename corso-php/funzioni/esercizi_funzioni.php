<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizi funzioni</title>
</head>

<?php
// le funzioni che mi servono le scrivo tutte qui sopra
/** COMMENTO RAPIDO
 * sash + 2 asterischi e ti apre un commento su piu righe!
 * UTILISSIMO!!!
 */

//  COMMENTO LA MIA FUNZIONE COLORE
/** COLORE restituisce un colore diverso in base al giorno corrente
 * @param mixed $name (così si segna il parametro di ingresso, 
 * nel nostro caso non serve però)
 * @return string (qui segno cosa mi restituisce)
 */
function colore()
{
    $w = date("w");
    // w è il formato della data che mi restituisce il 
    // giorno della settimana da 0 a 7, che mi serve
    // per sapere quale giorno è e dargli un colore
    switch ($w) {
        case 1:
            $colore = "ff0000"; //il primo caso è il lunedi, che sarà rosso
        case 2:
            $colore = "#00ffff"; //martedì
        case 3:
            $colore = "#00ffff"; //mercoledi
        case 4:
            $colore = "#0000ff"; //gividi
        case 5:
            $colore = "#ff00ff"; //gividi
            break;
        default:
            $colore = "#000000"; //di default do invece colore nero
    }
    return $colore; //il risultato che verrà restituito
}
?>

<body>
    <?php
    // ESERCIZI
    // 2) Scrivere una funzione che restituisce una stringa contenente un codice colore
    // in base al giorno corrente della settimana (es il lunedì restituisce 
    // il colore rosso, il martedì il colore giallo, ecc).

    // richiamo la mia funzione creata sopra
    $colore = colore(); //assegnando il suo risultato a una variabile colore
    ?>

    <div style="background-color: <?php echo $colore ?>">div colorato</div>

</body>

</html>