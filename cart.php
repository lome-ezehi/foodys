<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$select_query = "SELECT * FROM `foodysCart_tb`";

$send_query = mysqli_query($db_connect, $select_query);

$carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

// echo $carts[0]['food_name'];
// print_r($carts);


//delete item
if (isset($_POST['delete'])) {
    $delete_food_id = $_POST['delete_food_id']; 
    // echo $delete_food_id;
    $delete_query = "DELETE FROM `foodysCart_tb` WHERE `food_id` = '$delete_food_id' ";
    $delete_query = mysqli_query($db_connect, $delete_query);

    //refreshing table by sending query again
    $send_query = mysqli_query($db_connect, $select_query);
    $carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);
    echo "<p class='center-align green-text'>Item deleted successfully!</p>";
}

if (isset($_POST["place_order"])) {
    $time = time();
    // $random = rand(10, 1000);
    $user_id  = $time;
    
    // Insert each cart item into the `receipts_tb`
    foreach ($carts as $cart) {
        $food_name = $cart['food_name'];
        $quantity = $cart['quantity'];
        $food_price = $cart['food_price'];
        $total_price = $food_price * $quantity;

        $insert_receipt_query = "INSERT INTO `receipts_tb` (`user_id`, `food_name`, `quantity`, `food_price`, `total_price`) VALUES ('$user_id', '$food_name', '$quantity', '$food_price', '$total_price')";
        // print_r($insert_receipt_query);
        $send_receipt_query = mysqli_query($db_connect, $insert_receipt_query);
    }

    $clear_cart_query = "DELETE FROM `foodysCart_tb`";
    $clear_cart = mysqli_query($db_connect,  $clear_cart_query);

    header("Location: receipt.php?user_id=" . $user_id);
    exit();
}

// if (isset($_POST['place_order'])) {
//     $user_id = 1; // Example user_id, in real case this would be fetched dynamically

//     // Insert each cart item into the `receipts_tb`
//     foreach ($carts as $cart) {
//         $food_name = $cart['food_name'];
//         $quantity = $cart['quantity'];
//         $food_price = $cart['food_price'];
//         $total_price = $food_price * $quantity;

//         $insert_receipt_query = "INSERT INTO `receipts_tb` (`user_id`, `food_name`, `quantity`, `food_price`, `total_price`)
//                                  VALUES (?, ?, ?, ?, ?)";
//         $stmt = $db_connect->prepare($insert_receipt_query);
//         $stmt->bind_param('isidd', $user_id, $food_name, $quantity, $food_price, $total_price);
//         $stmt->execute();
//     }

//     // Clear the cart after placing the order
//     $clear_cart_query = "DELETE FROM `foodysCart_tb` WHERE `user_id` = ?";
//     $stmt = $db_connect->prepare($clear_cart_query);
//     $stmt->bind_param('i', $user_id);
//     $stmt->execute();

//     // Redirect to the receipt page after placing the order
//     header("Location: receipt.php?user_id=" . $user_id);
//     exit();
// }

if (isset($_POST["clear_cart"])) {
    //sending query to delete all from table
    $delete_all_query = "DELETE FROM `foodysCart_tb`";
    $delete_all = mysqli_query($db_connect, $delete_all_query);

    $send_query = mysqli_query($db_connect, $select_query);
    $carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);
    echo "<p class='center-align red-text'>Cart cleared!</p>";
}

?>
<body>
    <main>
        <div class="container">
            <div class="container theme cart_container">
                <div class="container cart_i left-align">
                    <div class="cart center-align">
                        <h2 class="green-text text-darken-2 solid center-align">Cart</h2>
                    </div>
                    <div class="row">
                        <?php if ($carts) { ?>
                        <form action="cart.php" method="post">
                            <?php 
                                $total_price = 0;
                                foreach ($carts as $cart) {
                                $total_price += $cart['food_price'] * $cart['quantity'];
                            ?>
                            <div class="cart_food col l10">
                                <h6 class="bold_text"><?php echo $cart['food_name'] . "<br>" ?></h6>
                            </div>
                            <div class="quantity_input col l2">
                                <!-- <label for="q">Quantity: </label> -->
                                <input type="number" class="right-align" name="edit_quantity" id="quantity" value="<?php echo $cart['quantity']; ?>">
                            </div>
                            <div class="col l10 food_price" id="price">
                                <?php echo "₦" . $cart['food_price'] . "<br>" ?>
                            </div>
                            <button class="delete_cart col l2 btn right btn-small red-text btn-flat " type="submit" name="delete">
                                <i class="material-icons">delete</i>
                            </button>
                            <div class="divider col l12 black divider_cart"></div>
                            <input type="hidden" name="delete_food_id" value="<?php echo $cart['food_id']; ?>">
                            <?php } ?>
                            <h5 class="total_price">Total price: 
                                <?php 
                                echo  "₦" . $total_price;
                                ?>
                            </h5>
                            <div class="place_order">
                                <input type="submit" value="Place order" name="place_order" class="clear_btn btn green accent-4 ">
                                <input type="submit" value="clear order" name="clear_cart" class="clear_btn btn red-text text-darken-4 red lighten-3">
                            </div>
                            <div class="add_cart center-align">
                                <a href="menu.php" class="green-text text-accent-4">Add to cart</a>
                            </div>
                        </form>
                        <?php }else {
                            echo "<div class='cart_img'> <img src='./assets/img/cart.jpg' width='200px' alt=''> </div>";
                            echo "<p class='center-align'>Cart is empty. <a href='menu.php' class='green-text'>Order now</a></p>";
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<?php
include ('./templates/footer.php');
?>
