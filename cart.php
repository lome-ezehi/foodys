<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$select_query = "SELECT * FROM `foodysCart_tb`";

$send_query = mysqli_query($db_connect, $select_query);

$carts = mysqli_fetch_all($send_query, MYSQLI_ASSOC);

// echo $carts[2]['food_id'];


if (isset($_POST['place_order'])) {
}
?>
<body>
    <main>
        <div class="container center-align">
            <div class="container theme cart_container center-align">
                <h2 class="center-align green-text text-accent-4 dashed">Cart</h2>
            <?php foreach ($carts as $cart) {?>
                <div class="container cart_i left-align">
                    <div class="quantity_input">
                        <!-- <label for="q">Quantity: </label> -->
                        <input type="number" class="right-align" name="edit_quantity" id="q" value="<?php echo $cart['quantity']; ?>">
                    </div>
                    <div class="cart_food">
                        <h6 class="bold_text"><?php echo $cart['food_name'] . "<br>" ?></h6>
                    </div>
                    <div class="">
                        <?php echo "₦" . $cart['food_price'] . "<br>" ?>
                    </div>
                </div>
            <?php } ?>
                <form action="cart.php" method="post">
                    <input type="submit" value="Place order" name="place_order" class="btn place_order green accent-4 ">
                </form>
            </div>
        </div>
    </main>
</body>
<?php
include ('./templates/footer.php');
?>