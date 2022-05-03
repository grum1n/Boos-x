<?php include('inc/hero.php'); ?>

<section class="row ">
    <div class="container news-single-flex">
        <div class="news-single-div">
            image
        </div>
        <p class="site-text-p fontColor-gray">
            Bopsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat 
        </p>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
        <h3 class="news-single-title">Deserunt mollit anim idest laborum</h3>
        <p class="site-text-p fontColor-gray">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <ul class="news-single-u-list site-text-p fontColor-gray">
            <li>Officia deserunt mollit anim id est laborum</li>
            <li>Excepteur sintoccaecat cupidatat</li>
            <li>Reprehenderit in voluptate velit</li>
            <li>Exercitation ullamco laboris</li>
        </ul>
        <h3 class="news-single-title">Mollit anim idest laborum</h3>
        <p class="site-text-p fontColor-gray">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <ul class="news-single-u-list site-text-p fontColor-gray">
            <li>1. Officia deserunt mollit anim id est laborum</li>
            <li>2. Excepteur sintoccaecat cupidatat</li>
            <li>3. Reprehenderit in voluptate velit</li>
            <li>4. Exercitation ullamco laboris</li>
        </ul>
        <p class="site-text-p fontColor-gray">
        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sintoccaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <form >
            <h3>Leave a Reply</h3>
            <p class="site-text-p fontColor-gray">Your email address will not be published. Required fields are marked *</p>
            <label class="site-text-p fontColor-gray">Comment</label>
            <textarea type="text" name="message" id="w3review" name="w3review" rows="4" cols="50" require></textarea>
            <label class="site-text-p fontColor-gray" >Name *</label>
            <input type="text" name="vardas" require/>
            <label class="site-text-p fontColor-gray">Email *</label>
            <input type="email" name="email" require/>
            <label class="site-text-p fontColor-gray">Website</label>
            <input type="text" name="website"require/>
            <div class="news-single-checkbox">
                <input type="checkbox"/>
                <p class="site-text-p fontColor-gray">Save my name, email, and website in this browser for the next time I comment.</p>
            </div>
            
            <button type="submit" name="submit" class="form-btn">Post Comment</button>
        </form>

    </div>
</section>

<?php include('app/pages/public/inc/partners.php'); ?>