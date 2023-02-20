<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAC-SIMILE VERIFICA</title>
</head>

<body>
    <?php
    /*Esercizio PHP su array bidimensionali e funzioni

    Sono forniti gli array elencati di seguito (i valori memorizzati sono solo indicativi) utilizzati per
    monitorare la correttezza delle risposte della chat aziendale del sito internet:
    $domanda1 = array('categoria' => "commerciale", 'risposta_corretta' => 0);
    $domanda2 = array('categoria' => "assistenza", 'risposta_corretta' => 1);
    $domanda3 = array('categoria' => "assistenza", 'risposta_corretta' => 0);
    $domande = [$domanda1, $domanda2, $domanda3];
    Si chiede di svolgere le seguenti attività:
    1. elencare le categorie delle domande (senza ripetizione!)
    2. quante sono le risposte corrette? (il valore 1 corrisponde alla risposta corretta);
    3. definire la funzione che ha come parametro d'ingresso l'array $domande e restituisce il
    nome della categoria più utilizzata;
    4. modificare la funzione del punto precedente in modo che restituisca anche il numero di volte
    che è stata utilizzata la categoria 
    (N.B. una funzione può restituire 2 valori solo restituendo un array)
    5. se ogni risposta alle domande costasse all'azienda 50 centesimi di euro, quanto sarebbe
    costato rispondere alle domande? (scrivere i numeri nel formato corretto!)
    */

    $domanda1 = array('categoria' => "commerciale", 'risposta_corretta' => 0);
    $domanda2 = array('categoria' => "assistenza", 'risposta_corretta' => 1);
    $domanda3 = array('categoria' => "assistenza", 'risposta_corretta' => 0);
    $domande = [$domanda1, $domanda2, $domanda3];


    // --------------------------------------------------------------------------------------------------------- //
    // 1. elencare le categorie delle domande (senza ripetizione!)
    echo "Le categorie di domanda sono: ";

    foreach ($domande as $domanda) {
        foreach ($domanda as $k => $v) {
            // devo dirgli: se l'indice di ciascun array è 'categoria' allora stampa il valore di quella cella
            if ($k == 'categoria')
                echo $domanda[$k] . ", ";
        }
    }



    echo "<hr>";
    // --------------------------------------------------------------------------------------------------------- //
    // 2. quante sono le risposte corrette? (il valore 1 corrisponde alla risposta corretta);
    $domande_corrette = 0; //inizializzo FUORI dal ciclo

    foreach ($domande as $domanda) {
        foreach ($domanda as $k => $v) {

            // devo dirgli: se il valore di ciascun array è 1 allora aumenta il contatore
            if ($v == 1)
                $domande_corrette += $v;
        }
    }
    echo "Le domande corrette sono: " . $domande_corrette;
    echo "<hr>";
    // --------------------------------------------------------------------------------------------------------- //
    // 3. definire la funzione che ha come parametro d'ingresso l'array $domande e restituisce il
    // nome della categoria più utilizzata;

    function categoria_piu_utilizzata($domande)
    {
        $categoria_spam = "";

        foreach ($domande as $domanda) {
            foreach ($domanda as $k => $v) {
            // paragono se la categoria di un array è uguale a quella del prossimo? come si fa? boh...
            }
        }

        return $categoria_spam;
    }
    echo "La categoria piu utilizzata è: " . categoria_piu_utilizzata($domande);







    ?>
</body>

</html>