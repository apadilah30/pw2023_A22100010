<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4 - CONDITIONAL</title>
</head>
<body>
    <h1>Warna Favorit</h1>
    <p>
        <?php
            $warna_favorit = "orange";

            switch ($warna_favorit) {
                case 'red':
                    echo "Warna favorit saya adalah merah!";
                    break;

                case 'yellow':
                    echo "Warna favorit saya adalah kuning!";
                    break;

                case 'green':
                    echo "Warna favorit saya adalah hijau!";
                    break;

                case 'black':
                    echo "Warna favorit saya adalah hitam!";
                    break;

                case 'orange':
                    echo "Warna favorit saya adalah jingga!";
                    break;
                
                default:
                    echo "Saya tidak memiliki warna favorit!";
                    break;
            }
        ?>
    </p>
</body>
</html>