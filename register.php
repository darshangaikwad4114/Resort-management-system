
<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "login_details";

$conn = mysqli_connect($server_name, $username, $password, $database_name);
//now check the connection
if (!$conn) {
  die("Connection Failed:" . mysqli_connect_error());
}

if (isset($_POST['save'])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $gender = $_POST['email'];
  $email = $_POST['pwd'];
  $phone = $_POST['Cpwd'];

  $sql_query = "INSERT INTO entry_details (first_name,last_name,email,pwd,Cpwd)
	 VALUES ('$first_name','$last_name','$email','$pwd','$Cpwd')";

  if (mysqli_query($conn, $sql_query)) {
    echo "New Details Entry inserted successfully !";
  } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>