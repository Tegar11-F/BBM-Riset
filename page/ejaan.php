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
                <a class="navbar-brand" href="utama.php">Belajar Bahasa Madura</a>
            </div>
            
			<!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav"> 
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-gear"></i> Setting <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../admin/login.php"><i class="fa fa-fw fa-unlock"></i> Login</a>
                        </li>
                        <li>
                            <a href="../kontak.php"><i class="fa fa-fw fa-envelope"></i> Kontak</a>
                        </li>
						<li>
                            <a href="../tentang.php"><i class="fa fa-fw fa-info"></i> Tentang</a>
                        </li>
                    </ul>
                </li>
            </ul>
            
			<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="../utama.php"><i class="fa fa-fw fa-home"></i> Menu Utama</a>
                    </li>
                    <li>
                        <a href="../huruf.php"><i class="fa fa-fw fa-book"></i> Pengenalan Huruf</a>
                    </li>
                    <li>
                        <a href="../suku-kata.php"><i class="fa fa-fw fa-file-text"></i> Pengenalan Suku Kata</a>
                    </li>
                    <li>
                        <a href="../kata.php"><i class="fa fa-fw fa-table"></i> Pengenalan Kata</a>
                    </li>
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#penggal">
                        	<i class="fa fa-fw fa-arrows-v"></i> Pengenalan Kalimat<i class="fa fa-fw fa-caret-down"></i>
                        </a>
                        <ul id="penggal" class="collapse">
                            <li>
                                <a href="../kalimat-dasar.php">Kalimat Dasar</a>
                            </li>
                            <li>
                                <a href="../input-indonesia.php">Input Indonesia</a>
                            </li>
                            <li>
                                <a href="../input-madura.php">Input Madura</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../kamus.php"><i class="fa fa-fw fa-search"></i> Kamus Terjemahan</a>
                    </li>
					<li>
                        <a href="../kuis.php"><i class="fa fa-fw fa-edit"></i> Kuis</a>
                    </li>
                    <li>
                        <a href="../petunjuk.php"><i class="fa fa-fw fa-info"></i> Petunjuk</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header" style="margin-bottom: 2px;margin-top: 2px;padding-bottom: 5px;">
                            Ejaan Bahasa Madura yang Disempurnakan
                        </h2>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="../utama.php">Menu Utama</a>
                            </li>
							<li class="active">
                                Ejaan Bahasa Madura yang Disempurnakan
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				
				<div class="col-lg-12">
					<h3>
						Berdasarkan Pedoman Umum Ejaan Bahasa Madura yang disempurnakan maka terdapat beberapa aturan sebagai berikut :
					</h3>
					<br>
					<h4>1. Vokal /a/ mempunyai dua variasi bunyi, yaitu :</h4>
						<ul>
							<li>
								<p>[a] contoh: acar (acar)</p>
							</li>
							<li>
								<p>[â] contoh : bârâ (bengkak)</p>
							</li>
						</ul>
					<h4>2. Vokal /e/ mempunyai dua variasi bunyi, yaitu :</h4>
						<ul>
							<li>
								<p>[e] contoh: eller (incar)</p>
							</li>
							<li>
								<p>[[è] contoh: èlong (hidung)</p>
							</li>
						</ul>
					<h4>3. Fonem-fonem tanaspirat, yaitu /b/ ḍ/ d/ g/ j/ contoh :</h4>
						<ul>
							<li>
								<p>b = bâlâng =( belalang)</p>
							</li>
							<li>
								<p>d = dâ’deng = (linglung)</p>
							</li>
							<li>
								<p>g = gârâmbis	= (gondrong)</p>
							</li>
						</ul>
					<h4>4. Fonem-fonem beraspirat, yaitu /bh/ dh/ ḍh/ gh/ jh/ contoh :</h4>
						<ul>
							<li>
								<p>bh =	bhâbâng	= (bawang)</p>
							</li>
							<li>
								<p>dh = dhândhân = (dandan)</p>
							</li>
							<li>
								<p>ḍh =	ḍhâkḍhâk = (gedor)</p>
							</li>
							<li>
								<p>gh = ghângan	= (sayur)</p>
							</li>
							<li>
								<p>jh = jhâjjhâlâng	= (laron)</p>
							</li>
						</ul>
					<h4>5. Aksara peluncur /w/ y/ glotal/ yang timbul karena proses afiksasi, tidak ditulis seperti :</h4>
						<ul>
							<li>
								<p>Tabbhuwân menjadi tabbhuân = tabuhan</p>
							</li>
							<li>
								<p>Asapowan menjadi	asapoan = menyapu</p>
							</li>
							<li>
								<p>Èyombhâllâ menjadi èombhâllâ = akan diupahi</p>
							</li>
							<li>
								<p>sarpa’an menjadi	sarpaan = sampah</p>
							</li>
						</ul>
					<h4>6. Aksara peluncur /w/ y/ glotal/ yang timbul pada kata asal, tetap ditulis seperti contoh :</h4>
						<ul>
							<li>
								<p>orèng towa bukan orèng toa = orang tua</p>
							</li>
							<li>
								<p>buwâ bukan buâ = buah</p>
							</li>
							<li>
								<p>aghellâ’ân bukan	aghellâân = tertawa</p>
							</li>
							<li>
								<p>sèyang bukan sèang = siang</p>
							</li>
							<li>
								<p>biyasa bukan biasa = biasa</p>
							</li>
						</ul>
					<br>
					<h5>Sumber : Pawitra, A. Kamus Lengkap Bahasa Madura Indonesia. Jakarta: Dian Rakyat. 2009.</h5>
					<br>
				</div>
                
                <div style="text-align:center" class="col-lg-12">
                    <a href="../huruf.php" class="btn btn-primary btn-lg" role="button">Mulai Belajar »</a>
            	</div>
				
			</div>       
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
    <div style="position:fixed; bottom:0;">
        <audio controls="controls" autoplay="true">
            <source src="../audio/Together.mp3" type="audio/mpeg" />
            <embed src="Together.mp3" />
        </audio> 
    </div>

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
