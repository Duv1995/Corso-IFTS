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

    // La programmazione orientata agli oggetti ( Object Oriented Programming, OOP) 
    // è un paradigma di programmazione, in cui un programma viene visto come un 
    // insieme di oggetti che interagiscono tra di loro.

    // CLASSE = rappresenta il modello generico e astratto (studenti)
    // OGGETTO = rappresenta il modello concreto e specifico 
    // di un elemento che appartiene alla classe (lo studente davide)

    // PROPRIETA' = sono delle variabili che esprimono attributi di una classe o oggetto
    // METODO = sono funzioni della classe (es funzione che calcola età degli studenti)


    // DEFINISCO UNA CLASSE
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
    // PUBLIC = tutti possono accedere a quei metodi e proprietà
    // PROTECTED = accessibile soltanto dalla classe stessa e dalle classi che la ereditano 
    // (es creo la classe studente ereditando metodi e proprietà della classe persona)
    // PRIVATE = quel metodo o proprietà può essere accessibile solo all'interno di quella classe

    // ------------------------------------------------------------------------------------------------------------------------------------------------- //

    // CLASSI E OGGETTI

    // Tutte le classi e oggetti hanno dei metodi di default che si chiamano costruttori
    // metodi invocati ogni volta che si cre un nuovo oggetto

    // __construct (doppio underscore davanti) => metodi magici, 
    // sono funzioni chiamate senza bisogno di essere prima definite
    // __destruct => altro metodo magico, serve per distruggere un oggetto

    //NUOVO OGGETTO => istanza di un nuovo oggetto della classe Esempio
    $e = new Esempio();
    // creo un nuovo oggetto della classe esempio
    // $e è un oggetto che eredita tutte le variabili e funzioni della classe stessa
    $e->saluto();

    // $this => si usa per accedere alle variabili e ai metodi della classe nell'istanza
    // indica questa istanza specifica dell'oggetto
    // es: echo "Ciao $this -> nome (Davide)"; => stampa "Ciao Davide"
    // $this (questa istanza specifica) -> (la freccina dice 'di questa istanza vaia a prendere nome') 
    // nome (non si mette mai $ prima di nome se lo hai messo su this)"

    // $this si usa quando sto definendo gli elementi della classe
    // la freccina -> si usa per referenziare un metodo di una classe?


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
        //metodo
        public function getName()
        {
            //$this rappresenta l'oggetto che sarà costruito a runtime (esecuzione)
            // perchè di default il $nome è un elemento privato 
            // che non può essere visto o richiamato fuori dalla mia classe
            return $this->nome;
        }
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
    // rappresenta l'oggetto che sarà costruito a runtime 
    // quindi questa funzione farà apparire il nome "Mario Rossi"

    echo $docente->getName();
    // i metodi GET o SET servono generalmente per accedere in modo controllato
    // ai valori/proprietà presenti dentro la mia classe che ha visibilità PRIVATA
    // gli sto dicendo 'della classe persona, dell'oggetto docente, recupera il nome'












































    ?>

</body>

</html>