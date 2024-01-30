<?php

    function generateRandomPassword($password_lenght)
    {

        // VARIABILE CON TUTTI I CARATTELI PER COMPORRE LA PASSWORD
        $allCharacters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!.,/[]{}()&@#';

        // RECUPERO LA LUNGHEZZA DELLA STRINGA DI TUTTI I CARATTERI
        $allCharactersLenght = strlen($allCharacters) - 1;

        // CREO UNA VARIAB9ILE PER LA PASSWORD E UNA CHE CONTERRA' IL VALORE DA RESTITUIRE
        $password = '';
        $result = '';

        
        if($password_lenght < 5 || $password_lenght > 48){
            $result = "Il valore della password deve essere compreso tra 5 e 48 caratteri!";
            return $result;
        }

        while(strlen($password) < $password_lenght){
            $index = rand(0, $allCharactersLenght); //INDICE CHE VERRA' USATO NELLA STRINGA DEI CARATTERI TOTALI PER RECUPERARE UN CARATTERE CASUALE

            // $char = $allCharacters[$index];
            $password .= $allCharacters[$index];
        }
        
        // UNISCO I CARATTERI OBBLIGATORI CON I CARATTERI NON OBBLIGATORI
        $password_finale = $password;

        // MESCOLO L'ARRAY UTILIZZANDO SHUFFLE
        $password_finale = str_shuffle($password_finale);

        return $password_finale;
        return $result;
    }
?>