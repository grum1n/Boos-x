<?php
session_start();
?>
<?php
    if(isset($_SESSION['u_id'])) {
        header("Location: app/pages/autorized/dashboard.php?u_uid");
        exit();
    } else {
        echo "  <div class='row bg-dark-blue-lighten'>
                    <div class='container login-form'>
                        <div id='particles-js'></div>
                        <form class='site-text' action='app/src/login.inc.php' method='post'>
                            <div>
                                <label>User name</label>
                                <input type='text' name='user_nick_name'/>
                            </div>
                            <div>
                                <label>Password</label>
                                <input type='password' name='user_password'/>
                            </div>
                            <button type='submit' name='submit' class='login-btn'>Login</button>
                            <p class='fontColor-white'>Don't Have an Account ? <a href='pages.php?page=register'> Sign up</a></p>
                           
                        </form>
                    </div>
                </div>";
    }
?>
