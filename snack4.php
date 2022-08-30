<?php

//
$random_number = [];

// La funzione count di PHP restituisce il numero di elementi dell'array
while (count($random_number) < 15) {
    $number = rand(1, 50); //Rand Genera un numero Casuale
    // La funzione in_array di PHP verifica se un dato valore è presente all'interno di una array. 
    // La funzione restituisce TRUE nel caso in cui l'elemento venga trovato, FALSE in caso contrario.
    if (!in_array($number, $random_number)) {
        $random_number[] = $number;
    }
}


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

        <div class="container text-center my-5">
            <h3 class="fw-bold text-center"> Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta.</h3>

            <!-- La funzione incorporata print_r() è usata per stampare il valore memorizzato in una variabile in PHP. 
            Possiamo anche usarlo per stampare un array. 
            Stampa tutti i valori dell’array insieme al loro numero di indice -->

            <p class="d-block fw-bold"><?php print_r($random_number) ?></p>





        </div>

    </main>
</body>

</html>