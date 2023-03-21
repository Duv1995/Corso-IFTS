<?php
function elenca_records($records, $chiave)
{
    foreach ($records as $record) {
        echo $record[$chiave] . "<br>";
    }
}
/**
 * DA FARE
 * stampa delle chiavi elencate in $chiavi di ogni elemento di $records
 * @param mixed $chiavi array delle chiavi da elencare
 */
function elenca_chiavi_di_records($records, $chiavi)
{
    foreach ($records as $record) {
        foreach ($chiavi as $chiave) {
            //echo $record[$chiave] . "<br>";
        }
    }
}


?>