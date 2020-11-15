<?php
session_start();
include("db.php");
$data = $_POST;

 

 if(isset($data["signup"])){
     $name = $data["full-name"];
	 $phone = $data["phone-number"];
	 $email = $data["email"];
	 $password = $data["password"];
	 $password = sha1($password);

	 $sql = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";
	  // use exec() because no results are returned
	 $conn->exec($sql);
	 echo "New record created successfully";


 }
 if(isset($data["login"])){
	$password = $data['password'];
	$email = $data['email']; 
	$password = sha1($password);

	$query = $conn->prepare("SELECT * FROM users WHERE email='$email' AND password='$password'");
	$query->execute();

	if($query->rowCount()>0){
		$result = $query->fetchAll();
		$_SESSION["user"]=$result[0];
		$response = array("status"=>"success", "code"=>200, "message"=>"welcome ".$result[0]['name']);
		echo json_encode($response);


	}

	 else{
	 	$response = array("status"=>"fail", "code"=>200, "message"=>"Login failed, invalid credentials ");
		echo json_encode($response);

	 }
	#print_r($result);

 }
 /*
 $status = array(
        200 => '200 OK',
        400 => '400 Bad Request',
        404 => '404 Not Found',
        422 => 'Unprocessable Entity',
        500 => '500 Internal Server Error'
    );*/
 
?>