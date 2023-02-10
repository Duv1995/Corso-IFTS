<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2d</title>
</head>

<body>
    <?php

    //AVVIO ES. ALTERNATIVO PER CASA
    $s1 = ['cognome' => 'Rossi', 'nome' => "Mario", 'corso' => "Autocad"];
    $s2 = ['cognome' => 'Rossini', 'nome' => "Mariolino", 'corso' => "Inglese"];
    $s3 = ['cognome' => 'Bossi', 'nome' => "Maria", 'corso' => "Informatica"];
    $studenti = [$s1, $s2, $s3];
    $corso = ["Autocad", "Informatica", "Inglese"];


    //1)aggiunta di uno studente nuovo
    $nuovo_studente = ['cognome' => 'Novellini', 'nome' => "Novella", 'corso' => "Informatica"];
    // prima definisco l'array del nuovo studente
    $studenti[] = $nuovo_studente; // così aggiungo un nuovo elemento in fondo all'array

    $partecipanti_corsi = []; //n. partecipanti ad ogni corso

    foreach ($studenti as $studente) {
        //2) voglio fare una funzione che elenca TUTTI i dati di ogni studente
        echo elenco_dati_studente($studente) . "<br>";
        // dentro la funzione metto come input $studente che è l'array di ogni singolo
        // studente che stiamo gia scorrendo perche siamo dentro il foreach


        // 3) calcola il numero medio dei partecipanti ad ogni corso
        // definisco una nuova funzione che conta gli studenti di un particolare corso
        echo "studenti totali del corso Informatica: " . count_studenti_corso($studenti, 'Informatica');
        // ho bisogno di sapere come input quali sono tutti gli studenti e qual'è il corso
        // di cui vuoi trovare gli studenti


        // 4) indicare il corso col maggior numero di partecipanti

        //3 e 4 prossima volta !
        $nome_corso = $studente['corso'];
        if (array_key_exists($nome_corso, $partecipanti_corsi))
            $partecipanti_corsi[$nome_corso]++;
        else
            $partecipanti_corsi[$nome_corso] = 1;
    }

    // ----------------------------------------------------------------------------------------------------------- //
    // FUNZIONI
    // segno qui tutte le mie funzioni

    /**
     * Restituisce la stringa con tutti i dati dello studente
     * @return string
     */
    function elenco_dati_studente($array)
    {
        // per sapere quale array deve scorrere la mia funzione devo aggiungerne uno tra le parentesi
        $stringa = " "; //inizializzo il risultato vuoto
        foreach ($array as $key => $val) {
            // faccio scorrere l'array di input stampando ogni volta chiave e valore
            $stringa .= "$key: $val <br>";
            // .= serve per concatenare e mettere in fila
        }
        return $stringa;
    }

/**
 * Restituisce il numero di studenti di un particolare corso 
 * @param array $studenti array bidimensionale degli studenti di tutti i corsi
 * @param string $corso nome del corso da cercare
 * @return int totale studenti del corso
*/
    function count_studenti_corso($studenti, $corso){
        // anche se riutilizzo gli stessi nomi delle variabili, dentro alla function
        // sono comunque come delle variabili completamente separate!
        $tot = 0; //inizializzo il totale degli studenti di quel corso
        foreach($studenti as $studente){
            if ($studente['corso'] == $corso) {
                $tot++;
            }
        }
        return $tot;
    }



    ?>
</body>

</html>