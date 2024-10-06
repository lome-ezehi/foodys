<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodys:></title>
    <link rel="stylesheet" href="./assets/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>   
        @import url('https://fonts.googleapis.com/css2?family=Coming+Soon&family=Karla:ital,wght@0,200..800;1,200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); 
        *{
        font-family: 'Karla', sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        }
        .theme{
            background-color: #f4f4f4;
        }
        .small{
            font-size: 20px;
        }
        .big{
            font-size: 30px;
        }
        .cart{
            text-align: center;
        }
        .add_cart{
            font-size: 20px;
            padding-top: 20px;
        }
        .add_cart a:hover{
            color: green !important;
        }
        .cart_img{
            text-align: center;
            padding: 20px 10px;
        }
        .dashed{
            display: inline;
            border-bottom: 2px dashed black;
        }
        .solid{
            display: inline;
            border-bottom: 2px solid;
        }
        .bold_text{
            font-weight: bold;
        }
        .name{
            font-weight: bolder;
        }
        .nav-wrapper{
            background-color: #f4f4f4 !important;
            margin: 0 20px !important;
        }
        .more_details{
            margin-bottom: 20px !important;
        }
        footer{
            background-color: #f4f4f4 !important;
        }        
        .new_wrapper{
            padding-top: 25px !important;
            padding-bottom: 50px !important;
        }
        .ed-btn{
            margin: 20px;
        }
        .type{
            font-size: 15px !important;
        }
        .r_name{
        font-size: 17px;
        font-weight: 600;
        text-decoration: underline;
        transition: ease-out .2s;
        color: #00C853 !important;
        }
        .d_container{
            padding-top: 15% !important;
        }
        .d_ul{
            width: 300px !important;
        }
        .d_li{
            width: 300px !important;
        }
        .d_link{
            color: black;
            font-size: 17px;
            width: 300px !important;
            text-align: left ;
            background-color: #f4f4f4;
            text-transform: none;
            box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }
        .d_btn{
            width: 300px;
            text-align: center;
            background-color: #fff !important;
            border-radius: 0 0 2px 2px !important;
            padding: 12px 20px;
            border: 1px solid rgba(160,160,160,0.2) !important;
            position: relative;
        }
        .d_link:hover{
            box-shadow: 10px ;
            background-color: #00C853;
            color: #fff;
            transition: .2s ease-out;
        }
        .logout{
            width: 300px;
            text-align: center;
            background-color: #fff !important;
            border-radius: 0 0 2px 2px !important;
            padding: 12px 20px;
            border: 1px solid rgba(160,160,160,0.2) !important;
            position: relative;
        }
        .logoutBtn:hover{
            color: #e57373  !important;
            transition: ease-out.2s;
            cursor: pointer;
        }
        .more{
            background-color: #00C853;
            margin-top: 20px;
        }
        .more:hover{
            background-color: #00C853;
        }
        .heading{
            text-decoration: underline;
            font-size: 60px;
            font-weight: bold;
        }
        body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }
        main{
            flex: 1 0 auto;
        }
        .image_container{
            background-color: #fff;
            height: auto !important;
            width: 200px;
            display: inline-block;
            text-align: center;
        }
        .hero h2 {
            font-size: 36px;
        }
        .hero p {
            font-size: 20px;
        }
        .underline{
            text-decoration: underline;
        }
        .featured_menu {
            text-align: center;
            padding: 50px 0px;
        }
        .landing_main{
            background-color: #f4f4f4;
        }
        .cat_link{
            width: 100%;
            height: auto;
        }
        .categories{
            padding: 30px 0;
        }
        .order_link:hover{
            color: greenyellow !important;
        }
        .favorite{
            position: absolute !important;
            top: 66%;
            left: 84%;
        }
        .meal_font{
            font-size: 20px;
            font-weight: bold;
        }
        .hidden {
            display: none;
        }
        .account{
            border: 1px solid black;
            margin-top: 80px;
            margin-bottom: 50px;
            background-color: #f4f4f4;
            width: 750px !important;
            border-radius: 5px;
        }
        .order_container{
            margin-top: 100px;
        }
        .wrapper{
            width: 80%;
            font-size: 40px;
            padding: 0 20px;
            cursor: pointer;
        }
        span.num{
            font-size: 30px;
            border-right: 2px solid rgba(0, 0, 0, 0.2);
            border-left: 2px solid rgba(0, 0, 0, 0.2);
            pointer-events: none;
        }
        .nav_link{
            transition: all.4s;
        }
        .nav_link:hover{
            background-color: transparent;
            color: #00C853 !important;
            border-bottom: 2px solid #00C853;
            height: 64px !important;
        }
        .brand_logo{
            font-size: 30px;
        }
        .center_nav{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        span.cart:hover{
            color: #fff !important;
            background-color: green;
        }
        .card_index{
            height: 480px;
        }
        .card-image img{
            background-color: #f4f4f4 !important;
            height: 300px !important;
            width: 320px !important;
        }
        .card.menu{
            width: 320px !important;
        }
        .card-content.content{
            width: 300px !important;
            height: 120px !important;
        }
        .login_container{
            margin-top: 100px !important;
            border: 2px solid rgba(0, 0, 0, 0.2);
            box-shadow: 10px 10px 15px #aaaaaa;
        }
        .signup_container{
            margin-top: 30px;
            margin-bottom: 30px;
            border: 2px solid rgba(0, 0, 0, 0.2);
            box-shadow: 10px 10px 15px #aaaaaa;
        }
        .order_btn{
            background-color: #f4f4f4;
        }
        .function_btn{
            margin: 0 20px;
        }
        .input-field input:focus {
            border-bottom: 1px solid #00C853 !important;
            box-shadow: 0 1px 0 0 #00C853 !important;
        }
        label {
            color: black !important;
            font-size: 15px !important;
        }
        .input-field .prefix.active, label.active{
            color: #00C853 !important;
        }
        .cart_container{
            padding: 20px;
            margin-top: 5%;
            border: 1px solid black;
        }
        .cart_i{
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            border: 2px solid #00C853;
        }
        .delete_cart:hover{
            background-color: transparent;
        }
        .order_card{
            border: 2px solid black;
        }
        .order_image{
            width: 400px;
            border-right: 2px solid rgba(0, 0, 0, 0.2);
            padding: 100px 0;
        }
        .divider_cart{
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .cart_food{
            margin-top: 20px;
        }
        .quantity_input{
            margin-top: 10px;
        }
        .delete_cart{
            position: relative;
            margin-top: 10px;
            border-radius: 20px;
        }
        .place_order{
            text-align: center;
        }
        .clear_btn{
            margin: 10px;
        }
        .card_image{
            border-right: 2px black solid;
            text-align: center;
            width: 400px;
            position: relative;
        }
        .card_image img{
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .order_placed{
            border: 2px solid black;
            border-radius: 5px;
        }
        .total_price{
            padding: 30px 0;
        }
        .orders_head{
            margin-top: 100px;
        }
        .text-parallel{
            position: absolute;
            left: 70%;
        }
        .green-fork{
            width: 100px;
            rotate: 90deg;
        }
        .index_btn1{
            padding-top: 15px;
        }
        .index_btn{
            padding-top: 30px;
        }
        .account_btn{
            margin: 20px 16px;
        }
    </style>
</head>
<body>
    <div class="divider"></div>
    <footer class="page-footer">
        <div class="container center-align">
            <h5 class="center-align black-text"><a href="./index.php" class="brand-logo black-text"><em>F<span class="green-text text-accent-4">öö</span>dys</em></a> &copy; 2024 </h5>
        </div>
    </footer>

    <!-- JS Scripts Below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./assets/js/jqueryv3.4.1.js"></script>
    <script src="./assets/js/materialize.js"></script>
    <script src="./assets/js/script.js"></script>
    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
            $('.slider').slider({
                height : 400,
                indicators: false,
                interval:2000
            });
            $('.dropdown-trigger').dropdown();
            $('select').formSelect();
            $('.fixed-action-btn').floatingActionButton();
            // $('.tooltipped').tooltip();
            $('.sidenav').sidenav();
            $('.parallax').parallax();
        })
    </script>
</body>
</html>