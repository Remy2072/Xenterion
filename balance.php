<?php
if (isset($_POST['balance-btn'])) {
    function balancecheck($giftcard_code, $userid)
    {
        global $con;
        $query = "SELECT * FROM giftcard WHERE code = '$giftcard_code'";

        $result_set = mysqli_query($con, $query);
        if (mysqli_num_rows($result_set) === 1) {
            $row = mysqli_fetch_assoc($result_set);
            $_SESSION['value'] = $row['value'];
            $giftcard_balance = $row['value'];
            if ($row['valid'] === '1') {
                $query2 = "UPDATE giftcard SET valid = '0' WHERE valid = '1'";
                mysqli_query($con, $query2);
                usercheck($userid, $giftcard_balance);
                return $giftcard_balance;
            } 
            else {
                $_SESSION['code'] = $giftcard_code;
                $_SESSION['error_code'] = "code has already been used";
                header('Location: error.php');
            }
        } else {
            $_SESSION['code'] = $giftcard_code;
            $_SESSION['error_code'] = "Code is not valid";
            header('Location: error.php');
        }
    }
    function usercheck($userid, $giftcard_balance)
    {
        global $con;
        $query = "SELECT * FROM users WHERE userid = '$userid'";
        $result_set = mysqli_query($con, $query);
        if (mysqli_num_rows($result_set) === 1) {
            $row = mysqli_fetch_assoc($result_set);
            $user_balance = $row['balance'];
            echo $user_balance . "<br>";
            $new_balance = $user_balance + $giftcard_balance;
            echo $new_balance;
            $query2 = "UPDATE users SET balance = '$new_balance' WHERE userid = '$userid'";
            $_SESSION['balance'] = ($_SESSION['balance']  + $giftcard_balance);
            mysqli_query($con, $query2);
            header('Location: success.php');
        } else {
            header('Location: error2.php');
        }
    }
    $giftcard_code = mysqli_real_escape_string($con,  $_POST['code']);
    balancecheck($giftcard_code, $userid);
}
