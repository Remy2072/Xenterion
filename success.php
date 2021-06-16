<?php
include "config.php";


if (!isset($_SESSION['value'])) {
  header('Location: succes.php');
}

// Go back to home
if (isset($_POST['success-btn'])) {
  header('Location: home.php');
}

$balance = $_SESSION['value'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xenterion | Balance Added</title>
    <link rel="icon" href="assets/images/favicon.ico" />
    <link rel="stylesheet" href="assets/styles/success.css" />
  </head>
  <body>
    <svg
      version="1.1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      width="1440px"
      height="640px"
      viewbox="0 0 1440 640"
      xml:space="preserve"
      class="waves"
    >
      <style type="text/css">
        .st0 {
          fill: none;
        }
        .st1 {
          fill: #ebf7f8;
        }
        .st2 {
          fill: #ddf1f4;
        }
      </style>
      <defs></defs>
      <g>
        <path
          class="st0"
          d="M428.49,60.91c266.63-2.18,350.66,21.97,580.61,31.36C1173.92,99,1352.22,76.54,1440,63.27V0H0v92.36
  C82.2,81.03,244.01,62.42,428.49,60.91z"
        />
        <path
          class="st1"
          d="M1009.1,92.27c-229.95-9.39-313.97-33.54-580.61-31.36C244.01,62.42,82.2,81.03,0,92.36v21.42
  c72.08,6.06,207.97,15.08,384.44,15.84c267.59,1.16,381.02-16.22,652.56-13.73c182.31,1.67,327.36,15.51,403,24.42V63.27
  C1352.22,76.54,1173.92,99,1009.1,92.27z"
        />
        <path
          class="st2"
          d="M384.44,129.61C207.97,128.85,72.08,119.83,0,113.77V320h1440V140.3c-75.64-8.91-220.69-22.74-403-24.42
  C765.46,113.39,652.03,130.77,384.44,129.61z"
        />
      </g>
      <rect y="320" class="st2" width="1440" height="1080" />
    </svg>

    <!-- *VORMGEVING VAN DE LOGIN PAGINA -->
    <div class="login-form">
      <div style="margin-bottom: 25px" class="logo">
        <img src="assets/images/LogoXenterion.svg" alt="" />
      </div>

      <!-- *ALLE TEXT IN DE LOGIN PAGINA -->



      <div class="card">
        <div class="card2">
            <svg xmlns="http://www.w3.org/2000/svg" width="157.516" height="124.7" viewbox="0 0 157.516 124.7" style="width: 175px; height: 175px;margin: 35px">
                <path id="iconmonstr-check-mark-1" d="M133.134,2,59.068,77.916,24.376,45.028,0,69.417,59.068,126.7,157.516,26.382Z" transform="translate(0 -2)" fill="#293170"/>
              </svg>
        </div>
      </div>

      <h2 id="balance"></h2>
      <h3>Has been successfully added to your account</h3>

      <form method="POST" action="">
      <input
        style="color: #262649"
        type="submit"
        value="Complete"
        name="success-btn"
        class="login-btn"
        id="login-style"
      />
    </form>

    </div>
    <script type="text/javascript">
    var phpbal ='<?php echo $balance;?>';
    </script>
    <script type="text/javascript" src="assets/scripts/success.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../assets/scripts/signup.js"></script> -->
  </body>
</html>
