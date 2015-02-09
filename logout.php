    <?php
    session_start();
    include ('db.conf.php');
    $login = $_SESSION['login'];
    BaseConnect();
    mysql_query("UPDATE salarie SET connect = '0' WHERE login = '$login'")or die(mysql_error())
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit();
    ?>