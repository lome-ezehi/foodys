<?php 


include("./templates/navbar.php");
include("./templates/connect.php");

$name = "";
$phone_number = "";
$email = "";
$description = "";

if (isset($_POST['submit'])) {
    $name =  $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    
    // insert query, to insert the data into the database
    $insert_query = "INSERT INTO `custom_pieces`(`name`, `phone_number`, `email`, `description`) VALUES ( '$name', '$phone_number', '$email', '$description')";

    // send query to server
    $send_query = mysqli_query($db_connect, $insert_query);   

    if ($send_query) {
    } else {
        echo 'error: ' . mysqli_error($db_connect);
    }
}

$user_id= "";
$error_msg = "";

if (isset($_GET['user_id'])) {
    // assign receipe id to the local variable
    $user_id = $_GET['user_id'];

    // fetch data from the table using row id
    $fetch_query = "SELECT * FROM `login_tb` WHERE `user_id` = $user_id";

    // send query to server
    $send_fetch_query = mysqli_query($db_connect, $fetch_query);

    // store received data in an associative array
    $users = mysqli_fetch_assoc($send_fetch_query);

    // print_r($users);

    if (!$users) {
        $error_msg = "user not found";
    }

} else {
    $error_msg = "No user logged in !";
}
?>

    <style>
        .slider{
            margin-top: 20px;
        }

        main div div.l2{
            margin-top: 30px;
        }

        .bold-text{
            font-weight: bold;
        }

        .section-text{
            margin-left: 20px;
        }

        .category{
            padding-left: 50px;
        }
    </style>

    <main class="playwrite-de-grund-font">
        <!-- Desktop navbar and carousel-->
        <div class="row container hide-on-med-and-down">
            <div class="col l2 category ">
                <div class="blush-pink divider"></div>
                <h5 class="charcoal center">Category</h5> <br>
                <div class="blush-pink divider"></div>
                <ul class="category">
                    <li>
                        <a href="bracelets.php?product_type=bracelet" class="warm-gray">Bracelets</a>
                    </li> <br>
                    <li>
                        <a href="earrings.php?product_type=earring" class="warm-gray">Earrings</a>
                    </li><br>
                    <li>
                        <a href="rings.php?product_type=ring" class="warm-gray">Rings</a>
                    </li><br>
                    <li>
                        <a href="necklaces.php?product_type=necklaces" class="warm-gray">Necklaces</a>
                    </li><br>
                    <li>
                        <a href="headbands.php?product_type=headbands" class="warm-gray">Headbands</a>
                    </li><br>
                    <li>
                        <a href="hairclips.php?product_type=hairclips" class="warm-gray">Hair Clips</a>
                    </li><br>
                </ul>
                <div class="blush-pink divider"></div>
            </div>
            <div class="col l10 push-l1 ">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="./img/Pictures_Jasper_Bracelet.jpeg" alt="" class="responsive-img">
                            <div class="caption center-align">
                                <h3>Most Popular items</h3>
                            </div>
                        </li>
                        <li>
                            <img src="./img/Clear_Quartz_Beaded_Gemstone_Bracelet.jpeg" alt="" class="responsive-img">
                            <div class="caption center-align">
                                <h3>Most Popular items</h3>
                            </div>
                        </li>
                        <li>
                            <img src="./img/Orange_Flower_Bracelet.jpeg" alt="" class="responsive-img">
                            <div class="caption center-align">
                                <h3>Most Popular items</h3>
                            </div>
                        </li>
                        <li>
                            <img src="./img/Green_and_Blue_Earthy_Bracelet_with _Lotus_Flower_Charm.jpeg" alt="" class="responsive-img">
                            <div class="caption center-align">
                                <h3>Most Popular items</h3>
                            </div>
                        </li>
                        <li>
                            <img src="./img/Green_Beaded_Earthy_Sunflower _Bracelet.jpeg" alt="" class="responsive-img">
                            <div class="caption center-align">
                                <h3>Most Popular items</h3>
                            </div>
                        </li>
                        <li>
                            <img src="./img/Poppin_Pink_Beaded_Bracelet.jpeg" alt="" class="responsive-img">
                            <div class="caption center-align">
                                <h3>Most Popular items</h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Mobile carousel -->
        <div class="carousel carousel-slider hide-on-large-only">
            <a class="carousel-item" href="#one!"><img src="./img/Pictures_Jasper_Bracelet.jpeg"></a>
            <a class="carousel-item" href="#two!"><img src="./img/Clear_Quartz_Beaded_Gemstone_Bracelet.jpeg"></a>
            <a class="carousel-item" href="#three!"><img src="./img/Orange_Flower_Bracelet.jpeg"></a>
            <a class="carousel-item" href="#four!"><img src="./img/Green_and_Blue_Earthy_Bracelet_with _Lotus_Flower_Charm.jpeg"></a>
            <a class="carousel-item" href="#five!"><img src="./img/Green_Beaded_Earthy_Sunflower _Bracelet.jpeg"></a>
            <a class="carousel-item" href="#six!"><img src="./img/Poppin_Pink_Beaded_Bracelet.jpeg"></a>
        </div>

        <!-- Deal of the day -->
