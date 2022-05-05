<?php
    require __DIR__ . '/app/src/message.inc.php';  
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
    <title>Boos x | <?php echo $page; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&family=Open+Sans&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="app/css/main.css">
    <link rel="stylesheet" href="app/css/normalize.css">
</head>
<body>
<?php include("app/views/header.php"); ?>
    <main>
        <?php  
            $page = $_GET['page'];
            $path = "app/pages/public/";
            $pageUrl = $path . $page . '.php';
            
            switch ($page) {
                case "home":
                    include($pageUrl);
                    break;
                case "about":
                    include($pageUrl);
                    break;
                case "services":
                    include($pageUrl);
                    break;
                case "news":
                    include($pageUrl);
                    break;
                case "news_single":
                    include($pageUrl);
                    break;
                case "contact":
                    include($pageUrl);
                    break;
                case "login":
                    include($pageUrl);
                    break;
                case "register":
                    include($pageUrl);
                    break;
                default:
                    header("Location: http://localhost/vsc-kartojimas/kurso-darbas/Boos-x/ERROR404.php");
                    break;
            }
        ?>
    </main>
<?php include("app/views/footer.php"); ?>
</body>
</html>