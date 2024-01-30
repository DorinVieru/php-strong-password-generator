<!-- SEZIONE PHP LOGICA -->
<?php

    // RICHIAMO LA COMPONENTE FUNCTIONS
    include './partials/functions.php';

    if (isset($_GET['password-lenght']) && $_GET['password-lenght'] != '') {

        // RECUPERO IL VALORE DEL FORM
        $password_lenght = $_GET['password-lenght'];

        $password = generateRandomPassword($password_lenght);
    }

?>

<!-- SEZIONE HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-primary text-center">Generatore di password sicura: inserisci qui sotto la lunghezza della password desiderata!</h1>
            </div>
            <div class="col-12 ps-5 ms-5 pt-4">
                <form action="./index.php" method="GET">
                    <div class="row align-items-end justify-content-center">
                        <div class="col-5 ps-5 ms-5">
                            <label for="password_lenght" class="form-label">Inserisci la lunghezza desiderata (minimo 5 caratteri)</label>
                            <input type="number" min="5" max="48" name="password-lenght" id="password-lenght" class=" form-control" required value="<?php echo $_GET['password_lenght'] ?? '' ?>" require>
                        </div>
                        <div class=" col-4">
                            <button type="submit" class="btn btn-success">Genera la tua passsword</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 pt-4">
                <?php if(isset($password)) { ?>
                    <h5 class="text-center text-danger"><?php echo "La tua password è: $password"; ?></h5>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>