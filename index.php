

<?php
    /*    
        Descrizione:
        Creare una variabile con un paragrafo di testo a vostra scelta.
        Stampare a schermo il paragrafo e la sua lunghezza.
        Una parola da censurare viene passata dall'utente tramite parametro GET.
        Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    */
    $paragraph = "Nel pattinaggio artistico su ghiaccio, nome di alcuni esercizi facenti parte delle diciassette figure obbligatorie di scuola, che vengono eseguiti prima su uno e poi sull'altro piede, descrivendo un tracciato simile a due cerchi giustapposti.";
    $badWord = $_GET["badWord"]
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP badwords </title>
</head>
<body>
    <p>
        <?php echo $paragraph; ?>
    </p>
    <h3>
        La lunghezza del paragrafo è: <?php echo strlen($paragraph);  ?>
    </h3>
</body>
</html>