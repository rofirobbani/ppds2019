<?php session_start();
require '../function.php';

if(isset($_SESSION["login"])){
  header("location: ../home.php");
  exit;
}

if(!isset($_SESSION["admin"])){
  header("location: logout.php");
  exit;
}
else{
date_default_timezone_set('Asia/Jakarta');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );



$total = query("SELECT SUM(jumlah) as total_suara FROM vote");
$persent = query("SELECT ROUND((SELECT sum(jumlah) FROM vote)/(2500)*100,2) AS persent
FROM vote LIMIT 1");
$belum = query("SELECT (2500-SUM(jumlah)) as belum FROM vote");
$persenb = query("SELECT ROUND((SELECT (2500-sum(jumlah)) FROM vote)/(2500)*100,2) AS persenb
FROM vote LIMIT 1");
$jumlah1 = query("SELECT jumlah FROM vote WHERE id = '1'");
$persen1 = query("SELECT ROUND((SELECT jumlah FROM vote WHERE id = '1')/(SELECT sum(jumlah) FROM vote)*100,2) AS persen1
FROM vote LIMIT 1");
$jumlah2 = query("SELECT jumlah FROM vote WHERE id = '2'");
$persen2 = query("SELECT ROUND((SELECT jumlah FROM vote WHERE id = '2')/(SELECT sum(jumlah) FROM vote)*100,2) AS persen2
FROM vote LIMIT 1");
$jumlah3 = query("SELECT jumlah FROM vote WHERE id = '3'");
$persen3 = query("SELECT ROUND((SELECT jumlah FROM vote WHERE id = '3')/(SELECT sum(jumlah) FROM vote)*100,2) AS persen3
FROM vote LIMIT 1");


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
    <li class="header" style="background-color:#002D40">Perolehan Suara</li>
    <li>
  <table id="example" class="display responsive nowrap" style="width:100%;font-size:20px;">
    <thead style="background-color:grey">
      <tr>
        <th>Jumlah Mahasiswa</th>
        <th colspan="2">Jumlah Suara Masuk</th>
        <th>Belum Memilih</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        
        <tr>

          <td>2500</td>

<?php foreach($total as $row): ?>
          <td><?php echo $row["total_suara"];?> suara</td>
<?php endforeach; ?>

<?php foreach($persent as $row): ?>
          <td><?php echo $row["persent"];?> %</td>
<?php endforeach; ?>

<?php foreach($belum as $row): ?>
          <td><?php echo $row["belum"];?> suara</td>
<?php endforeach; ?>
        
          <td><a href="logout.php"><button style="width:auto;background-color:#002D40;font-size:20px;">Logout</button></a></td>

        </tr>

   </table>
    </li>
  </ul>
</div>



<div class="columns">
  <ul class="price">
    <li>
  <table id="example" class="display responsive nowrap" style="width:100%;font-size:20px;">
    <thead style="background-color:grey">
      <tr>
        <th>Calon 01</th>
        <th>Calon 02</th>
        <th>Calon 03</th>
      </tr>
    </thead>
    <tbody>
        
        <tr>

         <td><div class="cfoto"><img src="foto/manda.jpg" alt="Amanda" class="image"></div></td>
         <td><div class="cfoto"><img src="foto/maudi.png" alt="Amanda" class="image"></td>
         <td><div class="cfoto"><img src="foto/najwa.jpg" alt="Amanda" class="image"></td>
        </tr>              

        <tr>

<?php foreach($jumlah1 as $row): ?>
          <td><?php echo $row["jumlah"];?> suara</td>
<?php endforeach; ?>

<?php foreach($jumlah2 as $row): ?>
          <td><?php echo $row["jumlah"];?> suara</td>
<?php endforeach; ?>

<?php foreach($jumlah3 as $row): ?>
          <td><?php echo $row["jumlah"];?> suara</td>
<?php endforeach; ?>

        </tr>   
        
        <tr style="font-size:26px">

<?php foreach($persen1 as $row): ?>
          <td><?php echo $row["persen1"];?> %</td>
<?php endforeach; ?>

<?php foreach($persen2 as $row): ?>
          <td><?php echo $row["persen2"];?> %</td>
<?php endforeach; ?>

<?php foreach($persen3 as $row): ?>
          <td><?php echo $row["persen3"];?> %</td>
<?php endforeach; ?>

        </tr>                    

   </table>
    </li>
  </ul>
</div>


<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#002D40">Daftar Login</li>
    <li>
  <table id="example" class="display responsive nowrap" style="width:100%">
    <thead style="background-color:grey">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Status</th>
        <th>Waktu Login</th>
        <th>Waktu Vote</th>
      </tr>
    </thead>
    <tbody>

      <?php $query=mysqli_query($conn,"SELECT login.*, daftarkode.* FROM  daftarkode LEFT JOIN login ON login.nim=daftarkode.nim ORDER BY logintime DESC");
      $cnt=1;
      while($row=mysqli_fetch_array($query))
      {
        ?>                  

        <tr>

         <td><?php echo htmlentities($cnt);?></td>
         <td style="text-align:left"><?php echo htmlentities($row['nama']);?></td>
         <td><?php echo htmlentities($row['nim']);?></td>
         <td><?php echo htmlentities($row['kelas']);?></td>
         <td><?php echo htmlentities($row['used']);?></td>
         <td><?php echo htmlentities($row['logintime']);?></td>
         <td><?php echo htmlentities($row['logout']); ?></td> 
     </tr>

     <?php $cnt=$cnt+1; } ?>                           

   </table>
    </li>
  </ul>
</div>

</body>
</html>
<?php } ?>