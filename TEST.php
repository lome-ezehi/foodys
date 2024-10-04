<?php 
session_start();

include('./templates/connect.php');

$user_id= "";
$error_msg = "";

if (isset($_GET['user_id'])) {
    // assign receipe id to the local variable
    $user_id = $_GET['user_id'];

    // fetch data from the table using row id
    $fetch_query = "SELECT * FROM `login_tb` WHERE `user_id` = $user_id";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $users = mysqli_fetch_assoc($send_fetch_query);

    // print_r($users);

    if (!$users) {
        $error_msg = "user not found";
    }

} else {
    $error_msg = "No user logged in !";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Chic Charms</title>
</head>

<style>

    * playwrite-de-grund-font {
    font-family: "Playwrite DE Grund", cursive;
    font-optical-sizing: auto;
    font-weight: 100;
    font-style: normal;
    }

    .brand-logo{
        margin-left: 50px;
    }

    .blush-pink{
        background-color: #ff4d88 !important;
    }

    .blush-pink-text{
        color: #ff4d88 !important;
    }

    .gold{
        background-color: #f7cd45 !important;
    }

    .gold-text{
        color: #f8e79b !important;
    }

    .creamy-white{
    background-color: #fdf3e7 !important;
    }

    .creamy-white-text{
        color: #fdf3e7 !important;
    }

    .charcoal{
        color: #333333 !important;
    }

    .warm-gray{
        color: #7d7d7d !important;
    }

    @media only screen and (min-width: 601px) {
        nav, nav .nav-wrapper i, nav a.sidenav-trigger, nav a.sidenav-trigger i {
            height: 85;
        }
    }

    .mobile_logo{
        margin-bottom: 50px;
    }

    .navbar{
        padding-bottom: 15px;
    }
</style>

<body class="creamy-white">
    <!-- header -->
    <header>
        <div class="navbar-fixed ">
            <nav class="z-depth-0 nav-wrapper blush-pink">
                <div class="container">
                    <div class="row">
                        <a href="index.php" class="gold-text brand-logo hide-on-med-and-down">Chic Charms</a>
                        <a href="index.php" class="brand-logo hide-on-large-only mobile_logo"><img width="55px" src="./img/logo.png" alt="" class="responsive-img"></a>
                        <a href="#sidenav" class="sidenav-trigger creamy-white-text"><i class="material-icons">menu</i></a>

                        <ul class="right">
                            <li class="">
                                <a href="#" data-target="dropdown1" class="creamy-white-text dropdown-trigger">Account<i class=" left material-icons">account_circle</i></a>
                                <ul class="dropdown-content" id="dropdown1">
                                    <li> <a class=" charcoal center bold-text" href="#!">Account Settings</a> </li>
                                    <li class="divider" tabindex="-1"></li>
                                    <li class="divider" tabindex="-1"></li>
                                    <li> <a class="charcoal" href="#!">My Orders</a> </li>
                                    <li> <a class="charcoal" href="edit_account.php?user_id=<?php echo $users['user_id']; ?>"> Edit Account</a> </li> 
                                    <li> <a class=" charcoal red-text" href="logout.php"><i class="material-icons">input</i>Logout</a> </li>
                                    <li class="divider" tabindex="-1"></li>
                                    <li> <a class=" center charcoal red white-text" href="#!"><i class="material-icons">delete_forever</i>Delete Account</a> </li>
                                </ul>
                            </li>
                            <li class="nav-icon">
                                <a href="" class="creamy-white-text">Cart<i class="left material-icons">shopping_cart</i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <ul id="sidenav" class="sidenav">
        <h5 class="charcoal">Type</h5>
            <ul>
                <li>
                    <a href="" class="warm-gray">Bracelets</a>
                </li>
                <li>
                    <a href="" class="warm-gray ">Earrings</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Rings</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Necklaces</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Headbands</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Hair Clips</a>
                </li>
            </ul>
        <h5 class="charcoal">Color</h5>
            <ul>
                <li>
                    <a href="" class="warm-gray">Blue</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Red</a>
                </li>
                <li>
                    <a href="" class="warm-gray">White</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Black</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Pink</a>
                </li>
                <li>
                    <a href="" class="warm-gray">Multicolor</a>
                </li>
            </ul>
        </ul>
    </header>
</body>

<script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>