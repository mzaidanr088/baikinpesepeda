<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>baikinpesepeda</title>
    <!-- <link rel="stylesheet" type="text/css" href="../views/css/style-header.css"> -->
    <style>
        <?php include '../views/css/style-header.css' ?>
    </style>
</head>
<body>
    <nav class="nav">
        <div class="logo">
            <h2><b>baikinpesepeda</b></h2>
        </div>

        <ul class="account">
            <li><a href=""><b><?php echo $_SESSION['username'] ?></b></a></li>
            <li><a href="logout.php"><b>LOGOUT</b></a></li>
        </ul>

        <ul class="menu">
            <li><a href="forum.php"><b>FORUM</b></a></li>
            <li><a href="game.php"><b>PERMAINAN</b></a></li>
            <li><a href="maps.php"><b>PETA</b></a></li>
            <li><a href="rambu.php"><b>RAMBU</b></a></li>
            
        </ul>

        <div class="menu-toggle">
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <script src="../views/js/script-header.js"></script>
</body>
</html>