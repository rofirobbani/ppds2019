<?php

session_start();

if(isset($_SESSION["login"])){
  header("location: home.php");
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

	if(isset($_POST["login"]) ){
		global $conn;

		$kode = $_POST["kode"];
		$nim = $_POST["nim"];
		
		$result = mysqli_query($conn, "SELECT * FROM daftarkode WHERE nim = '$nim' AND kode = '$kode' AND used = 'belum'");
		
		//cek nim
		if( mysqli_num_rows($result) === 1){

				//ubah menjadi sudah digunakan

				$_SESSION['login']=$_POST['nim'];
				$_SESSION['id']=$row['id'];
				$log=mysqli_query($conn,"INSERT INTO login(id,nim) values('".$_SESSION['id']."','".$_SESSION['login']."')");

				header("location: home.php");
				exit;	
			
		}
		
		$error = true;
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>PPDS-LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
	<div class="container" >
		<h2 class="text-center">L O G &nbsp;I N</h2>
		<hr>
		<p class="text-center lead">Masukan NIM dan Kode Unik</p>
  		<form method="post" action="">
  			<div class="form-group">
  			<label>NIM</label>
	  			<div class="input-group">
	  				<div class="input-group-prepend">
	  					<div class="input-group-text"><i class="fas fa-user"></i></div>
	  				</div>	  	
	    			<input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM" maxlength="9" autofocus autocomplete="off" required>
	    		</div>
    		</div>

    		<div class="form-group">
    		<label>Kode Unik</label>
    			<div class="input-group">
	  				<div class="input-group-prepend">
	  					<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
	  				</div>	  
    				<input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode Unik" maxlength="6" autocomplete="off" required>
    			</div>
    		</div>

<?php if(isset($error)) : ?>
<?php 
	echo "<script>
	alert('Kode Salah atau telah digunakan');
	</script>"; 
?>
<?php endif; ?>

    		<button type="submit" name="login" class="btn btn-success">SUBMIT</button>
  		</form>
	</div>
	<p class="lead"><a href="index.php">Back?</a></p>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
