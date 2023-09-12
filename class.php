<?php

class Kalkulacka {

    public $firstNumber;
    public $secondNumber;

    public function scitani($firstNumber, $secondNumber)
    {
        echo "Součet těchto 2 čísel je: " . ($firstNumber + $secondNumber);
    }

    public function odcitani($firstNumber, $secondNumber)
    {
        echo "Rozdíl těchto 2 čísel je: " . ($firstNumber - $secondNumber);
    }

    public function nasobeni($firstNumber, $secondNumber)
    {
        echo "Součin těchto 2 čísel je: " . ($firstNumber * $secondNumber);
    }

    public function deleni($firstNumber, $secondNumber)
    {
        if ($secondNumber != 0) {
            echo "Podíl těchto 2 čísel je: " . ($firstNumber / $secondNumber);
        } else {
            echo "Dělit nulou nelze!";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>

<body>
</body>

</html>