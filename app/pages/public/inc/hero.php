<?php
if($_GET['page']){
    $heroTitle = $_GET['page'];
} else {
    $heroTitle = 'page not found..';
}
?>
<section class="hero">
    <div id="particles-js"></div>
    <div class="hero-body">
        <h2><?php echo ucfirst($heroTitle); ?></h2>
        <p>Our professional team works to increase productivity and cost effectiveness on the market.</p>
    </div>
</section>