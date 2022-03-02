
<?php
require ('user_auth.php')
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign In</title>
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
            <p class="text-1">Sign In</p>
            <p class="text-2">Jojos Boutick</p>
        </div>

        <form class="form-detail" action="sign_in.php" method="post" id="myform">

            <div class="form-row">
                <label for="your_email">E-MAIL</label>
                <input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
            </div>
            <div class="form-row">
                <label for="password">PASSWORD</label>
                <input type="password" name="password" id="password" class="input-text" required>
            </div>

            <div class="form-row-last">
                <input type="submit" class="register" name="login" value="Login"  </input>
            </div>
        </form>
    </div>
</div>

</body>
</html>
