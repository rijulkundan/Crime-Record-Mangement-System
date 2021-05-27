<?php
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$address = $_POST['address'];
$country = $_POST['country'];
if (!empty($email) || !empty($username) || !empty($password) || !empty($phone) || !empty($city) || !empty($height) || !empty($weight) || !empty($address) || !empty($country)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "youtube";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From panel Where email = ? Limit 1";
     $INSERT = "INSERT Into panel (email, username, password, phone, city, height, weight, address, country) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
      $stmt->bind_param("sssiiiiss", $email, $username, $password, $phone, $city, $height, $weight, $address, $country);
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