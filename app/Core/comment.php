<?php
if( isset($_SESSION['login']) ) {

?>
<form method="post">
    <textarea name="comment" cols="70" rows="5" placeholder="Ketikkan komentar"></textarea><br>
    <input type="submit" name="btncomment">
</form>
<br>
<?php
}

if (isset($_POST['btncomment'])) {
    $username = $_SESSION['username'];
    
    date_default_timezone_set( 'Asia/Bangkok' );
    $date = date('Y-m-d H:i:s');;
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comment VALUES ('', '$id', '$username', '$date', '$comment')";

    $query = mysqli_query($conn, $sql);
    if(!$query) {
        die ('SQL Error: ' . mysqli_error(($conn)));
    }

    echo "<meta http-equiv='refresh' content='1;url=forumDetail.php?detail=".$id."'>";
}


$id = $_GET['detail'];
$sql = "SELECT * FROM comment WHERE id_post = '$id' ORDER BY date DESC";

$query = mysqli_query($conn, $sql);
if(!$query) {
    die ('SQL Error: ' . mysqli_error(($conn)));
}

while ($row = mysqli_fetch_array($query)) { ?>
    <div class="comment">
        
        <p style="color: silver; font-size: small;"><?php echo $row['username'] . ' || ' . $row['date'] ?></p>
        <p><?php echo $row['comment'] ?></p>   

        <?php if(($_SESSION['username'] == $row['username']) || ($_SESSION['admin'])) {
            echo "<a href='deleteComment.php?detail=" . $row['id_comment'] . "&page=". $row['id_post'] ."' style='font-size : x-small; padding: 10px;'><i>Hapus Komentar</i></a>";
        } ?>
    
        <br>
        <hr style="width: 50%;">
        <br>
    </div>
<?php }

?>
