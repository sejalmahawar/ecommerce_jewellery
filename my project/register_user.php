<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CJ - Homepage</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
</head>
<body>
    <?php 
    include_once('db.php');
    include_once("menu.php");?>
<?php
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name= $_POST['name'];
$email= $_POST['email'];
$username= $_POST['username'];
$password= $_POST['password'];
$phone= $_POST['phone'];
$sql = "INSERT INTO site_data (Name, Username, Password, Email, Phone) 
    Values('$name', '$username', '$password', '$email', $phone)";
if($conn->query($sql)){
    echo "<div class='alert alert-success'>Registeration Complete.</div>";
} else {
    echo "<div class='alert alert-danger'>Something Went Wrong.</div>";
}
$conn -> close();
?>


<?php include_once("footer.php");?>

<script type="text/javascript" src="./js/bootstrap.bundle.min.js" async></script>

</body>
</html>