<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBM - Belajar Bahasa Madura</title>

    <!-- Slide CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="apple-touch-icon" href="image/sakera.png">
    <link rel="shortcut icon" href="image/sakera.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
    #weatherWidget .currentDesc {
        color: #ffffff !important;
    }

    .traffic-chart {
        min-height: 335px;
    }

    #flotPie1 {
        height: 150px;
    }

    #flotPie1 td {
        padding: 3px;
    }

    #flotPie1 table {
        top: 20px !important;
        right: -10px !important;
    }

    .chart-container {
        display: table;
        min-width: 270px;
        text-align: left;
        padding-top: 10px;
        padding-bottom: 10px;
    }

    #flotLine5 {
        height: 105px;
    }

    #flotBarChart {
        height: 150px;
    }

    #cellPaiChart {
        height: 160px;
    }
    </style>

</head>

<body>

    <div>
        <aside id="left-panel" class="left-panel" style="color: white;background-color: black;">
            <nav class="navbar navbar-expand-sm navbar-default" style="color: white;background-color: black;">
                <div id="main-menu" class="main-menu collapse navbar-collapse"
                    style="color: white;background-color: black;">
                    <ul class="nav navbar-nav">
                        <li class="menu-title" style="color: white;">Belajar Bahasa Madura</li>
                        <li class="active" style="color: white;background-color: black;">
                            <a href="index.php" style="color: white; "><i class="menu-icon ti-home"
                                    style="color: white;"></i>Menu Utama </a>
                        </li>
                        <li>
                            <a href="huruf.php" style="color: white;"> <i class="menu-icon ti-file"
                                    style="color: white;"></i>Pengenalan Huruf </a>
                        </li>
                        <li>
                            <a href="suku-kata.php" style="color: white;"> <i class="menu-icon ti-files"
                                    style="color: white;"></i>Pengenalan Suku Kata </a>
                        </li>
                        <li>
                            <a href="kata.php" style="color: white;"> <i class="menu-icon ti-book"
                                    style="color: white;"></i>Pengenalan Kata </a>
                        </li>
                        <li>
                            <a href="kata-khusus.php" style="color: white;"> <i class="menu-icon ti-notepad"
                                    style="color: white;"></i>Kata Khusus </a>
                        </li>
                        <li>
                            <a href="kalimat-dasar.php" style="color: white;"> <i class="menu-icon ti-agenda"
                                    style="color: white;"></i>Pengenalan Kalimat </a>
                        </li>
                        <li>
                            <a href="kamus.php" style="color: white;"> <i class="menu-icon ti-search"
                                    style="color: white;"></i>Kamus Terjemahan </a>
                        </li>
                        <li>
                            <a href="kuis.php" style="color: white;"> <i class="menu-icon ti-pencil-alt"
                                    style="color: white;"></i>Kuis </a>
                        </li>
                        <li>
                            <a href="petunjuk.php" style="color: white;"> <i class="menu-icon ti-info"
                                    style="color: white;"></i>Petunjuk </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
    </div>

    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="image/logo-bbm.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">

                    <div class="user-area dropdown float-right">
                        <a href="#" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon ti-settings"> Pengaturan</i>
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="admin/login.php"><i class="ti-unlock"></i>Login</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="index.php">Menu Utama</a>
                            </li>
                            <li class="active">
                                Kalimat B.Madura
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div style="height:430px;" class="col-lg-12">
                    <div class="presentation"
                        style="    position: absolute;height: 100%;width: 100%;    left: 0px;    top: 0px;    display: block;    overflow: hidden;background: #ffffff; /* Mengatur warna latar belakang menjadi putih */">
                        <!-- Defining the main presentation -->
                        <div id="presentation-counter">Proses...</div>

                        <div class="slides">
                            <!-- Defining slides -->
                            <div class="slide" id="slide1">
                                <!-- Defining single slide -->
                                <section class="middle">
                                    <h2 style="color:#31708f">
                                        <strong>Kalimat adalah gabungan <br> dua kata
                                            atau lebih<br> dan harus memiliki subyek <br>
                                            dan predikat sebagai syarat <br>
                                            minimal sebuah kalimat.</strong>
                                    </h2>
                                    <h3>Tekan <span id="left-init-key" class="key">&rarr;</span> di Keyboard <br> untuk
                                        Melanjutkan.</h3>
                                </section>
                            </div>

                            <div class="slide" id="tingkat">
                                <section class="middle">
                                    <h2 style="color:#31708f">
                                        <strong>Pada dasarnya bahasa Madura <br> dibagi menjadi <br>tiga tingkat bahasa:
                                        </strong>
                                    </h2>
                                    <hr>
                                    <h3>Tingkat Bahasa Umum <br> <em>(iyâ-enjâ’)</em></h2>
                                        <hr>
                                        <h3>Tingkat Bahasa Menengah <br> <em>(engghi-enten)</em></h2>
                                            <hr>
                                            <h3>Tingkat Bahasa Tinggi/Halus <br> <em>(Èngghi-bhunten)</em></h2>
                                                <hr>
                                </section>
                            </div>

                            <div class="slide" id="kal">
                                <section class="middle">
                                    <h2 style="color:#3c763d">
                                        <strong>Contoh Kalimat <br> Tingkat Bahasa Umum
                                            <br><em>(iyâ-enjâ’)</em></strong>
                                    </h2>
                                </section>
                            </div>

                            <div class="slide" id="kalimat1">
                                <section class="middle">
                                    <div class="alert alert-success">
                                        <h2>Apa bâ’na ella tao</h2>
                                        <h3><em>(Apakah kamu sudah tahu)</em></h3>
                                    </div>
                                    <!-- <button type="button" onClick="play('apa bâ\'na ella tao?')" class="btn btn-lg btn-success">Ucapkan</button> -->
                                </section>
                            </div>

                            <div class="slide" id="kalimat2">
                                <section class="middle">
                                    <div class="alert alert-info">
                                        <h2>Sapa nyamana bâ’na, lè’</h2>
                                        <h3><em>(Siapa nama kamu, dik)</em></h3>
                                    </div>
                                </section>
                            </div>

                            <div class="slide" id="kalimat3">
                                <section class="middle">
                                    <div class="alert alert-warning">
                                        <h2>Èntara dâ’ kamma</h2>
                                        <h3><em>(hendak pergi kemana)</em></h3>
                                    </div>
                                    <!-- <button type="button" onClick="play('èntara dâ\' kamma')" class="btn btn-lg btn-warning">Ucapkan</button> -->
                                </section>
                            </div>

                            <div class="slide" id="kal2">
                                <section class="middle">
                                    <h2 style="color:#31708f">
                                        <strong>Contoh Kalimat <br> Tingkat Bahasa Menengah
                                            <br><em>(engghi-enten)</em></strong>
                                    </h2>
                                </section>
                            </div>

                            <div class="slide" id="kalimat4">
                                <section class="middle">
                                    <div class="alert alert-danger">
                                        <h2>Napè dhika pon tao</h2>
                                        <h3><em>(Apakah kamu sudah tau) </em></h3>
                                    </div>
                                    <!-- <button type="button" onClick="play('napè dhika pon tao')" class="btn btn-lg btn-danger">Ucapkan</button> -->
                                </section>
                            </div>

                            <div class="slide" id="kalimat5">
                                <section class="middle">
                                    <div class="alert alert-success">
                                        <h2>Sèra nyamana dhika, lè’</h2>
                                        <h3><em>(Siapa nama kamu, dik) </em></h3>
                                    </div>
                                </section>
                            </div>

                            <div class="slide" id="kalimat6">
                                <section class="middle">
                                    <div class="alert alert-info">
                                        <h2>Èntara dâ’ ka’ amma dhika</h2>
                                        <h3><em>(Hendak pergi kemana kamu) </em></h3>
                                    </div>
                                    <!-- <button type="button" onClick="play('èntara dâ\' ka\' amma dhika')" class="btn btn-lg btn-info">Ucapkan</button> -->
                                </section>
                            </div>

                            <div class="slide" id="kal3">
                                <section class="middle">
                                    <h2 style="color:#8a6d3b">
                                        <strong>Contoh Kalimat <br> Tingkat Bahasa Tinggi/Halus
                                            <br><em>(Èngghi-bhunten)</em></strong>
                                    </h2>
                                </section>
                            </div>

                            <div class="slide" id="kalimat7">
                                <section class="middle">
                                    <div class="alert alert-warning">
                                        <h2>Ponapa panjhennengngan ampon mèyarsa</h2>
                                        <h3><em>(Apakah kamu sudah tau) </em></h3>
                                    </div>
                                    <!-- <button type="button" onClick="play('ponapa panjhennengan ampon mèyarsa')" class="btn btn-lg btn-warning">Ucapkan</button> -->
                                </section>
                            </div>

                            <div class="slide" id="kalimat8">
                                <section class="middle">
                                    <div class="alert alert-danger">
                                        <h2>Pasèra asmana panjhennengngan, lè’</h2>
                                        <h3><em>(Siapa nama kamu, dik) </em></h3>
                                    </div>
                                    <!-- <button type="button" onClick="play('pasèra asmana panjhennenggan lè\'')" class="btn btn-lg btn-danger">Ucapkan</button> -->
                                </section>
                            </div>

                            <div class="slide" id="kalimat9">
                                <section class="middle">
                                    <div class="alert alert-success">
                                        <h2>Bhâdhi mèyossa dâ' ka’ dimma</h2>
                                        <h3><em>(Hendak pergi kemana kamu) </em></h3>
                                    </div>
                                    <!-- <button type="button" onClick="play('bhâdhi mèyossa dâ ka' dimma')" class="btn btn-lg btn-success">Ucapkan</button> -->
                                </section>
                            </div>
                        </div>

                        <div id="hidden-note" class="invisible" style="display: none;">
                        </div> <!-- hidden note -->

                        <aside id="help" class="sidebar invisible" style="display: hidden;">
                            <!-- Defining sidebar help -->
                            <table>
                                <caption>Bantuan</caption>
                                <tr>
                                    <th>Pindah selanjutnya/kembali</th>
                                    <td>&larr;&nbsp;&rarr;</td>
                                </tr>
                                <tr>
                                    <th>Pindah selanjutnya</th>
                                    <td>spacebar</td>
                                </tr>
                            </table>
                        </aside>
                    </div>
                </div>
                <!-- /.row -->

                <div style="margin-top:15px;" class="col-lg-4">
                    <script type="text/javascript">
                    function cekSlide(posHal) {
                        //alert(posHal);
                        if (posHal == 1) {
                            $("#nav-prev").hide("slow");
                        } else
                        if (posHal == 14) {
                            $("#nav-next").hide("slow");
                        } else {
                            $("#nav-prev").show("slow");
                            $("#nav-next").show("slow");
                        }
                    }

                    // fungsi untuk memainkan audio
                    function playHuruf(posHal) {
                        // mengambil id hasilAudio
                        document.getElementById('hasilAudio');
                        if (posHal == 'kalimat1') {
                            $('#hasilAudio').load('suara.php', 'kalimat=apa bâ\'na ella tao');
                        } else if (posHal == 'kalimat2') {
                            $('#hasilAudio').load('suara.php', 'kalimat=sapa nyamana bâ\'na lè\'');
                        } else if (posHal == 'kalimat3') {
                            $('#hasilAudio').load('suara.php', 'kalimat=èntara dâ\' kamma');
                        } else if (posHal == 'kalimat4') {
                            $('#hasilAudio').load('suara.php', 'kalimat=napè dhika pon tao');
                        } else if (posHal == 'kalimat5') {
                            $('#hasilAudio').load('suara.php', 'kalimat=sèra nyamana dhika lè\'');
                        } else if (posHal == 'kalimat6') {
                            $('#hasilAudio').load('suara.php', 'kalimat=èntara dâ\' ka\' amma dhika');
                        } else if (posHal == 'kalimat7') {
                            $('#hasilAudio').load('suara.php', 'kalimat=ponapa panjhennengngan ampon mèyarsa');
                        } else if (posHal == 'kalimat8') {
                            $('#hasilAudio').load('suara.php', 'kalimat=pasèra asmana panjhennengngan, lè\'');
                        } else if (posHal == 'kalimat9') {
                            $('#hasilAudio').load('suara.php', 'kalimat=bhâdhi mèyossa dâ\' ka\' dimma');
                        } else {
                            document.getElementById('hasilAudio').innerHTML = "";
                        }
                        //alert(file);
                    }
                    </script>
                    <p id="hasilAudio" style="margin-bottom: 0px;"></p>
                </div>

                <div align="center" style="margin-top:30px;" class="col-lg-4">
                    <button title="Previous" id="nav-prev" class="fa fa-arrow-left" style="display:none"></button>
                    <button title="Jump to slide" id="slide-no">1</button>
                    <button title="Next" id="nav-next" class="fa fa-arrow-right"></button>
                </div>

                <div align="center" style="margin-top:20px;" class="col-lg-4">
                    <a href="index.php" class="btn btn-lg btn-primary" role="button">Menu</a>
                    <a href="kuis.php" class="btn btn-lg btn-primary" role="button">Kuis »</a>
                </div>

            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; Universitas Trunojoyo Madura
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#wrapper -->
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

    <!-- jQuery Slide -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

</body>

</html>