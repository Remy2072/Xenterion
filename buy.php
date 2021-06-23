<?php
if (isset($_POST['buy-btn'])) {
    function buy($userid, $totalamount, $useramounteur)
    {
        global $con;
        $query = "SELECT * FROM users WHERE user = '$userid'";
        $useramountcent = mysqli_real_escape_string($con, $useramounteur*100);

        $result_set = mysqli_query($con, $query);
        if (mysqli_num_rows($result_set) === 1) {
            $row = mysqli_fetch_assoc($result_set);
            $balance = $row['balance'];

            if ($row['balance'] === $useramountcent) {
                $user_balance_after = ($balance - $useramountcent);
                $query2 = "UPDATE users SET balance = '$user_balance_after' WHERE balance = '$balance'";
                mysqli_query($con, $query2);
                // usercheck($userid, $giftcard_balance);
                // return $giftcard_balance;
            } 
            else {
                $_SESSION['error_code'] = "code has already been used";
                header('Location: error.php');
            }
        } else {
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
            $new_balance = $user_balance + $giftcard_balance;
            $query2 = "UPDATE users SET balance = '$new_balance' WHERE userid = '$userid'";
            $_SESSION['balance'] = ($_SESSION['balance']  + $giftcard_balance);
            mysqli_query($con, $query2);
            header('Location: success.php');
        } else {
            header('Location: error2.php');
        }
    }
    $totalamount = mysqli_real_escape_string($con,  $_POST['totalamount']);
    $useramounteur = mysqli_real_escape_string($con,  $_POST['amount-money']);

    buy($userid, $totalamount, $useramounteur);
}
