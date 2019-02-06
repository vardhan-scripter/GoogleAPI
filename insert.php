<?php

$conn = mysqli_connect('localhost','root','','Google');

$id = $_POST['id'];

$givenName = $_POST['givenName'];

$familyName = $_POST['familyName'];

$email = $_POST['email'];

$picture = $_POST['picture'];

$link = $_POST['link'];



$sql = "INSERT INTO `users`(`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`) VALUES ('','','$id','$givenName','$familyName','$email','','','$picture','$link','','')";

if(mysqli_query($conn,$sql)){
	echo "<center><h1> You are successfully registered to my website<br>Thank You And Enjoy</h1></center>";
}

mysqli_close($conn);

?>