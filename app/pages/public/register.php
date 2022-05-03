
<div class="row bg-dark-blue-lighten">
    <div class="container login-form">
        <div id='particles-js'></div>
        <form class="site-text" action="app/src/signup.inc.php" method="post">
            <div>
                <label>First Name</label>
                <input type="text" name="user_first"/>
            </div>
            <div>
                <label>Last Last</label>
                <input type="text" name="user_last"/>
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="user_email"/>
            </div>
            <div>
                <label>Username</label>
                <input type="text" name="user_nick_name"/>
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="user_password"/>
            </div>
            <button type="submit" name="submit" class="login-btn">Sign up</button>
            <p class="fontColor-white">Go back to  <a href="pages.php?page=login"> Login page</a></p>
        </form>
    </div>
</div>