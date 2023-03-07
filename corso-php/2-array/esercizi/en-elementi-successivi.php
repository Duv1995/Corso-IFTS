<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio</title>
</head>

<body>
    <?php
    /*dato un array di interi $a1 crea un array a2 in cui ogni elemento en 
    è la somma degli elementi en successivi di a1 (compreso en) e in cui ci si ferma a 0
    se c'è 0 riportare 0
    per capirci meglio:
    $a1= [5,1,0,3,2] 
    dovrà creare -> for ($i = 0; ; $i++)
    cioè devo fare un ciclo che per 5 volte quindi $a1[$i] volte partendo da $i deve sommare gli elementi j-esimi cche prende in considerazione
    $a2= 
    */

    //inizializzo l'array a1 dandogli 5 valori random
    for ($i = 0; $i < 5; $i++) {
        $a1[$i] = rand(0, 5);
    }
    print_r($a1);

    $valore = "non ancora gestito"; //inizializzo la variabile valore che si riferisce ai valori $i di a2
    for ($i = 0; $i < count($a1); $i++) {
        //calcolo il valore da asegnare ad a2 in posizione $i
        //prima calcolo i casi particolari 1 e 0, in cui il valore della prima $i di a2 è uguale al primo $i di a1
        if ($a1[$i] == 0 or $a1[$i] == 1) {
            $valore = $a1[$i]; //perche a1 = (1) -> a2 = (1) sono uguali nel primo valore
        } else {
            //se mi escono i numeri da 2 a 5 invece devo scorrere tutto l'array a partire dalla posizione corrente
            //quindi creo un altro for per scorrere l'array
            $somma = 0;
            for ($j = $i; ($j < ($a1[$i] + $i) and $j < count($a1)); $j++) {
                //devo partire dall'elemento $i posizione 1 (seconda posizione perche la prima è 0)
                //parto dall'elemento $i-esimo di a1, guardo quanto vale e in base al suo valore (es vale 3), 
                //prendo tot valori (es 3 valori) contenuti in a1 a partire da $i e li sommo assieme a $i ($i + 3 valori dopo),
                //e questo mi da il valore $j di a2, tutto questo lo ripeto
                //finchè non finisco i valori contenuti in a1
                echo "<br>i= $i j=$j a1[i] = {$a1[$i]} a1[j] = {$a1[$j]}";
                $somma += $a1[$j];
            }
            $valore = $somma;
        }
        $a2[$i] = $valore; //il mio obiettivo è trovare questo valore per capire quanto vale ciascun indice
    }
    echo "<br>";
    print_r($a2);
    ?>
</body>

</html>