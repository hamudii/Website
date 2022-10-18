<?php
$Nama = $_POST["nama"];
$Email = $_POST["email"];
$Alamat = $_POST["alamat"];
$Barangs = $_POST["barang"];
$Uang = $_POST["uang"];
$total = 0;

foreach ($Barangs as $barang) {
    switch ($barang) {
        case "Jersey Real Madrid":
            $total += 5700000;
            break;
        case "Bola Puma":
            $total += 1025000;
            break;
        case "Sepatu Nike":
            $total += 5000000;
            break;
        case "Rambut Messi":
            $total += 149000000;
            break;
        case "Alis mata CR":
            $total += 1000000000;
            break;
    }
}

?>
<!DOCTYPE html>
<?= $this->extend('/base'); ?>

<?= $this->section('/content'); ?>
<html lang="en">

<head>
    <title>Hasil Form</title>
</head>

<style>
    h2 {
        margin-left: auto;
        margin-right: auto;
        color: white;
        text-align: center;
        background-color:black;
    }

    body {
        background: url(https://wallpaperaccess.com/full/4268968.jpg);
        background-size: cover;
    }
    table {
        padding: 10px 50px 0px 50px;
        margin-right: auto;
        margin-left: auto;
        background-color: #a2c283;
    }
</style>

<body>
    <h2 style="margin:auto" class="text-center">Data Pemesanan</h2>
    <table cellpadding="1">
        <tr>
            <td><b>Nama</b></td>
            <td>:</td>
            <td><?= $Nama;?></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td>:</td>
            <td><?= $Email;?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td>:</td>
            <td><?= $Alamat;?></td>
        </tr>
        <tr>
            <td><b>Barang</b></td>
            <td>:</td>
            <td>
                <ol><?php foreach ($Barangs as $barang) :?>
                    <li><?= $barang; ?></li>
                    <?php endforeach; ?>
                </ol>
            </td>
        </tr>
        <tr>
            <td><b>Total bayar</b></td>
            <td>:</td>
            <td>Rp. <?= $total;?></td>
        </tr>
        <tr>
            <td><b>Metode Pembayaran</b></td>
            <td>:</td>
            <td><?= $Uang;?></td>
        </tr>
    </table>
</body>
</html>
<?= $this->endSection('/content'); ?>