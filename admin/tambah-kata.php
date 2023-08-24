<?php
    //start session untuk admin
    session_start();

    //mencegah akses halaman admin dari url

    //jika admin belum login
    if(!isset($_SESSION['admin'])){
        
        //lempar ke halaman login
        header('location: login.php');
        exit();

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBM - Belajar Bahasa Madura</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">BBM Admin</a>
            </div>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-gear"></i> Setting
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="proses-logout.php"><i class="fa fa-fw fa-lock"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="admin.php"><i class="fa fa-fw fa-home"></i> Menu Utama</a>
                    </li>
                    <li class="active">
                        <a href="tambah-kata.php"><i class="fa fa-fw fa-book"></i> Tambah Kata</a>
                    </li>
                    <li>
                        <a href="tambah-audio.php"><i class="fa fa-fw fa-music"></i> Tambah Audio</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper" style="background:url(../image/bg.jpg)">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            Tambah Kata
                        </h2>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <a href="admin.php">Menu Utama</a>
                            </li>
                            <li class="active">
                                Tambah Kata
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="col-lg-6">
                    <form id="tambahKata" name="tambahKata" method="post" action="proses-tambah-kata.php">

                        <div class="form-group">
                            <label>Indonesia</label>
                            <input class="form-control" type="text" name="indo" id="indo" required>
                            <p class="help-block">Arti Indonesia</p>

                            <label>Madura</label>
                            <input class="form-control" type="text" name="mdr" id="mdr" required>
                            <p class="help-block">Arti Madura</p>

                            <label>Keterangan</label>
                            <input class="form-control" type="text" name="ket" id="ket" required>
                            <p class="help-block">noun, verb, adjective, partikel, pron</p>

                            <label>Tingkatan</label>
                            <input class="form-control" type="text" name="tingkatan" id="tingkatan" required>
                            <p class="help-block">alos Tengghi, lomrah, alos </p>
                            <br>
                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                            <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                            <br>
                            <br>
                        </div>
                    </form>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- 
    <div style="position:fixed; bottom:0;">
        <audio controls="controls" autoplay="true">
            <source src="../audio/Together.mp3" type="audio/mpeg" />
            <embed src="Together.mp3" />
        </audio>
    </div> -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/plugins/morris/raphael.min.js"></script>
    <script src="../js/plugins/morris/morris.min.js"></script>
    <script src="../js/plugins/morris/morris-data.js"></script>

</body>

</html>