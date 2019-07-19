<?php

//konek ke database
$conn = mysqli_connect("localhost","root","","ppds");


//fungsi query
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows =[];
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

//fungsi tambah vote
function vote1() {
	global $conn;
		$resul = mysqli_query($conn, "SELECT * FROM daftarkode WHERE nim = '".$_SESSION['login']."' AND used = 'belum'");
		
		//cek nim
		if( mysqli_num_rows($resul) === 1){

			//tambahkan vote ke database
			mysqli_query($conn, "UPDATE  vote SET jumlah=jumlah+1 WHERE id = '1'");
		
			return mysqli_affected_rows($conn);
	}
	
	session_unset();
	session_destroy();
	echo "<script>alert('Vote Gagal');</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

function vote2() {
	global $conn;
		$resul = mysqli_query($conn, "SELECT * FROM daftarkode WHERE nim = '".$_SESSION['login']."' AND used = 'belum'");
		
		//cek nim
		if( mysqli_num_rows($resul) === 1){

			//tambahkan vote ke database
			mysqli_query($conn, "UPDATE  vote SET jumlah=jumlah+1 WHERE id = '2'");
		
			return mysqli_affected_rows($conn);
	}
	
	session_unset();
	session_destroy();
	echo "<script>alert('Vote Gagal');</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

function vote3() {
	global $conn;
		$resul = mysqli_query($conn, "SELECT * FROM daftarkode WHERE nim = '".$_SESSION['login']."' AND used = 'belum'");
		
		//cek nim
		if( mysqli_num_rows($resul) === 1){

			//tambahkan vote ke database
			mysqli_query($conn, "UPDATE  vote SET jumlah=jumlah+1 WHERE id = '3'");
		
			return mysqli_affected_rows($conn);
	}
	
	session_unset();
	session_destroy();
	echo "<script>alert('Vote Gagal');</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

//fungsi pencarian
function cari($keyword){
	$query = "SELECT * FROM  daftarkode WHERE used='belum' AND  
		nim LIKE '%$keyword%' OR
		nama LIKE '%$keyword%' OR
		kelas LIKE '%$keyword%' OR
		kode LIKE '%$keyword%' ORDER BY used DESC
		";
	return query($query);
	
}

function cari2($keyword){
	$query = "SELECT * FROM  daftarkode WHERE used='sudah' AND  
		nim LIKE '%$keyword%' OR
		nama LIKE '%$keyword%' OR
		kelas LIKE '%$keyword%' OR
		used LIKE '%$keyword%' ORDER BY used DESC
		";
	return query($query);
	
}