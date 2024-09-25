<?php 
include('./templates/nav.php');
include('./templates/connect.php');


if ($_SESSION['logout']){
    // session_unset();
    session_destroy();
}
?>

<?php 
include('./templates/footer.php');

?>