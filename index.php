

<?php
    /*    
        Descrizione:
        Creare una variabile con un paragrafo di testo a vostra scelta.
        Stampare a schermo il paragrafo e la sua lunghezza.
        Una parola da censurare viene passata dall'utente tramite parametro GET.
        Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
    */
    $paragraph = "Nel pattinaggio artistico su ghiaccio, nome di alcuni esercizi facenti parte delle diciassette figure obbligatorie di scuola, che vengono eseguiti prima su uno e poi sull'altro piede, descrivendo un tracciato simile a due cerchi giustapposti.";
    $badWord = $_GET["badWord"];
    $censuredParagraph = str_replace(strtolower($badWord), "***", strtolower($paragraph));
    
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> PHP badwords </title>
</head>
<body>
    <header class="container d-flex flex-column align-items-center">
        <div class="w-50 p-3 bg-primary">
            <p class="my-4 fs-4">
                <?php echo $paragraph; ?>
            </p>
            <h3 class="pt-5">
                La lunghezza del paragrafo è: <?php echo strlen($paragraph);  ?>
            </h3>
        </div>
        <div class="w-50 p-3 bg-secondary text-white">
            <p class="my-4 fs-4">
                <?php echo $censuredParagraph; ?>
            </p>
            <h3 class="pt-5">
                La nuova lunghezza del paragrafo è: <?php echo strlen($censuredParagraph);  ?>
            </h3>
        </div>
    </header>
</body>
</html>