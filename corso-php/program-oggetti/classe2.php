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
        // creo il metodo che calcola l'età dello studente
        function eta(){
            // se mese - giorno corrente > mese - anno della data di nascita 
            // allora va bene così
            if()
            $anno_nascita = substr($this->data_nascita, 0, 4);
            // substring sottrae a una stringa tutto tranne gli ultimi 4 valori?
            $eta = date("Y") - $anno_nascita;
            return $eta;

          //altrimenti 
            //$eta -= 1; decremento l'età di 1
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

    // PER CASA aggiungi alla classe:

    // metodo eta che restituisce l'età dello studente
    $studente1->set_data_nascita("1990-10-21"); // 21 ottobre 1990
    echo "di anni " . $studente1->eta();


    // metodo setVoti che inizializza l'array dei voti (che è una proprietà/variabile)
    // metodo setPassword che comprende la validazione della password di Classroom: 
    // lunghezza min 10, contenere almeno 1 maiuscola, almeno 1 numero
























    ?>
</body>

</html>