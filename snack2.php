<?php


// VARIABILI
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
        <div class="container text-center my-5">
            <h5 class="fw-bold text-center">Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
                che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
                Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”</h5>


            <form action="" method="GET" class="mt-5">
                <input type="text" name="name" placeholder="Nome">
                <input type="email" name="mail" placeholder="Email">
                <input type="text" name="age" placeholder="Età">
                <button type="submit">Inserisci</button>

                <?php
                //VERIFICO SE LE STRINGHE SN VUOTE
                if (empty($name) && empty($mail) && empty($mail)) {
                    echo "<h6 class='fw-bold text-uppercase mt-3'>Nessun Dato Inserito</h6>";
                } else {
                    //VERIFICO SE  LA STRINGA NAME > 3 & MAIL CONTENGA UN PUNTO/@ e AGE SIA UN NUMERO  

                    if ((strlen($name) > 3) && (strpos($mail, '@') > 0 && strpos($mail, '.') > 3) && (is_numeric($age))) {
                        echo "<h6 class='text-success mt-3'>accesso riuscito</h6>";
                    } else {
                        echo "<h6 classe='text-danger mt-3'>accesso negato</h6>";
                    }
                } ?>

            </form>

        </div>
    </main>
</body>

</html>