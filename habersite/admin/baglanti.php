<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "haberler_db";
$baglanti= mysqli_connect($servername, $username, $password, $database);
if ($baglanti === false)
{
 die("Baglanti Hatasi:" . mysqli_connect_error());
}
?>