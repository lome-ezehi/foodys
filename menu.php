<?php
include ('./templates/nav.php');
include ('./templates/connect.php');


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
            <h3 class="hide-on-med-and-down bold_text">All Categories</h3>
            <h3 class="center-align hide-on-large-only bold_text">All Categories</h3>
            <div class="row">
                <div class="col l2 s12">
                    <a onclick="showCategory('dessert')" class="btn green center-align accent-4 cat_link">
                        <i class="material-icons left">cake</i>Dessert
                    </a>
                </div>
                <div class="col l1"></div>
                <div class="col l2 s12">
                    <a onclick="showCategory('breakfast')" class="btn green accent-4 center-align cat_link"><i class="material-icons left">free_breakfast</i>Breakfast</a>
                </div>
                <div class="col l2 s12">
                    <a onclick="showCategory('lunch')" class="btn green accent-4 cat_link center-align"><i class="material-icons left">lunch_dining</i>Lunch</a>
                </div>
                <div class="col l2 s12">
                    <a onclick="showCategory('dinner')" class="btn green accent-4 cat_link">
                        <i class="material-icons left">dinner_dining</i>Dinner
                    </a>
                </div>
                <div class="col l1"></div>
                <div class="col l2 s12">
                    <a onclick="showCategory('drink')" class="btn green accent-4 cat_link">
                        <i class="material-icons left">wine_bar</i>Drinks
                    </a>
                </div>
            </div>
        </div>
        <!-- Dessert -->
        <div id="dessert" class="container hidden categories">
            <div class="divider div_menu"></div>
            <h4 class="bold_text">Dessert</h4><br>
            <div class="row">
                <?php
                foreach ($desserts as $dessert) { ?>
                <div class="col s12 m6 l4">
                    <div class="card menu hoverable card_index">
                        <div class="card-image">
                            <img src="./uploads/<?php echo $dessert['image_name']; ?>" alt="" >
                        </div>
                        <div class="card-content content">
                            <span class="meal_font black-text"><?php echo $dessert['food_name']; ?></span>
                            <p>₦<?php echo number_format($dessert['food_price'], 2); ?></p>
                            <div>
                                <a href="" class="favorite btn-floating halfway-fab waves-effect waves-light green accent-4"><i class="material-icons prefix" id="icon">favorite_outline</i></a>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="order.php?id=<?php echo $dessert['food_id'] ?>" class="green-text text-darken-3 order_link"><i class="material-icons left">dinner_dining</i>Order now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Breakfast -->
        <div id="breakfast" class="container categories ">
            <div class="divider div_menu"></div>
            <h4 class="bold_text">Breakfast</h4><br>
            <div class="row">
                <?php foreach ($breakfasts as $breakfast) { ?>
                <div class="col s12 m6 l4">
                    <div class="card menu hoverable card_index">
                        <div class="card-image">
                            <img src="./uploads/<?php echo $breakfast['image_name']; ?>" alt="">
                        </div>
                        <div class="card-content content">
                            <span class="meal_font black-text"><?php echo $breakfast['food_name']; ?></span>
                            <p>₦<?php echo number_format($breakfast['food_price'], 2); ?></p>
                            <div>
                                <a href="" class="favorite btn-floating halfway-fab waves-effect waves-light green accent-4"><i class="material-icons prefix far" id="icon" onclick="like()">favorite_outline</i></a>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="order.php?id=<?php echo $breakfast['food_id'] ?>" class="green-text text-darken-3 order_link"><i class="material-icons left">dinner_dining</i>Order now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Lunch -->
        <div id="lunch" class="container hidden categories">
            <div class="divider div_menu"></div>
            <h4 class="bold_text">Lunch</h4><br>
            <div class="row">
                <?php
                foreach ($lunchs as $lunch) { ?>
                <div class="col s12 m6 l4">
                    <div class="card menu hoverable card_index">
                        <div class="card-image">
                            <img src="./uploads/<?php echo $lunch['image_name']; ?>" alt="" >
                        </div>
                        <div class="card-content content">
                            <span class="meal_font black-text"><?php echo $lunch['food_name']; ?></span>
                            <p>₦<?php echo number_format($lunch['food_price'], 2); ?></p>
                            <div>
                                <a href="" class="favorite btn-floating halfway-fab waves-effect waves-light green accent-4"><i class="material-icons prefix" id="icon">favorite_outline</i></a>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="order.php?id=<?php echo $lunch['food_id'] ?>" class="green-text text-darken-3 order_link"><i class="material-icons left">dinner_dining</i>Order now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Dinner -->
        <div id="dinner" class="container hidden categories">
            <div class="divider div_menu"></div>
            <h4 class="bold_text">Dinner</h4><br>
            <div class="row">
                <?php
                foreach ($dinners as $dinner) { ?>
                <div class="col s12 m6 l4">
                    <div class="card menu hoverable card_index">
                        <div class="card-image">
                            <img src="./uploads/<?php echo $dinner['image_name']; ?>" alt="" >
                        </div>
                        <div class="card-content content">
                            <span class="meal_font black-text"><?php echo $dinner['food_name']; ?></span>
                            <p>₦<?php echo number_format($dinner['food_price'], 2); ?></p>
                            <div>
                                <a href="" class="favorite btn-floating halfway-fab waves-effect waves-light green accent-4"><i class="material-icons prefix" id="icon">favorite_outline</i></a>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="order.php?id=<?php echo $dinner['food_id'] ?>" class="green-text text-darken-3 order_link"><i class="material-icons left">dinner_dining</i>Order now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Drinks -->
        <div id="drink" class="container hidden categories">
            <div class="divider div_menu"></div>
            <h4 class="bold_text">Drinks</h4><br>
            <div class="row">
                <?php
                foreach ($drinks as $drink) { ?>
                <div class="col s12 m6 l4">
                    <div class="card menu hoverable card_index">
                        <div class="card-image">
                            <img src="./uploads/<?php echo $drink['image_name']; ?>" alt="" >
                        </div>
                        <div class="card-content content">
                            <span class="meal_font black-text"><?php echo $drink['food_name']; ?></span>
                            <p><?php echo '₦' . number_format($drink['food_price'], 2); ?></p>
                            <div>
                                <a href="" class="favorite btn-floating halfway-fab waves-effect waves-light green accent-4"><i class="material-icons prefix" id="icon">favorite_outline</i></a>
                            </div>
                        </div>
                        <div class="card-action">
                            <a href="order.php?id=<?php echo $drink['food_id'] ?>" class="green-text text-darken-3 order_link"><i class="material-icons left">dinner_dining</i>Order now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
    <script>
        function showCategory(category) {
            // Hide all categories first
            let categories = document.querySelectorAll('.container.categories');
            categories.forEach(function(cat) {
                cat.classList.add('hidden');
            });
            // Show the selected category
            document.getElementById(category).classList.remove('hidden');
        }
        // var btn = document.getElementById("icon");
        // function like() {
        //     if(btn.classList.contains("far")){
        //         btn.classList.remove("far");
        //         btn.classList.add("fas");
        //     }else{
        //         btn.classList.remove("fas");
        //         btn.classList.remove("far");
        //     }
        // }
    </script>
</body>
<?php
include ('./templates/footer.php');
?>