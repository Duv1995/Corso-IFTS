<?php
function data_db_2_user($data)
{
    //$data = "1990-12-31";
    $anno = substr($data, 0, 4);
    $mese = substr($data, 5, 2);
    $giorno = substr($data, 8, 2); //fino alla fine
    return "$giorno/$mese/$anno";

}
//PER CASA fare la funzione opposta
function data_user_2_db($data)
{
    //$data = "31/12/1990";
    //altro metodo
    $a = explode("/", $data); //restituisce un array
    $giorno = $a[0];
    $mese = $a[1];
    $anno = $a[2];
    return "$anno-$mese-$giorno";
}
?>