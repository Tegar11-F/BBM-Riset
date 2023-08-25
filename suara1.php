<html>

<head>

    <meta charset="utf-8">

</head>

<body>
    <?php
	//menonaktifkan pesan error yang ada di php
	error_reporting(E_ERROR | E_PARSE);
	
	//fungsi untuk memainkan hasil audio dengan kalimat
	function mainkan($kalimat) {
		//semacam import fungsi yang ada di fsa
		require_once("fsa.php");
		
		//cek file suara sekaligus dihapus jika file yang lama sudah ada
		if (file_exists('suara')) {
			//hapus file suara
			unlink('suara');
		}

		//membuang noise "\" yang biasanya berbeda tiap browser
		$kalimat = str_replace("\\","",$kalimat);
		//menjadikan $kalimat menjadi karakter tertentu
		$input_kata = $kalimat;
		//memecah kalimat menjadi kata & ditampung di array
		$pecah = explode(' ',$input_kata);
		
		//memproses pecah kalimat dengan diberi tanda "-"
		foreach ($pecah as $i => $h){
			//apabila kata lebih dari 1
			if ($i > 0 ) {
				//hasil kata diberi tanda "-"
				$hasil_fsa .= " -";
			}
			//setiap kata akan dilanjutkan pada proses FSA dan disimpan pada $hasil_fsa
			$hasil_fsa .= proses_fsa($h);
		}
		//echo $hasil_fsa;
		
		//mengubah spasi pada $hasil_fsa menjadi "space"
		$hasil_fsa = str_replace(" ","space",$hasil_fsa);
		//$hasil_fsa dipecah menjadi suku kata berdasarkan "-"
		$list_suku_kata = explode("-", $hasil_fsa);
		//print_r($list_suku_kata);
		
		$files = null;
		//mengambil file audio suku kata di folder audio
		foreach ($list_suku_kata as $suku) {
			$nama_file = "audio/".$suku;
			//apabila ditemukan maka digabungkan (menggabungkan audio) ke dalam $files
			if (file_exists($nama_file)) {
				$files .= file_get_contents($nama_file);
			} else {
				$files .= file_get_contents("audio/beep");
				//$nama_file = "audio/space";
			}
		}
		
		//apabila file tidak kosong maka dibuilt file suara
		if (!empty($files)) {
			$suara = file_put_contents("suara", $files);
		}
		
		//jika suara ada maka audio dimainkan
		if (file_exists('suara')) {
			return '<center>
						<embed wmode="transparent" src="music.swf?url=suara"
								quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer"
								type="application/x-shockwave-flash" width="150" height="50">
						</embed>
					</center>';
		} else {
			echo ' Maaf, suara tidak tersedia ';
		}
	}
	
	//menampilkan hasil suara
	if (isset($_GET['kalimat'])) {
		echo mainkan($_GET['kalimat'])."";
	}
?>