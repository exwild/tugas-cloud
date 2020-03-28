<?php
if(isset($_POST)){
    $plaintext = $_POST['password'];
	$ciphering = "AES-128-CTR"; 
	  
	$options = 0; 
			  
	$encryption_iv = '5643797424509143'; 
			  
	$encryption_key = "exwild12"; 
			  
	$encrypt = openssl_encrypt($plaintext, $ciphering, 
			       		$encryption_key, $options, $encryption_iv);

	$servername = 'localhost';
	$username = 'root';
	$password = 'ubaya';
	$dbname = 'tugasisadb';

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
        $query="insert into login (username,password) values ('".$_POST['username']."','".$encrypt."')";
        $conn->query($query);
	$sql = "SELECT id, username, password FROM login";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"]. " - Name: " . $row["username"]. " - Password: " . $row["password"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$conn->close();
}
?>
