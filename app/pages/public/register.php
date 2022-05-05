<?php
session_start();

$url = $_GET['page'];
$isError = $_GET['error'];
$errorTextEmptyFields = 'Input fields is empty.';
$error = 'Error.';

if($isError === 'error2'){
    echo "  <div class='row homeHero-bg'>
                <div class='container login-form'>
                    <div id='particles-js'></div>
                    <form class='site-text' action='app/src/login.inc.php' method='post'>
                        <div class='formErrorText'>
                            <div>" . $errorTextEmptyFields ."</div>
                            <a href='pages.php?page=register' class='btn-link orange'>Try again Signup</a>
                        </div>
                    </form>
                </div>
            </div>";
} elseif($isError === 'error3' || $isError === 'error4' || $isError === 'error5' || $isError === 'error6'){
    echo "  <div class='row homeHero-bg'>
                <div class='container login-form'>
                    <div id='particles-js'></div>
                    <form class='site-text' action='app/src/login.inc.php' method='post'>
                        <div class='formErrorText'>
                            <div>" . $error ."</div>
                            <a href='pages.php?page=register' class='btn-link orange'>Try again Signup</a>
                        </div>
                    </form>
                </div>
            </div>";
} else {
    if(isset($_SESSION['u_id'])) {
        header("Location: app/pages/autorized/dashboard.php?u_uid");
        exit();
    } else {
        echo "  
            <div class='row homeHero-bg'>
                <div class='container login-form'>
                    <div id='particles-js'></div>
                    <form class='site-text' action='app/src/signup.inc.php' method='post'>
                        <div>
                            <label>First name</label>
                            <input type='text' name='user_first'/>
                        </div>
                        <div>
                            <label>Last name</label>
                            <input type='text' name='user_last'/>
                        </div>
                        <div>
                            <label>Email</label>
                            <input type='email' name='user_email'/>
                        </div>
                        <div>
                            <label>User name</label>
                            <input type='text' name='user_nick_name'/>
                        </div>
                        <div>
                            <label>Password</label>
                            <input type='password' name='user_password'/>
                        </div>
                        <button type='submit' name='submit' class='login-btn'>Sign up</button>
                        <p class='fontColor-white'>Go back to  <a href='pages.php?page=login'> Login page</a></p>
                    </form>
                </div>
            </div>
            ";
    }
   
}

?>