<?php 
    session_start();
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

<section class="row bg-dark-blue">
    <div class="container">
        <ul class="dashboard-flex-container">
            <li class="dashboard-flex-left-box">
                <h3 class="site-orange-section-title">Users</h3>
                <?php 
                include('inc/show_users.php'); 
                ?>
            </li>
            <li class="dashboard-flex-right-box">
                <h3>Messages</h3>
                <?php 
                include('inc/show_email_messages.php'); 
                ?>
            </li> 
        </ul>
    </div>
</section>

</body>
</html>