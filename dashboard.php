<?php
include('./templates/nav.php');
include('./templates/connect.php');

$select_query = "SELECT * FROM `receipts_tb`"; 
$send_select_query = mysqli_query($db_connect, $select_query);
$receipts = mysqli_fetch_all($send_select_query, MYSQLI_ASSOC);
print_r($receipts);

?>

<main>
    <div class="row">
        <div class="col l4 hide-on-med-and-down">
            <div class="container d_container">
                <ul class="d_ul">
                    <li class="d_li"><a class="btn d_link" href=""><i class="material-icons left">person_outline</i>My Föödys account</a></li>
                    <li class="d_li"><a class="btn d_link" href=""><i class="material-icons left">menu_book</i>Orders placed</a></li>
                    <li class="d_li"><a class="btn d_link" href=""><i class="material-icons left">contacts</i>Contact us</a></li>
                    <li class="d_li"><a class="btn d_link" href=""><i class="material-icons left">person</i>About us</a></li>
                </ul>
            </div>
        </div>
        <div class="col l8 account hide-on-med-and-down">
            <div class="container account_container">
                <h5 class="center-align bold_text underline green-text">Orders Placed</h5>
            <?php foreach ($receipts as $receipt) {?>
                <div class="col l4 order_placed">
                    <p><?= '#' . $receipt['user_id']; ?></p>
                    <input type="submit" value="Completed" class="btn ">
                    <a class="btn green accent-4" href="receipt.php?user_id=<?= $receipt['user_id']; ?>">View Receipt</a>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</main>


<?php
include('./templates/footer.php');
?>
