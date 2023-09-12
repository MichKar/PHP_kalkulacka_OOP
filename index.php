<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulačka</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="text" name="number1" placeholder="První číslo">
        <input type="text" name="number2" placeholder="Druhé číslo">
        <input type="submit" name="submit" value="Spočítat">
    </form>

    <?php

    include "class.php";
    if (isset($_POST["submit"])) {
        $n1 = $_POST["number1"];
        $n2 = $_POST["number2"];

        $kalkulator = new Kalkulacka();
        $kalkulator->scitani($n1, $n2);
        echo "<br>";
        $kalkulator->odcitani($n1, $n2);
        echo "<br>";
        $kalkulator->nasobeni($n1, $n2);
        echo "<br>";
        $kalkulator->deleni($n1, $n2);
    }

    ?>
</body>

</html>