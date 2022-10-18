<!DOCTYPE html>
<?= $this->extend('/base'); ?>

<?= $this->section('/content'); ?>
<html>

<head>
    <title>TOKO OLAHRAGA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<style>
    body {
        background: url(https://wallpaperaccess.com/full/4268968.jpg);
        background-size: cover;
    }

    .form {
        padding: 10px 200px 0px 200px;
        margin-right: auto;
        margin-left: auto;
        padding: 20px;
    }

    .container{
        border: 4px solid rgb(0, 6, 16);
        border-radius: 10px;
        padding: 20px;
        width: 50%;
        background-color: #7dcb77;
    }

    .btn{
        border: 2px solid #000000;
        border-radius: 2px;
        margin-top: 20px;
    }
</style>

<body>
    <h1 align="center">FORM PEMBELIAN BARANG ONLINE</h1>
    <div class="container">
        <form action="/hasil_form" method="post">
            <div class="form">
                <div>
                    <label for="nama"><b>Nama</b></label>
                    <input name="nama" class="form-control" id="nama" ></td>
                </div><br>
                <div>
                    <label for="email"><b>Email</b></label>
                    <input name="email" class="form-control" id="email" >
                </div><br>
                <div>
                    <label for="address"><b>Alamat</b></label>
                    <textarea style="resize:none;" name="alamat" class="form-control" id="alamat"
                        ></textarea>
                </div><br>
                <div for="barang">
                    <label><b>Pilih Barang</b></label><br>
                    <input type="checkbox" id="barang1" name="barang[]" value="Jersey Real Madrid">
                    <label for="barang1"> Jersey Real Madrid</label><br>
                    <input type="checkbox" id="barang2" name="barang[]" value="Bola Puma">
                    <label for="barang2"> Bola Puma</label><br>
                    <input type="checkbox" id="barang3" name="barang[]" value="Sepatu Nike">
                    <label for="barang3"> Sepatu Nike</label><br>
                    <input type="checkbox" id="barang4" name="barang[]" value="Rambut Messi">
                    <label for="barang4"> Rambut Messi</label><br>
                    <input type="checkbox" id="barang5" name="barang[]" value="Alis mata CR">
                    <label for="barang5"> Alis mata CR</label><br>
                </div><br>
                <div>
                    <label for="uang"><b>Metode Pembayaran</b></label><br>
                    <input type="radio" name="uang" value="Cash"> Cash
                    <input type="radio" name="uang" value="E-Wallet"> E-Wallet
                </div>
                <button class="btn" name="submit" type="submit" >Submit</button>
            </div>
    </div>
</body>

</html>
<?= $this->endSection('/content'); ?>