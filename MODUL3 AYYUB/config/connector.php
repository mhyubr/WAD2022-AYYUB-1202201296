<?php

include('insert.php');
include('edit.php');
include('delete.php');

$host = "localhost";
$user = "root";
$password = "";
$db = "modul3";

$connect = mysqli_connect($host, $user, $password, $db);
if (!$connect) {
    die("Koneksi gagal:" . mysqli_connect_error());
}
 
function query($query)
{
    global $connect;
    return mysqli_query($connect, $query);
}
