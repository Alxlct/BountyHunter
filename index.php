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

    <h1 class="text-center p-3 txtSize">BOUNTY<img src="assets/img/revolverLogo.png" class="logoSize" alt="logo-Revolver">HUNTING</h1>


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

                        <a href="bounties.php?choice=<?= $key ?>" class="btn btn-outline-dark my-3 fs-2">Start Hunting</a>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-dark my-3 fs-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Erase Target
                        </button>

                        <!-- Modal -->
                        <div class="modal fade justify-content-center text-center" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bgBeige">
                                    <div class="modal-header justify-content-center">
                                        <h4 class="modal-title fs-2 text-center" id="exampleModalLabel">Erase this bounty ?</h4>
                                    </div>
                                    <div class="modal-body fs-4">
                                        If you decide to clear <u><?= $value["name"] ?></u>'s bounty, none'll be able to claim it.
                                    </div>
                                    <div class="modal-footer justify-content-evenly">
                                        <button type="button" class="btn btn-outline-dark fs-4" data-bs-dismiss="modal">No</button>
                                        <button type="button" class="btn btn-outline-dark fs-4" data-bs-dismiss="modal">Yes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>