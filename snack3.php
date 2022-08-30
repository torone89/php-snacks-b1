<?php



$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
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

<main>

    <body>
        <main>
            <div class="container text-center my-5">
                <h5 class="fw-bold text-center"> SNACK 3
                    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
                    DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
                    Stampare ogni data con i relativi post.
                    Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z</h5>


                <!-- Il costrutto dopo la parola chiave foreach include all'interno delle parentesi tonde tre elementi:
array da ciclare
la parola chiave as
la variabile che contiene il valore dell'indice corrente -->
                <?php foreach ($posts as $date => $posts) : ?>

                    <h2 class="fw-bold d-inline">Post del:</h2>
                    <h4 class="d-inline"><?= $date ?></h4>
                    <?php foreach ($posts as $info) : ?>
                        <h3 class="text-danger"><?= $info['title'] ?></h3>
                        <p><?= $info['text'] ?></p>
                        <p><?= $info['author'] ?></p>
                    <?php endforeach; ?>

                <?php endforeach; ?>
            </div>

</html>
</main