<br> <br>
        <div class="container">
            <h4 class="charcoal bold-text">Deals Of The Day</h4>
            <div class="divider"></div>
            <div class="row">
                <div class="col l4 s6">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="./img/blue-bracelet.webp" alt="" class="responsive-img">
                        </div>
                        <div class="card-content">
                        <p class="warm-gray">Marble design teal bracelet without charms and with </p>
                            <h6 class="charcoal bold-text left">N 1500</h6> <br>
                        </div>
                        <div class="card-action">
                        <a href="bracelets.php" class="blush-pink-text bold-text center">Order Now</a>
                        </div>
                    </div>
                </div>
            <div class="col l4 s6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/pink-bracelet-2.jpg" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class="warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class="charcoal bold-text left">N 1500</h6> <br>
                    </div>
                    <div class="card-action">
                        <a href="view_product.php?product_id=<?php echo $product['product_id']; ?>" class="blush-pink-text bold-text center">Order Now</a>
                        </div>
                </div>
            </div>
            <div class="col l4 hide-on-med-and-down">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/multicolor-bracelet-2.jpg" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class="warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class="charcoal bold-text left">N 1500</h6> <br>
                    </div>
                    <div class="card-action">
                        <a class=" blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        </div>

        <!-- New Arrivals -->
        <div class="container">
            <h1 class="blush-pink-text bold-text center">New Arrivals</h1>
        <div class="row center">
            <div class="col l4 hide-on-med-and-down">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/blue-bracelet-3.webp" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class=" warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class="Charcoal bold-text left">N 1500</h6> <br>
                        
                    </div>
                    <div class="card-action">
                        <a class=" blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col l4 s6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/pink-bracelet-3.jpg" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class=" warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class=" charcoal bold-text left">N 1500</h6> <br>
                    </div>
                    <div class="card-action">
                        <a class=" blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col l4 s6">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="./img/multicolor-bracelet.avif" alt="" class="responsive-img">
                    </div>
                    <div class="card-content">
                    <p class="warm-gray">Marble design teal bracelet without charms and with </p>
                        <h6 class=" charcoal bold-text left">N 1500</h6> <br>
                    </div>
                    <div class="card-action">
                        <a class="blush-pink-text bold-text" href="">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- custom section -->
        <div class="container">
            <div class="row">
                <div class="col s12 l6">
                    <h3 class=" blush-pink-text">Want to have a custom piece made?</h3>
                    <p class=" warm-gray flow-text">Click the button below to reach out to us 👇</p>
                    <a href="" class= "hide-on-med-and-down blush-pink creamy-white-text btn btn-large left hoverable">Email us at<i class="right material-icons">email</i></a>
                    <a class= "hide-on-large-only right blush-pink creamy-white-text btn btn-large left hoverable">Call us Now<i class="right material-icons">phone</i></a>
                </div>
                <div class="col s12 l6">
                    <form action="index.php" method="post">
                        <div class="col s12 l6 input-field">
                            <input type="text" name="name" id="name">
                            <label for="name">Your Name</label>
                        </div>
                        <div class="col s12 l6 input-field">
                            <input type="tel" name="phone_number" id="phone_number">
                            <label for="phone_number">Your Phone Number</label>
                        </div>
                        <div class="col s12 input-field">
                            <input type="email" name="email" id="email">
                            <label for="email">Enter Your Email</label>
                        </div>
                        <div class="col s12 input-field">
                            <input type="text" name="description" id="description">
                            <label for="description">The custom piece description</label>
                        </div>
                        <br>
                        <div class="center input-field">
                            <input class="btn btn-large blush-pink creamy-white-text center" type="submit" name="submit" id="submit" value="Send" >
                        </div>
                    </form> 
                </div>
            </div>
        </div>

        <!-- Customer reviews -->
        <div id="customers_session" class="container scrollspy">
        <h2 class="center blush-pink-text">What our customers say...</h2>
            <div class="row">
                <div class="col s12">
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle blush-pink">person</i>
                            <h6 class="charcoal bold-text">Ryan Kingfisher</h6>
                            <i><p class="warm-gray">"In life there will be road blocks but we will over come it. Hammock talk come soon. Let's see what chef Dee got that they don't want us to eat "</p></i> 
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle blush-pink">person</i>
                            <h6 class="charcoal bold-text">Jessica Ulman</h6>
                            <i><p class="warm-gray">"In life there will be road blocks but we will over come it. Hammock talk come soon. Let's see what chef Dee got that they don't want us to eat "</p></i> 
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle blush-pink">person</i>
                            <h6 class="charcoal bold-text">Olubenga Taiwo</h6>
                            <i><p class="warm-gray">"In life there will be road blocks but we will over come it. Hammock talk come soon. Let's see what chef Dee got that they don't want us to eat "</p></i> 
                        </li>
                    </ul>
                    <a href="review_form.php" class="btn btn-large btn-flat blush-pink left creamy-white-text">Leave a review</a>
                    <a href="reviews.php" class="btn btn-large btn-flat blush-pink right creamy-white-text">More reviews</a>
                </div>
            </div>
        </div>
    </main>
    
    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
    <script>
        $(document).ready(function(){
        $('.carousel').carousel(
        );
        $('.dropdown-trigger').dropdown();
        $('.slider').slider({
                indicators:false,
                height:400
                // interval: 15000, //The duration of the picture
                // duration: 1000 //The time interval between each picture(15secs)
            });

        });
    </script>

<?php 
    include("./templates/footer.php");
?>

</body>
</html>