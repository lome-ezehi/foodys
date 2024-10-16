<?php
session_start();
// include('./templates/nav.php');
include('./templates/connect.php');

$username = '';
$password = '';
$error_msg = '';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db_connect, $_POST['username']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password']);

    $fetch_login_details = "SELECT * FROM `user_tb` WHERE `username` = '$username' ";
    
    $send_query = mysqli_query($db_connect, $fetch_login_details);
    print_r ($send_query);

    //if username corresponds with the username in the database
    if (mysqli_num_rows($send_query) > 0) {
        // login details contains the table details in the form of an associative array
        $login_details = mysqli_fetch_assoc($send_query);
        // checks if password is correct
        if ($login_details['password'] === $_POST['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['user_id'] = $login_details['user_id'];
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
        body{
            background: linear-gradient(to right, rgba(255, 0, 0, 0), rgb(0, 200, 83));
        }
        .login_container{
            margin-top: 200px !important;
            border: 2px solid rgba(0, 0, 0, 0.2);
            box-shadow: 10px 10px 15px #aaaaaa;
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
            <div class="container login_container white">
                <!-- <p>Föödys</p> -->
                <h1>Login</h1>
                <div class="container">
                    <div class="row">
                        <span class="red-text"><?php echo $error_msg; ?></span>
                        <form action="login.php" method="POST">
                            <div class="col l12 s12 input-field">
                                <i class="material-icons prefix">person</i>
                                <input style="text-transform: capitalize;" type="text" name="username" id="username">
                                <label for="username">Username:</label>
                            </div>
                            <div class="col l12 s12 input-field">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" name="password" id="password">
                                <label for="password">Password:</label>
                            </div>
                            <div class="col l12 s12 input-field center-align">
                                <input type="submit" value="login" name="login" class="btn green accent-4 center-align">
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
</body>

