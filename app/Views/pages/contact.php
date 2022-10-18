<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Mohammad Sulaeman">
        <meta name="description" content="Tokoh Idola">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
        <link rel="stylesheet" href="styletokoh.css">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            .accordion-item{
                background-color: darkgray !important;
                text-align: left;
            }

            tr:hover {background-color: #D6EEEE;}

        </style>
    </head>
    <body class="p-3 m-0 border-0 bd-example">

        <nav class="navbar navbar-expand-lg bd-gray-400">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Profile</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Kehidupan Awal</a></li>
                            <li><a class="dropdown-item" href="#">Karier Klub</a></li>
                            <li><a class="dropdown-item" href="#">Prestasi</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
          </nav>
        <div class = "main">
            <div class="accordion" id="accordionExample">
                <div class="copy-container">
                    <h1><strong>Cristiano Ronaldo</strong><hr></h1>
                    <img src="https://media.suara.com/pictures/653x366/2020/03/02/39467-cristiano-ronaldo-berseragam-real-madrid.jpg" alt= "" width="653" height="366">
                </div>


                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <strong class="text">Kehidupan Awal</strong>
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <p>Ronaldo dos Santos Aveiro lahir di São Pedro, Funchal, ibu kota pulau Madeira, Portugal, dan dibesarkan di Santo António. Ia adalah anak keempat atau anak bungsu dari Maria Dolores dos Santos Viveiros da Aveiro, seorang juru masak, dan José Dinis Aveiro, seorang petugas dinas pertamanan kota dan kit man paruh waktu. Nenek buyut dari pihak ayahnya, Isabel da Piedade, berasal dari pulau São Vicente, Tanjung Verde. Ronaldo memiliki seorang kakak laki-laki, Hugo, dan dua kakak perempuan, Elma dan Liliana Cátia "Katia". Ibunya mengungkapkan bahwa, ketika ia sedang mengandung Ronaldo, ia ingin menggugurkan kandungannya itu karena masalah kemiskinan, ayahnya yang kecanduan berat alkohol dan juga karena sudah memiliki terlalu banyak anak, tetapi dokter menolak untuk melakukan prosedur tersebut. Ronaldo dibesarkan di rumah Katolik yang miskin, berbagi kamar dengan semua saudara kandungnya.</p> 

                            <p>Ketika masih anak-anak, Ronaldo bermain untuk Andorinha dari tahun 1992 hingga 1995, di sana ayahnya bekerja sebagai kit man, dan kemudian ia menghabiskan dua tahun bermain dengan Nacional. Pada tahun 1997, saat berusia 12 tahun, ia menjalani uji coba selama tiga hari dengan Sporting CP, yang mengontraknya dengan bayaran £1.500. Ia kemudian pindah dari Madeira ke Alcochete, sebuah kota dekat Lisboa, untuk bergabung dengan akademi remaja Sporting. Pada usia 14, Ronaldo percaya ia memiliki kemampuan untuk bermain semiprofesional dan bersepakat dengan ibunya untuk menghentikan pendidikannya agar fokus sepenuhnya pada sepak bola. Meskipun populer di kalangan siswa lain di sekolahnya, Ronaldo dikeluarkan dari sekolah setelah melemparkan kursi ke arah gurunya, di mana menurut Ronaldo gurunya tersebut "tidak menghormati" dirinya. Namun, satu tahun kemudian, ia didiagnosis memiliki takikardia, suatu kondisi yang bisa memaksanya untuk berhenti bermain sepak bola. Ronaldo menjalani operasi jantung di mana laser digunakan untuk membakar beberapa jalur jantungnya menjadi satu, agar mengubah detak jantungnya ketika dalam keadaan istirahat. Ia pulang dari rumah sakit beberapa jam setelah operasi tersebut dan lanjut berlatih sepak bola beberapa hari kemudian.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <strong class="text">Karier klub</strong>
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <strong>Sporting CP</strong>

                            <p>Memorabilia Ronaldo di museum Sporting CP
                            Pada usia 16, Ronaldo dipromosikan dari tim junior Sporting ke tim utama oleh manajer László Bölöni yang terkesan dengan caranya menggiring bola. Ia kemudian menjadi pemain pertama yang bermain untuk tim U-16, U-17 dan U-18, tim B serta tim utama klub dalam satu musim. Setahun kemudian, pada 29 September 2002, Ronaldo melakukan debutnya di Primeira Liga saat pertandingan melawan Braga dan pada 7 Oktober, ia mencetak dua gol ketika Sporting meraih kemenangan 3–0 atas Moreirense. Selama musim 2002–03, manajer Liverpool Gérard Houllier membuang kesempatan untuk mengontrak Ronaldo, sementara itu manajer Arsène Wenger, yang tertarik untuk mengontrak Ronaldo, bertemu dengannya di markas Arsenal pada bulan November untuk membahas kemungkinan transfer.</p>
    
                            <p>Manajer Manchester United, Alex Ferguson sangat bertekad untuk segera mendapatkan Ronaldo dengan status permanen, setelah Sporting mengalahkan United 3–1 pada pertandingan yang menandai peresmian Stadion José Alvalade pada bulan Agustus 2003. Awalnya, United berencana untuk mengontrak Ronaldo dan kemudian meminjamkannya kembali ke Sporting selama setahun. Karena terkesan olehnya, para pemain United mendesak Ferguson untuk mengontraknya. Setelah pertandingan, Ferguson setuju untuk membayar Sporting sebesar £12,24 juta agar dapat membeli Ronaldo yang ia anggap sebagai "salah satu pemain muda paling menarik" yang pernah ia lihat. Satu dekade setelah kepergiannya dari Sporting, pada April 2013, Sporting memberikan penghormatan kepada Ronaldo dengan memilihnya untuk menjadi anggota klub yang ke-100.000.</p>

                            <strong>Manchester United</strong>
                            <p>Dari apa yang terjadi sejak pertandingan persahabatan itu, Ronaldo pun didatangkan ke Manchester United. Sebelum ia bermain untuk klub itu, Sir Alex Ferguson bertanya pada Ronaldo angka berapa nomor punggung yang diharapkannya. Cristiano Ronaldo menjawab 28, karena itu adalah nomor favoritnya. Namun Sir Alex Ferguson malah berkata tidak, mulai sekarang nomor punggungnya adalah 7. Di Manchester United, penyandang nomor punggung 7 secara turun temurun adalah pemain legendaris yang membawa Manchester United ke puncak kejayaannya, dan Sir Alex Ferguson memberikan nomor punggung keramat itu sebagai wujud penghargaannya kepada talenta brilian yang dimilikinya. Ia bermain 196 kali dan mencetak 84 gol.</p>

                            <strong>Real Madrid</strong>
                            <p>Pada 1 Juli 2009, ia pindah ke Real Madrid, klubnya saat ini, dengan memecahkan rekor transfer sebesar 80 juta poundsterling atau sekitar Rp 1,3 Triliun, yang menjadikannya sebagai pemain termahal dalam sejarah sepak bola kala itu. Ia telah bermain 81 kali dan mencetak 87 gol untuk Real Madrid. Pada musim La Liga 2010/2011, Ronaldo mencatatkan dirinya sebagai pencetak gol terbanyak di La Liga dalam 1 musim, sejumlah 40 gol.[29] Dia pun telah mencetak 15 Gol di El Clasico, dia pun menjadi pencetak Gol terbanyak UCL dalam 1 musim (2013/14) dengan torehan 17 Gol, hattrick melawan Galatasaray (1-6), 2 Gol melawan Copenhagen (4-0), 2 Gol melawan Juventus (2-1), 1 Gol melawan Juventus (2-2), 1 Gol melawan Copenhagen (2-0), 2 Gol melawan Schalke (1-6) dan 2 Gol melawan Schalke (3-1), 1 Gol melawan Dortmund (3-0), 2 Gol melawan Bayern Munchen (0-4) dan turut menyumbang 1 Gol di Final UCL 2014 di Lisbon usai elibas Atletico Madrid 4-1 melalui titik penalti di menit 120' usai dia dijatuhkan Godin di kotak penalti. Di musim 2015-2016, ia menjadi penentu kemenangan Real Madrid di FINAL UCL 2016 melawan Atletico Madrid lewat babak adu penalti usai skor berakhir 1-1 dan telah melalui extra time. Dengan skor 5-3 di adu penalti, Real Madrid menjuarai UCL 2016.</p>

                            <strong>Juventus</strong>
                            <p>Pada 11 Juli 2018, Ronaldo pindah ke klub Italia, Juventus dengan nilai transfer sebesar 112 juta Euro (99,2 Poundsterling), atau setara dengan Rp 1,88 Triliun.</p>

                            <strong>Kembali ke Manchester United</strong>
                            <p>Pada 27 Agustus 2021, Manchester United mengumumkan bahwa mereka telah mencapai kesepakatan dengan Juventus untuk mengontrak kembali Ronaldo. Pada 31 Agustus, terkonfirmasi bahwa nilai transfer Ronaldo dilaporkan menelan biaya awal sebesar £12,85 juta, dengan durasi kontrak selama dua tahun dan dapat bertambah secara opsional untuk satu tahun. Ronaldo diberi nomor punggung 7 setelah Edinson Cavani setuju untuk beralih ke nomor 21. 24 jam pertama penjualan seragam Ronaldo dilaporkan memecahkan rekor sepanjang masa setelah resminya transfer tersebut, menyalip penjualan seragam Messi setelah ia pindah ke Paris Saint-Germain. Pada 11 September, Ronaldo melakukan debut keduanya di Old Trafford, mencetak dua gol pembuka dalam kemenangan Manchester United 4–1 atas Newcastle United di liga.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                       <strong class="text">Prestasi</strong>
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                        <div class="accordion-body">
                            <tr>
                                <strong>Sporting CP</strong>
                                <ul> <li>Supertaça Cândido de Oliveira: 2002</li>
                                </ul>
                            </tr>
                            
                            <tr>
                                <strong>Manchester United</strong>
                                <ul><li>Liga Utama Inggris: 2006–07, 2007–08, 2008–09</li>
                                    <li>Piala FA: 2003–04</li>
                                    <li>Piala Liga Sepak Bola: 2005–06, 2008–09</li>
                                    <li>Community Shield FA: 2007</li>
                                    <li>Liga Champions UEFA: 2007–08</li>
                                    <li>Piala Dunia Antarklub FIFA: 2008</li>
                                </ul>
                            </tr>
                            
                            <tr>
                                <strong>Real Madrid</strong>
                                <ul><li> Liga: 2011–12, 2016–17</li>
                                    <li>Piala Raja Spanyol: 2010–11, 2013–14</li>
                                    <li>Piala Super Spanyol: 2012, 2017</li>
                                    <li>Liga Champions UEFA: 2013–14, 2015–16, 2016–17, 2017–18</li>
                                    <li>Piala Super UEFA: 2014, 2017</li>
                                    <li>Piala Dunia Antarklub FIFA: 2014, 2016, 2017</li>
                                </ul>
                            </tr>

                            <tr>
                                <strong>Juventus</strong>
                                <ul> <li>Serie A: 2018–19, 2019–20</li>
                                <li>Piala Italia: 2020–21</li>
                                <li>Piala Super Italia: 2018, 2020</li>
                                </ul>
                            </tr>
                            
                            <tr>                            
                                <strong>Portugal</strong>
                                <ul><li>Kejuaraan Eropa UEFA: 2016</li>
                                    <li>Liga Negara UEFA: 2018–19</li>
                                </ul>

                            </tr>
                            
                            <tr>
                                <strong>Individu</strong>
                                <ul><li>FIFA Ballon d'Or/Ballon d'Or: 2008, 2013, 2014, 2016, 2017</li>
                                    <li>Pemain Terbaik Dunia FIFA: 2008     </li>                      
                                    <li>Pemain Pria Terbaik FIFA: 2016, 2017     </li>                      
                                    <li>Sepatu Emas Eropa: 2007–08, 2010–11, 2013–14, 2014–15</li>
                                    <li>Pemain Portugal Terbaik versi FPF: 2016, 2017, 2018, 2019</li>
                                    <li>Pemain Terbaik Tahunan versi PFA: 2006–07, 2007–08</li>
                                    <li>Pemain Terbaik Liga Utama Inggris: 2006–07, 2007–08</li>
                                    <li>Sepatu Emas Liga Utama Inggris: 2007–08</li>
                                    <li>Pemain Terbaik La Liga: 2013–14</li>
                                    <li>Trofi Pichichi: 2010–11, 2013–14, 2014–15</li>
                                    <li>Pemain Terbaik Tahunan Serie A: 2019, 2020</li>
                                    <li>Capocannoniere: 2020–21</li>
                                </ul>
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>