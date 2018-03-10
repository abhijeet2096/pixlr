<?php
session_start();
$id=$_SESSION['new_id'];
				$con=mysqli_connect('localhost','root','') or die();
				$db=mysqli_select_db($con,'pixlr') or die();


			$sql1 = "SELECT * FROM r_follow where follower = '$id' ORDER BY follow_id ASC" ;
        	  $result1 = mysqli_query($con,$sql1) or die(mysqli_error($db));
        	  $row1 = mysqli_fetch_array($result1);
         	 $mem_id_temp_12=$row1['following'];
         	 $sql = "SELECT * FROM image where";
	          do{
	            $mem_id_temp_12=$row1['following'];
	           $sql=$sql." mem_id='$mem_id_temp_12' OR";
	          }while($row1 = mysqli_fetch_array($result1));
	          $sql_unique=$sql."DER BY img_id DESC ";
	          $result_unique = mysqli_query($con,$sql_unique) or die(mysqli_error($db));
	          //$row = mysqli_fetch_array($result);


	           echo mysqli_num_rows($result_unique);



?>