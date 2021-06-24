<?php
if (isset($_POST[''])) {
    function buy($userid, $useramountcent, $totalamount)
    {
        global $con;
        $query = "SELECT * FROM users WHERE userid = '$userid'";
        

        $result_set = mysqli_query($con, $query);
        if (mysqli_num_rows($result_set) === 1) {
            $row = mysqli_fetch_assoc($result_set);
            $user_balance = $row['balance'];
            echo $user_balance;
            // $new_balance = $user_balance + $giftcard_balance;
            // $query2 = "UPDATE users SET balance = '$new_balance' WHERE userid = '$userid'";
            // $_SESSION['balance'] = ($_SESSION['balance']  + $giftcard_balance);
            // mysqli_query($con, $query2);
            // header('Location: success.php');
        }
        // } else {
        //     header('Location: error2.php');
        // }
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
    $useramountcent = ($useramounteur*100);

    buy($useramountcent, $userid, $totalamount);
}
