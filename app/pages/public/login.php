<?php
session_start();

$url = $_GET['page'];
$isError = $_GET['error'];
$error = false;
if($isError === 'empty_input_fiels'){
    $error = 'User name or password fields is empty.';
    echo "  <div class='row homeHero-bg'>
                <div class='container login-form'>
                    <div id='particles-js'></div>
                    <form class='site-text' action='app/src/login.inc.php' method='post'>
                        <div>" . $error ."</div>
                    </form>
                </div>
            </div>";
} elseif($isError === 'invalid_user_psw') {
    $error = 'User name or password is invalid.';
    echo "  <div class='row homeHero-bg'>
                <div class='container login-form'>
                    <div id='particles-js'></div>
                    <form class='site-text' action='app/src/login.inc.php' method='post'>
                        <div>" . $error ."</div>
                    </form>
                </div>
            </div>";
} elseif($isError === 'user_not_exist') {
    $error = 'User name not exist.';
    echo "  <div class='row homeHero-bg'>
                <div class='container login-form'>
                    <div id='particles-js'></div>
                    <form class='site-text' action='app/src/login.inc.php' method='post'>
                        <div>" . $error ."</div>
                    </form>
                </div>
            </div>";
} else {
    if(isset($_SESSION['u_id'])) {
        header("Location: app/pages/autorized/dashboard.php?u_uid");
        exit();
    } else {
        echo "  <div class='row homeHero-bg'>
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
}
 
    
?>
