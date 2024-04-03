<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Amount</title>
  <link rel="stylesheet" href="style/amountStyle.css">
</head>
<body>
  <div class="form-container">
    <form class="form-box" action="loanInformation.php" method="post">
      <table>
        <tr>
          <th><label for="amount">Select Loan Amount</label></th>
        </tr>
        <tr>
          <td>
            <input type="radio" name="amount" value="5000">5000 <br>
            <input type="radio" name="amount" value="10000">10000 <br>
            <input type="radio" name="amount" value="15000">15000 <br>
            <input type="radio" name="amount" value="20000">20000 <br>
            <input type="radio" name="amount" value="25000">25000 <br>
          </td>
        </tr>
        <tr>
          <th><label for="terms">Terms of Payment</label></th>
        </tr>
        <tr>
          <td>
            <input type="radio" name="terms" value="6">6 mos. <br>
            <input type="radio" name="terms" value="12">12 mos. <br>
            <input type="radio" name="terms" value="24">24 mos. <br>
          </td>
        </tr>
        <tr>
          <th><label for="memberType">Cooperative Officer</label></th>
        </tr>
        <tr>
          <td><input type="checkbox" name="memberType" value="0.05">Yes<br></td>
        </tr>
      </table>
      <input type="submit" name="confirmLoan" value="Confirm Loan">
      <input type="reset" name="clearAll" value="Clear All">
    </form>
  </div>
</body>
</html>
