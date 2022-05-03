<!-- Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto
e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age']

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <div class="access">
        <h2>
            <?php

            if(!strlen($name) > 3 || !filter_var($mail, FILTER_VALIDATE_EMAIL) || !is_numeric($age)) {
            echo ('Accesso negato');
            } else  {
            echo ('Accesso eseguito');
            }

            ?>
        </h2>
    </div>

    <style>

    *{
        margin: 0;
        padding:0;
        box-sizing:border-box;
    }

    .access {
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        height:100vh;
    }

    h2 {
        color: blue;
        font-size: 2.5rem;
    }
    </style>
</body>
</html>