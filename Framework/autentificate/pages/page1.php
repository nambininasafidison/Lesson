<?php
    session_start();
    $redirect = $_SESSION['user']['isactif'] ? '' : 'http://www.test_session.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="0; url=<?php echo $redirect?>"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <section class="main">
        <h1>Welcome to MIT</h1>
        <button><a href="http://www.test_session.com/pages/page2.php">MISA</a></button>
        <button><a href="http://www.test_session.com/logout/logout.php?$users=<?php echo $_SESSION['user']['name']?>">Logout</a></button>
    </section>
</body>
</html>