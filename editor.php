<?php
if(isset($_POST['editor']))
{
	$article = $_POST['editor'];
	$conn = mysqli_connect("localhost","root","") or die ("Can't connect");
	mysqli_select_db($conn,"ad") ; 
	mysqli_query($conn,"INSERT INTO editor (post) VALUES ('".mysqli_real_escape_string($conn,$article)."')");
}
?>
