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

    <?php include_once("db.php");?>
	<?php include_once("menu.php");?>
    <form class="form-horizontal container" method="post" action="register_user.php">
                            
        <div class="form-group">
            <label for="name" class="cols-sm-2 control-label">Your Name</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="name" id="name" required placeholder="Enter your Name"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="cols-sm-2 control-label">Your Email</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                    <input type="email" class="form-control" name="email" id="email" required placeholder="Enter your Email"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="username" class="cols-sm-2 control-label">Username</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" name="username" id="username" required placeholder="Enter your Username"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="cols-sm-2 control-label">Password</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="password" class="form-control" name="password" id="password" required placeholder="Enter your Password"/>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="phone" class="cols-sm-2 control-label">Phone Number</label>
            <div class="cols-sm-10">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                    <input type="tel" class="form-control" name="phone" id="phone" required placeholder="Phone Number"/>
                </div>
            </div>
        </div>

        <div class="form-group ">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
        </div>
        <div class="login-register">
            <a href="index.php">Login</a>
            </div>
    </form>

    <?php include_once("footer.php");?>

	<script type="text/javascript" src="./js/bootstrap.bundle.min.js" async></script>
	
</body>
</html>