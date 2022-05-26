<?php 

require('dbconnect.php');

if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { 
  	$sql="INSERT INTO score (id, fullname, email, score, appid) VALUES ( DEFAULT,'".$_POST["fullname"]."','".$_POST["email"]."','".$_POST["score"]."','".$_POST["appid"]."')";
  	//echo $quer;
  	mysqli_query($conn, $sql);
  	$rankQ = "SELECT id, fullname, score, FIND_IN_SET( score, (    
  		SELECT GROUP_CONCAT( score
			ORDER BY score DESC ) 
			FROM score )
			) AS rank
			FROM score
			WHERE score =  '".$_POST["score"]."' and email ='".$_POST["email"]."' limit 1";
			// $mysqli_result = mysqli_query($conn, $rankQ );
			// $rankResRow = mysqli_fetch_assoc($mysqli_result );
			echo "Merci d'avoir soumis votre score!";
			
  }
 
  
}


function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}


?>