
<?php
 if(isset($_GET['v'])){
$wrong=$_GET['v'];
 }

?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/fav6icon.ico" type="image/x-icon" />
        <title>Pixelr:Admin Login</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/indigo.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/material.min.css">
        <link rel="stylesheet" href="css/material.css">

        <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">

        <style rel="stylesheet">

            .disable{
                background-color: #212121;
                pointer-events: none;
                cursor: default;
            }
            .disable1{
                pointer-events: none;
                cursor: default;
            }

            .active1{
                background-color: #212121;
                color: white;
            }
            .active{
                background-color: #424242;
            }

            .mdl-navigation__link:hover{
                background-color: #282828;

            }
            .mdl-navigation__link:active{
                background-color: #212121;

            }

            .map{
                background-color: black; 
                position: relative; 
                top: -120px;
                width: 200px;
                height: 200px;

                border-style: none;
                border-radius: 100%;
                margin: 0 auto;

            }


            .mdl-card__actions > .mdl-button--icon {
                margin-right: 3px;
                margin-left: 3px;
            }

            .navbar1 {
                background-color: #424242;

            }



            @media only screen and (max-width: 768px) {
                .navbar {
                    background-color:#424242;
                }
            }
            main {
                margin-top: 3rem;
            }

            main .card {
                margin-bottom: 2rem;
            }

            @media only screen and (max-width: 768px) {
                .read-more {
                    text-align: center;
                }
            }
        </style>



    </head>

    <body style="padding:250px;background-color: #FFFDE7;">
        <div class="container">
        <div class="card" style="width:500px;height:300px;margin:0 auto;">
        <div class="mdl-card__supporting-text">
            <div class="container">
                <form method="POST" action="q3.php">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email"  name="email" id="sample3" autocomplete="off" required="yes">
                        <label class="mdl-textfield__label" for="sample3">Email...</label>
                    </div><br>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" id="sample4" autocomplete="off"  name="password" required="yes">
                        <label class="mdl-textfield__label" for="sample4" >Password....</label>

                    </div><br>
                    <button class="mdl-button bg-primary mdl-js-button mdl-js-ripple-effect" name="adm_login" value="Login">Login</button>
                   
                </form>
            </div>
        </div>
        </div>
        </div>

        <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
        <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        <?php
        $flag = "false";
        if ($wrong == $flag) {
            echo'<script> window.alert("Wrong Credentials !!!")</script>';
        }
        ?>


    </body>