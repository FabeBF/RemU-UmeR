<!doctype html>
<html lang="en">

<?php

include 'connect.php';
$id = @$_GET['id'];
if ($connect && $id) {

    $querySql = "SELECT * FROM xipplg1 where id=:id";
    $statement = $connect->prepare($querySql);
    $statement->execute([
        'id' => $id
    ]);
    $artikel = $statement->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location:XIPPLG1.php");
}

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $artikel['name'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="icon" href="https://pplg.smkn1purwokerto.sch.id/assets/img/LogoPPLG.png">
</head>

<style>
    body {
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        width: 100%;
    }

    h1 {
        color: #333;
        font-weight: bold;
        text-align: center;
    }

    .coba {
        padding-left: 86px;
    }
</style>

<body class="bg-white">




    <div class="container p-4 font-poppins align-items-center ">
        <a href="XIPPLG1.php" class="btn btn-primary mb-3"><i class="bi bi-arrow-left-circle"></i> Kembali</a>
        <h1 class="text-center fw-bolder">
            <?= $artikel['name'] ?>
        </h1>
        <div class="d-flex">
            <img class="w-25 rounded-2 shadow-lg d-block" src="<?= $artikel['Image'] ?>" />
            <div class="coba">

                <h3 class="mt-3">About me :</h3>
                <h6 class="mt-3">
                    Alamat : <?= $artikel['alamat'] ?>
                </h6>
                <h6 class="mt-3">
                    Tanggal Lahir : <?= $artikel['date'] ?>
                </h6>
                <h6 class="mt-3 ">
                    Moto Hidup : <?= $artikel['moto'] ?>
                </h6>
                <pre class="mt-3" style="white-space: break-spaces;font-family: Arial;font-size: 17px;"><?= $artikel['deskripsi'] ?></pre>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>