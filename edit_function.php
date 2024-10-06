<?php
include('./templates/nav.php');
include('./templates/connect.php');

$id = '';
$error_msg = '';

echo $_GET['food_id'];

if (isset($_GET['food_id'])) {
    // assign receipe food_id to the local variable
    $food_id = $_GET['food_id'];

    // fetch data from the table using row food_id
    $fetch_query = "SELECT * FROM `foodys_tb` WHERE `food_id` = $food_id";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $meal = mysqli_fetch_assoc($send_fetch_query);

    // print_r($meal);

    if (!$meal) {
        $error_msg = "meal not found";
    }

} else {
    $error_msg = "You are not logged in!";
}

// Update the data once edited
$update_food_id = "";
$update_food_name = "";
$update_food_description = "";
$update_food_type = "";
$update_food_price = "";
$upload_order = "";


if (isset($_POST['edit'])) {
    $update_food_id = $_POST['update_food_id'];

    $update_food_name = $_POST['update_food_name'];

    $update_food_description = $_POST['update_food_description'];

    $update_food_type = $_POST['update_food_type'];

    $update_food_price = $_POST['update_food_price'];

    $upload_order = $_POST['upload_order'];

    $update_query="UPDATE `foodys_tb` SET `username`='$update_username',`password`='$update_password' WHERE `user_id`='$update_user_id'";

    $send_update_query= mysqli_query($db_connect, $update_query);

    if ($send_update_query) {
        header('Location: login.php');
        exit();
    }
}

?>

<main>
    <div class="container">
        <h3 class="center-align">Edit Menu</h3>
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l12">
                        <form action="./insert_order.php" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="update_food_id" value="<?php echo $meal['food_id']; ?>">
                            <div class="col s12 m6 l12 input-field">
                                <i class="material-icons prefix">person</i>
                                <label for="">Name of meal:</label>
                                <input type="text" name="food_name" id="update_food_name">
                            </div>
                            <div class="col s12 m6 l12 input-field">
                                <i class="material-icons prefix">person</i>
                                <label for="">Order Description:</label>
                                <input type="text" name="food_description" id="update_food_description">
                            </div>
                            <div class="col s12 m6 l10 ">
                                <label for="">Food type:</label>
                                <!-- <i class="material-icons left">person</i> -->
                                <select name="update_food_type" id="update_food_type">
                                    <option value="breakfast">Breakfast</option>
                                    <option value="lunch">Lunch</option>
                                    <option value="dinner">Dinner</option>
                                    <option value="drink">Drinks</option>
                                    <option value="dessert">Dessert</option>
                                </select>
                            </div>
                            <div class="col s12 m6 l12 input-field">
                                <i class="material-icons prefix">person</i>
                                <label for="price">Price: </label>
                                <input type="number" name="update_food_price" id="price">
                            </div>
                            <div class="col s12 m6 l12 file-field input-field">
                                <div class="btn green accent-4">
                                    <span>Upload</span>
                                    <input type="file" name="upload_order">
                                </div>
                                <div class="file-path-wrapper">
                                    <input type="text" class="file-path validate">
                                </div>
                            </div>
                            <div class="col s12 m6 l12 input-field center-align">
                                <input type="submit" name="submit" value="Edit" class="btn green lighten-2 accent-4">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include('./templates/footer.php');
?>
