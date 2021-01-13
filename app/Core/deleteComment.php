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

$sql = "DELETE FROM comment WHERE id_comment = '$id'  ";
$query = mysqli_query($conn, $sql);
if(!$query) {
    die ('SQL Error: ' . mysqli_error(($conn)));
}

$id = $_GET['page'];
echo "<meta http-equiv='refresh' content='1;url=forumDetail.php?detail=".$id."'>";
?>