<!DOCTYPE HTML>
<html>
<head>
    <title>Login Admin Page ::</title>
    <?php
    error_reporting(0);

    // Defining the function to display alert messages
    $msg = function($m) {
        switch($m) {
            case 21:
                echo "<script>alert('Your password does not match');</script>";
                break;
            case 31:
                echo "<script>alert('Your username does not match');</script>";
                break;
        }
    };

    // Calling the function with the message from GET parameter
    if(isset($_GET['msg'])) {
        $msg($_GET['msg']);
    }
    ?>
</head>
<body>
    <div id="form">
        <form method="post" action="admin.php">
            <p><input type="text" name="username" placeholder="username" required> </p>
            <p><input type="password" name="password" placeholder="password" required></p>
            <p><input type="submit" value="login" name="login"></p>
        </form>
    </div>
</body>
</html>
