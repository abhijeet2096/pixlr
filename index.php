
<?php
if (isset($_GET['v'])) {
    $wrong = $_GET['v'];
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/fav6icon.ico" type="image/x-icon" />
        <title>Pixelr</title>
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


        <!-- Font Awesome -->

        <!-- Template styles -->
        <style rel="stylesheet">
            /* TEMPLATE STYLES */
            /* Necessary for full page carousel*/
            .mdl-layout {
                align-items: center;
                justify-content: center;
            }
            .mdl-layout__content {
                padding: 24px;
                flex: none;
            }


            html,
            body,
            .view {
                height: 100%;
            }
            /* Navigation*/

            .navbar {
                background-color: transparent;
            }

            .scrolling-navbar {
                -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
                -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
                transition: background .5s ease-in-out, padding .5s ease-in-out;
            }

            .top-nav-collapse {
                background-color: #212121;
            }

            footer.page-footer {
                background-color: #212121;
                margin-top: 0;
            }

            @media only screen and (max-width: 768px) {
                .navbar {
                    background-color: #212121;
                }
            }
            /* Carousel*/

            .carousel,
            .carousel-item,
            .active {
                height: 100%;
            }

            .carousel-inner {
                height: 100%;
            }

            .carousel-item:nth-child(1) {
                background-image: url("http://mdbootstrap.com/images/regular/nature/img%20(54).jpg");
                background-repeat: no-repeat;
                background-size: cover;
            }

            .carousel-item:nth-child(2) {
                background-image: url("http://mdbootstrap.com/images/regular/nature/img%20(4).jpg");

                background-size: cover;
            }

            .carousel-item:nth-child(3) {
                background-image: url("http://mdbootstrap.com/images/regular/nature/img%20(3).jpg");

                background-size: cover;
            }
            /*Caption*/

            .flex-center {
                color: #fff;
            }

            @media (min-width: 776px) {
                .carousel .view ul li {
                    display: inline;
                }
                .carousel .view .full-bg-img ul li .flex-item {
                    margin-bottom: 1.5rem;
                }
            }
        </style>

    </head>

    <body>


        <!--Navbar-->
        <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

            <!-- Collapse button-->
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
                <i class="fa fa-bars"></i>
            </button>

            <div class="container">

                <!--Collapse content-->
                <div class="collapse navbar-toggleable-xs" id="collapseEx">
                    <!--Navbar Brand-->
                    <a style="text-align = centre" class="navbar-brand" href="home.php">Pixelr</a>

                </div>
                <!--/.Collapse content-->

            </div>

        </nav>
        <!--/.Navbar-->

        <!--Carousel Wrapper-->
        <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1" data-slide-to="1"></li>
                <li data-target="#carousel-example-1" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">
                    <!--Mask-->
                    <div class="view hm-black-light">
                        <div class="full-bg-img flex-center">
                            <ul class="animated fadeInUp col-md-12">
                                <li>
                                    <h1 class="h1-responsive flex-item">Welcome Creative Minds</h1>
                                <li>
                                    <h3 class="flex-item" class="h1-responsive">Get Started</h3>
                                </li>

                                <li style=" align:centre;">
                                    <a  class="btn btn-default btn-lg flex-item show-modal">Login</a>
                                </li>
                                <li style=" align:centre;">
                                    <p>or</p>
                                </li>
                                <li style=" align:centre;">
                                    <p  >&nbsp;</p>
                                </li>
                                <li style=" align:centre;">

                                    <a  class="btn btn-primary btn-lg flex-item  show-modal2">Signup!</a>
                                </li>
                                <li>
                                    <a  href="home.php" ><p class="flex-item" class="h1-responsive">skip</p></a> 
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--/.Mask-->
                </div>
                <!--/.First slide-->

                <!--Second slide -->
                <div class="carousel-item">
                    <!--Mask-->
                    <div class="view hm-black-light">
                        <div class="full-bg-img flex-center">
                            <ul class="animated fadeInUp col-md-12">
                                <li>
                                    <h1 class="flex-item" class="h1-responsive">Become a Member</h1>
                                </li>
                                <li style=" align:centre;">
                                    <a  class="btn btn-default btn-lg flex-item show-modal1">Login</a>
                                </li>
                                <li style=" align:centre;">
                                    <p  >or</p>
                                </li>
                                <li style=" align:centre;">
                                    <p  >&nbsp;</p>
                                </li>
                                <li style=" align:centre;">
                                    <a  class="btn btn-primary btn-lg flex-item show-modal3">Signup!</a>
                                </li>
                                <li>
                                    <a  href="home.php" ><p class="flex-item" class="h1-responsive">skip</p></a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--/.Mask-->
                </div>
                <!--/.Second slide -->

                <!--Third slide-->
                <div class="carousel-item">
                    <!--Mask-->
                    <div class="view hm-black-light">
                        <div class="full-bg-img flex-center">
                            <ul class="animated fadeInUp col-md-12">
                                <li>
                                    <h1 class="h1-responsive">Its a website to showcase one's</h1>
                                    <h1 class="h1-responsive"> photography to the world</h1>
                                </li>
                                <li style=" align:centre;">
                                    <p  >&nbsp;</p>
                                </li>
                                <li>
                                    <h3 class="flex-item" class="h1-responsive">Explore</h3>
                                </li>
                                <li>
                                    <a  href="http://localhost/pixlr/home.php" class="btn btn-primary btn-lg">Home</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!--/.Mask-->
                </div>
                <!--/.Third slide-->
            </div>
            <!--/.Slides-->

            <!--Controls-->
            <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>


        <dialog class="mdl-dialog " style="width:30%;">
            <div class="mdl-dialog__content">
                <h1>Pixlr :  Login</h1>

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
                            <button class="mdl-button bg-primary mdl-js-button mdl-js-ripple-effect" name="Login" value="Login">Login</button>
                            <button href="#!" class="mdl-button bg-danger  mdl-js-button mdl-js-ripple-effect" style="float:right;">Forgot Password?</button>
                        </form>
                    </div>
                </div>
                <div class="mdl-card__actions ">



                </div>


            </div>

            <div class="mdl-dialog__actions mdl-dialog__actions--full-width">

                <button type="button" class="mdl-button close">Close</button>
            </div>
        </dialog>
        <script>
            var dialog = document.querySelector('dialog');
            var showModalButton1 = document.querySelector('.show-modal1');
            var showModalButton = document.querySelector('.show-modal');
            if (!dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
            }
            showModalButton1.addEventListener('click', function () {
                dialog.showModal();
            });
            showModalButton.addEventListener('click', function () {
                dialog.showModal();
            });
            dialog.querySelector('.close').addEventListener('click', function () {
                dialog.close();
            });
        </script>



        <dialog class="mdl-dialog dialog1" style="width:30%;">
            <div class="mdl-dialog__content">
                <h1>Pixlr :  Signup</h1>

                <div class="mdl-card__supporting-text">
                    <div class="container">
                        <form method="POST" action="q3.php">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text"  name="fname" id="sample1" autocomplete="off" required="yes" >
                                <label class="mdl-textfield__label" for="sample1">First Name...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text"  name="lname" id="sample2" autocomplete="off" > 
                                <label class="mdl-textfield__label" for="sample2">Last Name...</label>

                            </div> 
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                                <input class="mdl-textfield__input" type="email" name="email" id="sample10" autocomplete="off" required="yes">
                                <label class="mdl-textfield__label" for="sample10">Email...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number"  name="age" id="sample5" autocomplete="off" max="75" min="15" >
                                <label class="mdl-textfield__label" for="sample5" >Age...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="tel"  name="contact" id="sample6" pattern="^\d{10}$" autocomplete="off" required="yes">
                                <label class="mdl-textfield__label" for="sample6" >Phone...</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="sample11" autocomplete="off"  name="password" required="yes">
                                <label class="mdl-textfield__label" for="sample11" >Password....</label>
                            </div><br>


                            <button class="mdl-button bg-primary mdl-js-button mdl-js-ripple-effect" name="signup" value="signup">Signup</button>

                        </form>
                    </div>
                </div>



            </div>
        </div>
        <div class="mdl-dialog__actions mdl-dialog__actions--full-width">

            <button type="button" class="mdl-button close">Close</button>
        </div>
    </dialog>
    <script>
        var dialog1 = document.querySelector('.dialog1');
        var showModalButton2 = document.querySelector('.show-modal2');
        var showModalButton3 = document.querySelector('.show-modal3');
        if (!dialog1.showModal) {
            dialog1Polyfill.registerDialog(dialog);
        }
        showModalButton2.addEventListener('click', function () {
            dialog1.showModal();
        });
        showModalButton3.addEventListener('click', function () {
            dialog1.showModal();
        });
        dialog1.querySelector('.close').addEventListener('click', function () {
            dialog1.close();
        });
    </script>


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js">< /

    <!-- Bootstrap tooltips -->script>

<!-- MDB core JavaScript -->
                < script type = "text/javascript" src = "js/mdb.min.js" ></script>
    <script type="text/javascript">
                $(document).ready(function () {
            $('.carousel').carousel({
                interval: 1800
            });

            $('.carousel').carousel('cycle');
        });
    </script> 

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

</html>