<?php
include 'connect.php';

$connect = new Connect();
$connect->connect();

if ($connect)
{
    echo "Koneksi Berhasil";
}
else
{
    echo "Koneksi Gagal";
}
?>