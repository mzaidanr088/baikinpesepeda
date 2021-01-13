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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baikinpesepeda</title>
    <!-- <link rel="stylesheet" type="text/css" href="../views/css/style-game.css"> -->
    <style>
        <?php include '../views/css/style-game.css' ?>
    </style>
    <script src="../views/js/script-game.js"></script>
</head>
<body class="body">
    <header>
    <?php
        if( !isset($_SESSION['login']) ) {
            include 'header-guest.php';
        } else {
            include 'header-login.php';
        }
    ?>
    </header>

    <main class="main">

        <h2 style="text-align: center;"><b>Permainan</b></h2>
        
        <div id="container">
            <div id="game">
                <div id="view">
                    <div id="char"></div>
                    <div class="score-board"><b>0</b></div>
                </div>
            </div>

            <div id="control">
                <div id="start" onclick="playGame()"></div>

                <div id="button">
                    <div id="button1" onclick="pedalLeft()"></div>
                    <div id="button2" onclick="pedalRight()"></div>
                </div>  
            </div>
        </div>

        <h2 style="text-align: center;"><b>Petunjuk</b></h2>

        <table id="instruction">
            <tr>
                <th style="width: 110px"></th>
                <th style="width: 390px"></th>
            </tr>
            <tr>
                <td><img src="../views/img/game/inst-1.png"></td>
                <td>klik play untuk memulai permainan,<br>tombol pedal akan muncul di sisi kanan</td>
            </tr>
            <tr>
                <td><img src="../views/img/game/inst-2.png"></td>
                <td>klik tombol pedal secara bergantian<br>untuk mendapatkan poin</td>
            </tr>
            <tr>
                <td><img src="../views/img/game/inst-3.png"></td>
                <td>dalam waktu 20 detik<br>kumpulkan poin sebanyak-banyaknya</td>
            </tr>
        </table>
    </main>

    <aside class="aside">
        <h2 style="text-align: center;"><b>Peringkat</b></h2>    
        
        <div id ="leaderboard">
            <table>
                <tr>
                    <th style="width: 200px"></th>
                    <th style="width: 50px"></th>
                </tr>
                
                <?php
                    $sql = 'SELECT username, point FROM leaderboard ORDER BY point DESC';

                    $query = mysqli_query($conn, $sql);
                    if(!$query) {
                        die ('SQL Error: ' . mysqli_error(($conn)));
                    }

                    while ($row = mysqli_fetch_array($query)) {
                        echo '<tr><td><b>' . $row["username"] . '</b></td>' . 
                        '<td  style="text-align: center">' . $row["point"] . '</td></tr>';
                    }

                    mysqli_free_result($query);
                    mysqli_close($conn);
                ?>
                
            </table>
        </div>
        
    </aside>

    <footer><?php include 'footer.php';?></footer>
</body>
</html>