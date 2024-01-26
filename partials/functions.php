<?php

    function generateRandomPassword($password_lenght)
    {

        // VARIABILE CON TUTTI I CARATTELI PER COMPORRE LA PASSWORD
        $allCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!.,/[]{}()&@#';

        // RECUPERO LA LUNGHEZZA DELLA STRINGA DI TUTTI I CARATTERI
        $allCharactersLenght = strlen($allCharacters) - 1;

        // CREO UN ARRAY PER LA PASSWORD
        $password = [];


        for ($i = 0; $i < ($password_lenght); $i++) {
            $password[] = $allCharacters[random_int(0, $allCharactersLenght)];
        };

        // TRASFORMO L'ARRAY IN UNA STRINGA CON IMPLODE
        $password = implode($password);

        // UNISCO I CARATTERI OBBLIGATORI CON I CARATTERI NON OBBLIGATORI
        $password_finale = $password;

        // MESCOLO L'ARRAY UTILIZZANDO SHUFFLE
        $password_finale = str_shuffle($password_finale);

        return $password_finale;
    }
?>