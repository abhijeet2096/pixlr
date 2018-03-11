<!DOCTYPE html>
<?php
session_start();
 $searchtext = $_POST['searchBox'];
$id = $_SESSION['new_id'];
$con = mysqli_connect('localhost', 'root', 'Jigyasha#$') or die();
$db = mysqli_select_db($con, 'pixlr') or die();
 $sql = "SELECT * FROM member WHERE fname LIKE '%$searchtext%' or lname LIKE '%$searchtext%' or email = '$searchtext' or contact LIKE '%$searchtext%' or concat_ws(' ',fname,lname) LIKE '%$searchtext%'";
$sth = mysqli_query($con, $sql);
//$result = mysqli_fetch_array($sth);
//echo $result['mem_id'];
?>



<html lang="en">
    <!--**************************************     HEAD     ***************************-->
    <head>



        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/fav6icon.ico" type="image/x-icon" />
        <title>Pixelr : Profile </title>

        <!-- Font Awesome -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="css/indigo.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/material.min.css">
        <link rel="stylesheet" href="css/material.css">

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">

        <style rel="stylesheet">
            /* Font */
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

            .img1{
                width:32px ;height:32px;
            }
            .img1 :hover{
                width:35px ;height:35px;
            }
            .button.active {
                background-image: url('/photo1/images/2000px-Love_Heart_SVG.png');

                width: 22px;
                height: 22px;
            }


            .card-img-top{
                width:200px;
                height:auto;
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
                        <?php
                        if (isset($_SESSION['new_id'])) {
                            echo'
                        <a class="mdl-navigation__link show-modal" href="#!" id=tt3  style="position:relative;margin:395px;outline: none;" >
                            <img   style="outline: none;align:left;display: inline;" width="38px" height="38px" src="/photo1/images/upload.png" class="img-fluid" alt=""> Upload
                        </a>';
                        } else
                            echo'
                        <a class="mdl-navigation__link disable" href="#!"  id=tt3  style="position:relative;margin-right:395px;outline: none;" >
                            <img   style="outline: none;align:left;display: inline;" width="38px" height="38px" src="/photo1/images/upload.png" class="img-fluid" alt=""> Upload
                        </a>';
                        ?>
                        <div class="mdl-tooltip" data-mdl-for="tt3">Upload Image</div>
                        <form  action="search.php" method="POST">
                            <div  style="align:left;display: inline;padding-right: 5px;" class="mdl-textfield mdl-js-textfield mdl-textfield--expandable active">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="sample11">
                                    <i class="material-icons">search</i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="sample11"  name="searchBox" placeholder="Enter name">
                                </div>
                            </div>
                        </form>
                        <a  class="mdl-navigation__link" href="profile.php?new_id_view=<?php echo $id; ?>"  >

                            <?php
                            if (isset($_SESSION['new_id']))
                                echo'<a class="mdl-navigation__link" href="profile.php?new_id_view=' . $id . '">Profile</a>';
                            ?>

                        </a>



                        <?php
                        $sql1 = "SELECT * FROM member WHERE mem_id = '$id'";
                        $sth1 = mysqli_query($con, $sql1);
                        $result = mysqli_fetch_array($sth1);



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
                    <a class="mdl-navigation__link active1" style="color:white;" href="home.php">Home</a>
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
                    <form  action="search.php" method="POST">
                        <div  style="display: inline;left: 33px;" class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                            <label class="mdl-button mdl-js-button mdl-button--icon" for="sample12">
                                <i class="material-icons">search</i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" id="sample12"  name="searchBox" placeholder="Enter name">
                            </div>
                        </div>
                    </form>

                </nav>
            </div>

            <!--**************************************  HEADER  ***************************-->
      

            <hr>

            <div class="container-fluid col-md-8 offset-md-2">

                <div class="card" style="width:100%;">
                    <div style="background-color: #2E2E2E;text-align: center;padding-top: 2%;">
                        
                        <h1 style="position:relative;top:0px;left:0px;top:-12px;color:#fff;"><b>Search Results</b></h1></div><br>


                    <div class="card-block" style="padding-left: 10%;padding-right: 10%;padding-bottom: 2%;">
                        <?php
                        $counter=1;
                        while ($result = mysqli_fetch_array($sth)) {
                            
                            
                            $search_mem_id = $result['mem_id'];
                           
                            echo' <div  class="card" style="  background-color: white;width: 60px; height: 60px; border-radius: 100%;">
                                    
                            
                    <div class="view overlay hm-white-slight">';
                            if ($result['profile_image'] != NULL)
                                echo' <img  id=tt1 style="width: 60px; height: 60px; border-radius: 100%;padding: 4.2px;" src="data:image/jpeg;base64,' . base64_encode($result['profile_image']) . '"  class="img-fluid"  alt="">';
                            else
                                echo' <img  id=tt1 style="width: 60px; height: 60px; border-radius: 100%;padding: 0.8px;" src="/photo2/images/default_profile.jpg"  class="img-fluid"  alt="">';

                            echo'</div>
                               
                  </div>';
                            echo'<h3 style="color:#212121;position:relative;text-transform: capitalize; text-shadow: 1px 0.8px #BDBDBD;top:-50px;left:100px;">';


                            echo'<a style="color:black" href="profile.php?new_id_view=' . $search_mem_id . '" >';
                         
                         

                            echo $result['fname'];
                            echo ' ';
                            echo $result['lname'];
                            echo'
                                
                     
                    </a>';
                            echo'</h3>';


                             $counter++;
                            echo'<hr>';
                        }
                        
                      
                        
                       
                        ?> 
                    </div>

                </div>
            </div>


            <!--/.Footer-->
            <footer class="mdl-mini-footer elegant-color-dark" style="width:100%;margin-top: 80%;" >
                <div class="mdl-mini-footer__left-section">
                    <div class="mdl-logo">Pixelr</div>
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href='#!'>Contact</a></li>
                    </ul>
                </div>
            </footer>




            <!-- SCRIPTS -->

            <!-- JQuery -->

            <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="js/tether.min.js"></script>

            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>

            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="js/mdb.min.js"></script>
            <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
            <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
            <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
            <script>

                $("#images").click(function () {
                    $("#tabb1").click();
                });



                var options = [];

                $('.dropdown-menu a').on('click', function (event) {

                    var $target = $(event.currentTarget),
                            val = $target.attr('data-value'),
                            $inp = $target.find('input'),
                            idx;

                    if ((idx = options.indexOf(val)) > -1) {
                        options.splice(idx, 1);
                        setTimeout(function () {
                            $inp.prop('checked', false)
                        }, 0);
                    } else {
                        options.push(val);
                        setTimeout(function () {
                            $inp.prop('checked', true)
                        }, 0);
                    }

                    $(event.target).blur();

                    console.log(options);
                    return false;
                });

            </script>

        </div>
    </body>

</html>



