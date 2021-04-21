<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../scss/index.css">
</head>

<body>
    <img class="background" src="../image/background.png" alt="background" />
    <div class="login">
        <div class="pfp">
            <img src="../image/login.png" alt="login">
        </div>
        <form name="f1" action="../php/Login.php" method="POST">
            <input type="text" name="CIN" id="CIN" placeholder="Username" required="required" />
            <span id="ECIN"> </span>
            <input type="password" name="Pass" id="Pass" placeholder="Password" required="required" />
            <button type="submit" id="btn" value="Login" onclick="regex()">Login</button>
        </form>
    </div>
    <script type="text/javascript" src="../js/javascript.js"></script>
</body>

</html>