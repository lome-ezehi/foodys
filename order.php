<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$error_msg = '';
$carts = '';
$order_id = '';
$order = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $order_id = $_GET['id'];
    
    $select_query = "SELECT * FROM `foodysCart_tb` WHERE `order_id` = $id";
    $send_query = mysqli_query($db_connect, $select_query);
    $carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

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
        
        if($_POST['quantity'] > 0 && $_POST['quantity'] <= 10){
            // Fetching the data needed for the insert
            $food_name = $order['food_name']; // Set food_name
            $food_price = $order['food_price'];
            $quantity = $_POST['quantity'];
            
            // Insert into the cart
            $insert_query = "INSERT INTO `foodysCart_tb` (`food_name`, `food_price`, `quantity`, `order_id`) VALUES ('$food_name', '$food_price', '$quantity', '$order_id')";
            $insert_result = mysqli_query($db_connect, $insert_query);
            
            // Check if insert was successful
            if ($insert_result) {
                header('Location: cart.php');
                exit();
            } else {
                echo "Error adding to cart: " . mysqli_error($db_connect);
            }
        }else{
            $error_msg = 'Please Enter a value between 1 & 10';
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
            <?php if($order){ ?>
            <div class="col s12 m7">
                <form action="order.php?id=<?php echo $id; ?>" method="post">
                    <div class="card horizontal large order_card theme">
                        <div class="card_image theme">
                            <img src="./uploads/<?php echo $order['image_name']; ?>">
                        </div>
                        <div class="card-stacked">
                            <div class="card-content">
                                <h3 class="black-text bold_text"><?php echo $order['food_name']; ?></h3>
                                <div class="divider black order_div"></div>
                                <h6 class="grey-text text-darken-2"><?php echo $order['food_description']; ?></h6>
                                <h5 class="green-text text-accent-4">₦<?php echo $order['food_price']; ?></h5>
                                <div class="row">
                                    <div class="col l10 input-field">
                                        <label class="black-text" for="quantity">Quantity(only 10 packs remain): </label>
                                        <input type="number" class="order_quantity" name="quantity" id="quantity" value="1"><br>
                                        <p class=""><?php echo $error_msg; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-action">
                                <?php if(!$carts){ ?>
                                <button type="submit" id="addCart" name="add_to_cart" class="btn white-text order_btn">Add to Cart</button>
                                <?php }else{
                                    echo '<span style="font-size: 20px;">Item is already in cart.</span>';
                                } ?>
                                <input type="submit" name="delete_menu" value="Delete from Menu" class="btn right white-text function_btn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <?php }else{ echo '<p style="font-size: 62px; text-align: center;">You have not selected an order yet.</p>'; } ?>
        </div>
        <!-- <span id="mySpan">0</span> -->
    </main>
<?php
include ('./templates/footer.php');
?>
</body>