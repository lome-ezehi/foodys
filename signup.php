<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$exists = '';
$wrong = '';

if (isset($_POST['signup'])) {
    if ($_POST['password'] == $_POST['confirm_password']) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];

        $check_query = "SELECT * FROM `user_tb` WHERE `username` = '$username'";
        $check_result = mysqli_query($db_connect, $check_query);

        if (mysqli_num_rows($check_result) > 0){ //checks row containing username to see if username exists
            $exists = 'Username already exists'; //random
        }else {
            $fetch_query = "INSERT INTO `user_tb` (`user_id`, `username`, `f_name`, `l_name`, `password`, `email`, `confirm_password`) VALUES (NULL, '$username', '$f_name', '$l_name', '$password', '$email', '$confirm_password')";
        
            $send_query = mysqli_query($db_connect, $fetch_query);
    
            if ($send_query) {
                $_SESSION['username'] = $_POST['username'];
                header('Location: index.php');
                exit();
            }
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
                        <div class="col l12 input-field left-align">
                            <label class="label" for="username">Username:</label>
                            <input type="text" name="username" id="username" placeholder="e.g Doe" required>
                            <span class="red-text"><?php echo $exists;?></span>
                        </div>
                        <div class="col l12 input-field inp">
                            <label class="label" for="f_name">First name:</label>
                            <input type="text" name="f_name" id="f_name" placeholder="e.g John" required>
                        </div>
                        <div class="col l12 input-field">
                            <label class="label" for="l_name">Last name:</label>
                            <input type="text" name="l_name" id="l_name" placeholder="e.g Doe" required>
                        </div>
                        <div class="col l12 input-field">
                            <label for="email" class="label">Email(optional):</label>
                            <input type="email" name="email" id="email" placeholder="e.g Johndoe@gmail.com" class="validate">
                            <span class="helper-text" data-error="wrong" data-success="Correct"></span>
                        </div>
                        <div class="col l12 input-field">
                            <label for="password" class="label">Password</label>
                            <input type="password" name="password" id="password" placeholder="**********" required>
                        </div>
                        <div class="col l12 input-field left-align">
                            <label for="confirm_password" class="label">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" placeholder="**********" required>
                            <span class="red-text"><?php echo $wrong;?></span>
                        </div>
                        <input type="submit" value="signup" name="signup" class="signup btn btn-large green accent-4">
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include ('./templates/footer.php'); ?>
