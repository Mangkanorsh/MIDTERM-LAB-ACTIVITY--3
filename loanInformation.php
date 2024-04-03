<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Information</title>
  <link rel="stylesheet" href="style/informationStyle.css">
</head>
<body>
  <div class="loan-container">
    <h2>Loan Information</h2>
    <?php
              if($_SERVER["REQUEST_METHOD"] == "POST") {
                // Check if all required fields are set
                if(isset($_POST["amount"]) && isset($_POST["terms"]) || isset($_POST["memberType"])) {
                    // Sanitize and validate input
                    $loanAmount = floatval($_POST["amount"]);
                    $paymentTerms = floatval($_POST["terms"]);
                    // Here we can set a default value for memberType if it's not provided
                    $memberType = isset($_POST["memberType"]) ? floatval($_POST["memberType"]) : 0;
    
                    // Validate if the loan amount and payment terms are greater than 0
                    if ($loanAmount > 0 && $paymentTerms > 0) {
                        if ($memberType != 0.05) { // Officer
                            $memberType = 0.10;
                        }
                        // Calculate interest, total amount, and monthly dues
                        $interest = $loanAmount * $memberType;
                        $totalAmount = $loanAmount + $interest;
                        $monthlyDues = $totalAmount / $paymentTerms;
    ?>
    <form action="loanConfirmation.php" method="post">
      <table>
      <table border="1px">
                <tr>
                    <th>Date:</th>
                    <td><input type="date" name="date" required></td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td ><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <th>Amount:</th>
                    <td><?php echo number_format($loanAmount, 2, ".", ","); ?></td>
                </tr>
                <tr>
                    <th>Terms of Payment:</th>
                    <td><?php echo $paymentTerms." Months"; ?></td>
                </tr>
                <?php               
                    if($memberType == 0.05){
                        $interestText = "Interest (5%)";
                    }else{
                        $interestText = "Interest (10%)";                        
                    }
                ?>
                <tr>
                    <th><?php echo "$interestText"; ?></th>
                    <td><?php echo number_format($interest, 2, ".", ","); ?></td>
                </tr><tr>
                    <th>Total Amount:</th>
                    <td><?php echo number_format($totalAmount, 2, ".", ","); ?></td>
                </tr>
                <tr>
                    <th>Monthly Dues:</th>
                    <td><?php echo number_format($monthlyDues, 2, ".", ","); ?></td>
                </tr>
            </table>
        <?php    
            } else {
                header("Location: loanAmount.php");
                exit();
            }
                } else {
                    header("Location: loanAmount.php");
                    exit();
                }
            } else {
                header("Location: loanAmount.php");
                exit();
            }
        ?>
        </table>
      <div class="form-buttons">
        <input type="submit" name="submit" value="Submit">
        <input type="button" value="Back" onclick="history.go(-1);">
      </div>
    </form>
  </div>
</body>
</html>
