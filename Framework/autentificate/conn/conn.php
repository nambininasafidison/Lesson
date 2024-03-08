<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user['name'] = $username;
    $user['isactif'] = true;
    $_SESSION['user'] = $user;
    header('Location: http://www.test_session.com/pages/page1.php');
?>