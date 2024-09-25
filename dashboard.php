<?php
include('./templates/nav.php');
include('./templates/connect.php');

// session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: login.php');
    exit();
}

?>

<main>
    <div class="row">
        <div class="col l4">
            <div class="container d_container">
                <ul class="d_ul">
                    <li class="d_li"><a class="btn d_link" href=""><i class="material-icons left">person_outline</i>My Föödys account</a></li>
                    <li class="d_li"><a class="btn d_link" href=""><i class="material-icons left">menu_book</i>Orders placed</a></li>
                    <li class="d_li"><a class="btn d_link" href=""><i class="material-icons left">contacts</i>Contact us</a></li>
                    <li class="d_li"><a class="btn d_link" href=""><i class="material-icons left">person</i>About us</a></li>
                    <form action="./dashboard.php" method="post">
                        <div class="logout center">
                            <input type="submit" name="logout" value="logout" id="" class="red btn white-text darken-2">
                        </div>

                    </form>
                </ul>
            </div>
        </div>
        <div class="col l8 account">
            <div class="container account_container left">
                <h5 class="">My Föödys Account</h5>
                <div class="divider"></div>
                
            </div>
        </div>
    </div>
</main>


<?php
include('./templates/footer.php');
?>
