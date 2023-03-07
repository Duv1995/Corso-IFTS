<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESERCIZIO SIMI-VERIFICA</title>
</head>

<body>
    <?php
    //Esercizio PHP

    // Si chiede di svolgere le seguenti attività:
    // 1. aggiungere il nuovo partecipante "Novella Novellini" al corso di Informatica (aggiungere un elemento ad un array in posizione non specificata)
    // 2. elencare i nomi di tutti i partecipanti (di tutti i corsi)
    // 3. calcolare il numero medio dei partecipanti ai corsi
    // 4. indicare il nome del corso con il maggior numero di partecipanti
    // 5. tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
    // giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
    // primo in ordine alfabetico a sostenere l'esame (tra tutti i partecipanti di tutti i corsi).
    // 6. si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, con
    // chiave 'corso' e valore il nome del corso, fornito nel secondo array (in $p1 avrò gli studenti e il corso corrispettivo).

    // --- PER CASA ---
    // Svolgere le stesse attività richieste sopra (escluso il punto 6) con questi array:
    // $s1=['cognome'=>"Primini", 'nome'=>"Primo",'corso' => "Autocad"];
    // $s2=['cognome'=>"Secondini", 'nome'=>"Secondo",'corso' => "Autocad"];
    // $s3=['cognome'=>"Giannini", 'nome'=>"Gianni",'corso' => "Informatica"];
    // …
    // $studenti = [$s1, $s2, $s3, …];

    // IMPOSTO L'ESERCIZIO
    $s1 = ['cognome' => "Primini", 'nome' => "Primo", 'corso' => "Autocad"];
    $s2 = ['cognome' => "Secondini", 'nome' => "Secondo", 'corso' => "Autocad"];
    $s3 = ['cognome' => "Giannini", 'nome' => "Gianni", 'corso' => "Informatica"];
    $studenti = [$s1, $s2, $s3];

    // 1) aggiungo il nuovo studente
    $nuovo_studente = ['cognome' => "Novellini", 'nome' => "Novella", 'corso' => "Informatica"];
    $studenti[] = $nuovo_studente;

    // 2) parto sempre dal punto 2 e scrivo l'elenco dei nomi degli studenti
    foreach ($studenti as $studente) {
        echo $studente['cognome'] . "<br>";
    }

    // il punto 6 non lo fare! 
    // il punto 3 e 4 lo facciamo in classe next time!



















    ?>
</body>

</html>