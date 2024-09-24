<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$wrong = '';

if (isset($_POST['signup'])) {
    if ($_POST['password'] == $_POST['confirm_password']) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];

        $fetch_query = "INSERT INTO `user_tb` (`user_id`, `username`, `f_name`, `l_name`, `password`, `email`, `confirm_password`) VALUES (NULL, '$username', '$f_name', '$l_name', '$password', '$email', '$confirm_password')";
    
        $send_query = mysqli_query($db_connect, $fetch_query);

        if ($send_query) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('Location: landing_page.php');
            exit();
        }
    }else {
        $wrong = "Password are not the same";
    }
}
?>

<main>
    <div class="container white con-body">
        <div class="container center-align signup_container">
            <h1>Signup</h1>
            <div class="row">
                <div class="col l12">
                    <form action="./signup.php" method="post">
                        <div class="col l12 input-field">
                            <label class="label" for="username">Username:</label>
                            <input type="text" name="username" id="username" placeholder="e.g Doe">
                        </div>
                        <div class="col l12 input-field inp">
                            <label class="label" for="f_name">First name:</label>
                            <input type="text" name="f_name" id="f_name" placeholder="e.g John">
                        </div>
                        <div class="col l12 input-field">
                            <label class="label" for="l_name">Last name:</label>
                            <input type="text" name="l_name" id="l_name" placeholder="e.g Doe">
                        </div>
                        <div class="col l12 input-field">
                            <label for="email" class="label">Email:</label>
                            <input type="email" name="email" id="email" placeholder="e.g Johndoe@gmail.com" class="validate">
                            <span class="helper-text" data-error="wrong" data-success="Correct"></span>
                        </div>
                        <div class="col l12 input-field">
                            <label for="password" class="label">Password</label>
                            <input type="password" name="password" id="password" placeholder="**********">
                        </div>
                        <div class="col l12 input-field">
                            <label for="confirm_password" class="label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="**********">
                        </div>
                        <span class="red-text left-align col l12" ><?php echo $wrong;?></span>
                        <input type="submit" value="signup" name="signup" class="signup btn btn-large green accent-4">
                    </form>
                    <p>Already have an account? <a class="auth_link" href="login.php">LOGIN</a></p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include ('./templates/footer.php'); ?>
