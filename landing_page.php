<?php
include ('./templates/nav.php');
include ('./templates/connect.php');


$name = $_SESSION['username'];
?>
<body>
    <main class="landing_main">
        <div class="container center-align">
            <h1 class="center-align"><strong>Welcome, <?php echo $name; ?>.👏🏽</strong></h1>
        </div>
        <div class="container center-align hero">
            <div class="divider black"></div>
            <h1 class="center-align green-text text-darken-4 underline">Order</h1>
            <h2>Delicious Food, Delivered Fast</h2>
            <p>Order your favorite meals from the best restaurants in town.</p>
            <a href="" class="btn green darken-4">Order Now</a>
        </div>
        <div class="container featured_menu center-align green-text text-darken-4 underline" id="menu">
            <div class="divider black"></div>
            <h3>Popular Dishes</h3>
            <div class="row">
                <div class="col">
                    <div class="col l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="./uploads/jollof-rice.png" alt="Jollof Rice" >
                            </div>
                            <div class="card-content">
                                <h4>Jollof Rice</h4>
                                <p>Freshly made with the finest ingredients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="./assets/img/suya.jpg" alt="Chips and Chicken" >
                            </div>
                            <div class="card-content">
                                <h4>Chips & Chicken</h4>
                                <p>Juicy and grilled to perfection.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l4">
                        <div class="card">
                            <div class="card-image">
                                <img src="./assets/img/pounded_yam.jpg" alt="Pounded yam and Egusi soup" >
                            </div>
                            <div class="card-content">
                                <h4>Pounded Yam & Egusi soup</h4>
                                <p>Delicious Pounded yam & Egusi soup rolls, made fresh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </main>
</body>
<?php
include ('./templates/footer.php');
?>