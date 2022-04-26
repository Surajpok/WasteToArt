<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href=".././img/user/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../common/header.css">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $loggedin = true;
    } else {
        $loggedin = false;
    }
    echo '
    <div class="navcontainer">
        <div class="leftnav">
            <img class="logo" src=".././img/user/RENTAL.png" alt=""></img>
        </div>
        <div class="midnav">
            <ul class="navitem">
                <li><a href=index.php>HOME</a></li>
                <li><a href=index.php>ABOUT</a></li>
                <li><a href=index.php>CONTACT</a></li>
            </ul>
        </div>
        <div class="rightnav">
            <ul class="navitem">';
    if (!$loggedin) {
        echo '  <li><a href="../login/login.php">LOGIN</a></li>';
    }
    if ($loggedin) {
        echo '<li><a href="../login/logout.php">SUBSCRIPTIONS</a></li>';
        echo '<li><a href="../login/logout.php">LOG OUT</a></li>';
        echo '<li><a href="../../users/index.php">MANAGE</a></li>';
    }
    echo '
                <li><a href=index.php>ADMIN</a></li>
            </ul>
        </div>
    </div>
    ';
    ?>
</body>

</html>