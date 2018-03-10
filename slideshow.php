<?php
if (isset($_GET['v'])) {
    $wrong = $_GET['v'];
}
?>

<?php
session_start();
$con = mysqli_connect('localhost', 'root', '') or die();
$db = mysqli_select_db($con, 'pixlr') or die();

//$id = $_GET['new_id_view'];

$id = $_SESSION['new_id'];
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/fav6icon.ico" type="image/x-icon" />
        <title>Pixelr : SlideShow </title>

        <!-- Font Awesome -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <link rel="stylesheet" href="css/example.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/indigo.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/material.min.css">
        <link rel="stylesheet" href="css/material.css">
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">

        <style>
            div.body {
                -webkit-font-smoothing: antialiased;
                font: normal 15px/1.5 "Helvetica Neue", Helvetica, Arial, sans-serif;
                color: #232525;
                padding-top:70px;
            }

            #slides {
                display: none
            }

            #slides .slidesjs-navigation {
                margin-top:5px;
            }

            a.slidesjs-next,
            a.slidesjs-previous,
            a.slidesjs-play,
            a.slidesjs-stop {
                background-image: url(img/btns-next-prev.png);
                background-repeat: no-repeat;
                display:block;
                width:12px;
                height:18px;
                overflow: hidden;
                text-indent: -9999px;
                float: left;
                margin-right:5px;
            }

            a.slidesjs-next {
                margin-right:10px;
                background-position: -12px 0;
            }

            a:hover.slidesjs-next {
                background-position: -12px -18px;
            }

            a.slidesjs-previous {
                background-position: 0 0;
            }

            a:hover.slidesjs-previous {
                background-position: 0 -18px;
            }

            a.slidesjs-play {
                width:15px;
                background-position: -25px 0;
            }

            a:hover.slidesjs-play {
                background-position: -25px -18px;
            }

            a.slidesjs-stop {
                width:18px;
                background-position: -41px 0;
            }

            a:hover.slidesjs-stop {
                background-position: -41px -18px;
            }

            .slidesjs-pagination {
                margin: 7px 0 0;
                float: right;
                list-style: none;
            }

            .slidesjs-pagination li {
                float: left;
                margin: 0 1px;
            }

            .slidesjs-pagination li a {
                display: block;
                width: 13px;
                height: 0;
                padding-top: 13px;
                background-image: url(img/pagination.png);
                background-position: 0 0;
                float: left;
                overflow: hidden;
            }

            .slidesjs-pagination li a.active,
            .slidesjs-pagination li a:hover.active {
                background-position: 0 -13px
            }

            .slidesjs-pagination li a:hover {
                background-position: 0 -26px
            }

            #slides a:link,
            #slides a:visited {
                color: #333
            }

            #slides a:hover,
            #slides a:active {
                color: #9e2020
            }

            .navbar {
                overflow: hidden
            }
        </style>



        <style>
            #slides {
                display: none
            }

            .container {
                margin: 0 auto
            }

            /* For tablets & smart phones */
            @media (max-width: 767px) {
                body {
                    padding-left: 20px;
                    padding-right: 20px;
                }
                .container {
                    width: auto
                }
            }

            /* For smartphones */
            @media (max-width: 480px) {
                .container {
                    width: auto
                }
            }

            /* For smaller displays like laptops */
            @media (min-width: 768px) and (max-width: 979px) {
                .container {
                    width: 724px
                }
            }

            /* For larger displays */
            @media (min-width: 1200px) {
                .container {
                    width: 1170px
                }
            }

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
        </style>



    </head>

    <body >
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header ">
            <header class="mdl-layout__header elegant-color">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Pixlr</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a style = "position: absolute;left:140px;" class="mdl-navigation__link" href="home.php">Home</a>

                        <a class = "mdl-navigation__link active" href="#!" style = "position: absolute;left:227px">SlideShow</a>
                        <a class = "mdl-navigation__link" href="admint.php" style = "position: absolute;left:340px;">Member</a>
                        <?php
                        if (isset($_SESSION['new_id'])) {
                            echo'
                        <a class="mdl-navigation__link show-modal" href="#!" id=tt3  style="position:relative;margin:300px;outline: none;" >
                            <img   style="outline: none;align:left;display: inline;" width="38px" height="38px" src="/photo1/images/upload.png" class="img-fluid" alt=""> Upload
                        </a>';
                        } else
                            echo'
                        <a class="mdl-navigation__link disable" href="#!"  id=tt3  style="position:relative;margin-right:395px;outline: none;" >
                            <img   style="outline: none;align:left;display: inline;" width="38px" height="38px" src="/photo1/images/upload.png" class="img-fluid" alt=""> Upload
                        </a>';
                        ?>

                        <div class="mdl-tooltip" data-mdl-for="tt3">Upload Image</div>
                        <?php
                        if (isset($_SESSION['new_id'])) {
                            echo '
                        <form  action="search.php" method="POST">
                            <div  style="align:left;display: inline;padding-right: 5px;" class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="sample11">
                                    <i class="material-icons">search</i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="sample11"  name="searchBox" placeholder="Enter name">
                                </div>
                            </div>
                         </form>';
                        } else
                            echo'
                            <form  action="search.php" method="POST">
                            <div  style="align:left;display: inline;padding-right: 5px;" class="mdl-textfield mdl-js-textfield mdl-textfield--expandable disable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="sample11">
                                    <i class="material-icons">search</i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="sample11"  name="searchBox" placeholder="Enter name">
                                </div>
                            </div>
                         </form>

                        ';
                        ?>
                        <a  class="mdl-navigation__link" href="profile.php?new_id_view=<?php echo $id; ?>"  >

                            <?php
                            if (isset($_SESSION['new_id']))
                                echo'<a class="mdl-navigation__link" href="profile.php?new_id_view=' . $id . '">Profile</a>';
                            ?>

                        </a>



                        <?php
                        $sql = "SELECT * FROM member WHERE mem_id = '$id'";
                        $sth = mysqli_query($con, $sql);
                        $result = mysqli_fetch_array($sth);



                        if ($result['profile_image'] != NULL)
                            echo'  <a  class="mdl-navigation__link" > <div  class="card" style=" outline:none;top:5px;background-color: white;width: 43px; height: 43px; border-radius: 100%;">
                                <div  class="mask" style="border-radius : 100%;"></div>
                                <div class="view overlay hm-white-slight">
                                         <img  id=tt1 style="width:43px; height: 43px; border-radius: 100%;padding: 3px;outline:none;" src="data:image/jpeg;base64,' . base64_encode($result['profile_image']) . '"  class="img-fluid"  alt="">
                                   </div> </div></a> ';
                        else
                            echo'    <a  class="mdl-navigation__link " > <img id=tt10 style="outline: none;" width="43px" height="43px" src="ic_account_circle_white_48dp/ic_account_circle_white_48dp/web/ic_account_circle_white_48dp_1x.png" class="img-fluid" alt=""></a>';
                        ?>

                        </a>
                        <div class="mdl-tooltip" data-mdl-for="tt1">Profile</div> 
                        <div class="mdl-tooltip" data-mdl-for="tt10">Login to create profile</div> 

                        <?php
                        if (isset($_SESSION['new_id'])) {
                            //header("Location: /"); // redirects them to homepage
                            // exit; // for good measure
                            echo('<a class="mdl-navigation__link" href=" logout.php">Log out</a>');
                        } else {
                            echo('<a class="mdl-navigation__link show-modal1" href="#!">Login</a>
                            <a class="mdl-navigation__link show-modal3" href="#!">SignUp</a>');
                        }
                        ?>


                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">Pixlr</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link "  href="home.php">Home</a>
                    <a class = "mdl-navigation__link active1" href="#!" style="color:white;" style = "position: absolute;left:200px;">SlideShow</a>

                    <a class = "mdl-navigation__link" href="admint.php" style = "position: absolute;left:414px;">Member</a>
                    <?php
                    if (isset($_SESSION['new_id'])) {
                        //header("Location: /"); // redirects them to homepage
                        // exit; // for good measure
                        echo('<a class="mdl-navigation__link" href=" logout.php">Log out</a>');
                    } else {
                        echo('<a class="mdl-navigation__link " id="sm2" href="#!">Login</a>
                            <a class="mdl-navigation__link " id="sm4" href="#!">SignUp</a>');
                    }
                    ?>


                    <?php
                    if (isset($_SESSION['new_id'])) {
                        echo'
                         <a class="mdl-navigation__link" href="profile.php?new_id_view==' . $id . '">Profile</a>'
                        ;
                    }
                    ?>
                    <div class="mdl-tooltip" data-mdl-for="tt2">Profile</div>
                    <?php
                    if (isset($_SESSION['new_id'])) {
                        echo '
                        <form  action="search.php" method="POST">
                            <div  style="align:left;display: inline;padding-right: 5px;" class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="sample12">
                                    <i class="material-icons">search</i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="sample12"  name="searchBox" placeholder="Enter name">
                                </div>
                            </div>
                         </form>';
                    } else
                        echo'
                            <form  action="search.php" method="POST">
                            <div  style="align:left;display: inline;padding-right: 5px;" class="mdl-textfield mdl-js-textfield mdl-textfield--expandable disable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="sample12">
                                    <i class="material-icons">search</i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="sample12"  name="searchBox" placeholder="Enter name">
                                </div>
                            </div>
                         </form>

                        ';
                    ?>

                </nav>
            </div>



            <div class="container body">
                <div id="slides">
                    <?php
                   
                    $sql = "SELECT * FROM image ORDER BY img_id DESC";


                    $result = mysqli_query($con, $sql) or die(mysqli_error($db));
                    while ($row = mysqli_fetch_array($result)) {

                        /*$img_id = $row['img_id'];
                        $img_id_with_1 = $img_id;
                        $mem_id_temp_13 = $row['mem_id'];
                        $sql1 = "SELECT * FROM member where mem_id='$mem_id_temp_13'";

                        $result1 = mysqli_query($con, $sql1) or die(mysqli_error($db));
                        $row1 = mysqli_fetch_array($result1);

                        $profileimage = $row1['profile_image'];
                        echo $fullname = $row1['fname'] . " " . $row1['lname'];*/
                        $image_t = $row['path'];
                        echo '

                    <img src="'.$image_t.'" >
                   ';
                    }
                        ?>


                    </div>
                </div>
                <?php
                mysqli_close($con2);
                mysqli_close($con);
                ?>




            <footer class="mdl-mini-footer elegant-color-dark" style="width:100%;margin-top: 20%;" >
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Pixelr</div>
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href='#!'>Contact</a></li>
                    </ul>
                </div>
            </footer>

            <script src = "http://code.jquery.com/jquery-1.9.1.min.js"></script>

            <script src="js/jquery.slides.min.js"></script>

            <script>
                $(function () {
                    $('#slides').slidesjs({
                        width: 940,
                        height: 528,
                        play: {
                            active: true,
                            auto: true,
                            interval: 4000,
                            swap: true
                        }
                    });
                });



            </script>
            <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
            <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
            <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
        </div>


    </body>

</html>