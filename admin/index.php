<?php

session_start();

if(isset($_SESSION["admin"])){
  header("location: tabel.php");
  exit;
}

if(isset($_SESSION["regis"])){
  header("location: kode.php");
  exit;
}

if(isset($_SESSION["login"])){
  header("location: ../home.php");
  exit;
}

require '../function.php';

	if(isset($_POST["admin"]) ){
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND status = 'admin' ");
		$result1 = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' AND status = 'regis' ");
		
		//cek username
		if( mysqli_num_rows($result) === 1){
			
			//cek status
			$row = mysqli_fetch_assoc($result);
			if( $row["password"] = $password ){
				
				//set session
				$_SESSION["admin"] = true;
				
				
				header("location: tabel.php");
				exit;
			}

			
		}

		//cek username
		if( mysqli_num_rows($result1) === 1){
			
			//cek status
			$row = mysqli_fetch_assoc($result);
			if( $row["password"] = $password ){
				
				//set session
				$_SESSION["regis"] = true;
				
				
				header("location: kode.php");
				exit;
			}

			
		}
		
		$error = true;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>PPDS-ADMIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
</head>
<body>
	<div class="container" >
		<h2 class="text-center">L O G &nbsp;I N</h2>
		<hr>
		<p class="text-center lead font-weigth-bold">ADMIN</p>
  		<form method="post" action="">
  			<div class="form-group">
  			<label>Username</label>
	  			<div class="input-group">
	  				<div class="input-group-prepend">
	  					<div class="input-group-text"><i class="fas fa-user"></i></div>
	  				</div>	  	
	    			<input type="text" class="form-control" id="username" name="username" placeholder="enter username" maxlength="9" autofocus autocomplete="off" required>
	    		</div>
    		</div>

    		<div class="form-group">
    		<label>Password</label>
    			<div class="input-group">
	  				<div class="input-group-prepend">
	  					<div class="input-group-text"><i class="fas fa-unlock-alt"></i></div>
	  				</div>	  
    				<input type="password" class="form-control" id="password" name="password" placeholder="enter password" maxlength="6" autocomplete="off" required>
    			</div>
    		</div>

<?php if(isset($error)) : ?>
<?php 
	echo "<script>
	alert('Username atau Password salah');
	</script>"; 
?>
<?php endif; ?>

    		<button type="submit" name="admin" class="btn btn-success">SUBMIT</button>
  		</form>
	</div>
	<p class="lead"><a href="../">Back?</a></p>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
