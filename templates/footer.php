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

    </style>
</head>
<body>
    <footer class="page-footer green darken-4">
        <div class="container center-align">
            <h4 class="center-align white-text">&copy; 2024 <em>Föödys</em></h4>
        </div>
    </footer>
        
    <!-- JS Scripts Below -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./assets/js/jqueryv3.4.1.js"></script>
    <script src="./assets/js/materialize.js"></script>
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