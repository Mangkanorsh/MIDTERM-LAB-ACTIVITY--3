<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Confirmation</title>
<link rel="stylesheet" href="style/confirmStyle.css">
</head>
<body>
  <div class="container">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["date"]) && ($_POST["name"])) {
          $name = htmlspecialchars($_POST["name"]);
          echo "<p>Thank you</p>" . $name;
        } else {
          header("Location: loanInformation.php");
          exit();
        }
      } else {
        header("Location: loanInformation.php");
        exit();
      }
    ?>
    <p>Your loan will be processed for three (3) working days only...</p>
    <br>
    <form action="login.php" method="post">
      <input type="submit" value="Back to Login Page">
    </form>
  </div>
</body>
</html>
