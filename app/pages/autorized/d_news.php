<?php 
    session_start();
    $user = $_SESSION["u_uid"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Boos web design">
    <meta name="keywords" content="HTML, html, CSS, css, JavaScript, javascript, PHP, php , SQL, sql, full-stack kursai, Boos dizainas">
    <meta name="author" content="grumin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&family=Open+Sans&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/normalize.css">
</head>
<body>
<?php 
include('../../views/d_header.php'); 
?>

<div class="row bg-dark-blue">
    <div class="dashboard-container">
        <div class="container">
            <form action="../../src/addNews.inc.php" method="post" class="dashboard-left-box">
                <input type="text" name="news_title" placeholder="News Title" autofocus/>
                <input type="text" name="news_category" placeholder="News Category" />
                <textarea name="news_content"  placeholder="News Content" rows="4" cols="40" ></textarea>
                <input type="text" name="user" value="<?php echo $user; ?>" hidden />
                <button class="form-btn" type="submit" name="submit" > Add </button>
            </form>

        </div>
    </div>
</div>
<div class="row bg-dark-blue">
    <div class="container ">
        <ul class="news-flex-wrap">
            <?php 
                include '../../src/db.inc.php';
                $sql = "SELECT news_id, news_title, news_category, news_content, user, date FROM boos_news ORDER BY news_id DESC";
                $result = mysqli_query($mysqli, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "  <li class='dashboard-news'> 
                                    <a class='site-text red' href='../../src/delete.php?news_id=" . $row["news_id"] . "'><i class='fa-solid fa-trash-can'></i></a>
                                    <img src='../../images/pexels-essow-936722-xx.jpg' alt='pexels-essow-936722-xx' />
                                    <h4>" . $row["news_title"] . "</h4>
                                    <h5>" . $row["date"]. " | " . $row["news_category"] . "</h5>
                                    <h5>Added : " . $row["user"]. "</h5>
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
        </ul>
    </div>  
</div>

</body>
</html>

