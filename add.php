<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $no_reg = $_POST['No_Reg'];
  $nama = $_POST['Nama'];
  $hp = $_POST ['Hp'];
  $alamat = $_POST['Alamat'];
  
	$query = "INSERT INTO bengkel (NO_REG,NAMA,HP,ALAMAT) VALUES ('".$no_reg."','".$nama."','".$hp."','".$alamat."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Customer berhasil ditambahkan'); 
	window.location.href='customer.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Customer gagal ditambahkan');
	window.location.href='customer.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: customer.php'); 
}