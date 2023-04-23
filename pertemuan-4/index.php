<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4 - CONDITIONAL</title>
</head>
<body>
    <?php
        $time = date("H");
    ?>

    <h1>Conditional IF :</h1>
    <p>
        <?php
            if ($time < "20") {
                echo "Have a nice day";
            }
        ?>
    </p> <hr>

    <h1>Conditional IF ELSE</h1>
    <p>
        <?php
            if ($time < "20") {
                echo "Have a nice day!";
            } else {
                echo "Have a good night!";
            }
        ?>
    </p> <hr>

    <h1>Conditional IF ELSEIF ELSE</h1>
    <p>
        <?php
            if ($time < "10") {
                echo "Have a good morning!";
            } elseif ($time < "20") {
                echo "Have a nice day!";
            } else {
                echo "Have a good night!";
            }
        ?>
    </p>
</body>
</html>