<?php
// QUI E' DOVE VIVONO LE MIE FUNZIONI
function data_db_2_user($data)
    {
        $anno = substr($data, 0, 4);
        $mese = substr($data, 5, 2);
        $giorno = substr($data, 8, 2);
        return "$giorno/$mese/$anno";
    }

    function verifica_partenza_1($records)
    {
        foreach ($records as $k => $v) {
            
        }
    }