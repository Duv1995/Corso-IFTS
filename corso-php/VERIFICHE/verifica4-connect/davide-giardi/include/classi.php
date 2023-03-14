<?php
// QUI E' DOVE VIVONO LE MIE CLASSI :D

// 5) crea classe prenotazione con proprietà private data di partenza e importo
// e i metodi necessari per assegnare e leggere il loro valore (set e get)
//     // se ho una proprietà o metodo privata devo scrivere il metodo 
//     // per andarla a recuperare con GET e SET
include_once("include/connect_database.php");

class Prenotazione
{
    private $data_partenza;
    private $importo;


    function __construct($data_partenza, $importo)
    {
        $this->data_partenza = $data_partenza;
        $this->importo = $importo;
        // sql("INSERT INTO prenotazioni(partenza,importo)
        // VALUES ('$this->data_partenza', ' $this->importo')")
        // volevo inserire le nuove partenze create nel database ma mi da errore
    }

    // Metodi GET e SET
    function getPartenza()
    {
        return $this->data_partenza;
    }

    function getImporto()
    {
        return $this->importo;
    }

    function setPartenza($new_partenza)
    {
        $this->data_partenza = $new_partenza;
        return $this->data_partenza;
    }

    function setImporto($new_importo)
    {
        $this->importo = $new_importo;
        return $this->importo;
    }

    // 6) definire il metodo di Prenotazione (consigliato) 
    // che verifica se la prenotazione ha come data di partenza l'anno corrente
    function verificaPartenza()
    {
        // if ($this->data_partenza) continua...
    }
}
