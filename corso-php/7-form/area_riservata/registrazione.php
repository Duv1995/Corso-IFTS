<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>

</head>

<body>
    <!-- vogliamo fare una pagina con l'area riservata a cui accedere -->
    Registrati
    <form method="POST" action="inserimento_registrazione.php" enctype="multipart/form-data">
        <!-- devo aggiungere l'attributo enctype che cambia il modo in cui vengono 
        inviati i dati alla pagina successiva il contenuto binario di un file, 
        specificando che si tratta di un array di dati multi tipo -->
        Nome: <input type="text" name=nome><br>
        Cognome: <input type="text" name=cognome><br>
        E-mail: <input type="email" name=email><br>
        Password: <input type="password" name=password><br>
        Immagine profilo: <input type= "file" name = "icona">
        Curriculum: <input type= "file" name = "cv">
        <button>Registrami</button>
    </form>

</body>

</html>