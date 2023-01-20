<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica PHP</title>
</head>

<body>
    <?php
    // VERIFICA PHP 
    // Si deve gestire l'elenco dei voti assegnati agli studenti di un corso. Si chiede di svolgere le seguenti attività:

    // 1. Inizializzare il numero di studenti del corso assegnando un numero casuale da 20 a 50 (rand);
    // 2. Considerando che il giorno dell'esame 2 studenti erano assenti, valorizzare l'array dei voti
    // di ogni studente presente con interi casuali da 1 a 100; (dei 20-50 in realtà gli elementi sono 2 in meno!)
    // 3. (elabora array) elencare tutti i voti presenti nell'array con uno sfondo alternato nelle varie righe, scrivendo
    // in grassetto i voti sufficienti e in corsivo quelli insufficienti (sufficienza = 60, lode = 101);
    // 4. modificare l'elenco del punto precedente utilizzando un elenco ordinato html; (ol, li)
    // 5. in un riquadro, riportare quante volte è stata assegnata la lode (conto quante volte appare 101) e quante volte è stato
    // assegnato il voto piu basso (tra quelli assegnati realmente); (devo prima calcolare il voto piu basso per trovare il
    // minimo poi confronto quanti voti sono == minimo)
    // 6. calcolare e visualizzare il voto medio solo dei promossi;
    // 7. Per accedere ad un corso specialistico di livello superiore, si deve aver superato l'esame 
    // con un voto minimo di 80 e sono disponibili solo un numero limitato di posti (definito a 
    // priori nella variabile $posti, di tutti quelli che hanno preso almeno 80 ne prendo solo un tot): 
    // calcolare e visualizzare quanti sono gli studenti 
    // potenzialmente ammessi e di questi la percentuale che rimane in lista d'attesa (percentuale : 100).

    //----------------------------------------------------------------------------------------------------------------------------------------//

    // 1. Inizializzare il numero di studenti del corso assegnando un numero casuale da 20 a 50 (rand);
    $voti = []; //inizializzo un indice dell'array dei voti
    $num_studenti = rand(20, 50) - 2; //studenti presenti - 2 assenti
    // 2. Considerando che il giorno dell'esame 2 studenti erano assenti, valorizzare l'array dei voti
    echo "Gli studenti presenti sono $num_studenti <br>";

    // 3. (elabora array) elencare tutti i voti presenti nell'array con uno sfondo alternato nelle varie righe, 
    $bg_color1 = "#ccc"; //uso una variabile per definire il colore dello stile che userò dopo
    $bg_color2 = "#fff";

    // scrivendo in grassetto i voti sufficienti e in corsivo quelli insufficienti (sufficienza = 60, lode = 101);
    $style_suff = "b";
    $style_insuff = "i";
    
    //inizializzo variabili per i tipi di voto
    $sufficienti = 0;
    $insufficienti = 0;
    $lodi = 0;
    $voto_peggiore = 101;
    $peggiori = 0; //numero di studenti che hanno preso il voto peggiore
    $somma_suff = 0;
    $potenzialmente_ammessi = 0; //quelli con voto minimo di 80
    
    echo "<hr>";
    // 4. modificare l'elenco del punto precedente utilizzando un ELENCO ORDINATO html; (ol, li)
    echo "<ol>";

    for ($i = 0; $i < $num_studenti; $i++) {
        $voti[$i] = rand(0, 101);
        //faccio le righe alternate
        if ($i % 2) {
            $bg_color = $bg_color1;
        } else {
            $bg_color = $bg_color2;
        }
        echo "<li style = background-color:$bg_color>";

        //calcolo quanti sono potenzialmente ammessi al corso specialistico
        if ($voti[$i] >= 80) {
            $potenzialmente_ammessi++;
        }

        //valuto che tipo di voti trovo
        if ($voti[$i] >= 60) {
            $style = $style_suff;
            $somma_suff += $voti[$i];
            $sufficienti++;
            if ($voti[$i] == 101) {
                $lodi++;
            }
        } else {
            $insufficienti++;
            $style = $style_insuff;
        }
        //stampo i voti con il loro stile specifico
        echo "<$style>" . $voti[$i] . "</$style>" . "<br>";
        echo "</li>";

        //valuto qual'è stato il voto peggiore
        if ($voti[$i] < $voto_peggiore) {
            $voto_peggiore = $voti[$i];
            $peggiori++; //è sbagliato non so come farlo :c
        }
    }
    echo "</ol>";



    echo "<hr>";

    // 5. in un RIQUADRO, riportare quante volte è stata assegnata la lode (conto quante volte appare 101) 
    echo "<table border=1>";
    echo "<tr><td>";
    echo "I voti sufficienti sono $sufficienti <br>";
    echo "I voti insufficienti sono $insufficienti <br>";
    echo "I voti con lode sono $lodi <br>";
    echo "</tr></td>";
    echo "</table>";

    //e quante volte è stato assegnato il voto piu basso (tra quelli assegnati realmente); 
    //(devo prima calcolare il voto piu basso per trovare il minimo poi confronto quanti voti sono == minimo)
    echo "il voto peggiore è $voto_peggiore e lo hanno preso $peggiori studenti <br>";


    // 6. calcolare e visualizzare il voto medio solo dei promossi;
    if ($sufficienti > 0) { //per evitare di dividere per zero
        echo "la media dei voti sufficienti è " . ($somma_suff) / $sufficienti . "<br>";
    }


    //LA SELEZIONE E' UN CICLO A SE
    // 7. Per accedere ad un corso specialistico di livello superiore, si deve aver superato l'esame 
    // con un voto minimo di 80 e sono disponibili solo un numero limitato di posti (definito a 
    // priori nella variabile $posti, di tutti quelli che hanno preso almeno 80 ne prendo solo un tot): 
    // calcolare e visualizzare quanti sono gli studenti 
    // potenzialmente ammessi e di questi la percentuale che rimane in lista d'attesa (percentuale : 100).
    echo "gli studenti potenzialmente ammessi al corso specialistico sono $potenzialmente_ammessi <br>";
    
    $posti = 10;
    for ($i = $posti; $i < $potenzialmente_ammessi; $posti--){
//rip non mi è bastato il tempo per finirlo :/
    }





    ?>

</body>

</html>