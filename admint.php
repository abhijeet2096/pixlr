
<?php
session_start();
$con = mysqli_connect('localhost', 'root', '') or die();
$db = mysqli_select_db($con, 'pixlr') or die();

$_SESSION['new_id']=0;
//$id = $_GET['new_id_view'];

//$id = $_SESSION['new_id'];
?>

<!DOCTYPE html>
<html lang="en">
    <!--**************************************     HEAD     ***************************-->
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="img/fav6icon.ico" type="image/x-icon" />
        <title>Pixelr : Admin </title>

        <!-- Font Awesome -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">

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

        <!-- Template styles -->
        <style rel="stylesheet">

            @media only screen and (max-width: 480px) {

                table, thead, tbody, th, td, tr {
                    display: block;
                }

                thead {
                    display: none;
                }

               

                .mdl-data-table tbody tr {
                    height: auto;
                }

                .mdl-data-table tbody tr:nth-child(even) {
                    background-color: #eee;
                }

                .mdl-data-table td,
                .mdl-data-table td:first-of-type {
                    padding-left: 50%;
                }

                .mdl-data-table td:before {
                    position: absolute;
                    top: 6px;
                    left: 6px;
                    width: 45%;
                    padding: 6px 18px 0;
                    white-space: nowrap;
                    content: attr(data-label);
                    text-align: left;
                    color: rgba(0, 0, 0, 0.541176);
                    font-weight: bold;
                    font-family: Helvetica, Arial, sans-serif;
                    font-size: 12px;
                }

                .mdl-data-table td:last-of-type {
                    padding-right: 18px;
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

    <body>


        <!--**************************************  HEADER  ***************************-->

        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header ">
            <header class="mdl-layout__header elegant-color">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Pixlr</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a style = "position: absolute;left:140px;" class="mdl-navigation__link " href="home.php">Home</a>
                        <a class = "mdl-navigation__link active" style = "position: absolute;left:227px;">Member</a>
                   
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

                        <a class="mdl-navigation__link " > <img id=tt10 style="outline: none;" width="43px" height="43px" src="ic_account_circle_white_48dp/ic_account_circle_white_48dp/web/ic_account_circle_white_48dp_1x.png" class="img-fluid" alt=""></a>
                    
                     
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
            
           

            <div class="container" style="padding-bottom: 200px;padding-left: 200px;padding-right: 200px;padding-top: 50px;">

                <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th>MEMBER ID</th>
                            <th class="mdl-data-table__cell--non-numeric">NAME</th>
                            <th class="mdl-data-table__cell--non-numeric">EMAIL</th>
                            <th class="mdl-data-table__cell--non-numeric">PHONE</th>
                            <th>STATUS</th>
                        </tr>
                </thead>
                    <tbody>
                    <?php
    $con=mysqli_connect('localhost','root','') or die("Failed to connect to SQL DB: ");
    $db=mysqli_select_db($con,'pixlr') or die("Failed to connect to SQL DB: ");
    $query = mysqli_query($con,"SELECT * FROM member");
    while($row = mysqli_fetch_array($query))
    {
        $mid =  $row['mem_id'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $cont = $row['contact'];
        $name = $fname." ".$lname;
        if($row['status'] == 0)
        {
            $status = "Inactive";
        }
        else
        {   $status = "Active"; }
                    echo'   <tr>
                            <td data-label="MEMBER ID" class="mdl-data-table__cell--non-numeric">'.$mid.'</td>
                            <td data-label="NAME" style="capitalize;"><a href="profile.php?new_id_view='.$mid.'" style="color:black;"><b>'.$name.'</b></a></td>
                            <td data-label="EMAIL">'.$email.'</td>
                            <td data-label="PHONE" style="color:black;"><b>'.$cont.'</b></td>
                            <td data-label="STATUS">
                            <a href="q3.php?mem_id='.$mid.'">
                            <button style="float:right;" id="btnfollow" type="button" class="btn bg-primary " >'.$status.'</button></a></td>
                        </tr>';
        }            
                    ?>
                    </tbody>
                </table>
                
            </div>


























            <!--/.Footer-->
            <footer class="mdl-mini-footer elegant-color-dark" style="width:100%;margin-top: 10%;" >
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
                $("#pop1").on("click", function () {
                    $('#imagepreview1').attr('src', $('#imageresource1').attr('src')); // here asign the image to the modal when the user click the enlarge link
                    // here asign the image to the modal when the user click the enlarge link
                    $('#imagemodal1').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
                });

                $("#pop").on("click", function () {
                    $('#imagepreview').attr('src', $('#imageresource').attr('src')); // here asign the image to the modal when the user click the enlarge link
                    // here asign the image to the modal when the user click the enlarge link
                    $('#imagemodal').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
                });
                function like(prsn, img, key) {
                    var id = prsn + "_" + img;
                    $.get("q3.php", {"image_id_like": img, "person_id": prsn}, function (reply) {
                        if ($("img[id='" + id + "']").attr("src") == "/photo2/images/2000px-Love_Heart_SVG.png") {
                            $("img[id='" + id + "']").attr({"src": "/photo2/images/2000px-Love_Heart_SVGcopy.png"});
                            var x = $("h3[id='" + id + "']").text();
                            var y = ((parseInt(x)) - 1).toString();
                            $("h3[id='" + id + "']").html(y);
                        } else {
                            $("img[id='" + id + "']").attr("src", "/photo2/images/2000px-Love_Heart_SVG.png");
                            var x = $("h3[id='" + id + "']").html();
                            var y = ((parseInt(x)) + 1).toString();
                            $("h3[id='" + id + "']").html(y);
                        }
                    });
                }
                function like2(prsn, img, key) {
                    var id = prsn + "+" + img;
                    $.get("q3.php", {"image_id_like": img, "person_id": prsn}, function (reply) {
                        if ($("img[id='" + id + "']").attr("src") == "/photo2/images/2000px-Love_Heart_SVG.png") {
                            $("img[id='" + id + "']").attr({"src": "/photo2/images/2000px-Love_Heart_SVGcopy.png"});
                            var x = $("h3[id='" + id + "']").text();
                            var y = ((parseInt(x)) - 1).toString();
                            $("h3[id='" + id + "']").html(y);
                        } else {
                            $("img[id='" + id + "']").attr("src", "/photo2/images/2000px-Love_Heart_SVG.png");
                            var x = $("h3[id='" + id + "']").html();
                            var y = ((parseInt(x)) + 1).toString();
                            $("h3[id='" + id + "']").html(y);
                        }
                    });
                }


                $("#profile").click(function () {
                    $("#tabb3").click();
                });
                var t = 50;
                var x;
                setInterval(
                        function () {

                            //alert("Hello"); 
                            $.get("number.php", function (data) {
                                //alert("Data: " + data);
                                x = ((parseInt(data))).toString();

                            });     // alert(x);
                            //alert(x);
                            var y =<?php echo $_SESSION['totalnewpost']; ?>;
                            y = ((parseInt(y))).toString();
                            //alert(x-y);
                            //alert(y);
                            //t=t+3;
                            if (x > y)
                            {

                                $("#noti").attr("data-badge", x - y);
                            }




                        }, 1000);


            </script>
            <?php
            $flag = "false";
            if ($wrong == $flag) {
                echo'<script> window.alert("Wrong Password !!!")</script>';
            }
            ?>
        </div>

    </div>
</body>

</html>