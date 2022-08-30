<?php
// CREO UN ARRAY MULTIDIMENSIONALE(JS ARRAY DI OGG.) CON VARI ARRAY ASSOCIATIVI
$partite = [
    [
        'Team_Casa' => 'Venezuela',
        'Team_Ospite' => 'Repubblica Dominicana',
        'Point_Team_Casa' => '76',
        'Point_Team_Ospite' => '72'
    ],
    [
        'Team_Casa' => 'Brasile',
        'Team_Ospite' => 'Messico',
        'Point_Team_Casa' => '72',
        'Point_Team_Ospite' => '82'
    ],
    [
        'Team_Casa' => 'Uruguay',
        'Team_Ospite' => 'Portorico',
        'Point_Team_Casa' => '78',
        'Point_Team_Ospite' => '70'
    ],
    [
        'Team_Casa' => 'Panama',
        'Team_Ospite' => 'Canada',
        'Point_Team_Casa' => '50',
        'Point_Team_Ospite' => '106'
    ],
];

// var_dump($partite);
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
        <!-- SNACK 1
 -->

        <div class="container text-center my-5">
            <h5 class="fw-bold text-center">Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
                Olimpia Milano - Cantù | 55-60</h5>

            <ul class="list-unstyled">
                <?php for ($i = 0; $i < count($partite); $i++) : ?>
                    <li class="py-2 fs-6 text-uppercase">

                        <?php
                        echo $partite[$i]['Team_Casa'] . ' - ' . $partite[$i]['Team_Ospite'] . ' | ' . $partite[$i]['Point_Team_Casa'] . ' - ' . $partite[$i]['Point_Team_Ospite'];
                        ?>
                    </li>
                <?php endfor; ?>
            </ul>





        </div>
    </main>
</body>

</html>