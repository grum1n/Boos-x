<?php
if(isset($_POST['submit'])){
    $n_title = trim($_POST['news_title']);
    $n_category = trim($_POST['news_category']);
    $n_content = trim($_POST['news_content']);
    $n_user = trim($_POST['user']);
  

    if(!empty($n_title) && !empty($n_category) && !empty($n_content)){
        include 'db.inc.php';
        mysqli_query($mysqli, "INSERT INTO boos_news (news_title, news_category, news_content, user) VALUES('$_POST[news_title]', '$_POST[news_category]', '$_POST[news_content]', '$_POST[user]')");
        header("Location: ../pages/autorized/d_news.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
} 