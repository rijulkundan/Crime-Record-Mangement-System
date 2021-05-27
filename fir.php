<?php
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$relation = $_POST['relation'];
$accused = $_POST['accused'];
$crime = $_POST['crime'];
if (!empty($email) || !empty($username) || !empty($password) || !empty($phone) || !empty($address) || !empty($relation) || !empty($accused) || !empty($crime)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "youtube";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From fir Where email = ? Limit 1";
     $INSERT = "INSERT Into fir (email, username, password, phone, address, relation, accused, crime) values(?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssissss", $email, $username, $password, $phone, $address, $relation, $accused, $crime);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>