<?= $this->extend('/base'); ?>

<?= $this->section('/content'); ?>
<?php

$host = "localhost:3306";
$database = "Mahasiswa";
$user = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$database";

try {
    $conn = new PDO($dsn, $user, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo ($e->getMessage());
}

$statement = $conn->query("SELECT * FROM DATA_MAHASISWA");

$result = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
    h1 {
        text-align: left;
    }

    table {
        margin-left: auto;
        margin-right: auto;
        background-color:yellowgreen;
    }

    th {
        background-color:yellow;
    }

    body{
        background: url(https://thumbs.dreamstime.com/b/luxury-black-gold-background-design-presentation-concert-show-vector-illustration-luxury-black-gold-background-design-131760667.jpg);
    }
</style>


<br>
<h1 style="text-align:center; color:azure"> Data Mahasiswa </h1>
<br>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th> <?php echo "NPM" ?></th>
        <th> <?php echo "Nama" ?></th>
        <th> <?php echo "Jurusan" ?></th>
        <th> <?php echo "Angkatan" ?></th>
    </tr>
    <?php
    foreach ($result as $data) {
    ?>
        <tr>
            <td> <?php echo $data['NPM']; ?> </td>
            <td> <?php echo $data['Nama']; ?> </td>
            <td> <?php echo $data['Jurusan']; ?> </td>
            <td> <?php echo $data['Angkatan']; ?> </td>
        </tr>
    <?php
    }
    ?>
</table>
<?= $this->endSection('/content'); ?>