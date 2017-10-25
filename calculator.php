<?php

$tocompute = 'x:y:z';

// replace x and z by a number, and y by an operator like *,/,+,-,**

list($n1, $opr, $n2) = explode(':', $tocompute);

if(isset($n1) && isset($opr) && isset($n2)) {
    if (!empty($n1) && !empty($opr) && !empty($n2)) {

        switch ($opr) {
            case '+':
                $c = $n1 + $n2;
                echo "Le résultat est $c" . PHP_EOL;
                break;

            case '-':
                $c = $n1 - $n2;
                echo "Le résultat est $c" . PHP_EOL;
                break;

            case '*':
                $c = $n1 * $n2;
                echo "Le résultat est $c" . PHP_EOL;
                break;

            case '/':
                if ($n2 != 0) {
                    $c = $n1 / $n2;
                    echo "Le résultat est $c" . PHP_EOL;
                } else echo "Erreur, on ne peut pas diviser par 0." . PHP_EOL;
                break;

            case '**':
                $c = $n1 ** $n2;
                echo "Le résultat est $c" . PHP_EOL;
                break;

            case '%':
                echo "Erreur, opérateur inconnu." . PHP_EOL;
                break;

            case '':
                echo "Erreur, vous devez indiquer un opérateur." . PHP_EOL;
                break;
        }
    } else echo "Erreur, tous les arguments (ou opérateur) doivent être remplis." . PHP_EOL;
} else echo "Erreur, l'un des arguments est inconnu.";
