<?php
require_once ('/home/fses17g6/mysqli_connect.php');

    $stmt = $dbh->prepare("SELECT * FROM user where email = ?");
    $stmt->execute(array($_POST['username']));
    echo $stmt->rowCount();
?>