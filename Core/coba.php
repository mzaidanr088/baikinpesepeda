<?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'baikinpesepeda';

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if (!$conn) {
        die ('failed to connect: ' . mysqli_connect_error());
    }

    $sql = 'SELECT username, point FROM leaderboard';

    $query = mysqli_query($conn, $sql);
    if(!$query) {
        die ('SQL Error: ' . mysqli_error(($conn)));
    }

    while ($row = mysqli_fetch_array($query)) {
        echo  $row["username"] . $row["point"];
    }

    mysqli_free_result($query);
    mysqli_close($conn);
?>
