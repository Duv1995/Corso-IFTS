<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2: la vendetta</title>
</head>

<body>
    <?php
    /*Fin ora abbiamo visto gli array con indici numerici e tutti consecutivi, ma in realtà
    non si presentano sempre così, eeh, voleeeevi!*/

    $a = []; //così si rappresenta un array vuoto, che di default vale FALSE
    $a = [5, 6, 8, 2]; //così inizializzo un array con i suoi elementi, ordinatamente
    // distribuiti nei suoi indici 0, 1, 2, 3
    $a[2] = 10; // in questo modo invece assegno un valore diverso all'indice 2, 
    // sostituendo il valore 8 che c'era prima
    $a[4] = 12; // così invece aggiungo un nuovo elemento all'array in un nuovo indice
    $a[] = 15; //in questo modo invece aggiungo un nuovo elemento 
    // nel primo indice disponibile consecutivo a quelli gia esistenti (in questo caso il 5)

    //ma talvolta può capitare che negli indici del mio array ci sono dei buchi!
    $a[25] = 8; //aggiungo un indice 25 lasciando vuoti quelli da 4 a 25, OMG!
    /*in questi casi non posso più scorrere il mio array con il ciclo for :c
    il ciclo for quindi si usa solo se l'aray ha indici numerici consecutivi*/
    // se dopo aver fatto questo aggiungessi un altro elemento così
    $a[] = "pippo"; // lui lo aggiungerà nell'indice 26, non va a riempire i buchi precedenti!

    /*inoltre gli indici degli array possono essere anche STRINGHE (non solo numeri)! che schifo!
    in questi casi utilizzare un indice mnemonico fa perdere di significato al termine 'posizione'
    l'array diventa un semplice contenitore di elementi non consecutivi, 
    e prendono il nome di ARRAY ASSOCIATIVI*/
    $a["prof"] = "rossi";


    /*in questi tipi di array utilizziamo un altra istruzione, FOR EACH, 
    che indica 'per ogni elemento di $a*/
    foreach ($a as $valore) { //per ogni elemento di $a che chiamero $valore
        echo "$valore<br>";
        //così facendo stamperà tutti i valori non vuoti, compresi le stringhe di testo
    }
    echo "<hr>";


    // un altro modo per assegnare indice e valore in modo piu specifico è tramite il simbolo =>
    $a = [1, 5, 8, 3 => 4, 'chiave' => "valore"];
    // 3 (indice) => 4 (valore)
    // 'chiave' (tra gli apici singoli) => "valore" (tra virgolette)

    // utilizzare il foreach per gli array non sbagli mai!
    foreach($a as $k => $v){
        echo "$v<br>";
    }












    ?>
</body>

</html>