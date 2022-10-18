<!-------------------------------------------------------------
Nama Program    : input.html
Nama            : Mohammad Sulaeman
NPM             : 140810210033
Tanggal Buat    : 16 September 2022
Deskripsi       : Membuat form
--------------------------------------------------------------->

<!DOCTYPE html>
<?= $this->extend('/base'); ?>

<?= $this->section('/content'); ?>
<html>
    <head>
        <title> Biodata </title>
        <style>
            body{
                background-color:antiquewhite;color:black;
                background: url(https://img.freepik.com/free-photo/pastel-background-with-aesthetic-pink-sky_53876-129588.jpg?w=2000) ;
                background-size: cover;
            }
            h1{
                font-family:Georgia, 'Times New Roman', Times, serif
            }
        </style>
    </head>
    <body>
        <br>
        <h1 style="text-align:center"> Biodata Mahasiswa</h1>
        <hr>
        <table>
            <tr>
                <td>Nama Lengkap<input type="text" id="Nama" name="Nama"></td>
            </tr>

            <tr>
                <td><br> Panggilan <input type="text" id="panggilan" name="panggilan"></td>
            </tr>

            <tr>
                 <td><br> NPM  <input type="text"> <br> </td>
            </tr>
        </table>


        <span> Jenis Kelamin 
            <input type="radio" name="JK" value="male"> Laki-Laki 
            <input type="radio" name="JK" value="female"> Perempuan
        </span> <br> <br>

        <div> Alamat </div>
        <textarea style="width:500px; height:40px;"> </textarea><br> <br> 

        <div> Angkatan 
            <select>
                <option name="angkatan" value="none" selected> </option>
                <option name="angkatan" value="18">2018</option>
                <option name="angkatan" value="19">2019</option>
                <option name="angkatan" value="20">2020</option>
                <option name="angkatan" value="21">2021</option>
                <option name="angkatan" value="22">2022</option>
            </select>
        </div> <br>


        <div> Hobi :
            <form> 
                <label>1. Futsal</label> <input id="hobi1" name="hobi" type="checkbox"/><br> 
                <label>2. Basket</label> <input type="checkbox"/><br> 
                <label>3. Badminton</label> <input type="checkbox"/><br>
                <label>4. Gaming</label> <input type="checkbox"/><br>
                <label>5. Murrotal</label> <input type="checkbox"/><br>
                <label>6. Menyanyi</label> <input type="checkbox"/><br>
                <label>7. Baca Buku</label> <input type="checkbox"/><br>
                <label>8. Ngoding</label> <input type="checkbox"/><br>
        </div><br>
        
        <div> Upload foto </div>
        <input type="file" id="picture6" name="picture" accept="image/png, image/jpeg"> <!--Ini Input File-->
        <br><br><input type="submit">
    </body>
</html>
<?= $this->endSection('/content'); ?>