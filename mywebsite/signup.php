<?php
    require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <h1>Signup</h1>
            <form action="includes/signup.inc.php" method="post" >
                <input type="text" name="uid" placeholder="Username" required>
                <input type="text" name="mail" placeholder="E-mail" required>
                <input type="password" name="pwd" placeholder="Password" required>
                <input type="password" name="pwd-repeat" placeholder="Repeat password" required>
                <button type="submit" name="signup-submit">Signup</button>
            </form>
        </div>
    </main>

<?php
    require "footer.php";
?>
