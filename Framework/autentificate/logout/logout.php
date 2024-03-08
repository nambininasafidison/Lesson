<?php
    session_start();
    $userOut = $users;
    session_destroy();
    header('Location: http://www.test_session.com');
?>