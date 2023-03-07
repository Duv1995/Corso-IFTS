<?php
// QUI E' DOVE VIVONO LE MIE FUNZIONI :D

/**
     * stampa delle chiavi elencate in $chiavi di ogni elemento di $records
     * @param mixed $chiavi array delle chiavi da elencare
     */
    function elenca_records($records, $chiave)
    // ha come input dei record ricavati e la loro chiave
    // ed elenca i record trovati
    {
        foreach ($records as $record) {
            echo $record[$chiave] . "<br>";
        }
    }


    // PER CASA
    // faccio una seconda versione di questa funzione che però
    // può ricevere piu di una chiave, dunque mettendo $chiavi come array 
    /**
     * stampa delle chiavi elencate in $chiavi di ogni elemento di $records
     * @param mixed $chiavi array delle chiavi da elencare
     */
    function elenca_chiavi_di_records($records, $chiavi)
    {
        foreach ($records as $record) {
            foreach ($chiavi as $chiave) {
                // echo $record[$chiave] . "<br>";
            }
        }
    }


    ?>