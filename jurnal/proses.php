<?php 
include 'database.php';
$db = (); //isi dengan deklarasi method

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	($_POST['nama'],$_POST['alamat'],$_POST['usia']); //panggil method input dari class database
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){ 	
 	($_GET['id']); //panggil method hapus dari class database
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['usia']); //panggil method update dari class database
 	header("location:tampil.php");
 }
?>