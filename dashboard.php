<?php
include('./templates/nav.php');
include('./templates/connect.php');

$select_query = "SELECT * FROM `receipts_tb`"; 
$send_select_query = mysqli_query($db_connect, $select_query);
$receipts = mysqli_fetch_all($send_select_query, MYSQLI_ASSOC);
// print_r($receipts);

$username = $_SESSION['username'];

?>
<body>
    <main>
        <div class="row">
            <div class="col l4 hide-on-med-and-down">
                <div class="container d_container">
                    <ul class="d_ul">
                        <li class="d_li"><a onclick="showCategory('account')" class="btn d_link"><i class="material-icons left">person_outline</i>My Föödys account</a></li>
                        <li class="d_li"><a onclick="showCategory('order')" class="btn d_link"><i class="material-icons left">menu_book</i>Orders placed</a></li>
                        <li class="d_li"><a onclick="showCategory('about')" class="btn d_link"><i class="material-icons left">person</i>About us</a></li>
                        <li class="d_btn center-align white"><a onclick="showCategory()" class="btn green accent-4 btn_link"><i class="material-icons left">person_add</i>SIGNUP</a></li>
                    </ul>
                </div>
            </div>
            <div id="account" class="col l8 hide-on-med-and-down account contents">
                <div class="container center-align">
                    <h5 class="big black-text">My F<span class="green-text text-accent-4">öö</span>dys account</h5>
                    <div class="image_container">
                        <img src="./assets/img/user_default.jpeg" class="circle" width="150px" alt="">
                    </div>
                    <p class="small">Hello, <?php echo $username; ?></p>
                    <div class="button">
                        <a href="signup.php" class="btn btn-large white-text green accent-4 account_btn"><i class="material-icons left">person_add</i> Add an account</a>
                    </div>
                </div>
            </div>
            <div id="order" class="col l8 hide-on-med-and-down account hide contents">
                <div class="container">
                    <h5 class="center-align big black-text">Orders Placed</h5>
                    <div class="row">
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
            <div id="about" class="col l8 hide-on-med-and-down account hide contents">
                <div class="container">
                    <h5 class="center-align big black-text">F<span class="green-text text-accent-4">öö</span>dys <br>
                    </h5>
                    <div>
                        <p>Föödys is an in-house restaurant management platform created with one goal in mind: to revolutionize how restaurant staff manage orders and collaborate. In today’s fast-paced restaurant environments, efficiency and accuracy are key to maintaining high customer satisfaction.
                        <br><br>
                        Föödys is designed to simplify communication between the cashier, who processes customer orders, and the kitchen staff, who prepare them. With real-time order tracking, seamless updates, and organized receipts, Föödys ensures that no order is missed or delayed. 
                        <br><br>
                        Our system provides an intuitive interface that can be used by staff of all skill levels, minimizing the learning curve and allowing everyone to focus on what matters most—delivering great food and exceptional service.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function showCategory(category) {
            // Hide all contents first
            let contents = document.querySelectorAll('.contents');
            contents.forEach(function(cont) {
                cont.classList.add('hide');
            });
            // Show the selected category
            document.getElementById(category).classList.remove('hide');
        }
    </script>
</body>


<?php
include('./templates/footer.php');
?>
