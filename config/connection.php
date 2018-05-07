<?php 
	$koneksi = mysqli_connect("localhost","root","","cmsku");
	
	if($koneksi){
		echo "Berhasil membuat branch";
	}