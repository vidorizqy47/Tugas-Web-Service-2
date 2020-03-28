<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $produsen=$_POST['produsen'];
 $harga=$_POST['harga'];
 $kategori=$_POST['kategori'];
 $jenis=$_POST['jenis'];
 $q=mysqli_query($con,"INSERT INTO `umkm` (`nama`,`produsen`,`harga`,`kategori`,`jenis`) VALUES ('$nama','$produsen','$harga','$kategori','$jenis')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>