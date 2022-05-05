<?php
    session_start();

    if(isset($_POST['submit'])) {
        include_once 'db.inc.php';
        $uid = mysqli_real_escape_string($mysqli, $_POST['user_nick_name']);
        $pwd = mysqli_real_escape_string($mysqli, $_POST['user_password']);

        if(empty($uid) || empty($pwd)) {
            header("Location: ../../pages.php?page=login&error=empty_input_fiels");
            exit();
        } else {
            $sql = "SELECT * FROM boos_users WHERE user_nick_name = '$uid'";
            $result = mysqli_query($mysqli, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check < 1) {
                header("Location: ../../pages.php?page=login&error=user_not_exist");
                exit();
            } else {
                if($row = mysqli_fetch_assoc($result)) {
                    $hashedPwdCheck = password_verify($pwd, $row['user_password']);
                    if($hashedPwdCheck == false) {
                        header("Location: ../../pages.php?page=login&error=invalid_user_psw");
                        exit();
                    } elseif($hashedPwdCheck == true) {
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_first'] = $row['user_first'];
                        $_SESSION['u_last'] = $row['user_last'];
                        $_SESSION['u_email'] = $row['user_email'];
                        $_SESSION['u_uid'] = $row['user_nick_name'];
                        header("Location: ../pages/autorized/dashboard.php?u_uid");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../../pages.php?page=login&error=invalid_user_psw");
        exit();
    }
?>