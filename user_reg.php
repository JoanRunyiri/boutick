<?php
ob_start()
?>
<?php
require ('functions.php');
//request method post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //Call ad to user method
    $user->addTouser($_POST['username'],$_POST['email'],$_POST['password'],$_POST['confirm_password']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v7 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
<!--	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">-->
	<!-- Jquery -->
<!--	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">-->
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v7">
	<div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
				<img src="pics2/form-v7.jpg" alt="form">
				<p class="text-1">Sign Up</p>
				<p class="text-2">Jojos Boutick</p>
			</div>

			<form class="form-detail" action="user_reg.php" method="post" id="myform">

				<div class="form-row">
					<label for="username">USERNAME</label>
					<input type="text" name="username" id="username" class="input-text">
				</div>
				<div class="form-row">
					<label for="your_email">E-MAIL</label>
					<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
				</div>
				<div class="form-row">
					<label for="password">PASSWORD</label>
					<input type="password" name="password" id="password_1" class="input-text" required>
				</div>
				<div class="form-row">
					<label for="comfirm_password">CONFIRM PASSWORD</label>
					<input type="password" name="confirm_password" id="password_2" class="input-text" required>
				</div>
				<div class="form-row-last">
                    <input type="submit"  name="register" value="Register" class="register" </button>
					<p>Or<a href="sign_in.php">Sign in</a></p>
				</div>
			</form>
		</div>
	</div>

</body>
</html>