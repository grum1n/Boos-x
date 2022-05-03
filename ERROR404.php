<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Boos web design">
    <meta name="keywords" content="HTML, html, CSS, css, JavaScript, javascript, PHP, php , SQL, sql, full-stack kursai, Boos dizainas">
    <meta name="author" content="grumin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boos | Error page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700;900&family=Open+Sans&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="app/css/main.css">
    <link rel="stylesheet" href="app/css/normalize.css">
</head>
<body>
<?php include('app/views/header.php'); ?>
<section class="row bg-dark-blue">
    <div class="container">
        <div class="error404-page fontColor-white">
            <img src="app/images/Group-18.png" alt='image 404'/>
            <h3 class="heading-title">Oh no, something went wrong!</h3>
            <p class="site-text">We provide a professional service for private and commercial customers.</p>
            <a href="index.php" class="btn-link orange">
                Back to Homepage
            </a>
        </div>
    </div>
</section>
<?php include('app/views/footer.php'); ?>
</body>
</html>