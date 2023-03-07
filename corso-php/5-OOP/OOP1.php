<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAMMAZIONE AD OGGETTI</title>
</head>

<body>
    <?php

    // OBJECT ORIENTED PROGRAMMING

    // La OOP esiste in tantissimi linguaggi e raggruppa tutte le funzionalità simili
    // dentro un insieme che ogni volta che ho a che fare con quel tipo 
    // di funzionalità (es date) andrò a pescare

    // La programmazione orientata agli oggetti ( Object Oriented Programming, OOP ) 
    // è un paradigma di programmazione, in cui un programma viene visto come un 
    // insieme di oggetti che interagiscono tra di loro.

    // CLASSE = rappresenta il modello generico e astratto (studenti)
    // OGGETTO = rappresenta il modello concreto e specifico 
    // di un elemento che appartiene alla classe (lo studente davide)

    // PROPRIETA' = sono delle variabili che esprimono attributi di una classe o oggetto
    // METODO = sono funzioni della classe (es funzione che calcola età degli studenti)


    // DEFINISCO UNA CLASSE
    // definire una classe di per se non fa nulla, fin quando non creo un elemento
    // che rientra nel raggruppamento della classe che ho definito
    class Esempio
    {
        // parola chiave class per definire una nuova classe
        // le classi hanno sempre la maiuscola

        // tutto quello che sta dentro le graffe fa parte di questa classe
        function saluto()
        {
            // questo è un metodo (funzione della classe)
            echo "Ciao!";
        }
    }


    // VISIBILITA' (di metodi e proprietà)

    // La visibilità determina chi può accedere ai contenuti della mia classe (es la funzione saluto)
    // PUBLIC = tutti possono accedere a quei metodi e proprietà, sia dall'interno che dall'esterno
    // PROTECTED = accessibile soltanto dalla classe stessa e dalle classi che la ereditano 
    // (es creo la classe studente ereditando metodi e proprietà della classe persona)
    // PRIVATE = quel metodo o proprietà può essere accessibile solo all'interno di quella classe
    // quindi solo da funzioni che stanno all'interno delle graffe della classe
    // non può nemmeno essere referenziato da oggetti della mia classe!

    // ------------------------------------------------------------------------------------------------------------------------------------------------- //

    // CLASSI E OGGETTI
    // classi e oggetti sono utili perche racchiudono tante variabili e funzioni, 
    // questo ti permette di cambiare una singola volta una funzione o variabile
    // di in un oggetto che hai inserito in molteplici file, e anche di riutilizzare
    // gli stessi oggetti in piu progetti diversi!

    // COSTRUTTORI
    // Tutte le classi e oggetti hanno dei metodi di default che si chiamano costruttori
    // metodi invocati ogni volta che si cre un nuovo oggetto

    // __construct (doppio underscore davanti) => metodi magici, 
    // sono funzioni chiamate senza bisogno di essere prima definite
    // __destruct => altro metodo magico, serve per distruggere un oggetto

    //NUOVO OGGETTO => istanza di un nuovo oggetto della classe Esempio
    $e = new Esempio();
    // creo un nuovo oggetto della classe Esempio, la classe di riferimento deve essere
    // presente all'interno dello stesso file o in un file integrato a questo (include)
    // $e è un oggetto che eredita tutte le variabili e funzioni della classe stessa
    // fare NEW significa che il mio oggetto andrà a cercare il metodo costruttore di quella classe

    // da adesso in poi il mio oggetto potrà utilizzare tutto ciò 
    // che c'è dentro la classe (funzioni, variabili, etc)

    // $this -> si usa per accedere alle variabili e ai metodi della classe nell'istanza
    // indica questa istanza specifica dell'oggetto
    // es: echo "Ciao $this -> nome (Davide)"; => stampa "Ciao Davide"
    // $this (questa istanza specifica) -> (la freccina dice 'di questa istanza vaia a prendere nome') 
    // nome (non si mette mai $ prima di nome se lo hai messo su this)"

    $e->saluto(); //non ->$saluto (il dollaro basta una volta)
    // $this si usa quando sto definendo gli elementi della classe
    // la freccina -> dopo un oggetto che hai creato $oggetto ->
    // si usa per referenziare un metodo che sta dentro una classe
    // non va rimesso il $ davanti al dato che prendi dentro la classe


    // definisco una classe persona
    class Persona
    {
        // proprietà 'nome'
        private $nome = "";
        // tutti i $nome possono essere visti e referenziati
        // solo all'interno di questa classe, fuori dalle graffe no!

        //costruttore (metodo magico)
        // è una funzione che ha come parametro di ingresso un nome
        // che è privato e non verrà visto fuori dalle graffe
        public function __construct($nome_da_assegnare)
        {
            //inizializzo la proprietà 'nome' della classe
            $this->nome = $nome_da_assegnare;
            // variabile this che fa riferimento all'oggetto che verrà istanziato
            // di questo oggetto che verrà assegno un nuovo valore alla propriet 'nome'
            echo "assegnato il nome " . $this->nome . "<br>";
            //stampo questa frase quando creo un nuovo oggetto

        }
        //metodo per ottenere un nome e settare un nome, spesso vanno in coppia
        public function setName($n)
        {
            // serve per settare/cambiare il nome di un oggetto
            // $n si usa come placeholder del nome che prenderà 
            // il mio oggetto quando richiami questa funzione
            $this->nome = $n;
            // $this verrà referenziato dall'oggetto specifico
            // che vado a definire
        }

        public function getName()
        {
            // $this rappresenta l'oggetto che sarà costruito a runtime (esecuzione)
            // perchè di default il $nome è un elemento privato 
            // che non può essere visto o richiamato fuori dalla mia classe
            return $this->nome;
            // restituisce il contenuto di nome, che di default è privato
        }

        // posso anche inserire metodi STATICI, che non avranno $this
        // posso definire una caratteristica che riguarda tutti gli elementi
        // di una classe, che non dipendono dagli elementi caratteristici dell'oggetto
        static public $numero;
        // questo è un numero statico che rappresenta il numero di persone nel mondo
        // qualunque sia la persona/oggetto specifico questo dato sarà sempre lo stesso
        // si usa spesso con i metodi piuttosto che le variabili
        // per richiamare metodi fissi che riguardano tutte le persone
        static public function eta($data)
        {
            // in base al parametro $data che inserisci
            // questo metodo calcola l'età di qualsiasi persona
        }
        // per richiamare questi dati STATICI uso sempre ::
        // molto semplicemente: si definiscono statici i dati che
        // non prevedono il $this dentro la classe!

        const SPECIE = "essere umano";
        // questo è il modo per definire una COSTANTE (tutto maiusc, niente $)
        // è un dato statico che vale per tutti gli elementi della classe
        // in qualsiasi punto della classe con visibilità globale
        // utilizzando la parola 'specie' posso referneziare
        // il valore che gli ho assegnato
        // anche questo si referenzia con ::

        // COSTANTE è un dato che assegno a tutti gli oggetti una volta sola
        // se la cambio qui dentro cambia per TUTTI gli oggetti di questa classe
        // VARIABILE è un dato che assegno solo a uno specifico oggetto di una classe
        // se la cambio lo faccio dall'esterno e cambia solo per l'oggetto in questione
    }


    // istanzio 2 nuovi oggetti della classe Persona richiamando il metodo construct della classe Persona
    // che richiede come parametro di ingresso un $nome_da_assegnare
    $studente = new persona("Mario Rossi");
    // mi stampa inoltre "assegnato il nome Mario Rossi"
    $docente = new persona("Giacomo Verdi");
    // mi stampa inoltre "assegnato il nome Giacomo Verdi"

    // faccio una echo dell'oggetto studente che ha solo la proprietà nome per ora
    echo $studente->getName();
    // con la freccina accede a una funzione (metodo) della classe persona 
    // (perche studente è un oggetto che appartiene a questa classe)
    // cosa fa questa funzione/metodo?
    // $studente diventerà il $this che sta dentro la classe
    // rappresenta l'oggetto che sarà costruito a runtime 
    // return $this->nome; diventa questo this
    // quindi questa funzione farà apparire il nome "Mario Rossi"

    echo $docente->getName();
    // i metodi GET o SET servono generalmente per accedere in modo controllato
    // ai valori/proprietà presenti dentro la mia classe che ha visibilità PRIVATA
    // gli sto dicendo 'della classe persona, dell'oggetto docente, recupera il nome'
    // siccome $nome è una proprietà privata a cui nessuno fuori dalle graffe puo accedere!

    $studente::eta(2000 - 01 - 01);
    // :: si utilizzano per referenziare un elemento STATICO di una classe
    // in questo modo gli vado ad attribuire un età

    echo $studente::SPECIE;
    // uso anche qui :: perchè è una costante
    // stamperò 'essere umano'








































    ?>

</body>

</html>