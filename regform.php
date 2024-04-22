<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <div>
        <?php 
            if(isset($_POST["signup"])){
                echo "you are sign up!";
            }
        ?>
    </div>
    <form action="regform.php" method="post">
        <div class="container">
            <h1>Registration</h1>
            <p>Fill up the form with  the correct values.</p>
            <label for="username"> Username</label>
            <input type="text" name="username" required>

            <label for="password"> Password</label>
            <input type="passsword" name="password" required>

            <input type="submit" value="Sign Up" name="signup">
        </div>
    </form>
</body>
</html>