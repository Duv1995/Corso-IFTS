<!DOCTYPE html>
<!-- scrivi html boilerplate (se hai l'esensione) per inserire la parte html quando sei dentro un file php -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabili</title>
    <!-- VARIABILI = sono celle di memoria che contengono informazioni, delle scatolette ai quali dai tu un nome,
        i dati che posso memorizzare dentro una variabile possono essere di tipo: 
        numeri, stringe (testo), booleani (vero/falso, 0/1), e altri dati che vedremo piu avanti -->
</head>

<body>

    <?php
    use function CommonMark\Render\HTML;

    /*le VARIABILI iniziano sempre col simbolo $ seguite dal nome della variabile, che non deve mai iniziare con un numero o underscore
    dopo l'uguale assegni il contenuto senza dover specificare che tipo di dato ho, PHP lo capisce gia da solo,
    posso assegnare alle variabili qualsiasi variabile */
    $var1 = 1; /*genero la variabile 1 contiene il valore numerico 1*/
    //fino a qui non appare nulla sul browser
    echo $var1; /*in questo modo chiedo al recompyler di stampare la variabile 1, sul browser vedo il numero 1 */
    $var1 = "stringa"; /*in ogni variabile posso cambiare completamente il contenuto sostituendolo con qualcosa di completamente
       diverso da quello che avevo prima, ovvero del numero 1, in questo modo il contenuto che c'era prima viene sostituito dal nuovo valore*/
    echo $var1; /*il recompyler va in ordine consequenziale, se ora faccio echo il valore di var1 mi darà invece il valore "stringa", 
      ma il primo echo continuerà a stamparmi il valore 1 */


    echo "<br>"; /*per andare a capo metto br tra virgolette per stampare un break sul browser*/
    $var2 = "pippo"; /*genero una nuova variabile 2 che contiene la stringa pippo*/
    echo "$var1 <br> $var2"; /*posso anche andare a capo con due variabili mettendo le due variabili e il br tutto tra virgolette,
       questo è molto utile perche posso fare un unica echo con tanti contenuti al suo interno*/


    $var3 = "lmao";
    echo "$var3 scrivo qualcosa in mezzo lol $var2 <br>"; /*quello che scrivo in mezzo alle virgolette le variabili vengono interpretate, 
        mentre quello che scrivo normalmente in arancione viene stampato come testo statico*/
    echo '$var3 "scrivo qualcosa in mezzo" lol $var2'; /*se metto virgoletta singola invece 
      tutto quello che crivo al suo interno diventa testo statico, pure le virgolette*/
    echo 'La variabile $var1 = ';
    echo $var1; /*per far apparire il testo "La variabile $var1 = variabile"*/


    /*quando abbiamo due stringhe una dopo l'altra le possiamo unire, concatenandole con un operatore, 
    il simbolo per concatenare due stringhe è il punto */
    echo 'La variabile $var1 = ' . $var1; /*stessa cosa di prima ma concatenata, è piu bello così dai*/
    
    echo "La variabile \" $var1\"  = " . $var1; /* il \ backslash trasforma il carattere che c'è dopo appiccicato ad esso
    in un carattere normale senza i suoi PHP powers tipici dei simboli speciali come le virgolette
    se invece voglio proprio scrivere il simbolo \ devo metterne due vicini \\ */


    /*PER CASA
    scrivere in una sola echo:
    L'insegnante dice: "è ora di andare a casa!" 
    dove "andare a casa" è una variabile stringa
    */
    ?>

</body>

</html>