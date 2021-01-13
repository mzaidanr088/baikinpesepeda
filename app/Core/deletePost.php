<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'baikinpesepeda';

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (!$conn) {
    die ('failed to connect: ' . mysqli_connect_error());
}

$id = $_GET['detail'];

$sql = "DELETE FROM comment WHERE id_post = '$id'  ";
$query = mysqli_query($conn, $sql);
if(!$query) {
    die ('SQL Error: ' . mysqli_error(($conn)));
}

$sql = "DELETE FROM post WHERE id_post = '$id'  ";
$query = mysqli_query($conn, $sql);
if(!$query) {
    die ('SQL Error: ' . mysqli_error(($conn)));
}


header('location:forum.php');
?>