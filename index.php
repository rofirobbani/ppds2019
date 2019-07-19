<?php /*

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


$selectnama = query("SELECT nama FROM daftarkode WHERE nim = '".$_SESSION['login']."' " );

*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>PPDS-HOME</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="indeks.css">
</head>
<body class="page-top">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
	  <div class="container">
		  <img src="foto/ppds1.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
		  <a class="navbar-brand font-weight-bold" href="#">&nbsp;&nbsp;<span class="font-montserrat">PPDS 2019</span></a>
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="nav-link js-scroll-trigger" href="welcome.php"><span class="font-montserrat">HOME</span> <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#admin" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <span class="font-montserrat">ADMIN</span>	
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="admin/"><span class="font-montserrat">admin1</span></a>
		           <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="admin/"><span class="font-montserrat">admin2</span></a>		 
		        </div>
		      </li>
		    </ul>
		  </div>
	  </div>
	</nav>


	<div class="jumbotron">
	 <div class="container">
	  <h1 class="display-4">SELAMAT DATANG DI <br><span class="font-weight-bold">WEBSITE PPDS 2019</span></h1>
	  <p class="lead">Ini ntar disi kata2 tapi sekarang hari ini jam ini menit ini dan juga detik ini, saya masih tidak tahu mau ngetik apa. Apabila ada saran kata2 bagus boleh dah tuh dikirim ke saya ehhehe.</p>
	  <hr class="my-4">
	  <p class="lead">Silahkan klik log in untuk melanjutkan</p>
	  <a class="btn btn-info btn-lg font-weight-bold" href="http:/latihan/ppds2/loginsiswa.php" role="button"><span class="font-montserrat">LOG IN</span></a>
	 </div>
	 <br><br><br><br><br><br><br>
	   <p class="lead" style="font-size: 15px;"> CopyRight &copy; PPDS 2019</p>
	</div>


















<?php /* 
	<div>
		<br>
		<img src="foto/ppds1.png" alt="Avatar" class="avatar" style="width:100px; margin-left:46%;">
		<h1 style="text-align: center">Selamat Datang (user) </h1>

		<?php /* 
		<table id="example" class="display responsive nowrap" style="width:100%; border: none;">
		    <tbody>

		<?php $i = 1; ?>
		<?php foreach($selectnama as $row): ?>
		        <tr>
		          <td><?php echo $row["nama"];?></td>
		        </tr>
		<?php $i++; ?>
		<?php endforeach; ?>                        

		   </table>
		  ?>

		<h2 style="text-align: center">di Website PPDS 2019</h2>
		<p style="text-align: center">Pada kali ini kamu diminta untuk memberikan suara pada Calon Ketua/Wakil Sema pilihan kamu</p>
		<p style="text-align: center"> Selamat memilih!</p>
		<h3 style="text-align: center">(semboyan ppds)</h3>
	</div> 
	<div style="margin-top: 100px;">
		<form style="text-align: center">
			<label>klik untuk lanjut</label>
			<br>
			<input type="submit" name="lanjut" value="Lanjut" style="width:10%">
		</form>
	</div>
*/?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>