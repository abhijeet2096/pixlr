

<?php
session_start();
$con = mysqli_connect('localhost', 'root', 'Jigyasha#$') or die();
$db = mysqli_select_db($con, 'pixlr') or die();
// You can set the value however you like.
 $id = $_GET['new_id_view'];
 $id_loggedin = $_SESSION['new_id'];
?>


<!DOCTYPE html>
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
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">

        <!-- Template styles -->
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




            img1 :hover{
                width:35px ;
                height:35px;
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
                        <a style = "position: absolute;left:140px;" class="mdl-navigation__link" href="home.php">Home</a>
                        <?php if(!$_SESSION['new_id'])
                        echo '<a class = "mdl-navigation__link " href="admint.php" style = "position: absolute;left:227px;">Member</a>';?>
                        <?php
                        if (isset($_SESSION['new_id'])) {
                            echo'
                        <a class="mdl-navigation__link show-modal" href="#!" id=tt3  style="position:relative;margin:395px;outline: none;" >
                            <img   style="outline: none;align:left;display: inline;" width="38px" height="38px" src="/pixlr/images/upload.png" class="img-fluid" alt=""> Upload
                        </a>';
                        } else
                            echo'
                        <a class="mdl-navigation__link disable" href="#!"  id=tt3  style="position:relative;margin-right:395px;outline: none;" >
                            <img   style="outline: none;align:left;display: inline;" width="38px" height="38px" src="/pixlr/images/upload.png" class="img-fluid" alt=""> Upload
                        </a>';
                        ?>
                        <div class="mdl-tooltip" data-mdl-for="tt3">Upload Image</div>
                        <form  action="search.php" method="POST">
                            <div  style="align:left;display: inline;padding-right: 5px;" class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                                <label class="mdl-button mdl-js-button mdl-button--icon" for="sample11">
                                    <i class="material-icons">search</i>
                                </label>
                                <div class="mdl-textfield__expandable-holder">
                                    <input class="mdl-textfield__input" type="text" id="sample11"  name="searchBox" placeholder="Enter name">
                                </div>
                            </div>
                        </form>
                        <a  class="mdl-navigation__link " href="profile.php?new_id_view=<?php echo $id_loggedin; ?>"  >

                            <?php
                            if (isset($_SESSION['new_id']) && ($id == $id_loggedin))
                                echo'<a class="mdl-navigation__link active" href="#!">Profile</a>';
                            else if (isset($_SESSION['new_id']) && ($id != $id_loggedin))
                                echo'<a class="mdl-navigation__link " href="profile.php?new_id_view=' . $id_loggedin . '">Profile</a>';
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

                    <a  class="mdl-navigation__link " href="profile.php?new_id_view=<?php echo $id_loggedin; ?>"  >

                        <?php
                        if (isset($_SESSION['new_id']) && ($id == $id_loggedin))
                            echo'<a class="mdl-navigation__link active1" style="color:white;" href="#!">Profile</a>';
                        else if (isset($_SESSION['new_id']) && ($id != $id_loggedin))
                            echo'<a class="mdl-navigation__link " href="profile.php?new_id_view=' . $id_loggedin . '">Profile</a>';
                        ?>

                    </a>

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


            <!-- *************************************  PROFILE   *************************** -->
            <div class="container">
                <hr>

                <div class="col-xl-8" style="width: 100%; "  >
                    <div class="card" style=" padding : 8px; ">

                        <!--Card image-->

                        <div class="view overlay hm-white-slight" style="height: 500px;">




                            <?php
                            $sql = "SELECT * FROM member WHERE mem_id = '$id'";
                            $sth = mysqli_query($con, $sql);
                            $result = mysqli_fetch_array($sth);
                            if ($result['cover_image'] != NULL)
                                echo '<img src="data:image/jpeg;base64,' . base64_encode($result['cover_image']) . '" class="img-fluid" alt="" style="width:100%;height : auto;min-height:500px"/>';
                            else
                                echo '<img src="/pixlr/images/default_cover.png" class="img-fluid" alt="" style="width:100%;height : auto;"/>';
                            ?>




              <!--<img src="http://mdbootstrap.com/images/regular/people/img%20(6).jpg" class="img-fluid" alt="">-->
                            <a href="#!">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                    </div> 
                    <div id="profilepic" class="card" style="  background-color: white;position: relative;top: -120px;width: 200px; height: 200px; border-radius: 100%;margin: 0 auto;">
                        <!--setting image-->
                        <div class="view overlay hm-white-slight">


                            <?php
//$sql = "SELECT * FROM member WHERE mem_id = '$id'";
//$sth = mysqli_query($con,$sql);
//$result=mysqli_fetch_array($sth);
                            if ($result['profile_image'] != NULL)
                                echo '<img src="data:image/jpeg;base64,' . base64_encode($result['profile_image']) . '" class="img-fluid" alt=""style="width: 200px; height: 200px; border-radius: 100%;padding: 8px;"/>';
                            else
                                echo '<img src="/pixlr/images/default_profile.jpg" class="img-fluid" alt=""style="width: 200px; height: 200px; border-radius: 100%;padding: 8px;"/>';
                            ?>
              <!--<img  src="http://mdbootstrap.com/images/regular/people/img%20(2).jpg" class="img-fluid" alt="" style="width: 200px; height: 200px; border-radius: 100%;padding: 8px;">-->

                            <a href="#!">
                                <div class="mask" style="border-radius : 100%;"></div>
                            </a>
                        </div>

                    </div>
                </div>

                <hr> 


            </div> 
            <?php
            $follower_id = $_SESSION['new_id'];

//$following_id = $_GET['following_id']; // alter here
            $following_id = $id;
            if ($id != $id_loggedin&&$_SESSION['new_id']) {
                $followings;
                $followers;

                $query = mysqli_query($con, "SELECT *  FROM `r_follow` where follower = '$follower_id' AND following = '$following_id'");
                $row = mysqli_fetch_array($query);
                if ($row) {
                    echo'                             <a href="q3.php?following_id=' . $following_id . '">
                  
                    <button id="btnfollow" type="button" class="btn bg-success " style="position:absolute; left:782px;top:740px;"><span style="font-size:135%">&#10003;</span>Following</button>';                  //already a follower
                } else {


                    echo'              <a href="q3.php?following_id=' . $following_id . '">

                    <button id="btnfollow" type="button" class="btn btn-primary" style="position:absolute; left:795px;top:740px;">+Follow</button> 
                    ';                // not a follower
                }
            }

            $query = mysqli_query($con, "SELECT *  FROM `r_follow` where  following = '$following_id'");
            $count = 0;
            while (mysqli_fetch_array($query)) {
                $count = $count + 1;
            }
            $followings = $count;

            $query = mysqli_query($con, "SELECT *  FROM `r_follow` where  follower = '$following_id'");
            $count = 0;
            while (mysqli_fetch_array($query)) {
                $count = $count + 1;
            }
            $followers = $count;

            echo'
                                        <div style="position:relative;top:0px;left:710px;">
                                        <h3><a class="btn btn-elegant btn-lg" style="padding:3px">Followings</a> : ' . $followers . '  <a class="btn bg-danger btn-lg"  style="padding:3px">Followers</a> : ' . $followings . '</h3>
                                        </div >
                                        ';
            ?>


            <div  class="mdl-tabs mdl-js-tabs  ">

                <div class="mdl-tabs__tab-bar mdl-js-ripple-effect">
                    <a href="#tab1" class="mdl-tabs__tab">Images</a>
                    <?php
                    if ($id == $id_loggedin||!$_SESSION['new_id']) {
                        echo'
          <a href="#tab2" class="mdl-tabs__tab">Settings</a>';
                    }
                    ?>
                </div>


                <div class="mdl-tabs__panel is-active" id="tab1">

                    <main>
                        <!--Main layout-->
                        <div class="container">


                            <!-- Modal -->





                            <?php
                            $counter = 0;
                            $sql = "SELECT * FROM image WHERE mem_id=" . $id . " ORDER BY img_id DESC";

                            $result = mysqli_query($con, $sql) or die(mysqli_error($db));
//$row = mysqli_fetch_assoc($result);
                            $totalpost = mysqli_num_rows($result);
                            $articlesPerPage = 6;

                            $totalPages = ceil($totalpost / $articlesPerPage);
                            $c_i = 0;
                            if (!isset($_GET['page'])) {
                                $page = 1;
                                //$page1=1;
                            } else
                                $page = $_GET['page'];
                            $c_j = 0;
                            //$row = mysqli_fetch_assoc($result);
                            //echo ($articlesPerPage)*($page-1);
                            while ($c_j < ($articlesPerPage) * ($page - 1)) {

                                $c_j = $c_j + 1;
                                $row = mysqli_fetch_array($result);
                            }
                            while ($row = mysqli_fetch_array($result)) {
                                $c_i++;

                                $title = $row['title'];
                                $caption = $row['caption'];
                                $img_id = $row['img_id'];
                                $img_id_temp = "#pop" . $img_id;
                                $img_id_preview = "#preview" . $img_id;
                                $img_id_with = "#" . $img_id;
                                $img_id_like = "tt3" . $img_id;

                                $img_id_likesize = "image_name" . $img_id;
                                $img_id_likewidth = "image_name.width" . $img_id;
                                $img_id_likeheight = "image_name.height" . $img_id;

                                $img_id_temp_1 = "pop" . $img_id;
                                $img_id_preview_1 = "preview" . $img_id;
                                $img_id_with_1 = $img_id;

                                if ($counter % 3 == 0) {
                                    //echo'<div class="container-fluid">';
                                    echo'<div class="row">';
                                }
                                echo'


          <div class="col-md-4">
            <!--Card-->
            <div class="card">
            <div class="card-block" style="height:55px;padding-left:6px;padding-right:0px;padding-top:6px; padding-bottom:5px;" >
           ';
                                echo '

                <a href="profile.php?new_id_view=' . $row['mem_id'] . '">
                  <div  class="card" style="  background-color: white;position:absolute;float:left;width: 40px; height: 40px; border-radius: 100%;">

                    <div class="mask" style="border-radius : 100%;"></div>
                    <div class="view overlay hm-white-slight">';

                                $sql1 = "SELECT * FROM member where mem_id='$id'";

                                $result1 = mysqli_query($con, $sql1) or die(mysqli_error($db));
                                $row1 = mysqli_fetch_array($result1);

                                $profileimage = $row1['profile_image'];
                                $fullname = $row1['fname'] . " " . $row1['lname'];
                                if ($profileimage != NULL)
                                    echo' <img   style="width: 40px; height: 40px; border-radius: 100%;padding: 3px; " src="data:image/jpeg;base64,' . base64_encode($profileimage) . '"  class="img-fluid"  alt="">';
                                else
                                    echo' <img   style="width: 40px; height: 40px; border-radius: 100%;padding: 0.6px;" src="/pixlr/images/default_profile.jpg"  class="img-fluid"  alt="">';

                                echo'
                    </div>

                  </div></a>
                   <h5  style="position:relative;text-transform: uppercase; text-shadow: 1px 0.8px #BDBDBD;top:14px;left:50px;">';
                                echo" <b>$fullname</b>";
                                echo'</h5>';



                                $follower_id = $_SESSION['new_id'];

                                //$following_id = $_GET['following_id']; // alter here
                                $following_id = $id;
                                if ($following_id != $follower_id&&$_SESSION['new_id']!=0) {
                                    $followings;
                                    $followers;

                                    $query2 = mysqli_query($con, "SELECT *  FROM `r_follow` where follower = '$follower_id' AND following = '$following_id'");
                                    $row2 = mysqli_fetch_array($query2);

                                    if ($row2) {
                                        echo'                             <a href="q3.php?following_id=' . $following_id . '&redirect=1">
                  
                    <button style="float:right; margin-top:-30px;padding:4px;" id="btnfollow" type="button" class="btn bg-success " "><span style="font-size:135%">&#10003;</span>Following</button> ';                  //already a follower
                                    } else {


                                        echo'              <a href="q3.php?following_id=' . $following_id . '&redirect=1">

                    <button id="btnfollow" style="float:right; margin-top:-30px;" type="button" class="btn bg-primary" ">+Follow</button> 
                    ';                // not a follower
                                    }
                                }

                                echo'<h4>';
                                echo'</div>
                                    
              <!--Card image-->
              <div class="view overlay hm-white-slight" style="height:220px;">';



                                echo"
                <a href='#!' id='" . $img_id_temp_1 . "'>";
                                echo'<div class="mask"></div>';

                                //$row = mysqli_fetch_assoc($result);
                                $image_t = $row['path'];
                                echo "<img src='" . $image_t . "' class='img-fluid' alt='' style='width:100%;height:auto;padding:5px ;min-height:220px;position:absolute;left:50%;top:50%;  -webkit-transform: translateY(-50%) translateX(-50%); '></a></div>";
                                echo'
                  <div class="modal fade" id="mod' . $img_id . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>';
                                $profileimage = $row1['profile_image'];

                                echo' <div class="card-block" style="height:55px;padding-left:6px;padding-right:0px;padding-top:6px; padding-bottom:5px;" >
                                <a href = "profile.php?new_id_view=' . $row['mem_id'] . '">
                                <div class = "card" style = "  background-color: white;position:absolute;width: 50px; height: 50px; border-radius: 100%;left:270px;">

                                <div class = "mask" style = "border-radius : 100%;"></div>
                                <div class = "view overlay hm-white-slight">';
                                if ($profileimage != NULL)
                                    echo' <img style = "width: 50px; height: 50px; border-radius: 100%;padding: 3px; " src = "data:image/jpeg;base64,' . base64_encode($profileimage) . '" class = "img-fluid" alt = "">';
                                else
                                    echo' <img style = "width: 50px; height: 50px; border-radius: 100%;padding: 0.4px;" src = "/pixlr/images/default_profile.jpg" class = "img-fluid" alt = "">';

                                echo '   </div>

                                </div></a>
                             
                                </div>';






                                echo'</div>
                                <div class = "modal-body">
                                <div class = "card">

                                <!--Card image-->
                                <div class = "view overlay hm-white-slight">

                                ';
                                echo "<img src='" . $image_t . "' class='img-fluid' alt='' >";

                                echo'
                                <a href = "#!">
                                <div class = "mask"></div>
                                </a>
                                </div>
                                <!--/.Card image-->

                                <hr>


                                </div>

                                <div class = "card">
                                <div class = "card-block">
                                <form action = "q3.php?image_id_test=' . $img_id . '&redirect=2&person_id=' . $id . '" method = "POST" >
                                <div class = "mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class = "mdl-textfield__input" name = "my_comment" type = "text" placeholder = "your comment">


                                </div>
                                <button name = "post_comment" class = "btn btn-elegant" style = "position: absolute;top: 40px;right:10px;" >Post comment</button>
                                </form>

                                </div>

                                </div>

                                </div>'; //var[i]=img_id;i++;
                                //$ _SESSION['img_id'] = $img_id_comment;


                                $con2 = mysqli_connect('localhost', 'root', 'Jigyasha#$') or die();
                                $db2 = mysqli_select_db($con2, 'pixlr') or die();

                                //echo $img_id;
                                $query = "SELECT * FROM r_comment WHERE img_id= " . $img_id . " ORDER BY comment_id DESC";
                                $res = mysqli_query($con2, $query);
                                if ($res) {
                                    while ($row = mysqli_fetch_array($res)) {
                                        // printf("heloo");
                                        echo '<div class = "card" >';
                                        echo '<div class = "card-block">';
                                        $mem_id = $row['mem_id'];
                                        $q = "SELECT * FROM member WHERE mem_id = '$mem_id'";
                                        $r = mysqli_query($con2, $q);
                                        $row1 = mysqli_fetch_array($r);


                                        echo '<div>
                                         <a href="profile.php?new_id_view=' . $row['mem_id'] . '">
                                         <div  class="card" style="  background-color: white;position:absolute;float:left;width: 40px; height: 40px; border-radius: 100%;">

                                        <div class="mask" style="border-radius : 100%;"></div>
                                         <div class="view overlay hm-white-slight">';

                                        if ($row1['profile_image'] != NULL)
                                            echo '<img src = "data:image/jpeg;base64,' . base64_encode($row1['profile_image']) . '" class = "img-fluid" alt = ""style = "width: 40px; height: 40px; border-radius: 100%;padding: 3px;"/>';
                                        else
                                            echo '<img src = "/pixlr/images/default_profile.jpg" class = "img-fluid" alt = ""style = "width: 40px; height: 40px; border-radius: 100%;padding: 2px;"/>';
                                        //echo' <img id = tt1 style = "width: 32px; height: 32px; border-radius: 100%;padding: 2px;" src = "" class = "img-fluid" alt = "">';
                                        echo'
                                            </div>
                                            
                                            </div></a>
                                        <h5  style="position:relative;text-transform: capitalize; text-shadow: 1px 0.8px #BDBDBD;top:14px;left:50px;">';


                                        echo $row1['fname'];
                                        echo ' ';
                                        echo $row1['lname'];
                                        echo'</h5>';

                                        $comment_id_close = $row["comment_id"];
                                        echo'<form action = "q3.php?comment_id=' . $comment_id_close . '&person_id=' . $id . '" method = "POST">';
                                        echo '<button name = "delete_comment" style="position:absolute;top:10px;right:10px;" class = "close" aria-label = "Close">';
                                        echo '</form>';
                                        echo'
                                <span aria-hidden = "true">&times;
                                </span>
                                </button>';

                                        echo '</div>';


                                        echo '<br><hr><b style="position:relative;text-transform: capitalize;">';
                                        printf("\n%s", $row["comment"]);
                                        echo '</b></div>';
                                        echo '</div>';
                                    }
                                }
                                mysqli_close($con2);
                                echo'




                                <div class = "modal-footer">

                                </div>
                                </div>
                                </div>
                                </div>






                                <!--/.Card image-->

                                <!--Card content-->
                                <div class = "card-block">
                                <!--Title-->


                                <h6 class = "card-title" style = "position:relative;text-transform: capitalize; text-shadow: 1px 0.8px #BDBDBD;margin : 0 auto;float:left;height:5px;">';
                                echo" <b>$title</b>";
                                echo'</h6></div><hr><div class = "card-block" style = "height:5px" >';


                                // $id = $_SESSION['new_id'];
                                $query = mysqli_query($con, "SELECT *  FROM `r_like` where img_id = '$img_id' AND mem_id = '$id'");
                                $row = mysqli_fetch_array($query);
                                if ($row) {
                                    //$query = mysqli_query($con,"DELETE FROM 'r_like' WHERE mem_id='$id' AND img_id='$img_id'");
                                    $path = "/pixlr/images/2000px-Love_Heart_SVG.png";
                                    $key = 1;  
                                } else {
                                    //$query = mysqli_query($con,"INSERT INTO `r_like` VALUES('$id','$img_id','')");
                                    $path = "/pixlr/images/2000px-Love_Heart_SVGcopy.png";
                                    $key = 0;  
                                }

                                echo'

                              <a href="#!" onclick="like(\''.$id.'\',\''.$img_id.'\', \''.$key.'\')">

                                <img class = "img1" name = "' . $img_id_likesize . '" id="'.$id.'_'.$img_id.'"  id = tt101 style = "outline: none;position :absolute;top:345px;left:120px;" width = "32px" height = "32px" src = "' . $path . '" class = "img-fluid" alt = "" >
                                </a>
                                <div style = "outline: none;">
                                ';

                                $query = mysqli_query($con, "SELECT *  FROM `r_like` where img_id = '$img_id'");
                                $count = 0;
                                while (mysqli_fetch_array($query)) {
                                    $count = $count + 1;
                                }
                                echo'
                                <h3 id="'.$id.'_'.$img_id.'" style = "position:absolute;text-shadow: 1px 0.8px #BDBDBD;left:160px;top:345px;">' . $count . '</h3>
                                </div >
                                <div class = "mdl-tooltip" data-mdl-for = "#tt101">Like</div>';




                                echo'
                                <!--Text-->
                                </div>

                                <!--/.Card content-->

                                </div>
                                <!--/.Card-->
                                </div>

                                <!--/.Third column-->
                                ';
                                $counter = $counter + 1;
                                if ($counter % 3 == 0) {
                                    echo' </div>';
                                    //echo' </div>';
                                }
                                if ($c_i >= $articlesPerPage)
                                    break;


                                echo'<script>



                                $("#' . $img_id_temp_1 . '") . click(function() {

                                            img_id = $(this) . attr("id");
                                            $("#imagepreview1").attr("src", $("#imageresource1").attr("src"));
                                            $("#mod' . $img_id . '") . modal("show");
                                        });
                                </script>';
                            }






                            if ($counter % 3 != 0)
                                echo' </div>';
                            ?>
                            <hr>
                            <nav class="row text-xs-center">
                                <ul class="pagination">
                                    <li class="page-item disabled">

                                    </li>
                                    <?php
                                    $totalPages;
                                    $c_p = 1;
                                    while ($c_p < $page) {

                                        echo'
                   <li class="page-item"><a class="page-link" href="profile.php?page=' . $c_p . '&new_id_view=' . $id . '">';
                                        echo $c_p;
                                        echo'</a></li>';
                                        $c_p++;
                                    }
                                    echo' <li class="page-item active">
                        <a class="page-link" href="profile.php?page=' . $page . '&new_id_view=' . $id . '">';
                                    echo $page;
                                    echo'<span class="sr-only">(current)</span></a>
                    </li>';

                                    $c_p = $page + 1;
                                    while ($c_p <= $totalPages) {
                                        echo'<li class="page-item"><a class="page-link" href="profile.php?page=' . $c_p . '&new_id_view=' . $id . '">';
                                        echo $c_p;
                                        echo'</a></li>';
                                        $c_p = $c_p + 1;
                                    }

                                    /* <li class="page-item">
                                      <a class="page-link" href="#!" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                      <span class="sr-only">Next</span>
                                      </a>
                                      </li> */
                                    ?>
                                </ul>
                            </nav>
                            <!--/.Pagination-->
                            <hr>

                        </div>
                        <!--/.Main layout-->
                    </main>

                </div>

                <?php
 !$_SESSION['new_id'];
 $id;
                if ($id_loggedin == $id||!$_SESSION['new_id']) {
                    //echo "why here";
                    echo'
          <div class="mdl-tabs__panel" id="tab2">
           <main>

              <div class="card">
                <div class="container">
                  <button type="button" class="btn btn-elegant"  data-toggle="modal" data-target="#myModal1" >Profile Pic</button>   

                  <!-- Modal -->
                  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <!--Content-->
                      <div class="modal-content">
                        <!--Header-->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                         <h4 class="modal-title" id="myModalLabel" style="position:absolute;text-align: center;">Add Image</h4>
                       </div>
                       <!--Body-->
                       <div class="modal-body">
                         <form method="POST" action="q3.php" enctype="multipart/form-data">
                          <input type="file" name="myimage">
                          <input type="submit" name="submit_image_profile" value="Upload">
                        </form>
                      </div>
                      <!--Footer-->
                      <div class="modal-footer">
                        <button type="button" class="btn btn-elegant" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                    <!--/.Content-->
                  </div>   
                </div>

                <br>
                <button type="button" class="btn btn-elegant"  data-toggle="modal" data-target="#myModal2" >Cover Image</button>   

                <!-- Modal -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <!--Content-->
                    <div class="modal-content">
                      <!--Header-->
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                       </button>
                       <h4 class="modal-title" id="myModalLabel" style="position:absolute;text-align: center;">Add Image</h4>
                     </div>
                     <!--Body-->
                     <div class="modal-body">
                       <form method="POST" action="q3.php" enctype="multipart/form-data">
                        <input type="file" name="myimage">
                        <input type="submit" name="submit_image_cover" value="Upload">
                      </form>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                      <button type="button" class="btn btn-elegant" data-dismiss="modal">Close</button>

                    </div>
                  </div>
                  <!--/.Content-->
                </div>   
              </div>
              <br>
              <button type="button" class="btn btn-elegant"  data-toggle="modal" data-target="#myModal3" >Change Password</button>   

              <!-- Modal -->
              <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                     <h4 class="modal-title" id="myModalLabel" style="position:absolute;text-align: center;">Enter New Password</h4>
                   </div>
                   <!--Body-->
                   <div class="modal-body">
                     <form method="POST" action="q3.php" enctype="multipart/form-data">
                       <input type="password" name="password" placeholder="Enter New Password">
                       <input type="submit" name="submit_new_password" value="Submit">
                     </form>
                   </div>
                   <!--Footer-->
                   <div class="modal-footer">
                    <button type="button" class="btn btn-elegant" data-dismiss="modal">Close</button>

                  </div>
                </div>
                <!--/.Content-->
              </div>   
            </div>
          </div>
         
        </div>
      </div>
    </main>
  </div>
   ';
                }
                ?>



                <dialog class="mdl-dialog " style="width:30%;">
                    <div class="mdl-dialog__content">
                        <h1>Upload Image</h1>

                        <div class="mdl-card__supporting-text">
                            <div class="container">

                                <!-- Modal -->
                                <form method="POST" action="q3.php" onSubmit="return myFunction()" enctype="multipart/form-data">
                                    <input type="file" name="myimage" id="img">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" name = "title" type="text" id="title" placeholder="Title"/>

                                    </div>


                                    <div class="container">
                                        <div class="row">

                                            <div class="button-group">
                                              <!--<button type="button" class="btn btn-elegant btn-sm dropdown-toggle" data-toggle="dropdown"><span>Category</span> <span class="caret"></span></button>-->
                                                <select name="category">
                                                    <option value="" disabled selected>Select category</option>
                                                    <li><option value = '1'/>&nbsp;Nature</option></li>
                                                    <li><option value = '2'/>&nbsp;Animals</option></li>
                                                    <li><option value = '3'/>&nbsp;Plants</option></li>
                                                    <li><option value = '4'/>&nbsp;Art</option></li>
                                                    <li><option value = '5'/>&nbsp;People</option></li>
                                                    <li><option value = '6'/>&nbsp;City</option></li>
                                                </select>
                                            </div>
                                            -
                                        </div>
                                    </div>
                                    <br>
                                    <input type="submit" style="background-color: #212121;color:white;" name="submit_image" value="Upload">
                                </form>







                            </div>
                        </div>


                    </div>

                    <div class="mdl-dialog__actions mdl-dialog__actions--full-width">

                        <button type="button" class="mdl-button close">Close</button>
                    </div>
                </dialog>
                <script>
                    var dialog = document.querySelector('dialog');

                    var showModalButton = document.querySelector('.show-modal');
                    if (!dialog.showModal) {
                        dialogPolyfill.registerDialog(dialog);
                    }

                    showModalButton.addEventListener('click', function () {
                        dialog.showModal();
                    });
                    dialog.querySelector('.close').addEventListener('click', function () {
                        dialog.close();
                    });
                </script>


                <div class="mdl-layout-spacer"></div>
                <!--/.Footer-->
                <!--/.Footer-->
                <footer class="mdl-mini-footer elegant-color-dark" style="padding-bottom: 60px;width:100%;margin-top: 10%;" >
                    <div class="mdl-mini-footer__left-section">
                        <div class="mdl-logo">Pixlr</div>
                        <ul class="mdl-mini-footer__link-list">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href='#!'>Contact</a></li>
                        </ul>
                    </div>
                </footer>





                <!-- SCRIPTS -->

                <!-- JQuery -->



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
                    //$("#pop1").on("click", function() {
                    // $('#imagepreview1').attr('src', $('#imageresource1').attr('src')); // here asign the image to the modal when the user click the enlarge link
                    // here asign the image to the modal when the user click the enlarge link
                    //    $('#imagemodal1').modal('show'); // imagemodal is the id attribute assigned to the bootstrap modal, then i use the show function
                    //});

                    function checkform()
                    {
                        if (document.getElementById("comment_check").value == "")
                        {
                            alert("Comment can't be empty..");
                            return false;
                        } else
                            return true;
                    }

                    function myFunction()
                    {
                        //alert("document.getElementById('img').value");
                        if (document.getElementById("img").value == "")
                        {
                            alert("Please upload an image!!");
                            return false;
                        }
                        function hasExtension(inputID, exts) {
                            var fileName = document.getElementById(inputID).value;
                            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
                        }
                        if (!hasExtension('img', ['.jpg', '.gif', '.png', '.JPG', '.PNG', '.GIF'])) {
                            alert("Please upload an image type: ( jpg / gif / png )");
                            return false;

                        }
                        return true;
                    }
                    function like(prsn, img, key) {
                        var id = prsn + "_" + img;
                        $.get("q3.php", {"image_id_like": img, "person_id": prsn}, function (reply) {
                            if ($("img[id='" + id + "']").attr("src") == "/pixlr/images/2000px-Love_Heart_SVG.png") {
                                $("img[id='" + id + "']").attr({"src": "/pixlr/images/2000px-Love_Heart_SVGcopy.png"});
                                var x = $("h3[id='" + id + "']").text();
                                var y = ((parseInt(x)) - 1).toString();
                                $("h3[id='" + id + "']").html(y);
                            } else {
                                $("img[id='" + id + "']").attr("src", "/pixlr/images/2000px-Love_Heart_SVG.png");
                                var x = $("h3[id='" + id + "']").html();
                                var y = ((parseInt(x)) + 1).toString();
                                $("h3[id='" + id + "']").html(y);
                            }
                        });
                    }


                    $("#profile").click(function () {
                        $("#tabb3").click();
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
        </div>
    </body>

</html>