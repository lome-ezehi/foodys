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

?>

<body>
    <main>
        <div class="container order_container">
            <div class="col s12 m7">
                <form action="order.php?id=<?php echo $id; ?>" method="post">
                    <div class="card horizontal large order_card">
                        <div class="card-image">
                            <img src="./uploads/<?php echo $order['image_name']; ?>" width="100%">
                        </div>
                        <div class="card-stacked theme">
                            <div class="card-content">
                                <h2 class="black-text"><?php echo $order['food_name']; ?></h2>
                                <div class="divider"></div>
                                <h5 class="black-text">Price: ₦<?php echo $order['food_price']; ?></h5>
                                <div class="row">
                                    <div class="col l4 input-field">
                                        <input type="number" name="quantity" id="quantity" value="1">
                                        <label class="black-text" for="quantity">Quantity:</label>
                                    </div>
                                </div>
                                <!-- <h5 class="black-text">Price Total: ₦<?php echo $food_price * (isset($quantity) ? $quantity : 1); ?></h5> -->
                            </div>
                            <div class="card-action">
                                <input type="submit" name="add_to_cart" value="Add to cart" class="btn black-text order_btn">
                                <a href="delete_function.php?id=<?php echo $order['food_id']; ?>" class="btn red right white-text function_btn">Delete</a>
                                <a href="edit_function.php?id=<?php echo $order['food_id']; ?>" class="btn blue right white-text function_btn">Edit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
<?php
include ('./templates/footer.php');
?>

<!-- <?php echo $order['food_price'] * $order['food_quantity'] ?> -->
<!-- <?php echo $order['food_quantity'] ?> -->

<!-- <span class="wrapper minus">-</span>
    <span class="wrapper num">01</span>
    <span class="wrapper plus">+</span> -->