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
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="accept" value="Accept">
                <input type="reset" name="reset" value="Reset">
            </div>
        </form>

        <?php
            // Define the array of usernames and passwords
            $userData = [
                'admin' => 'pass1',
                'user1' => 'pass2',
                'user2' => 'pass3',
                'user3' => 'pass3',
                'user4' => 'pass3',
                'user5' => 'pass4',
                'user6' => 'pass5',
                'user7' => 'pass6',
                'user8' => 'pass7',
                'user9' => 'pass8',
                'norsh' => 'pass9',
                // Add more username-password pairs as needed
            ];
            // Check if form is submitted and username/password are provided
            if (isset($_POST["username"]) and isset($_POST["password"])) {

                // Sanitize and get the submitted username and password
                $username = htmlspecialchars ($_POST["username"]);
                $password = htmlspecialchars ($_POST["password"]);

                // Check if username exists in the array
                if (isset($userData[$username])) {
                    // Check if password matches
                    if ($userData[$username] === $password) {
                        // Login successful
                        echo "<p>Password Accepted...</p>";
                        echo "<a href='loanAmount.php'> Loan Page </a>";
                    } else {
                        // Incorrect password or username
                        echo "<p class='error'>Username and / or password does not match</p>";
                    }
                } else {
                    // Username not found
                    echo "<p class='error'>Please enter username and / or password</p>";  
                }
            }
        ?>
    </div>
</body>
</html>
