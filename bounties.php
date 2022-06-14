<?php
require_once "table.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    <title>Target infos</title>
</head>

<body>
    <h1 class="text-center p-3 txtSize">BOUNTY<img src="assets/img/revolverLogo.png" class="logoSize" alt="logo-Revolver">HUNTING</h1>
    <div class="row justify-content-center">
        <div class="col-lg-6 bgBeige">
            <p>You chose this Target: <br><u><?= $data[$_GET["choice"]]["name"] ?></u></p>
            <p>Mail adress: <?= $data[$_GET["choice"]]["email"] ?></p>
            <p>Phone Number: <?= $data[$_GET["choice"]]["phone"] ?></p>
            <p>Adress: <?= $data[$_GET["choice"]]["address"] ?>, <?= $data[$_GET["choice"]]["postalZip"] ?>.<br><?= $data[$_GET["choice"]]["country"] ?></p>

            <div class="row text-center justify-content-center m-0 p-0">
                <img src="/assets/img/<?= $data[$_GET["choice"]]["picture"] ?>.png" alt="<?= $data[$_GET["choice"]]["picture"] ?>">
                <button href="index.php" type="button" class="btn btn-warning">Return to bounty selection</button>
            </div>
        </div>


    </div>
</body>

</html>