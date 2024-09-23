<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recipes</title>
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
        .name{
            font-weight: bolder;
        }
        .more_details{
            margin-bottom: 20px !important;
        }
        .footer{
            margin-bottom: 20px !important;
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
        color: #0D47A1 !important;
        }
        .d_container{
            /* background-color: red; */
            padding-top: 10% !important;
        }
        
        .d_link{
        color: black;
        font-size: 20px;
        width: 300px !important;
        text-align: left ;
        background-color: white;
        text-transform: none;
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12), 0 1px 5px 0 rgba(0, 0, 0, 0.2);
        }
        .d_link:hover{
            box-shadow: 10px ;
            background-color: #8d6e63;
            color: #fff;
            transition: .2s ease-out;
        }
        .logout{
            width: 300px;
            /* background-color: red; */
            text-align: center;
            background-color: #fff !important;
            /* cursor: auto !important; */
        }
        .logoutBtn:hover{
            font-weight: bold !important;
            transition: .2s ease-out;
        }
        .more{
            background-color: #0D47A1;
            margin-top: 20px;
        }
        .more:hover{
            background-color: #0D47A1;
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
        .auth_link{
            color: green;

        }
        .auth_link:hover{
            font-weight: bold;
            color: green;
            text-decoration: underline;
            transition: ease-out.2s;
        }

    </style>
</head>
<body>
    <header>
        <nav class="white z-depth-0">
            <div class="container">
                <a href="index.php" class="brand-logo black-text"><em>Föödys</em></a>
                <ul class="right">
                    <li><a href="index.php" class="black-text"><i class="material-icons left">home</i>Home</a></li>
                    <li><a href="insert_order.php" class="black-text">Insert Order</a></li>
                    <li><a href="login.php" class="black-text">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <div class="divider"></div>
    </header>
    <script src="./assets/Js/jqueryv3.4.1.js"></script>
    <script src="./assets/Js/materialize.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        })
    </script>
</body>
</html>