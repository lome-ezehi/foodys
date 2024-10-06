<?php
include ('./templates/nav.php');
include ('./templates/connect.php');

$username = $_SESSION['username'];
?>
<body>
    <main>
        <div class="parallax-container">
            <div class="parallax"><img src="./assets/img/pexels-elevate-1267320.jpg" width="100%"></div>
            <div class="center-align text-parallel">
                <p style="font-size: 65px;" class="bold_text">
                    F<span class="green-text text-accent-4">öö</span>dys <br>
                    <span style="font-size: 20px;">Satisfy Every Craving 😊</span> <br>
                    <a href="menu.php" class="btn-large waves-effect waves-light green accent-4" style="margin-top: 20px;">Order Now</a>
                </p>
                <!-- Add the "Order Now" button -->
            </div>
        </div>
        <div class="section"></div>
        <div class="container">
            <h3 class="center-align underline grey-text text-darken-4">Popular orders</h3>
            <div class="row">
                <div class="col s12 l4">
                    <div class="card hoverable menu">
                        <div class="card-image">
                            <img src="./uploads/dutch-pancakes-removebg-preview.png" alt="">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Dutch Pancakes</span>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card hoverable menu">
                        <div class="card-image">
                            <img src="./uploads/jollof-rice.png" alt="">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Jollof Rice</span>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="card hoverable menu">
                        <div class="card-image">
                            <img src="./uploads/pounded-yam.png" alt="">
                        </div>
                        <div class="card-content">
                            <span class="card-title">Pounded yam and egusi soup</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="center-align index_btn1">
                <a class="white-text btn btn-large waves-effect green accent-4" href="menu.php">View Menu</a>
            </div>
        </div>
        <div class="section"></div>
        <div class="divider black"></div>
        <div class="container">
            <div class="row">
                <div class="col l5">
                    <p style="font-size: 7em;">F<span class="green-text text-accent-4">öö</span>dys</p>
                </div>
                <div class="col l7">
                    <h3 class="left-align grey-text text-darken-4">Hello and welcome, <span><?php echo $username; ?></span>!</h3>
                    <img src="./assets/img/green-fork.png" class="green-fork" alt="">
                    <h6 style="letter-spacing: 0.4px; font-size: 20px;">
                        Föödys is an in-house restaurant management platform created with one goal in mind: to revolutionize how restaurant staff manage orders and collaborate. In today’s fast-paced restaurant environments, efficiency and accuracy are key to maintaining high customer satisfaction.
                    </h6>
                    <div class="left-align index_btn">
                        <a href="" class="white-text btn btn-large waves-effect green accent-4">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section"><div class="section"></div></div>
        
    </main>
</body>

<?php
include ('./templates/footer.php');
?>
