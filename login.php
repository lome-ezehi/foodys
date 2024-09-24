<?php
include('./templates/nav.php');
include('./templates/connect.php');

$username = ' ';
$password = ' ';
$error_msg = null;

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $fetch_login_details = "SELECT * FROM `user_tb` WHERE `username` = '$username' ";
    
    $send_query = mysqli_query($db_connect, $fetch_login_details);
    // print_r ($send_query);

    //if username corresponds with the username in the database
    if (mysqli_num_rows($send_query) > 0) {
        $login_details = mysqli_fetch_assoc($send_query);
        // checks if password is correct
        if ($login_details['password'] === $password) {
            session_start();
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

<main>
    <div class="container center-align">
        <div class="container login_container">
            <h1>Login</h1>
            <div class="container">
                <div class="row">
                    <form action="login.php" method="POST">
                        <div class="col l12 s12 input-field">
                            <span class="red-text"><?php echo $error_msg; ?></span>
                            <input type="text" name="username" id="username">
                            <label for="username">Username:</label>
                        </div>
                        <div class="col l12 s12 input-field">
                            <input type="password" name="password" id="password">
                            <label for="password">Password:</label>
                        </div>
                        <div class="col l12 s12 input-field center-align">
                            <input type="submit" value="login" name="login" class="btn green darken-4 center-align">
                        </div>
                    </form>
                    <p>Don't have an account? <a class="auth_link" href="signup.php">SIGNUP</a></p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('./templates/footer.php');
?>
