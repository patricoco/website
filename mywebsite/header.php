<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img src="img/pi.png" alt="logo">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">About me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username or Email">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</buton>
                </form>
                <a href="signup.php">Signup</a>
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Logout</buton>
                </form>
            </div>
        </nav>
    </header>
</body>
</html>