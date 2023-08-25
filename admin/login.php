<?php
    //start session untuk admin
    session_start();

    //mencegah akses halaman admin dari url

    //jika admin sudah login
    if(isset($_SESSION['admin'])){
        
        //lempar ke halaman admin
        header('location: admin.php');
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
                <a href="../index.php" class="navbar-brand">Belajar Bahasa Madura</a>
            </div>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-gear"></i> Setting
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="active">
                            <a href="../admin/login.php"><i class="fa fa-fw fa-unlock"></i> Login</a>
                        </li>
                        <li>
                            <a href="../kontak.php"><i class="fa fa-fw fa-envelope"></i> Kontak</a>
                        </li>
                        <li>
                            <a href="../petunjuk.php"><i class="fa fa-fw fa-info"></i> Tentang</a>
                        </li>
                    </ul>
                </li>
            </ul>

    </div>
    <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper" style="background:url(../image/bg.jpg)">
        <div align="center" class="container-fluid" style="height:550px">
            <div style="width:300px; height:200px; margin-top:200px; text-align:left;">
                <form role="form" action="proses-login.php" method="POST">
                    <div class="form-group">
                        <label>User Name</label>
                        <input class="form-control" name="username" required>

                        <label>Password</label>
                        <input class="form-control" type="password" name="password" required>
                        <br>
                    </div>
                    <div align="center">
                        <button type="submit" class="btn btn-primary btn-lg">OK</button>
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- <div style="position:fixed; bottom:0;">
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