<?php 

require('dbconnect.php');

if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) { 
  	$sql="INSERT INTO score (id, fullname, email, score, appid) VALUES ( DEFAULT,'".$_POST["fullname"]."','".$_POST["email"]."','".$_POST["score"]."','".$_POST["appid"]."')";
  	//echo $quer;
  	mysqli_query($conn, $sql);
  	$rankQ = "SELECT * FROM score WHERE appid = '".$_POST["appid"]."' ORDER BY score DESC";

		
		$rank = mysqli_query($conn, $rankQ);
		$rankCount = mysqli_num_rows($rank);
		
		echo "Merci d'avoir soumis votre score <b>".$_POST["fullname"]. "</b> .<br>";

		echo "Votre êtes le <b>".$rankCount."</b>ème sur <b>".$_POST["appid"]."</b> .<br>";
		echo "Votre score est de <b>".$_POST["score"]."</b> .<br>";
			
		
  }
 
}


function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}


?>