<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$user_id = $_GET['user_id']; // Retrieve the user ID from the URL

// Fetch all receipts for the specific user
$select_receipt_query = "SELECT * FROM `receipts_tb` WHERE `user_id` = $user_id ORDER BY `order_date` DESC";
$select_query = mysqli_query($db_connect, $select_receipt_query);
$receipts = mysqli_fetch_all($select_query, MYSQLI_ASSOC);
// print_r($receipts);
?>

<body>
    <main>
        <div class="container center-align orders_head">
            <h2 class="green-text text-accent-4 solid">Order Receipt</h2>
            <?php if ($receipts) { ?>
                <table class="striped">
                    <thead>
                    <tr>
                        <th>Food Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Order Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($receipts as $receipt) { ?>
                    <tr>
                        <td><?php echo $receipt['food_name']; ?></td>
                        <td><?php echo $receipt['quantity']; ?></td>
                        <td>₦<?php echo $receipt['food_price']; ?></td>
                        <td>₦<?php echo $receipt['total_price']; ?></td>
                        <td><?php echo $receipt['order_date']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <?php } else {
                echo "<p class='center-align'>No orders found.</p>";
            } ?>
        </div>
    </main>
</body>

<?php
include ('./templates/footer.php');
?>
