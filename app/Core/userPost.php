<?php
session_start();

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'baikinpesepeda';

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if (!$conn) {
    die ('failed to connect: ' . mysqli_connect_error());
}

if( !isset($_SESSION['login']) ) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baikinpesepeda</title>
    <link rel="stylesheet" href="../views/css/style-forum.css">
</head>
<body class="body">
    <header>
		<?php
			if( !isset($_SESSION['login']) ) {
                include 'header-guest.php';
			} else {
                include 'header-login.php';
                $username = $_SESSION['username'];
			}
		?>
    </header>

    <main class="main">
        
            <?php
                $sql = "SELECT * FROM post WHERE username = '$username' ORDER BY date DESC";

                $query = mysqli_query($conn, $sql);
                if(!$query) {
                    die ('SQL Error: ' . mysqli_error(($conn)));
                }

                while ($row = mysqli_fetch_array($query)) { ?>
                    <div class="post">
                        <p style="color: silver; font-size: small;"><?php echo $row['username'] . ' || ' . $row['date'] ?></p>
                        <a href="forumDetail.php?detail=<?php echo $row['id_post']; ?>">
                            <h2 style="margin: 10px auto;"><?php echo $row['headlight'] ?></h2>
                        </a>
                        <p><?php echo substr($row['content'],0,350) ?> <a href="forumDetail.php?detail=<?php echo $row['id_post']; ?>"><b>lanjut baca...</b></a></p>    
                    </div>
                <?php }

                mysqli_free_result($query);
                mysqli_close($conn);
            ?> 
    </main>

    <aside class="aside">
        <h2 style="text-align: center;">Post</h2>

		<ul>
			<li><a href="forum.php">Daftar Postingan</a></li>
			<li><a href="createPost.php">Buat Postingan</a></li>
			<li><a href="userPost.php">Postingan Anda</a></li>
		</ul>
    </aside>

    <footer><?php include 'footer.php' ?></footer>
    
</body>
</html>