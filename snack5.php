<?php
$paragrafo = "Il clima rigido e la posizione isolata dell'Islanda rispetto ai grandi traffici marittimi hanno determinato un popolamento tardivo dell'isola che solo a partire dal 9° secolo ha conosciuto un insediamento umano stabile. La colonizzazione dell'Islanda, che fu chiamata la Terra dei ghiacci dai primi Vichinghi che vi sbarcarono, si intensificò alla fine del 9° secolo: i coloni norvegesi, prevalentemente guerrieri nobili, costituirono nel paese molte piccole comunità autonome e nel 930 diedero vita a una sorta di assemblea degli uomini liberi (Althing), considerata il primo parlamento d'Europa. Nel 1264 il paese perse l'indipendenza e divenne un dominio della Norvegia; alla fine del 14° secolo, insieme alla Norvegia, passò alla Danimarca, che vi esercitò per molti secoli un governo dispotico imponendo con la violenza la riforma luterana. Uscita dall'immobilismo alla fine del 19° secolo, l'Islanda avviò il suo cammino verso l'autonomia nel 1918, con il riconoscimento di Stato sovrano indipendente unito alla Danimarca nella persona del re. Con la Seconda guerra mondiale si accelerò lo scioglimento di questa unione e il 17 giugno 1944 fu proclamata la repubblica. Nella seconda metà del 20° secolo la vita politica islandese ha ruotato intorno a due grandi temi: i rapporti con gli Stati Uniti, cui l'Islanda ha concesso nel 1951 la base aerea di Keflavík nell'ambito degli accordi della NATO, e il problema dei diritti di pesca, motivo di una lunga controversia con la Gran Bretagna prima, e più recentemente con la Norvegia e la Danimarca. La cosiddetta guerra del merluzzo con la Gran Bretagna si concluse nel 1976 con la firma di un accordo largamente favorevole all'Islanda. Molto rilevante nel paese la presenza femminile nella vita politica: molte le donne elette in Parlamento, un partito, Alleanza femminile, e per oltre quindici anni, dal 1980 al 1996, una donna presidente della Repubblica, Vigdis Finnbogardóttir, rappresentante delle sinistre";


// <!-- La funzione explode di PHP ha il compito di suddividere una stringa 
// sulla base di un dato separatore.   In questo caso (.)-->
$split_paragraph = explode(".", $paragrafo);


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
            <h5 class="fw-bold text-center"> SNACK 5 (BONUS)
                Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.</h5>

            <ol>
                <?php for ($i = 0; $i < count($split_paragraph); $i++) { ?>
                    <li>
                        <p>
                            <?php
                            echo $split_paragraph[$i];
                            ?>
                    </li>
                    </p>
                <?php } ?>
            </ol>
        </div>

</html>