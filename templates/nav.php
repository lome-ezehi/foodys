<?php
include ('./templates/connect.php');
session_start();
$username = $_SESSION['username'];
// echo $username;
?>

<body>
    <header>
        <!-- M sidenav content -->
        <ul class="sidenav hide-on-large-only" id="mobile-demo">
            <li><a href="index.php"><i class="material-icons left">home</i>Home</a></li>
            <li><a href="insert_order.php"><i class="material-icons left">menu_book</i>Add Menu</a></li>
            <li><a href="meals.php"><i class="material-icons left">dinner_dining</i>Menu</a></li>
            <li><a href="cart.php"><i class="material-icons left">shopping_cart<span class="white-text cart">0</span></i>Your Order</a></li>
        </ul>
        <div class="navbar-fixed theme">
            <nav class="nav_wrapper z-depth-0 theme">
                <div class="nav-wrapper">
                    <!-- M sidenav -->
                    <a data-target="mobile-demo" class="sidenav-trigger hide-on-large-only black-text" href="#"><i class="material-icons">menu</i></a>
                    <!-- brand logo -->
                    <div class="brand-logo">
                        <!-- M mobile  -->
                        <a href="index.php" class="black-text hide-on-large-only"><em>F<span class="green-text text-accent-4">öö</span>dys</em></a>
                    </div>
                    <!-- D navbar content -->
                    <div class="container">
                        <!-- D desktop  -->
                        <ul>
                            </ul>
                        <ul class="hide-on-med-and-down middle_nav">
                            <li><a href="index.php" class="hide-on-med-and-down black-text brand_logo"><em>F<span class="green-text text-accent-4">öö</span>dys</em></a></li>
                            <li><a href="index.php" class="nav_link black-text"><i class="material-icons left">home</i>Home</a></li>
                            <li><a href="meals.php" class="nav_link black-text"><i class="material-icons left">dinner_dining</i>Menu</a></li>
                            <li><a href="cart.php" class="nav_link black-text"><i class="material-icons left">shopping_cart</i>Your Order</a></li>
                            <li><a class="nav_link black-text dropdown-trigger" data-target="dropdown1"><i class="material-icons left">person</i>
                            <?php 
                            echo $username;
                            ?>
                            <i class="material-icons right">arrow_drop_down</i></a></li>
                        </ul>
                        <!-- D desktop navbar  -->
                        <ul class="hide-on-med-and-down right">
                        </ul>
                    </div>
                    <!-- dropdown content -->
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="dashboard.php" class="center-align green-text">My Account</a></li>
                        <li><a href="logout.php" class="center-align red-text">LOGOUT</a></li>
                    </ul>

                    <!--M account  -->
                    <ul class="hide-on-large-only right">
                        <li><a href="dashboard.php" class="black-text"><i class="material-icons left">person</i>
                        <?php 
                        if ($_SESSION['username']) {
                            echo $_SESSION['username'];
                        }else {
                            header('Location: login.php');
                            exit();
                        }
                        ?></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="divider"></div>
    </header>
</body>


