<!DOCTYPE html>
<?= $this->extend('/base'); ?>

<?= $this->section('/content'); ?>
<html lang="en">

<head>
    <style>
        body {
            background: url(https://ae01.alicdn.com/kf/HTB1h_QfdWigSKJjSsppq6ybnpXa7/Marmer-putih-abu-abu-foto-studio-latar-belakang-Vinyl-Komputer-dicetak-dinding-kain-kualitas-Tinggi-foto.jpg) ;
        }

        .card {
            border: none;

            position: relative;
            overflow: hidden;
            border-radius: 8px;
            cursor: pointer;
        }

        .card:before {

            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background-color: #E1BEE7;
            transform: scaleY(1);
            transition: all 0.5s;
            transform-origin: bottom
        }

        .card:after {

            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 4px;
            height: 100%;
            background-color: #8E24AA;
            transform: scaleY(0);
            transition: all 0.5s;
            transform-origin: bottom
        }

        .card:hover::after {
            transform: scaleY(1);
        }


        .fonts {
            font-size: 11px;
        }

        .social-list {
            display: flex;
            list-style: none;
            justify-content: center;
            padding: 0;
        }

        .social-list li {
            padding: 10px;
            color: #8E24AA;
            font-size: 19px;
        }


        .buttons button:nth-child(1) {
            border: 1px solid #8E24AA !important;
            color: #8E24AA;
            height: 40px;
        }

        .buttons button:nth-child(1):hover {
            border: 1px solid #8E24AA !important;
            color: #fff;
            height: 40px;
            background-color: #8E24AA;
        }

        .buttons button:nth-child(2) {
            border: 1px solid #8E24AA !important;
            background-color: #8E24AA;
            color: #fff;
            height: 40px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mohammad Sulaeman</title>
</head>

<body>
    <div class="container mt-5">

        <div class="row d-flex justify-content-center">

            <div class="col-md-7">

                <div class="card p-3 py-4">

                    <div class="text-center">
                        <img src="http://api.himatif.org/data/assets/foto/2021/140810210033.jpg" width="100" class="rounded-circle">
                    </div>

                    <div class="text-center mt-3">
                        <span class="bg-secondary p-1 px-4 rounded text-white">Pro</span>
                        <h5 class="mt-2 mb-0">Mohammad Sulaeman</h5>
                        <span>140810210033</span>

                        <div class="px-4 mt-1">
                            <p class="fonts">My name is Mohammad Sulaeman and student at the Padjadjaran University. I am currently studying for a five-year
                                bachelor's degree in informatic engineering. Having looked through the materials of the Foreign Department of my university,
                                I was very delighted to find the opportunity to spend time learning programming in Padjadjaran University. And i hope that i can be expert one day.</p>

                        </div>

                        <ul class="social-list">
                            <li><i class="fa fa-dribbble"></i></li>
                            <li><i class="fa fa-instagram"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-google"></i></li>
                        </ul>

                        <div class="buttons">

                            <button class="btn btn-outline-primary px-4">Message</button>
                            <button class="btn btn-primary px-4 ms-3">Contact</button>
                        </div>


                    </div>




                </div>

            </div>

        </div>

    </div>
</body>

</html>
<?= $this->endSection('/content'); ?>