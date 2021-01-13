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
        <form method="post">
            <textarea name="headlight" cols="44" rows="2" placeholder="Judul Post" style="font-size: large; font-weight: bold;"></textarea><br>
            <textarea name="content" cols="69" rows="30" placeholder="Isi Post"></textarea><br>
            <input type="submit" name="btnpost">
        </form>
        <br>

        <?php

        if (isset($_POST['btnpost'])) {
        $username = $_SESSION['username'];

        date_default_timezone_set( 'Asia/Bangkok' );
        $date = date('Y-m-d H:i:s');;
        $headlight = $_POST['headlight'];
        $content = $_POST['content'];

        $sql = "INSERT INTO post VALUES ('', '$username', '$date', '$headlight', '$content')";

        $query = mysqli_query($conn, $sql);
        if(!$query) {
            die ('SQL Error: ' . mysqli_error(($conn)));
        }

        echo "<meta http-equiv='refresh' content='1;url=forum.php'>";

        }


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