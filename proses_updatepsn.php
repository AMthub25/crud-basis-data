<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $hp = $_POST ['hp'];
  $alamat = $_POST['alamat'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  bengkel  SET NAMA ='".$nama."', HP ='".$hp."', ALAMAT ='".$alamat."' WHERE NO_REG = '".$no_reg."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data customer berhasil diubah'); window.location.href='customer.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data customer gagal diubah'); window.location.href='customer.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: customer.php'); 
}