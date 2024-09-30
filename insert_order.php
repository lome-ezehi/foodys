<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$food_name = $food_type = $food_description = $food_price = $image_name = " ";
if (isset($_POST['submit'])) {
    $food_name = $_POST['food_name'];
    $food_description = $_POST['food_description'];
    $food_type = $_POST['food_type'];
    $food_price = $_POST['food_price'];
    // $quantity = $_POST['quantity'];
    $image_name = $_FILES['upload_order']['name'];

    $insert_query = "INSERT INTO `foodys_tb` (`food_type`, `food_name`, `food_description`, `food_price`, `image_name`) VALUES ('$food_type', '$food_name', '$food_description', '$food_price', '$image_name') ";
    
    $send_query = mysqli_query($db_connect, $insert_query);

    // print_r($send_query);


    $target_directory = 'uploads';

    $tmp_address = $_FILES['upload_order']['tmp_name'];

    $upload_image = move_uploaded_file($tmp_address, "$target_directory/$image_name");

    // print_r($insert_query);
    if ($upload_image) {
        header('Location: index.php');
        exit();
    }
}
?>
<body>
    <main>
        <div class="container">
            <h3 class="center-align">Add Menu</h3>
            <div class="row">
                <div class="col l6">
                    <div class="img_add hide-on-med-and-down">
                        <img src="./assets/img/chef.jpg" width="100%" alt="">
                    </div>
                </div>
                <div class="col s12 m6 l6">
                    <form action="./insert_order.php" enctype="multipart/form-data" method="post">
                        <div class="col s12 m6 l12 input-field">
                            <i class="material-icons prefix">person</i>
                            <label for="food_name">Name of meal:</label>
                            <input type="text" name="food_name" id="food_name">
                        </div>
                        <div class="col s12 m6 l12 input-field">
                            <i class="material-icons prefix">person</i>
                            <label for="food_description">Order Description:</label>
                            <input type="text" name="food_description" id="food_description">
                        </div>
                        <div class="col s12 m6 l10 ">
                            <label for="food_type">Food type:</label>
                            <!-- <i class="material-icons left">person</i> -->
                            <select name="food_type" id="food_type">
                                <option value="breakfast">Breakfast</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                                <option value="drink">Drinks</option>
                                <option value="dessert">Dessert</option>
                            </select>
                        </div>
                        <div class="col s12 m6 l12 input-field">
                            <i class="material-icons prefix">person</i>
                            <label for="price">Price:</label>
                            <input type="number" name="food_price" id="price">
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
                            <input type="submit" name="submit" value="Submit" class="btn green lighten-2 accent-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<?php
include ('./templates/footer.php');
?>