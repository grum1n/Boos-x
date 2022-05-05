<?php include('inc/hero.php'); ?>

<section class="row bg-dark-blue">
    <div class="site-right-radius-container bg-gray-lighten">
        <ul class="news-flex-wrap">
        <?php 
                include 'app/src/db.inc.php';
                $sql = "SELECT news_id, news_title, news_category, news_content, date FROM boos_news ORDER BY news_id DESC";
                $result = mysqli_query($mysqli, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "  <li> 
                                    <img src='app/images/pexels-essow-936722-xx.jpg' alt='pexels-essow-936722-xx' />
                                    <h4>" . $row["news_title"] . "</h4>
                                    <h5>" . $row["date"]. " | " . $row["news_category"] . "</h5>
                                    <p class='site-text fontColor-gray'>" . $row["news_content"] . "</p>
                                    <a href='pages.php?page=news_single'>Read More</a>
                                </li> 
                        ";
                    }
                } else {
                    echo "0 results";
                }
            
                mysqli_close($mysqli);
        ?>
            <!-- <li>
               
                    <img src="app/images/pexels-essow-936722-xx.jpg" alt="pexels-essow-936722-xx" />
                    <h4>Reprehenderit in voluptate velit esse cillum</h4>
                    <h5>July 29, 2020 | Art</h5>
                    <p class="site-text fontColor-gray">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.
                    </p>
                    <a href="pages.php?page=news_single">Read More</a>
               
            </li>
            <li>
                
                    <img src="app/images/pexels-essow-936722-xx.jpg" alt="pexels-essow-936722-xx" />
                    <h4>Reprehenderit in voluptate velit esse cillum</h4>
                    <h5>July 29, 2020 | Art</h5>
                    <p class="site-text fontColor-gray">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.
                    </p>
                    <a href="pages.php?page=news_single">Read More</a>
               
            </li>
            <li>
                
                    <img src="app/images/pexels-essow-936722-xx.jpg" alt="pexels-essow-936722-xx" />
                    <h4>Reprehenderit in voluptate velit esse cillum</h4>
                    <h5>July 29, 2020 | Art</h5>
                    <p class="site-text fontColor-gray">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.
                    </p>
                    <a href="pages.php?page=news_single">Read More</a>
                
            </li>
            <li>
               
                    <img src="app/images/pexels-essow-936722-xx.jpg" alt="pexels-essow-936722-xx" />
                    <h4>Reprehenderit in voluptate velit esse cillum</h4>
                    <h5>July 29, 2020 | Art</h5>
                    <p class="site-text fontColor-gray">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.
                    </p>
                    <a href="pages.php?page=news_single">Read More</a>
               
            </li>
            <li>
               
                    <img src="app/images/pexels-essow-936722-xx.jpg" alt="pexels-essow-936722-xx" />
                    <h4>Reprehenderit in voluptate velit esse cillum</h4>
                    <h5>July 29, 2020 | Art</h5>
                    <p class="site-text fontColor-gray">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.
                    </p>
                    <a href="pages.php?page=news_single">Read More</a>
               
            </li>
            <li>
                
                    <img src="app/images/pexels-essow-936722-xx.jpg" alt="pexels-essow-936722-xx" />
                    <h4>Reprehenderit in voluptate velit esse cillum</h4>
                    <h5>July 29, 2020 | Art</h5>
                    <p class="site-text fontColor-gray">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa.
                    </p>
                    <a href="pages.php?page=news_single">Read More</a>
                
            </li> -->
        </ul>
    </div>  
</section>

<?php include('app/pages/public/inc/partners.php'); ?>