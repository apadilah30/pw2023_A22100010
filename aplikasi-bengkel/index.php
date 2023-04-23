<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Bengkel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            background-color: #ededed;
        }

        h3 {
            color: darkslategray;
            font-size: 2rem;
            font-weight: 700;
        }

        .card {
            border-radius: 1rem;
            border: 0;
        }

        .card-header {
            background-color: transparent;
            padding: 1rem;
            border: 0;
            border-bottom: 2px solid #efefef;
        }
        
        .logo img {
            height: 100px;
            width: 100px;
            object-fit: scale-down;
            border-radius: .5rem;
            border: 1px solid #000;
        }
    </style>
</head>

<body>
    <?php
        $products = [
            [
                "id" => "servis_ringan",
                "item" => "Servis Ringan",
                "price" => 100000
            ],
            [
                "id" => "ganti_oli",
                "item" => "Ganti Oli",
                "price" => 70000
            ],
            [
                "id" => "tambal_ban",
                "item" => "Tambal Ban",
                "price" => 25000
            ],
            [
                "id" => "ganti_ban",
                "item" => "Ganti Ban",
                "price" => 300000
            ],
            [
                "id" => "ganti_body",
                "item" => "Ganti Body",
                "price" => 500000
            ],
        ]
    ?>
    <div class="container">
        <div class="card m-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="logo">
                    <!-- <img src="logo.jpeg" alt=""> -->
                </div>
                <div class="text-center">
                    <h3>Sindang Jaya Motor</h3>
                    <p class="mb-0">Service & Spare Part motor terlengkap</p>
                </div>
                <div class="logo">
                    <!-- <img src="logo.jpeg" alt=""> -->
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Item</th>
                                    <th>Jumlah</th>
                                    <th>Harga Satuan (Rp)</th>
                                    <th>Harga (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach($products as $key => $item) { 
                                    $count = $_POST[$item["id"]] ?? 0;
                                ?>
                                <tr>
                                    <td><?= ($key+1); ?></td>
                                    <td><?= $item["item"]; ?></td>
                                    <td>
                                        <input 
                                            type="number" 
                                            name="<?= $item['id'];  ?>" 
                                            class="form-control" 
                                            value="<?= $count; ?>"
                                        >
                                    </td>
                                    <td><?= number_format($item["price"], 0, ",", ".");  ?></td>
                                    <td><?= number_format(($item["price"]*$count), 0, ",", ".");  ?></td>
                                </tr>
                                <?php } ?>
                                <?php 
                                    if($_POST) {
                                ?>
                                <?php
                                    $diskon = 0;
                                    $diskon_maks = 30;
                                    $sub_total = 0;
                                    $qty = 0;

                                    foreach ($products as $key => $value) {
                                        $qty += $_POST[$value['id']];
                                        $sub_total += $value['price'] * $_POST[$value['id']];
                                    }

                                    if($qty > 3){
                                        $diskon_qty = floor($qty/3)*10;
                                        if($diskon_qty > $diskon_maks) {
                                            $diskon = $diskon_maks;
                                        } else {
                                            $diskon = $diskon_qty;
                                        }
                                    }
                                    
                                    $total_diskon = $sub_total*($diskon/100);
                                    $total = $sub_total - $total_diskon;
                                ?>
                                <tr>
                                    <td colspan="4">Sub Total</td>
                                    <td><?= number_format($sub_total, 0, ",", "."); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Diskon <?= $diskon; ?>%</td>
                                    <td><?= number_format($total_diskon, 0, ",", "."); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Total Bayar</td>
                                    <td><?= number_format($total, 0, ",", "."); ?></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <input type="hidden" name="submit" value="true">
                    <button class="btn btn-primary" type="submit">
                        Hitung Total
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>