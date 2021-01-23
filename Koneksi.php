<?php 
 
//membangun koneksi
$username="yoga_10062";
$password="yoga_10062";
$database="LOCALHOST/XE";

$conn=oci_connect($username,$password,$database);

if(!$conn){
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
} else {
	//echo "koneksi berhasil";
}


?>