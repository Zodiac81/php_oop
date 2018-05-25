<?php
session_start();

if(isset($_SESSION['count'])){

    $_SESSION['count'] = $_SESSION['count'] + 1;
    $_SESSION['login'] = "Alex";

}else{
    $_SESSION['count'] = 1;
}

echo "You've looked at this page ". $_SESSION ['count']. " times";

?>

<html>

<body>
<br>
<a href="another.php">Перейти</a>
</body>

</html>
