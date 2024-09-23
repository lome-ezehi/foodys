<?php
include ('./templates/connect.php');
include ('./templates/header.php');

$food_name = $food_type = $food_description = " ";
if (isset($_POST['submit'])) {
    $food_name = $_POST['food_name'];
    $food_description = $_POST['food_description'];
    $food_type = $_POST['food_type'];

    $insert_query = "INSERT INTO `foodys_tb` (`food_type`, `food_name`, `food_description`) VALUES ('$food_type', '$food_name', '$food_description') ";

    // print_r($insert_query);
    $send_query = mysqli_query($db_connect, $insert_query);
    if ($send_query) {
        header('Location: index.php');
        exit();
    }
}
?>
<body>
    <main>
        <div class="container">
            <h3 class="center-align">Insert order</h3>
            <div class="row">
                <div class="col s12 m6 l12">
                    <form action="./insert_order.php" method="post">
                        <div class="col s12 m6 l12 input-field">
                            <label for="food_name">Name of meal:</label>
                            <input type="text" name="food_name" id="food_name">
                        </div>
                        <div class="col s12 m6 l12 input-field">
                            <label for="food_description">Order Description</label>
                            <input type="text" name="food_description" id="food_description">
                        </div>
                        <div class="col s12 m6 l12">
                            <label for="food_type">Food type:</label>
                            <select name="food_type" id="food_type">
                                <option value="breakfast">Breakfast</option>
                                <option value="lunch">Lunch</option>
                                <option value="dinner">Dinner</option>
                                <option value="drink">Drinks</option>
                                <option value="dessert">Dessert</option>
                            </select>
                        </div>
                        <!-- <div class="col s12 m6 l12 input-field">
                            <label for=""></label>
                            <input type="text" name="" id="">
                        </div> -->
                        <div class="col s12 m6 l12 input-field center-align">
                            <input type="submit" name="submit" value="Submit" class="btn green lighten-2 accent-4">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
<?php
include ('./templates/footer.php');
?>