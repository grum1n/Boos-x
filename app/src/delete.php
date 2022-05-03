<?php
    require_once 'db.inc.php';
    mysqli_query($mysqli, "DELETE FROM boos_news WHERE news_id='$_REQUEST[news_id]'") or die(mysqli_error());
    header("location:../pages/autorized/d_news.php");
?>