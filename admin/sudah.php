<?php session_start();
require '../function.php';

if(isset($_SESSION["login"])){
  header("location: ../home.php");
  exit;
}

if(!isset($_SESSION["regis"])){
  header("location: logout.php");
  exit;
}

$user = query("SELECT * FROM  daftarkode WHERE used='sudah' ORDER BY kelas");

if(isset($_POST["cari2"])){
  $user = cari2($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>PPDS</title>
  <link rel="stylesheet" href="style2.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#002D40">Daftar Kode</li>
    <a href="logout.php"><button style="width:auto;background-color:#002D40;">Logout</button></a>
    <a href="sudah.php"><button style="width:auto;background-color:#002D40;">Reset</button></a>
    <a href="kode.php"><button style="width:auto;background-color:#002D40;">Belum Vote</button></a>
    <li>
      <form action="" method="post">
        <table>
          <tr>
            <td style="width: 85%"><input type="text" name="keyword" id="keyword"  placeholder="lakukan pencarian disini..." autofocus autocomplete="off"></td>
            <td><button type="submit" name="cari2" >Cari</button></td>
          </tr>
        </table>
      </form>
    </li>

    <li>
   <table id="example" class="display responsive nowrap" style="width:100%">
    <thead style="background-color:grey">
      <tr>
        <th style="width:20px">No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Kelas</th>
        <th style="width:100px">Status</th>
        <th>Kode</th>
      </tr>
    </thead>
    <tbody>

<?php $i = 1; ?>
<?php foreach($user as $row): ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $row["nama"];?></td>
          <td><?php echo $row["nim"];?></td>
          <td><?php echo $row["kelas"];?></td>
          <td><?php echo $row["used"];?></td>
          <td><?php echo $row["kode"];?></td>
        </tr>
<?php $i++; ?>
<?php endforeach; ?>                        

   </table>

   
    </li>
  </ul>
</div>


</body>
</html>