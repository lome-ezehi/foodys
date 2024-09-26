<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$select_query = "SELECT * FROM `foodysCart_tb`";

$send_query = mysqli_query($db_connect, $select_query);

$carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

// echo $carts[0]['food_name'];
// print_r($carts);


if (isset($_POST['delete'])) {
    $delete_food_id = $_POST['delete_food_id']; 
    // echo $delete_food_id;
    $delete_query = "DELETE FROM `foodysCart_tb` WHERE `food_id` = '$delete_food_id' ";
    $delete_query = mysqli_query($db_connect, $delete_query);

    $send_query = mysqli_query($db_connect, $select_query);
    $carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);
}

$empty_msg = "";


?>
<body>
    <main>
        <div class="container center-align">
            <div class="container theme cart_container center-align">
                <h2 class="center-align green-text text-accent-4 dashed">Cart</h2>
                <?php if ($carts) { ?>
                <div class="container cart_i left-align">
                    <div class="row">
                        <form action="cart.php" method="post">
                            <?php foreach ($carts as $cart) {?>
                            <div class="cart_food col l10">
                                <h6 class="bold_text"><?php echo $cart['food_name'] . "<br>" ?></h6>
                            </div>
                            <div class="quantity_input col l2">
                                <!-- <label for="q">Quantity: </label> -->
                                <input type="number" class="right-align" name="edit_quantity" id="q" value="<?php echo $cart['quantity']; ?>">
                            </div>
                            <div class="col l10 food_price">
                                <?php echo "₦" . $cart['food_price'] . "<br>" ?>
                            </div>
                            <button class="delete_cart col l2 btn right btn-small red-text btn-flat " type="submit" name="delete">
                                <i class="material-icons">delete</i>
                            </button>
                            <div class="divider col l12 black divider_cart"></div>
                            <input type="hidden" name="delete_food_id" value="<?php echo $cart['food_id']; ?>">
                            <?php } ?>
                            <div class="place_order">
                                <input type="submit" value="Place order" name="place_order" class="clear_btn btn green accent-4 ">
                                <input type="submit" value="clear order" class="clear_btn btn red-text text-darken-4 red lighten-3">
                            </div>
                        </form>
                    </div>
                </div> 
                <?php }else {
                    $empty_msg = 'Cart is empty';
                } ?>
                <p><?php echo $empty_msg; ?>. <a href="meals.php" class="green-text">Order now</a> </p>
                <form action="cart.php" method="post">
                </form>
            </div>
        </div>
    </main>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantities = JSON.parse(localStorage.getItem('cartQuantities')) || {};

        document.querySelectorAll('input[name^="edit_quantity"]').forEach(input => {
            const foodId = input.name.split('edit_quantity')[1];
            if (quantities[foodId]) {
                input.value = quantities[foodId];
            }
            
            input.addEventListener('input', function() {
                quantities[foodId] = input.value;
                localStorage.setItem('cartQuantities', JSON.stringify(quantities));
            });
        });
    });
</script>
<?php
include ('./templates/footer.php');
?>