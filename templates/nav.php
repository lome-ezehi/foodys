<?php 
include ('./templates/connect.php');
session_start();

?>

<body>
    <header>
        <nav class="nav_wrapper z-depth-0">
            <div class="container">
                <!-- sidenav -->
                <a data-target="mobile-demo" class="sidenav-trigger hide-on-large-only black-text" href="#"><i class="material-icons">menu</i></a>
                <!-- sidenav content -->
                <ul class="sidenav hide-on-large-only" id="mobile-demo">
                    <li><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
                    <li><a href="insert_order.php"><i class="material-icons left">menu_book</i>Add Menu</a></li>
                    <li><a href="cart.php"><i class="material-icons left">shopping_cart<span class="white-text cart">0</span></i>Cart</a></li>
                </ul>
                <!-- brand logo -->
                <a href="index.php" class="brand-logo black-text"><em>F<span class="green-text text-accent-4">öö</span>dys</em></a>
                <!-- account  -->
                <ul class="hide-on-large-only right">
                    <li><a href="dashboard.php" class="black-text"><i class="material-icons left">person</i>
                    <?php 
                    if ($_SESSION['username']) {
                        echo  $_SESSION['username'];
                    }else {
                        echo 'Account';
                    }
                    ?></a></li>
                </ul>
                
                <!-- navbar content -->
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php" class="nav_link black-text"><i class="material-icons left">home</i>Home</a></li>
                    <li><a href="insert_order.php" class="nav_link black-text"><i class="material-icons left">menu_book</i>Add Menu</a></li>
                    <li><a href="cart.php" class="nav_link black-text"><i class="material-icons left">shopping_cart<span class="white-text cart">0</span></i>Cart</a></li>
                    <li><a href="#!" class="nav_link black-text dropdown-trigger" data-target="dropdown1"><i class="material-icons left">person</i>
                    <?php 
                    if ($_SESSION['username']) {
                        echo  $_SESSION['username'];
                    }else {
                        echo 'Account';
                    }
                    ?>
                    <i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
                <!-- dropdown content -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="login.php" class="green-text"><i class="material-icons left">person</i>SIGN IN</a></li>
                    <li><a href="signup.php" class="green-text"><i class="material-icons left">person_add</i>SIGN UP</a></li>
                    <li><a href="dashboard.php" class="green-text"><i class="material-icons left">dashboard</i>Account</a></li>
                </ul>
            </div>
        </nav>
        <div class="divider"></div>
    </header>
</body>




<!-- 
<body>
    <header>
        <nav class="nav_wrapper z-depth-0">
            <div class="container">
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="login.php">SIGN IN</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                </ul>
                <a href="index.php" class="brand-logo black-text"><em>Föödys</em></a>
                <ul class="right">
                    <li><a href="index.php" class="black-text tooltipped" data-position="bottom" data-tooltip="Home"><i class="material-icons">home</i></a></li>

                    <li><a href="insert_order.php" class="black-text tooltipped" data-position="bottom" data-tooltip="Insert"><i class="material-icons">menu_book</i></a></li>

                    <li><a href="cart.php" class="black-text tooltipped" data-position="bottom" data-tooltip="Cart"><i class="material-icons left">shopping_cart<span class="white-text">0</span></i></a></li>

                    <li><a href="#!" class="black-text dropdown-trigger tooltipped" data-target="dropdown1" data-position="bottom" data-tooltip="Account"><i class="material-icons left">person</i><i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </nav>
        <div class="divider"></div>
    </header>
</body> -->