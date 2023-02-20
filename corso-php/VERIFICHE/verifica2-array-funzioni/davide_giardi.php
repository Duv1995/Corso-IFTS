<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica PHP Davide Giardi</title>
</head>

<body>
    <?php
    $categoria1 = ['nome' => "calzature", 'n_prodotti' => 20, 'fatturato' => 1200];
    $categoria2 = ['nome' => "camicie", 'n_prodotti' => 12, 'fatturato' => 800];
    $categoria3 = ['nome' => "pantaloni", 'n_prodotti' => 5, 'fatturato' => 650];
    $categorie = [$categoria1, $categoria2, $categoria3];



    // 1. ELENCA NOMI CATEGORIE
    echo "Le categorie sono: ";

    foreach ($categorie as $categoria) {
        foreach ($categoria as $k => $v)
            if ($k == 'nome')
                echo "$v ";
    }

    // OPPURE potevo semplicemente fare
    // foreach ($dati as $dato) {
    //     echo $dato['nome'] . "<br>";
    // }

    echo "<hr>";



    // 2. ELENCA NUM TOTALE DI PRODOTTI
    $somma_prodotti = 0;

    foreach ($categorie as $categoria) {
        $somma_prodotti += $categoria['n_prodotti'];
    }
    echo "Il numero totale di prodotti è $somma_prodotti";
    echo "<hr>";



    // 3. INDICA CATEGORIA CON FATTURATO PIU ALTO
    $fatturato_max = 0;
    foreach ($categorie as $categoria) {
        if ($categoria['fatturato'] > $fatturato_max) {
            $fatturato_max = $categoria['fatturato'];
            $categoria_max = $categoria['nome'];
        }
    }
    echo "Il fatturato più alto è $fatturato_max della categoria $categoria_max";
    echo "<hr>";



    // 4. FUNZIONE FATTURATO TOTALE

    /**
     * Restituisce il fatturato totale
     *
     * @param array $array
     * @return string
     */
    function fatturato_totale($array)
    {
        $somma = 0;
        foreach ($array as $arr) {
            foreach ($arr as $k => $v)
                if ($k == 'fatturato')
                    $somma += $arr['fatturato'];
        }
        return $somma;
    }

    // ALTRIMENTI, in modo molto piu facile e dinamico

    /**
     * restituisce la somma del campo $chiave di ogni elemento dell'arry 
     * 
     */
    // function fatturato_totale($arrays, $chiave){
    //     //$array è un array bidimensionale
    //     $somma = 0;
    //     foreach($arrays as $array){
    //         $somma += $array[$chiave];
    //     }
    //     return $somma;
    // }

    echo "Il totale dei fatturati delle categorie è " . fatturato_totale($categorie);
    echo "<hr>";



    // 5. CALCOLA VALORE MEDIO FATTURATO
    // fattuarato totale / count categorie

    $media_fatturati = fatturato_totale($categorie) / count($categorie);
    echo "La media dei fatturati è di " . number_format($media_fatturati, 2, ',', '.') . "€";
    echo "<hr>";



    // 6. AGGIUNGERE ANNO IN FONDO ALLE CATEGORIE

    foreach ($categorie as $k => $categoria) {
        $categorie[$k]['anno'] = date('Y');
        // della prima dimensione di categorie prendo l'elemento n-esimo $k
        // e dopo essere entrato nell'elemento n-esimo prendo la chiave 'anno'
        // array_push($dati[$i], date("Y"));
        // oppure potevo utilizzare array_push
    }
    print_r($categorie);
    echo "<hr>";


    // 7. ANNI DI ATTIVITA'

    $anni_attivita = array();
    $key_anno = date('Y');
    $val_anno = fatturato_totale($categorie);
    // $anni_attivita [2023 => 2650, 2022 => (2650 -100), ..., 2013 => (X-100)]

    // questo puoi farlo solo col ciclo FOR
    for ($i = 0; $i <= 10; $i++) {
        // questo è il formato che uso per aggiungere ogni volta
        // una nuova coppia chiave => valore
        $anni_attivita[$key_anno] = $val_anno;

        $key_anno--;
        $val_anno -= 100;
    }
    print_r($anni_attivita);
    echo "<hr>";

    // 7. ANNI DI ATTIVITA'(MA CON IL MESE!!!)
    // con il mese è diverso perche andare a -12 puo causare delle robacce buggatissime
    $mese = date("m"); // parte da 02
    $incasso = [];
    for ($i = $mese; $i > ($mese - 12); $i--) {
        // faccio $i-- perche parto dal max e devo tornare indietro di ogni mese

        $chiave = ($i % 12) + 1;
        // per non far venire lo 0 nei mesi
        $incasso[$i] = $val_anno;
        $val_anno = $val_anno - 500;
    }  
    print_r($incasso);
    echo "<hr>";



    // *1. NUOVA FUNZIONE PUNTO 2

    /**
     * Restituisce il totale dei prodotti
     *
     * @param array $array
     * @return string
     */
    function totale_prodotti($array)
    {
        $somma_prodotti = 0;
        foreach ($array as $arr) {
            $somma_prodotti += $arr['n_prodotti'];
        }
        return $somma_prodotti;
    }


    // TABELLA
    echo "<table>";
    // non l'ho finita per poco... :(

    foreach ($categorie as $categoria) {
        // echo "<th>" . $categorie . "</th>";
        echo "<tr>";
        foreach ($categoria as $k => $v) {
            echo "<td>" . $categoria[$k] . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
































    ?>


</body>

</html>