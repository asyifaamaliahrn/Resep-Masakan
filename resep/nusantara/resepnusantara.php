<!DOCTYPE html>
<html lang="en">
<head>
  <title>DAPUR RUMAH UTI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<style>
	mark {
        background: #8FBC8F;
}
mark {
        background: solid pink;
}
</style>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6" style="background-color:lavender;"><a href="index.html"><center>Beranda</center></a></div>
    <div class="col-sm-6" style="background-color:lavenderblush;"><a href="index.html"><center>Kritik & Saran</center></div>
  </div>
</div>
<br>

<div class="container">
  <h3><u><center>RESEP MASAKAN NUSANTARA</center></u></h3>
  <p class="text-warning"></p>
</div><br><br>

<div class="container">
  <p>Pilih resep dibawah ini :</p>            
 <table class="table">
    <thead class="thead-dark">
      <tr>
        <th><center>Makanan</center></th>
        <th><center>Gambar</center></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="sotoayam.php"><br><br><br><center>Soto Ayam</center></a></td>
        <td><center><?php echo "<img src='sotoayam/img/sotoayam.jpg' width='250' height='150' />";?></center></td> 
      </tr>
      <tr>
        <td><a href="gudeg.php"><br><br><br><center>Gudeg</center></a></td>
        <td><center><?php echo "<img src='gudeg/img/gudeg.jpg' width='250' height='150' />";?></center></td> 
      </tr>
      <tr>
        <td><a href="oporayam.php"><br><br><br><center>Opor Ayam</center></a></td>
        <td><center><?php echo "<img src='oporayam/img/oporayam.jpg' width='250' height='150' />";?></center></td>
      <tr>
        <td><a href="sambalgorengkrecek.php"><br><br><br><center>Sambal Goreng Krecek</center></a></td>
        <td><center><?php echo "<img src='sambalgorengkrecek/img/sambalgorengkrecek.jpg' width='250' height='150' />";?></center></td> 
    </tbody>
  </table>
</div>


</body>
</html>
