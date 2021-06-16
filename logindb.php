<?php

if (isset($_POST['loginbtn'])) {
    function login($email,$password){
        global $con;
        $query = "SELECT * FROM users WHERE email = '$email'";

        $result_set=mysqli_query($con,$query);
            if (mysqli_num_rows($result_set) === 1) {
                $row = mysqli_fetch_assoc($result_set);
                if (password_verify($password, $row['password'])) {
                    $_SESSION['userid'] = $row['userid'];
                    $_SESSION['balance'] = $row['balance'];
                    $_SESSION['ename'] = $email;
                    $_SESSION['name'] = $row['name'];
                    header('Location: home.php');
                }else{
                    echo "Password is incorrect";
                }
            }else{
                echo "No email found: {$email}";
            }
    
    
    }
    $email = mysqli_real_escape_string (  $con,  $_POST['ename']);
    $password = mysqli_real_escape_string (  $con,  $_POST['pname']);
    login($email,$password);
}

?>
