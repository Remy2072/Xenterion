<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Xenterion | Login</title>
    <link rel="stylesheet" href="assets/styles/loginsignup.css" />
  </head>
  <body>
    <!-- *VORMGEVING VAN DE LOGIN PAGINA -->
    <svg
      version="1.1"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      x="0px"
      y="0px"
      width="1440px"
      height="640px"
      viewbox="0 0 1440 640"
      style="overflow: visible; enable-background: new 0 0 1440 640"
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
    <div class="login-form">
      <div style="margin-bottom: 25px" class="logo">
        <img src="assets/images/LogoXenterion.png" alt="" />
      </div>

      <!-- *ALLE TEXT IN DE LOGIN PAGINA -->
      <h6>Sign in</h6>

      <form action="" method="POST">

        <div style="margin-bottom: 15px" class="textbox">
          <input
            type="email"
            id="uname"
            placeholder="Email Address"
            name="ename"
          />
          <span class="check-message hidden" style="font-family: 'Jost', sans-serif">Required</span>
        </div>

        <div class="textbox">
          <input
            type="password"
            id="pname"
            placeholder="Password"
            name="pname"
          />
          <span class="check-message hidden" style="font-family: 'Jost', sans-serif">Required</span>
        </div>

        <div class="options">
          <label class="remember-me">
            <span class="checkbox">
              <input type="checkbox" />
              <span class="checked"></span>
            </span>
            Remember me
          </label>

          <a href="#" target="_blank">Forgot Your Password</a>
        </div>

        <input
          style="color: #262649"
          type="submit"
          value="Log In Now"
          class="login-btn"
          name="loginbtn"
          id="login-style"
          disabled
        />
        <div class="privacy-link">
          <span class="error">
            <?php
              include "config.php";
              include "logindb.php";
            ?>
            <br /><br
          /></span>
          <a href="signup.html">Create Account<br /><br /></a>
          <a href="#" target="_blank">Privacy Policy</a>
        </div>
      </form>
    </div>

    <!-- *LOGIN BUTTON KLEUR VERRANDERING -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(".textbox input").focusout(function () {
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

      $(".textbox input").keyup(function () {
        var inputs = $(".textbox input");
        if (inputs[0].value.length > 7 && inputs[1].value.length > 7) {
          $(".login-btn").attr("disabled", false);
          $(".login-btn").addClass("active");
        } else {
          $(".login-btn").attr("disabled", true);
          $(".login-btn").removeClass("active");
        }
      });
    </script>
  </body>
</html>
