<?php  
$username = $_POST['username'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];
$city = $_POST['city'];
$country = $_POST['country'];
$email = $_POST['email'];
if (!empty($username) || !empty($phone) || !empty($address) || !empty($password) || !empty($city) || !empty($country) || !empty($email)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "youtube";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From account Where email = ? Limit 1";
     $INSERT = "INSERT Into account (username, phone, address, password, city, country, email) values(?, ?, ?, ?, ?, ?, ?, ?)";
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
      $stmt->bind_param("ssssii", $username, $phone, $address, $password, $city, $country, $email);
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