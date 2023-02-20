<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/basic.css">
    <!-- linko il file css che sta nella cartella -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto</title>
</head>

<body>
    <!-- il primo DIV conterrà i 3 pulsanti -->
    <div>
        <!-- ALT+SHIFT+FRECCIA GIU per copincollare in basso la riga attuale :o -->
        <!-- <button id="btnRosso"></button>
        <button id="btnVerde"></button>
        <button id="btnBlu"></button> -->

        <!-- oppure creo i pulsanti richiamando la mia funzione! -->
        <?php
        // uso la funzione PHP che ho scritto sotto per generare i pulsanti
        CreaPulsante("btnRosso", "Rosso");
        CreaPulsante("btnVerde", "Verde");
        CreaPulsante("btnBlu", "Blu");
        CreaPulsante("btnAlterna", "Alterna");
        ?>
    </div>

    <!-- il secondo DIV conterrà i 15 quadrati -->
    <div>
        <!-- scrivi .quadrato.bgBianco*15 per creare 15 div con due classi -->
        <!-- <div class="quadrato" class="bgBianco"></div>
        e poi copincollarlo x15 volte... -->

        <!-- OPPURE, per fare prima richiamo la funzione con un ciclo! -->
        <?php
        for ($i = 0; $i < 30; $i++) {
            CreaDiv('quadrato bgBianco');
        }
        ?>
    </div>

    <?php
    // creo una funzione che crea un pulsante HTML (tag button)
    // questo mi rende piu facile la manutenzione e la creazione di ulteriori pulsanti
    
    /**
     * Crea un pulsante HTML (TAG button)
     *
     * @param string $id: id da assegnare al pulsante
     * @param string $testo: testo da utilizzare nel pulsante
     * @return void
     */
    function CreaPulsante($id, $testo)
    {
        echo "<button id ='" . $id . "'>" . $testo . "</button>";
        // gli sto dicendo di scrivere un button che contiene la variabile ID e la variabile testo
    }

    // faccio la stessa cosa anche per i DIV che dovrò creare

    /**
     * Crea un DIV
     *
     * @param string $classe classe da assegnare al DIV
     * @return void
     */
    function CreaDiv($classe)
    {
        echo "<div class='" . $classe . "'>" . "</div>";
        //genera: <div class='rettangolo'> </div>
    }




    ?>

</body>
<!-- link il mio JS con script scr fuori dal body subito prima della chiusura html -->
<script src="js/automate_alt.js"></script>

</html>