<?php
include ('./templates/nav.php');
include ('./templates/connect.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $insert_query = "SELECT * FROM `foodys_tb` WHERE `food_id` = $id";

    $send_query = mysqli_query($db_connect, $insert_query);

    $order = mysqli_fetch_assoc($send_query);

    // print_r($order);
}

// session_start();

// if (isset($_POST['add_to_cart'])) {
    
//     if (isset($_SESSION['cart'])) {
        
//     }else {
//         $session_array = array(
            
//         );
//     }
// }
?>
<body>
    <main>
        <div class="container order_container">
            <div class="col s12 m7">
                <form action="order.php?id=<?= $order['food_id']?>" method="post">
                    <div class="card horizontal large">
                        <div class="card-image">
                            <img src="./uploads/<?= $order['image_name']; ?>" >
                        </div>
                        <div class="card-stacked theme">
                            <div class="card-content">
                                <h2 class="white-text"><?= $order['food_name']; ?></h2>
                                <div class="divider"></div>
                                <h5 class="white-text">Price: ₦<?= $order['food_price']; ?></h5>
                                <div class="row">
                                    <!-- <div class="col l4">
                                        <h5>Quantity:
                                    </div> -->
                                    <div class="col l4 input-field">
                                        <input type="number" name="quantity" id="quantity">
                                        <label class="white-text" for="quantity">Quantity:</label>
                                    </div>
                                </div> 
                                <input type="hidden" name="food_name" value="<?= $order['food_name']; ?>">
                                <input type="hidden" name="food_price" value="<?= $order['food_price']; ?>">
                                </h5>
                                <h5 class="white-text">Price Total: ₦</h5>
                            </div>
                            <div class="card-action">
                                <input type="submit" name="add_to_cart" value="Add to cart" class="btn black-text order_btn">
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