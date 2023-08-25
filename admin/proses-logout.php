<?php
	session_start();

	//hapus session
	session_destroy();

	//lempar ke index
	header("location: ../index.php");
	exit();
?>