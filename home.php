<?php
include "config.php";
session_reset();

// Check user login or not
if (!isset($_SESSION['ename'])) {
  header('Location: home.php');
}

// logout
if (isset($_POST['but_logout'])) {
  session_destroy();
  header('Location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Xenterion | Home </title>
  <link rel="icon" href="assets/images/favicon.ico" />
  <link rel="stylesheet" href="assets/styles/home.css" />
</head>

<body>
  <form method="POST" action="">
    <button type="submit" name="but_logout">
      Log out
    </button>
  </form>
  <?php
  echo 'Username: ' . $_SESSION['name'] . '<br>';
  echo 'Email: ' . $_SESSION['ename'] . '<br>';
  echo 'USERID: ' . $_SESSION['userid'] . '<br>';
  echo 'Total Euro Cent: ' . $_SESSION['balance'] . '<br>';
  $userid = $_SESSION['userid'];
  $balance = $_SESSION['balance'];
  include "balance.php";
  include "buy.php";
  ?>
  <span>Euro: <span id="balance"></span></span>

  <form action="" method="POST">
    <div style="margin-bottom: 15px" class="textbox">
      <input type="text" id="name" placeholder="XXXX-XXXX" name="code" maxlength="8" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" autocomplete="off" />
      <span class="check-message hidden" style="font-family: 'Jost', sans-serif">Required</span>
    </div>

    <input style="color: #262649" type="submit" value="CLAIM CODE" class="login-btn" name="balance-btn" id="login-style" disabled />
  </form>

  <form action="" method="POST">
    <label for="cryptocurrency">Select currency</label>
    <br><br>
    <select name="cryptocurrency" id="cryptocurrency" size="3" required>
      <option value="XRP" onclick="XRP()">XRP</option>
      <option value="VET" onclick="VET()">VET</option>
      <option value="THETA" onclick="THETA()">THETA</option>
    </select>
    <br><br>
    <input type="text" id="round_no" placeholder="Enter an amount" name="amount-money" value="" maxlength="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '€1');" onkeyup="round_off(this.value)" onchange="tradingcost()" required />
    <input type="text" placeholder="Enter Wallet Adress" name="wallet-adress" required />
    <p >Trading cost: €<span id="crypto_trading"></span></p>
    <p >Transfer fee: €<span id="crypto_transfer"></span></p>
    <p>Coin: <span id="crypto_type"></span></p>
    <p>Price: €<span id="crypto_price"></span></p>
    <p>Total amount after fee: €<input type="text" id="crypto_total" name="totalamount" value="" readonly></p>
    <input style="color: #262649" type="submit" value="BUY" name="buy-btn" required />
  </form>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $(".textbox input").focusout(function() {
    if ($(this).val() == "") {
      $(this).siblings().removeClass("hidden");
      $(this).css("background", "#FF9898");
      $(this).css("color", "#702929");
    } else {
      $(this).siblings().addClass("hidden");
      $(this).css("background", "#F1F0F0");
      $(this).css("color", "#1C98D5");
    }
  });

  $(".textbox input").keyup(function() {
    var inputs = $(".textbox input");
    if (inputs[0].value.length > 7) {
      $(".login-btn").attr("disabled", false);
      $(".login-btn").addClass("active");
    } else {
      $(".login-btn").attr("disabled", true);
      $(".login-btn").removeClass("active");
    }
  });
</script>
<script type="text/javascript">
  var phpbal = '<?php echo $balance; ?>';
</script>
<script type="text/javascript" src="assets/scripts/home.js"></script>
</html>