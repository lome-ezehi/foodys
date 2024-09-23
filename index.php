<?php
include ('./templates/connect.php');
include ('./templates/header.php');

$breakfast_query = "SELECT * FROM `foodys_tb` WHERE `food_type` = 'breakfast' ";
$lunch_query = "SELECT * FROM `foodys_tb` WHERE `food_type` = 'lunch' ";
$dinner_query = "SELECT * FROM `foodys_tb` WHERE `food_type` = 'dinner' ";
$drink_query = "SELECT * FROM `foodys_tb` WHERE `food_type` = 'drink' ";
$dessert_query = "SELECT * FROM `foodys_tb` WHERE `food_type` = 'dessert' ";

$send_breakfast_query = mysqli_query($db_connect, $breakfast_query);
$send_lunch_query = mysqli_query($db_connect, $lunch_query);
$send_dinner_query = mysqli_query($db_connect, $dinner_query);
$send_drink_query = mysqli_query($db_connect, $drink_query);
$send_dessert_query = mysqli_query($db_connect, $dessert_query);

$breakfasts = mysqli_fetch_all($send_breakfast_query, MYSQLI_ASSOC);
$lunchs = mysqli_fetch_all($send_lunch_query, MYSQLI_ASSOC);
$dinners = mysqli_fetch_all($send_dinner_query, MYSQLI_ASSOC);
$drinks = mysqli_fetch_all($send_drink_query, MYSQLI_ASSOC);
$desserts = mysqli_fetch_all($send_dessert_query, MYSQLI_ASSOC);

// print_r($breakfasts);
?>
<body>
    <main>
        <div class="container">
            <h3>All categories</h3>
            <button href="#breakfast" class="btn green lighten-2 accent-4 cat_btn center-align cat_link">
                <i class="material-icons ">free_breakfast</i><br>
                Breakfast
            </button>
            <button href="#" class="btn green lighten-2 accent-4 cat_btn cat_link">
                <i class="material-icons prefix">lunch_dining</i><br>
                Lunch
            </button>
            <button href="#" class="btn green lighten-2 accent-4 cat_btn cat_link">
                <i class="material-icons prefix">dinner_dining</i><br> 
                Dinner
            </button>
            <button href="#" class="btn green lighten-2 accent-4 cat_btn cat_link">
                <i class="material-icons prefix">wine_bar</i><br>
                Drinks
            </button>
            <button href="#" class="btn green center-align lighten-2 accent-4 cat_btn cat_link">
                <i class="material-icons prefix">cake</i><br>
                Dessert
            </button>
        </div>
        <!-- Breakfast -->
        <div id="breakfast" class="container categories">
            <div class="divider"></div>
            <h3 >Breakfast</h3><br>
            <div class="row">
                <?php
                foreach ($breakfasts as $breakfast) { ?>
                <div class="col s12 m6 l4">
                    <div class="card card_index">
                        <div class="card-image">
                            <img src="./assets/img/<?php echo $breakfast['food_type']; ?>.jpg" alt="" height="300px">
                            <span class="card-title black-text"><?php echo $breakfast['food_name']; ?></span>
                            <a href="" class="btn-floating halfway-fab waves-effect waves-light green lighten-2 accent-4"><i class="material-icons prefix">add_shopping_cart</i></a>
                        </div>
                        <div class="card-content">
                            <p><?php echo $breakfast['food_description']; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="" class="green-text text-darken-3 order_link">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Lunch -->
        <div id="lunch" class="container categories">
            <div class="divider"></div>
            <h3>Lunch</h3><br>
            <div class="row">
                <?php
                foreach ($lunchs as $lunch) { ?>
                <div class="col s12 m6 l4">
                    <div class="card card_index">
                        <div class="card-image">
                            <img src="./assets/img/<?php echo $lunch['food_type']; ?>.jpg" alt="" height="300px">
                            <span class="card-title black-text"><?php echo $lunch['food_name']; ?></span>
                            <a href="" class="btn-floating halfway-fab waves-effect waves-light green lighten-2 accent-4"><i class="material-icons prefix">add_shopping_cart</i></a>
                        </div>
                        <div class="card-content">
                            <p><?php echo $lunch['food_description']; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="" class="green-text text-darken-3 order_link">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Dinner -->
        <div id="dinner" class="container categories">
            <div class="divider"></div>
            <h3 >Dinner</h3><br>
            <div class="row">
                <?php
                foreach ($dinners as $dinner) { ?>
                <div class="col s12 m6 l4">
                    <div class="card card_index">
                        <div class="card-image">
                            <img src="./assets/img/<?php echo $dinner['food_type']; ?>.jpg" alt="" height="300px">
                            <span class="card-title black-text"><?php echo $dinner['food_name']; ?></span>
                            <a href="" class="btn-floating halfway-fab waves-effect waves-light green lighten-2 accent-4"><i class="material-icons prefix">add_shopping_cart</i></a>
                        </div>
                        <div class="card-content">
                            <p><?php echo $dinner['food_description']; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="" class="green-text text-darken-3 order_link">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Drinks -->
        <div id="drink" class="container categories">
            <div class="divider"></div>
            <h3 >Drinks</h3><br>
            <div class="row">
                <?php
                foreach ($drinks as $drink) { ?>
                <div class="col s12 m6 l4">
                    <div class="card card_index">
                        <div class="card-image">
                            <img src="./assets/img/<?php echo $drink['food_type']; ?>.jpg" alt="" height="300px">
                            <span class="card-title black-text"><?php echo $drink['food_name']; ?></span>
                            <a href="" class="btn-floating halfway-fab waves-effect waves-light green lighten-2 accent-4"><i class="material-icons prefix">add_shopping_cart</i></a>
                        </div>
                        <div class="card-content">
                            <p><?php echo $drink['food_description']; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="" class="green-text text-darken-3 order_link">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Dessert -->
        <div id="dessert" class="container categories">
            <div class="divider"></div>
            <h3 >Dessert</h3><br>
            <div class="row">
                <?php
                foreach ($desserts as $dessert) { ?>
                <div class="col s12 m6 l4">
                    <div class="card card_index">
                        <div class="card-image">
                            <img src="./assets/img/<?php echo $dessert['food_type']; ?>.jpg" alt="" height="300px">
                            <span class="card-title black-text"><?php echo $dessert['food_name']; ?></span>
                            <a href="" class="btn-floating halfway-fab waves-effect waves-light green lighten-2 accent-4"><i class="material-icons prefix">add_shopping_cart</i></a>
                        </div>
                        <div class="card-content">
                            <p><?php echo $drink['food_description']; ?></p>
                        </div>
                        <div class="card-action">
                            <a href="" class="green-text text-darken-3 order_link">Order Now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
<?php
include ('./templates/footer.php');
?>