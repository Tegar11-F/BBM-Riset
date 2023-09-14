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
                                <i class="fa fa-table"></i> Kamus
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
                <script>
                $(document).ready(function() {

                    $('#input').keyup(function() { //saat ngetik langsung terjemah
                        translate();
                    });

                    $('#bahasa').change(function() { //saat bahasa diubah langsung terjemahkan
                        translate();
                    });

                    $('#tingkat').change(function() { //saat tingkat diubah langsung terjemahkan
                        translate();
                    });

                });

                function translate() {
                    var kal = document.getElementById('input').value;
                    var bahasa = document.getElementById('bahasa').value;
                    var tingkat = document.getElementById('tingkat').value;

                    document.getElementById('terjemahan').innerHTML =
                        "<font color='red'><blink>Sedang Menerjemahkan...</blink></font>";

                    if (bahasa != '1') {
                        $('#terjemahan').load('madura-indonesia.php', 'input=' + kal);
                    } else {
                        $('#terjemahan').load('indonesia-madura.php', 'input=' + kal + '&tingkat=' + tingkat);
                    }
                }
                </script>


                <div style="text-align: center;">
                    <div class="kuishp" id="kotak1"
                        style="display: inline-block; margin-left: 10px; text-align: center;">
                        <button id="bahasa" value="1" onclick="toggleContent('kotak1', 'kotak2')"
                            style="border: none; width: 100px; ">Indonesia</button>
                    </div>
                    <div class="swap" id="kotak1" style="display: inline-block; text-align: center;">
                        <button id="bahasa" value="1" onclick="toggleContent('kotak1', 'kotak2')"
                            style="border: none; background-color: #ffffff;"><i class="fa fa-exchange"></i></button>
                    </div>
                    <div id="kotak2" style="display: inline-block; text-align: center;">
                        <button id="bahasa" value="2" onclick="toggleContent('kotak2', 'kotak1')"
                            style="border: none; width: 100px;" disabled>Madura</button>
                    </div>
                    <div class="form-group" style="display: inline-block; width: 7px; text-align: center;">
                        <select name="tingkat" id="tingkat" class="form-control"
                            style="border: none; font-weight: bold;">
                            <optgroup label="Tingkatan">
                                <?php if($_POST['tingkat']==1 || $_POST['tingkat']==""){ ?>
                                <option value="1" selected="selected">Enje'-Iyah</option>
                                <option value="2">Engghi-Enten</option>
                                <option value="3">Engghi-Bhunten</option>
                                <?php }elseif($_POST['tingkat']==2){?>
                                <option value="1">Enje'-Iyeh</option>
                                <option value="2" selected="selected">Engghi-Enten</option>
                                <option value="3">Engghi-Bhunten</option>
                                <?php }else{ ?>
                                <option value="1">Enje'-Iyeh</option>
                                <option value="2">Engghi-Enten</option>
                                <option value="3" selected="selected">Engghi-Bhunten</option>
                                <?php } ?>
                            </optgroup>
                        </select>
                    </div>
                </div>



                <form action="" method="post" onSubmit="return false">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <!-- <h4>Masukkan Kalimat</h4> -->

                            <textarea name="input" id="input" class="form-control" rows="7"
                                placeholder="Tekan Tombol Spasi Setelah Input Kata"
                                style="font-weight: bold;"><?php if(isset($_POST['input']))echo stripslashes($_POST['input']);?></textarea>
                            <br>
                            <button type="button" class="btn btn-warning" onClick="karakter_e()">Karakter
                                &egrave;</button>
                            <button type="button" class="btn btn-success" onClick="karakter_a()">Karakter
                                &acirc;</button>
                        </div>

                        <script>
                        function karakter_e() {
                            teks = document.getElementById("input").value
                            document.getElementById("input").value = teks + "è"
                            document.getElementById("input").focus()
                            return false
                        }

                        function karakter_a() {
                            teks = document.getElementById("input").value
                            document.getElementById("input").value = teks + "â"
                            document.getElementById("input").focus()
                            return false
                        }
                        </script>

                        <!-- <div class="form-group">
                            <label>Terjemahan</label>
                            <select name="bahasa" id="bahasa" onChange="cek_bahasa()" class="form-control">
                                <?php if($_POST['bahasa']==1 || $_POST['bahasa']==""){ ?>
                                <option value="1" selected="selected">Indonesia-Madura</option>
                                <option value="2">Madura-Indonesia</option>
                                <?php }else{?>
                                <option value="1">Indonesia-Madura</option>
                                <option value="2" selected="selected">Madura-Indonesia</option>
                                <?php } ?>
                            </select>
                        </div> -->


                    </div>
                </form>
                <!-- /.row -->

                <div class="col-lg-6 text-left">
                    <div class="form-group">
                        <!-- <h4>Hasil Terjemahan</h4> -->

                        <div class="panel panel-default" style=" height:155px;">
                            <div class="panel-body">
                                <p id="terjemahan">.::Belum Ada Inputan::.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!-- <script type="text/javascript">
                function cek_bahasa() {
                    var pil = document.getElementById("bahasa").value;
                    if (pil == 2) {
                        document.getElementById("tingkat").disabled = true;
                    } else {
                        document.getElementById("tingkat").disabled = false;
                    }
                }
                </script> -->


                <script>
                function fungsiKotak1() {
                    // Logika yang akan dijalankan saat tombol pada kotak 1 ditekan
                    console.log("Tombol di kotak 1 ditekan");
                }

                function fungsiKotak2() {
                    // Logika yang akan dijalankan saat tombol pada kotak 2 ditekan
                    console.log("Tombol di kotak 2 ditekan");
                }

                function toggleContent(idToToggle, idToReset) {
                    var kotakToToggle = document.getElementById(idToToggle);
                    var buttonToToggle = kotakToToggle.querySelector("button");

                    var kotakToReset = document.getElementById(idToReset);
                    var buttonToReset = kotakToReset.querySelector("button");

                    if (buttonToToggle.value === "1") {
                        buttonToToggle.value = "2";
                        buttonToToggle.textContent = "Madura";

                        buttonToReset.value = "1";
                        buttonToReset.textContent = "Indonesia";

                        // Menjalankan fungsiKotak1 saat tombol pada kotak 1 ditekan
                        fungsiKotak1();

                        // Disable the select option in kotak 1
                        document.getElementById("tingkat").disabled = true;
                    } else {
                        buttonToToggle.value = "1";
                        buttonToToggle.textContent = "Indonesia";

                        buttonToReset.value = "2";
                        buttonToReset.textContent = "Madura";

                        // Menjalankan fungsiKotak2 saat tombol pada kotak 2 ditekan
                        fungsiKotak2();

                        // Enable the select option in kotak 1
                        document.getElementById("tingkat").disabled = false;
                    }
                }
                </script>

                <div class="col-lg-12" style="text-align:right;">
                    <a href="index.php" class="btn btn-lg btn-primary" role="button">Menu</a>
                    <a href="kuis.php" class="btn btn-lg btn-primary" role="button">Kuis »</a>
                </div>

            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="" id="footerhp">
            <div class="footer-inner bg-white text-center">
                <div class="row">
                    <div class="col-sm-12" id="batton-footer">
                        <br><br><br><br><br><br>
                        &copy; Universitas Trunojoyo Madura
                        <br><br><br>
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