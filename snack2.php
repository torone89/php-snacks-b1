<?php
// Controlliamo se la mail contenga un punto e una chiocciola
$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

// if (empty($mail)) {
//     echo "Nessuna mail inserita";
// } else if (!strops($mail, '@') || !strops($mail, '.')) {
//     echo 'Mail non valida';
// } else {
//     echo 'Mail valida';
// }


?>




<!DOCTYPE html>
<html lang=“en”>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack PHP</title>
    <!-- IMPORT BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



</head>

<body>
    <main>
        <!-- SNACK 2
 -->
        <div class="container text-center mt-5">
            <h5 class="fw-bold text-center">Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
                che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
                Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”</h5>
            <!-- stampo la variabile text -->


            <form action="index.php" method="GET">
                <input type="text" name="name" placeholder="name">
                <input type="email" name="mail" placeholder="email">
                <input type="text" name="age" placeholder="age">
                <button type="submit">submit</button>

                <!-- VERIFICO SE  LA STRINGA NAME > 3 & MAIL CONTENGA UN PUNTO/@ e AGE SIA UN NUMERO  -->
                <?php

                if (empty($name) && empty($mail) && empty($mail)) {
                    echo "Inserisci i dati";
                } else {
                    if ((strlen($name) > 3) && (strpos($mail, '@') > 0 && strpos($mail, '.') > 3) && (is_numeric($age))) {
                        echo "accesso riuscito";
                        //VERIFICO SE LE STRINGHE SN VUOTE

                    } else {
                        echo "accesso negato";
                    }
                } ?>

            </form>

        </div>
    </main>
</body>

</html>