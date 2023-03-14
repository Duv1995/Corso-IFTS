<?php
// in questo file vivono le mie classi

class Citta
{
    // prima cosa guardo alle caratteristiche che deve avere la mia classe
    // vado a vedere nel database i campi delle città (nome citta, regione)
    // per sapere cosa identifica la città e metterle nel costruttore

    // prima di inserirli nel costruttore devo istanziare le proprietà della classe
    private $nome;
    // private = nessuno all'esterno della graffa di città può accedere a questa proprietà
    // devo usare i metodi GET e SET per referenziarla all'esterno

    function __construct($nome)
    {
        $this->nome = $nome;
        // questa istanza avrà come nome il $nome messo in input
        // this fa sempre riferimento all'oggetto che crei

    }

    // creo il metodo pubblico GET per referenziare il nome
    function getNome()
    {
        return $this->nome;
        // ritorna il nome di questo oggetto
    }
}

/*
$c = new Citta("Rimini");
echo $c->getNome();
// in questo modo stampo il nome Rimini
*/
