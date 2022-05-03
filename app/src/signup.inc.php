<?php 
    if(isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $first = mysqli_real_escape_string($mysqli, $_POST['user_first']);
        $last = mysqli_real_escape_string($mysqli, $_POST['user_last']);
        $email = mysqli_real_escape_string($mysqli, $_POST['user_email']);
        $uid = mysqli_real_escape_string($mysqli, $_POST['user_nick_name']);
        $pwd = mysqli_real_escape_string($mysqli, $_POST['user_password']);
        
        if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header("Location: ../../pages.php?page=register");
            exit();
        } else {
            if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: pages.php?page=invalid");
                exit();
            } else {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: pages.php?page=invalidemail");
                    exit();
                } else {
                    $sql = "SELECT * FROM boos_users WHERE user_nick_name = '$uid'";
                    $result = mysqli_query($mysqli, $sql);
                    $result_check = mysqli_num_rows($result);
                    if($result_check > 0) {
                        header("Location: pages.php?page=usertaken");
                        exit();
                    } else {
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO boos_users (user_first, user_last, user_email, user_nick_name, user_password) VALUES('$first','$last','$email','$uid','$hashedPwd');";
                        mysqli_query($mysqli, $sql);
                        header("Location:  ../../pages.php?page=login");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: pages.php?page=register");
        exit();
    }
?>