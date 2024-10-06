<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $select_query = "SELECT * FROM `foodys_tb` WHERE `food_id` = $id";
    $send_query = mysqli_query($db_connect, $select_query);
    $order = mysqli_fetch_assoc($send_query);
}

if (isset($_POST['add_to_cart'])) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Fetching the order details again after form submission
        $select_query = "SELECT * FROM `foodys_tb` WHERE `food_id` = $id";
        $send_query = mysqli_query($db_connect, $select_query);
        $order = mysqli_fetch_assoc($send_query);
        
        // Fetching the data needed for the insert
        $food_name = $order['food_name']; // Set food_name
        $food_price = $order['food_price'];
        $quantity = $_POST['quantity'];
        
        // Insert into the cart
        $insert_query = "INSERT INTO `foodysCart_tb` (`food_name`, `food_price`, `quantity`) VALUES ('$food_name', '$food_price', '$quantity')";
        $insert_result = mysqli_query($db_connect, $insert_query);
        
        // Check if insert was successful
        if ($insert_result) {
            header('Location: cart.php');
            exit();
        } else {
            echo "Error adding to cart: " . mysqli_error($db_connect);
        }
    }
}
if (isset($_POST["delete_menu"])) {
    $delete_id = $_GET['id'];
    
    $delete_query = "DELETE FROM `foodys_tb` WHERE `food_id` = $id";
    // echo $delete_query;
    $send_delete_query = mysqli_query($db_connect, $delete_query);

    if ($send_delete_query) {
        header('Location: menu.php');
        exit();
    }
    // $order = mysqli_fetch_assoc($send_query);
}
?>

<body>
    <main>
        <div class="container order_container">
            <div class="col s12 m7">
                <form action="order.php?id=<?php echo $id; ?>" method="post">
                    <div class="card horizontal large order_card theme">
                        <div class="card_image theme">
                            <img src="./uploads/<?php echo $order['image_name']; ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3 class="black-text bold_text"><?php echo $order['food_name']; ?></h3>
                                <div class="divider black"></div>
                                <h6 class="grey-text text-darken-2"><?php echo $order['food_description']; ?></h6>
                                <h5 class="green-text text-accent-4">₦<?php echo $order['food_price']; ?></h5>
                                <div class="row">
                                    <div class="col l4 input-field">
                                        <input type="number" name="quantity" id="quantity" value="1">
                                        <label class="black-text" for="quantity">Quantity:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <button type="submit" id="addCart" name="add_to_cart" class="btn black-text order_btn">Add to Cart</button>
                                <input type="submit" name="delete_menu" value="Delete from Menu" class="btn red right white-text function_btn">
                                <!-- <a href="edit_function.php?food_id=<?php echo $id; ?>" class="btn blue right white-text function_btn" >Edit</a> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- <span id="mySpan">0</span> -->
    </main>
<?php
include ('./templates/footer.php');
?>
</body>