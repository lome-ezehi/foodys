<?php
session_start();
// include('./templates/nav.php');
include('./templates/connect.php');

$username = ' ';
$password = ' ';
$error_msg = null;

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password']);

    $fetch_login_details = "SELECT * FROM `user_tb` WHERE `username` = '$username' ";
    
    $send_query = mysqli_query($db_connect, $fetch_login_details);
    // print_r ($send_query);

    //if username corresponds with the username in the database
    if (mysqli_num_rows($send_query) > 0) {
        $login_details = mysqli_fetch_assoc($send_query);
        // checks if password is correct
        if ($login_details['password'] === $password) {
            $_SESSION['username'] = $_POST['username'];
            header('Location: index.php');
            exit();
        }else {
            echo 'wrong password';
        }
    }else{
        $error_msg = "incorrect details";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodys:></title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>   
        @import url('https://fonts.googleapis.com/css2?family=Coming+Soon&family=Karla:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); 
        *{
        font-family: 'Karla', sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        }
        .theme{
            background-color: #f4f4f4;
        }
        .name{
            font-weight: bolder;
        }
        .nav_wrapper{
            background-color: #f4f4f4 !important;
        }
        .more_details{
            margin-bottom: 20px !important;
        }
        footer{
            background-color: #f4f4f4 !important;
            /* margin-bottom: 20px !important; */
        }        
        .new_wrapper{
            padding-top: 25px !important;
            padding-bottom: 50px !important;
        }
        .ed-btn{
            margin: 20px;
        }
        .type{
            font-size: 15px !important;
        }
        .r_name{
        font-size: 17px;
        font-weight: 600;
        text-decoration: underline;
        transition: ease-out .2s;
        color: #00C853 !important;
        }
        .d_container{
            /* background-color: red; */
            padding-top: 15% !important;
        }
        .d_ul{
            width: 300px !important;
        }
        .d_li{
            width: 300px !important;
        }
        .d_link{
        color: black;
        font-size: 17px;
        width: 300px !important;
        text-align: left ;
        background-color: #f4f4f4;
        text-transform: none;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }
        .d_link:hover{
            box-shadow: 10px ;
            background-color: #00C853;
            color: #fff;
            transition: .2s ease-out;
        }
        .logout{
            width: 300px;
            text-align: center;
            background-color: #fff !important;
            border-radius: 0 0 2px 2px !important;
            padding: 12px 20px;
            border: 1px solid rgba(160,160,160,0.2) !important;
            position: relative;
        }
        .logoutBtn:hover{
            color: #e57373  !important;
            transition: ease-out.2s;
            cursor: pointer;
        }
        .more{
            background-color: #00C853;
            margin-top: 20px;
        }
        .more:hover{
            background-color: #00C853;
        }
        .heading{
            text-decoration: underline;
            font-size: 60px;
            font-weight: bold;
        }
        body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
        main{
            flex: 1 0 auto;
        }
        .auth_link{
            color: green;

        }
        .auth_link:hover{
            font-weight: bold;
            color: green;
            text-decoration: underline;
            transition: ease-out.2s;
        }
        .hero h2 {
            font-size: 36px;
        }
        .hero p {
            font-size: 20px;
        }
        .underline{
            text-decoration: underline;
        }
        .featured_menu {
            text-align: center;
            padding: 50px 0px;
            /* background-color: #f4f4f4; */
        }
        .landing_main{
            background-color: #f4f4f4;
        }
        .cat_link{
            width: 100%;
            height: auto;
            /* margin: 10px 0; */
        }
        .categories{
            padding: 30px 0;
        }
        /* .ac:active{
            background-color: red !important;
        } */
        .order_link:hover{
            color: greenyellow !important;
        }
        .card_index{
            height: auto;
            width: 100%;
        }
        .hidden {
            display: none;
        }
        .account{
            border: 1px solid black;
            margin-top: 80px;
            background-color: #f4f4f4;
            width: 750px !important;
            border-radius: 5px;
        }
        .order_container{
            margin-top: 50px;
            /* margin-left: 300px; */
        }
        .wrapper{
            width: 80%;
            font-size: 40px;
            padding: 0 20px;
            cursor: pointer;
        }
        span.num{
            font-size: 30px;
            border-right: 2px solid rgba(0, 0, 0, 0.2);
            border-left: 2px solid rgba(0, 0, 0, 0.2);
            pointer-events: none;
        }
        span.cart{
            font-size: 15px;
            position: relative;
            right: 30%;
            top: 8%;
            background-color: green;
            color: white;
            padding: 2px;
            border-radius: 30%;
            /* display: block; */
        }
        .nav_link:hover{
            background-color: #00C853;
            color: #fff !important;
        }
        span.cart:hover{
            color: #fff !important;
            background-color: green;
        }
        .card-image img{
            background-color: #f4f4f4 !important;
        }
        .login_container{
            margin-top: 200px !important;
            border: 2px solid rgba(0, 0, 0, 0.2);
            box-shadow: 10px 10px 15px #aaaaaa;
        }
        .signup_container{
            margin-top: 30px;
            margin-bottom: 30px;
            border: 2px solid rgba(0, 0, 0, 0.2);
            box-shadow: 10px 10px 15px #aaaaaa;
        }
        .order_btn{
            background-color: #f4f4f4;
        }
        .function_btn{
            margin: 0 20px;
        }
        .input-field input:focus {
            border-bottom: 1px solid #00C853 !important;
            box-shadow: 0 1px 0 0 #00C853 !important;
        }
        label {
            color: black !important;
            font-weight: bold;
            font-size: 15px !important;
        }
        .input-field .prefix.active, label.active{
            color: #00C853 !important;
        }
    </style>
</head>
<body>
    <main>
        <div class="container center-align">
            <div class="container login_container">
                <h1>Login</h1>
                <div class="container">
                    <div class="row">
                        <span class="red-text"><?php echo $error_msg; ?></span>
                        <form action="login.php" method="POST">
                            <div class="col l12 s12 input-field">
                                <i class="material-icons prefix">person</i>
                                <input type="text" name="username" id="username" placeholder="e.g John">
                                <label for="username">Username:</label>
                            </div>
                            <div class="col l12 s12 input-field">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" name="password" id="password" placeholder="e.g 1234">
                                <label for="password">Password:</label>
                            </div>
                            <div class="col l12 s12 input-field center-align">
                                <input type="submit" value="login" name="login" class="btn green darken-4 center-align">
                            </div>
                        </form>
                        <!-- <p>Don't have an account? <a class="auth_link" href="signup.php">SIGNUP</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./assets/js/jqueryv3.4.1.js"></script>
    <script src="./assets/js/materialize.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

<?php
// include('./templates/footer.php');
?>
