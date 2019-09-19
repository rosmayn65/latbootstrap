<?php
session_start();

$nama    = $_POST['nama'];
$alamat    = $_POST['alamat'];
$ttl    = $_POST['ttl'];
$status    = $_POST['status'];

$query = mysql_query('insert into anggota(nm_anggota,alamat,ttl_anggota,status_anggota) values ("'.$nama.'","'.$alamat.'","'.$ttl.'","'.$status.'")');
if ($query) {
echo "<script>alert('data berhasil disimpan')";
} else {
echo "<script>alert('data gagal disimpan')";
}
?>