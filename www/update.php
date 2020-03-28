<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $produsen=$_POST['produsen'];
 $harga=$_POST['harga'];
 $kategori=$_POST['kategori'];
 $jenis=$_POST['jenis'];
 $q=mysqli_query($con,"UPDATE `umkm` SET `nama`='$nama',`produsen`='$produsen',`harga`='$harga',`kategori`='$kategori',`jenis`='$jenis' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>