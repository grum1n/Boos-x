<?php 
    if(isset($_SESSION['u_uid'])){
        $user = $_SESSION['u_uid'];
    } else {
        header("Location: pages.php?page=login");
        exit();
    }
?>
<header class="row flex-col-2 bg-black-op">
    <div class="bg-dark-blue flex-row-2">
        <span class="fontColor-white">
            Hello <?php echo $user; ?> !
        </span>
        <div class="flex-row-2">
            <span class="fontColor-white">
                Dashboard
            </span>
        </div>
    </div>
    <nav class="top-navigation">
        <a href="dashboard.php?u_uid" class="logo"> 
            <img src="../../images/logo.png" alt="Logo Boos" />
        </a>
        <ul id="mySidenav" class="sidenav">
            <li>
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            </li>
            <li>
                <a href="../../../index.php">Home <i class="fa-solid fa-plus"></i></a>
            </li>
            <li>
                <a href="dashboard.php?u_uid">Dashboard</a>
            </li>
            <li>
                <a href="d_news.php">News</a>
            </li>
        </ul>
        <div class="logout-btn-box">
            <form action="../../src/logout.inc.php" method="post">
                <button type="submit" name="submit" class="logout-btn"><i class="fa-solid fa-right-from-bracket"></i></button>
            </form>
        </div>
    </nav>
</header>

