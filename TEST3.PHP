<?php 

include('./templates/connect.php');
include('./templates/navbar.php');

// Reditects the user to the logi page if logged out
if (isset($_SESSION['user_id'])) {
    header('Location: ./login.php');
}


// create blank variables to fetch
$user_id = "";
$error_msg = "";
$users= null;

// check if a particular user id is selected

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

// Update the data once edited
$update_user_id = "";
$update_username = "";
$update_password = "";
$update_email = "";
$update_first_name ="";
$update_last_name ="";

if (isset($_POST['Edit'])) {
    $update_user_id = $_POST['update_user_id'];

    $update_username = $_POST['update_username'];

    $update_password = $_POST['update_password'];

    $update_email = $_POST['update_email'];

    $update_first_name = $_POST['update_first_name'];

    $update_last_name = $_POST['update_last_name'];

    $update_query="UPDATE `login_tb` SET `username`='$update_username',`password`='$update_password',`email`='$update_email',`first_name`='$update_first_name',`last_name`='$update_last_name' WHERE `user_id`='$update_user_id'";

    $send_update_query= mysqli_query($db_connect, $update_query);

    if ($send_update_query) {
        header("Location: ./index.php");
    }
}


?>

<main>
    <div class="section container">
        <!-- ENsures the user is set befor using it -->
        <?php if (isset($users)): ?>
        <h1>
        Hi, <?php echo htmlspecialchars($users['username']) ?>
        </h1>
        <div class="container">
            <form action="./edit_account.php" method="post">
            <div class="row">
                <!-- this div hides the user id of the user so the user can't change the user id -->
                <div class="input-field col s12 l3">
                    <input type="hidden" name="update_user_id" id="update_user_id" value="<?php echo htmlspecialchars($users['user_id']) ?>" >
                </div>
                <div class="input-field col pull-l3 s12 l9">
                <input type="text" placeholder="<?php echo $users['username'] ?>" name="update_username" id="update_username">
                </div>
                <div class="input-field col s12">
                <input type="text" placeholder="<?php echo $users['password'] ?>" name="update_password" id="update_password">
                </div>
                <div class="col s12 input-field">
                    <input type="submit" value="Edit" name="Edit" class="orange darken-4 btn-large btn-flat white-text">
                </div>
            </div>
            <div class="input-field col s12">
                <input type="text" name="name" id="name">
            </div>
            </form>
        </div>
        <h1><?php echo htmlspecialchars($error_msg); ?></h1>
        <?php endif ?>
    </div>
</main>