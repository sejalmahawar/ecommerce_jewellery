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
$username= $_POST['username'];
$password= $_POST['password'];
$sql = "select * from site_data Where Username='$username' AND Password='$password'";
$result = $conn->query($sql);
$loggedin = false;
while ($row = $result->fetch_row()) {
    $loggedin = true;
    $user = $row;
}
if($loggedin){
    echo "<div class='alert alert-success'>Welcome Back, ".$user[1]."</div>";
} else{
 echo "<div class='alert alert-danger'>Oops Wrong username or password.</div>";
}

// if($conn->query($sql)){
// } else {
// }
$conn -> close();
?>


<?php include_once("footer.php");?>

<script type="text/javascript" src="./js/bootstrap.bundle.min.js" async></script>

</body>
</html>