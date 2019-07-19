<?php
session_start();

if(!isset($_SESSION["login"])){
  header("location: index.php");
  exit;
}

if(isset($_SESSION["admin"])){
  header("location: admin");
  exit;
}

if(isset($_SESSION["regis"])){
  header("location: admin");
  exit;
}

require 'function.php';

if(isset($_POST["vote1"])){

	if( vote1($_POST) > 0) {
    mysqli_query($conn, "UPDATE  daftarkode SET used='sudah' WHERE nim = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
    
    $_SESSION['login']=="";
    date_default_timezone_set('Asia/Jakarta');
    $ldate=date( 'Y-m-d H:i:s', time () );
    mysqli_query($conn,"UPDATE login  SET logout = '$ldate' WHERE nim = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
    session_unset();
    session_destroy();
    echo "<script>alert('Vote berhasil');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	} else {
		echo mysqli_error($conn);
	}

}

if(isset($_POST["vote2"])){

  if( vote2($_POST) > 0) {
    mysqli_query($conn, "UPDATE  daftarkode SET used='sudah' WHERE nim = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
    
    $_SESSION['login']=="";
    date_default_timezone_set('Asia/Jakarta');
    $ldate=date( 'Y-m-d H:i:s', time () );
    mysqli_query($conn,"UPDATE login  SET logout = '$ldate' WHERE nim = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
    session_unset();
    session_destroy();
    echo "<script>alert('Vote berhasil');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
  } else {
    echo mysqli_error($conn);
  }

}

if(isset($_POST["vote3"])){

  if( vote3($_POST) > 0) {
    mysqli_query($conn, "UPDATE  daftarkode SET used='sudah' WHERE nim = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
    
    $_SESSION['login']=="";
    date_default_timezone_set('Asia/Jakarta');
    $ldate=date( 'Y-m-d H:i:s', time () );
    mysqli_query($conn,"UPDATE login  SET logout = '$ldate' WHERE nim = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
    session_unset();
    session_destroy();
    echo "<script>alert('Vote berhasil');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    
  } else {
    echo mysqli_error($conn);
  }

}



?>

<!DOCTYPE html>
<html>
<head>
	<title>PPDS</title>
	<link rel="shortcut icon" href="">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="style2.css">
	<script src="script.js"></script>
</head>
<body>

	<h1 style="text-align: center">Panitia Pemilihan DPM SEMA 2019</h3>
	<p style="text-align: center">Pemilihan Ketua-Wakil Ketua Senat Mahasiswa</p>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#002D40">Calon 01</li>
    <li>
    	<div class="cfoto">
  			<img src="foto/manda.jpg" alt="Amanda" class="image">
  			<div class="middle">
    			<div class="text"><b>PPDS 2019</b></div>
  			</div>
		</div>
    </li>
    <li>Amanda Tabitha</li>
    <li class="grey">
    	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;background-color:#002D40;">Profil</button>
    	<a class="button2">Hi</a>
    	<button onclick="document.getElementById('id01b').style.display='block'" style="width:auto;background-color:#FF414D;">Vote</button>
    </li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#002D40">Calon 02</li>
    <li>
    	<div class="cfoto">
  			<img src="foto/maudi.png" alt="Maudi" class="image">
  			<div class="middle">
    			<div class="text"><b>PPDS 2019</b></div>
  			</div>
		</div>
    </li>
    <li>Maudi Ayunda</li>
    <li class="grey">
    	<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;background-color:#002D40;">Profil</button>
    	<a class="button2">Hi</a>
    	<button onclick="document.getElementById('id02b').style.display='block'" style="width:auto;background-color:#FF414D;">Vote</button>
    </li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#002D40">Calon 03</li>
    <li>
    	<div class="cfoto">
  			<img src="foto/najwa.jpg" alt="Najwa" class="image">
  			<div class="middle">
    			<div class="text"><b>PPDS 2019</b></div>
  			</div>
		</div>
    </li>
    <li>Najwa Shihab</li>
    <li class="grey">
    	<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;background-color:#002D40;">Profil</button>
    	<a class="button2">Hi</a>
    	<button onclick="document.getElementById('id03b').style.display='block'" style="width:auto;background-color:#FF414D;">Vote</button>
    </li>
  </ul>
</div>






<div id="id01" class="modal">
  
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="foto/manda.jpg" alt="Avatar" class="avatar">
      <img src="foto/manda.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="pcontainer" style="background-color:#f1f1f1">
      <h3> Visi Misi </h3>
    </div>

  </form>
</div>


<div id="id01b" class="modal">
  
  <form class="modal-content animate" method="post" action="">
  	<div class="imgcontainer">
      <span onclick="document.getElementById('id01b').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="foto/ppds1.png" alt="Avatar" class="avatar">
    </div>
  	<div class="pcontainer" style="background-color:#f1f1f1">
      <h3 style="text-align:center" > Apakah Anda Yakin Akan Memilih Calon 01? </h3>
      <p style="text-align:center">Setelah menekan tombol 'YA!' Anda tidak dapat merubah pilihan</p>
      <table>
      	<tr>
      		<td style="text-align:right"><input type="submit" name="vote1" value="YA!" style="width:100px;background-color:#1AA687;"></td>
      		<td style="text-align:left"><button type="button" onclick="document.getElementById('id01b').style.display='none'" class="cancelbtn">Kembali</button></td>
      	</tr>
      </table>
      
    </div>

  </form>
</div>

<div id="id02" class="modal">
  
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="foto/maudi.png" alt="Avatar" class="avatar">
      <img src="foto/maudi.png" alt="Avatar" class="avatar">
    </div>

    <div class="pcontainer" style="background-color:#f1f1f1">
      <h3> Visi Misi </h3>
    </div>

  </form>
</div>


<div id="id02b" class="modal">
  
  <form class="modal-content animate" method="post" action="">
  	<div class="imgcontainer">
      <span onclick="document.getElementById('id02b').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="foto/ppds1.png" alt="Avatar" class="avatar">
    </div>
  	<div class="pcontainer" style="background-color:#f1f1f1">
      <h3 style="text-align:center" > Apakah Anda Yakin Akan Memilih Calon 02? </h3>
      <p style="text-align:center">Setelah menekan tombol 'YA!' Anda tidak dapat merubah pilihan</p>
      <table>
      	<tr>
      		<td style="text-align:right"><input type="submit" name="vote2" value="YA!" style="width:100px;background-color:#1AA687;"></td>
      		<td style="text-align:left"><button type="button" onclick="document.getElementById('id02b').style.display='none'" class="cancelbtn">Kembali</button></td>
      	</tr>
      </table>
      
    </div>

  </form>
</div>

<div id="id03" class="modal">
  
  <form class="modal-content animate" action="">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="foto/najwa.jpg" alt="Avatar" class="avatar">
      <img src="foto/najwa.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="pcontainer" style="background-color:#f1f1f1">
      <h3> Visi Misi </h3>
    </div>

  </form>
</div>


<div id="id03b" class="modal">
  
  <form class="modal-content animate" method="post" action="">
  	<div class="imgcontainer">
      <span onclick="document.getElementById('id03b').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="foto/ppds1.png" alt="Avatar" class="avatar">
    </div>
  	<div class="pcontainer" style="background-color:#f1f1f1">
      <h3 style="text-align:center" > Apakah Anda Yakin Akan Memilih Calon 03? </h3>
      <p style="text-align:center">Setelah menekan tombol 'YA!' Anda tidak dapat merubah pilihan</p>
      <table>
      	<tr>
      		<td style="text-align:right"><input type="submit" name="vote3" value="YA!" style="width:100px;background-color:#1AA687;"></td>
      		<td style="text-align:left"><button type="button" onclick="document.getElementById('id03b').style.display='none'" class="cancelbtn">Kembali</button></td>
      	</tr>
      </table>
      
    </div>

  </form>
</div>

</body>
</html>
