<!-- SEZIONE PHP LOGICA -->
<?php

    // RICHIAMO LA COMPONENTE FUNCTIONS
    include './partials/functions.php';

    if (isset($_GET['password_lenght']) && ($_GET['password_lenght'] >= 5)) {

        // RECUPERO IL VALORE DEL FORM
        $password_lenght = $_GET['password_lenght'];

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
                            <input type="tel" name="password_lenght" id="password_lenght" class=" form-control" value="<?php echo $_GET['password_lenght'] ?? '' ?>" require>
                        </div>
                        <div class=" col-4">
                            <button type="submit" class="btn btn-success">Genera la tua passsword</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 pt-4">
                <h5 class="text-success text-center"> La tua password è: <br> <?php echo ($_GET['password_lenght'] <= 4) ? 'Il numero di caratteri inseriti sono troppo pochi!!' : $password ?> </h5>
            </div>
        </div>
    </div>
</body>

</html>