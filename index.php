<?php
require_once "table.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <title>Personnes à abattre</title>

</head>

<body>

<h1 class="text-center p-3 txtSize">Bounty-Hunting</h1>


    <div class="row p-0 m-0 justify-content-evenly">
        <?php foreach ($data as $key => $value) { ?>

            <div class="col-lg-3 mb-5">
                <div class="text-center border border-secondary bgBeige rounded shadow m-2">
                    <h2 class="card-title p-3 fs-1"><u>WANTED</u></h2>
                    
                    <img class="card-img-top imgSize" src="assets/img/<?= $value["picture"] ?>.jpg" alt="<?= $value["picture"] ?>">
                    <div class="card-body text-center">
                        <h2 class="card-body text-underline py-3"><u><?= $value["name"] ?></u></h2>
                        <h3 class="card-title p-3 fs-1">DEAD OR ALIVE</h3>
                        <h2 class="card-body">1.000.000.000$</h2>
                        
                        <a href="index2.php?choice=<?= $key ?>" class="btn btn-outline-dark my-3 fs-2">Start Hunting</a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>

</body>

</html>