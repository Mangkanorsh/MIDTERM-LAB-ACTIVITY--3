<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/loginStyle.css">
</head>
<body>
    <div class="login-box">
        <form action="login.php" method="post">
            <div class="form-group">
                <label class="form-label" for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="form-group">
                <input type="submit" name="accept" value="Accept">
                <input type="reset" name="reset" value="Reset">
            </div>
        </form>

        <?php 
            if (isset($_POST["username"]) and isset($_POST["password"])) {// this will check if there was username and password input

                $username = "norsh";
                $password = "loves";

                if ($username === $_POST["username"] && $password === $_POST["password"] ) {
                    echo "<p>Password Accepted...</p>";
                    echo "<a href='loanAmount.php'> Loan Page </a>";
                } else {
                    echo "<p class='error'>Username and / or password does not match</p>";
                }
            } else {
                echo "<p class='error'>Please enter username and / or password</p>";  
            }
        ?>
    </div>
</body>
</html>