<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREIAMO UNA CLASSE</title>
</head>

<body>
    <?php

    // DEFINISCO UNA NUOVA CLASSE
    // la classe è una scatola vuota che poi qualcuno utilizzerà
    // non fa nulla di per sè fin quando qualcuno non la richiama
    class Studente
    {
        // li assegno di default a una stringa vuota
        public $nome = "";
        public $cognome = "";
        public $ruolo = "";
        public $data_nascita;
        private $voti = [];
        //  un array vuoto
        protected $password;

        // faccio il costruttore che genera i nuovi oggetti di questa classe
        function __construct($nome_da_assegnare, $cognome_da_assegnare)
        {
            // tutto quello che c'è dentro queste graffe apparirà
            // solo a runtime quando qualcuno richiama questa funzione
            $this->nome = $nome_da_assegnare;
            echo "Istanziato un nuovo oggetto: " . $this->nome . "<br>";
            $this->cognome = $cognome_da_assegnare;
            echo "Istanziato un nuovo oggetto: " . $this->cognome . "<br>";
        }

        // creo il metodo che setta la data di nascita dello studente
        function set_data_nascita($data_nascita)
        {
            $this->data_nascita = $data_nascita;
            // posso chiamare i valori con lo stesso nome della stringa di ingresso
        }

        // ------------------------------------------------------------------------------------------ //

        // creo il metodo che calcola l'età dello studente
        function eta()
        {
            // se mese - giorno corrente > mese - anno della data di nascita 
            // allora va bene così
            // if()
            $anno_nascita = substr($this->data_nascita, 0, 4);
            // substring sottrae a una stringa tutto tranne gli ultimi 4 valori?
            $eta = date("Y") - $anno_nascita;
            return $eta;

            //altrimenti 
            //$eta -= 1; decremento l'età di 1
        }

        // creo il metodo setVoti che inizializza l'array dei voti
        function setVoti($voti)
        {
            if (!$voti) {
                // se NON è un array che ha almeno 1 elemento
                return false;
            }
            //i voti devono essere in 100 compresi tra 1 e 100
            foreach ($voti as $voto) {
                if ($voto >= 1 && $voto <= 100) {
                    //voto accettabile                    
                } else {
                    // voto non accettabile
                    return false;
                }
            }
            $this->voti = $voti;
        }

        //metodo set password di Classroom che comprende la validazione: 
        // lunghezza min 10 (strlength), 
        // contenere almeno 1 maiuscola (fai un ciclo che valuta con substr per ogni carattere), 
        // almeno 1 numero
        function setPassword($p)
        {
            // setto le mie condizioni iniziali su falso e poi le verificherò
            $condizione_1_numero = false;
            $condizione_1_maiuscola = false;

            for (
                $i = 0;
                $i < strlen($p) ||
                    //cambio la condizione per uscire dal ciclo con un OR
                    ($condizione_1_numero && $condizione_1_maiuscola);
                //se entrambe le due condizioni vengono verificate esco dal ciclo!
                $i++
            ) {
                // questa è la funzione per estrarre ad ogni ciclo ogni lettera della mia pass
                substr($p, $i, 1);
                // (password, distanza offset che ad ogni ciclo equivale a $i, 1 ???)

                // controllo $c
                //$c compreso tra 0 e 9 
                //-> se vero, $condizione_1_numero = true; diventa true e la pass va bene
                //$c compreso tra "A" e "Z"
                //-> se vero, $condizione_1_maiuscola = true;

            }

            // aggiungere anche la condizione lunghezza
            if ($condizione_1_numero && $condizione_1_maiuscola) {
                //password OK
            } else {
                //password non corretta
            }
        }
    }
    echo "<br>";

    $studente2 = new Studente("Bruno", "Bucciarati");

    $studente2->nome = "Giorno";
    // in questo modo abbiamo cambiato il nome di studente2
    echo "Il nome è stato cambiato in $studente2->nome <br>";
    // se voglio stampare il nome devo dirgli a quale parte 
    // di $studente2 voglio accedere ->nome
    // e in effetti vedo che è cambiato!
    echo "<br>";

    // istanzio un nuovo oggetto
    $studente1 = new Studente("Meeerio", "Rossie");
    // gli dico che questo nuovo oggetto ha tutte le proprietà/variabili della classe Studente



    // ------------------------------------------------------------------------------------------ //
    // PER CASA aggiungi alla classe:

    // metodo eta che restituisce l'età dello studente
    $studente1->set_data_nascita("1990-10-21"); // 21 ottobre 1990
    echo "di anni " . $studente1->eta();
    echo "<hr>";

    // metodo setVoti che inizializza l'array dei voti (che è una proprietà/variabile)
    $s2 = new Studente("Bruno", "Bianchi");
    $s2->setVoti([60, 100, 50, 81]);
    // per vedere i voti che ha dovrei inserire anche il getVoti

    // metodo setPassword che comprende la validazione della password di Classroom: 
    // lunghezza min 10, contenere almeno 1 maiuscola, almeno 1 numero
























    ?>
</body>

</html>