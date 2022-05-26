<?php
session_start();
$host = 'ec2-44-199-143-43.compute-1.amazonaws.com';
$port = '5432';
$user = 'miqbdcaogissdu'; 
$password = 'f265fe2d9f8d05d833ef09942425eed27b43c2623f6f4e86a549ee48f10a5eb9';
$db   = 'd14b4ucrcebrga';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
// if($connection){
// echo 'Koneksi Berhasil';
// }
// else{
// echo 'Koneksi Gagal';
// }
// ?>