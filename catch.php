<?php
if(isset($_POST)){
    $plaintext = $_POST['password'];
	$ciphering = "AES-128-CTR"; 
	  
	$options = 0; 
			  
	$encryption_iv = '5643797424509143'; 
			  
	$encryption_key = "exwild12"; 
			  
	$encrypt = openssl_encrypt($plaintext, $ciphering, 
			       		$encryption_key, $options, $encryption_iv);

	$servername = "127.0.0.1";
	$username = "cloud";
	$password = "1234";
	$dbname = "tugasisa";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
    $query="insert into login (username,password) values ('".$_POST['username']."','".$encrypt."')";
    $conn->query($query);
	$conn->close();
	echo 'success';
}
?>
