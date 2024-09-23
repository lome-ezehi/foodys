<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>             
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
            /* background-color: #f4f4f4; */
        }
        .lome{
            background-color: #f4f4f4;
        }
        img{
            background-color: white;
        }
        .cat_link{
            margin: 0 20px;
            height: auto !important;
            width: auto !important;
        }
        .categories{
            padding: 30px 0;
        }
        .order_link:hover{
            color: greenyellow !important;
        }
        .card_index{
            height: 430px;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <footer class="page-footer white">
        <div class="divider"></div>
        <div class="container center-align">
            <h5 class="center-align black-text"><a href="./index.php" class="brand-logo black-text"><em>Föödys</em></a> &copy; 2024 </h5>
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
        })
    </script>
</body>
</html>