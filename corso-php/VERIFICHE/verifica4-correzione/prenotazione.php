<?php
include_once("funzioni.php");
class Prenotazione
{
    private $arrivo;
    private $partenza;

    function __construct($arrivo, $partenza)
    {
        $this->arrivo = $arrivo;
        $this->partenza = $partenza;
    }
    function getArrivo()
    {
        return $this->arrivo;
    }
    static function getAnno($data)
    {
        return substr($data, 0, 4);
    }
    function arrivoInAnnoCorrente()
    {
        if (Prenotazione::getAnno($this->arrivo) == date("Y"))
            return true;
        return false;
    }
}
?>