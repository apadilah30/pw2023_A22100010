<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 - PHP</title>
</head>
<body>
    <h1>Heading 1</h1>
    <?php
        // 1.1. Penulisan PHP
        echo "Hello! from PHP";

        // 1.2. Penulisan HTML dalam PHP
        echo "<h3 style='color: red'>Bisa juga styling dari PHP</h3>";

        // 2. Komentar
        // echo "tidak akan ditampilkan";

        // 3. Variabel
        $variabel = "Normal";
        $variabel1 = "Alpha Numeric";
        $vari_abel = "Snake Case";
        $VariAbel = "Camel Case";
        $VARIABEL = "Case Sensitive";

        $string = "Hello World";
        $integer = 100;
        $float = 100.10;

        echo $string;
        echo "<br>";
        echo $integer+$float;
    ?>
</body>
</html>