<?php


require ('functions.php');

//Register users section

    if (isset($_POST['register'])) {
        //Initialise variables
        $username = "";
        $email = "";
        $password_1 = "";
        $password_2 = "";


// Check connection

        if ($con) {
//            echo "success";
            //populate variables
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password_1 = mysqli_real_escape_string($con, $_POST['password']);
            $password_2 = mysqli_real_escape_string($con, $_POST['confirm_password']);
            $password = md5($password_1); //this encrypts the password

            if ($password_1 != $password_2) {
                array_push($errors, "Passwords do not match");
            }

            //check database for existing user
//we'll use email to check
            $user_check_query = /** @lang text */
                "SELECT * FROM user WHERE email='$email' LIMIT 1";

            $result = mysqli_query($con, $user_check_query) or die(mysqli_error($con));
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                if ($user['email'] === $email) {
                    array_push($errors, "Email already exists");
                }

            }
//REGISTER USERS
            if (count($errors) == 0) {
                $password = md5($password_1); //this encrypts the password

                $query = ("INSERT INTO user
    (username, 
    email,
     password_1,
     password_2, 
     ) VALUES ('$username','$email','$password_1','$password_2')");

                mysqli_query($con, $query); //runs query on database

                $_SESSION['email'] = $email;
                $_SESSION['success'];
                echo "You are now registered";

                //redirect user
                header('Location:index.php');
            } //     in case connection does not work
            else {

                die("Connection failed: " . mysqli_connect_error());

            }
        }
    }
//LOGIN USER
//if(isset($_POST['login'])) {
//    if ($con){
//        $email = $_POST['email'];
//        $password = $_POST['password'];
//        if (empty($email)) {
//            array_push($errors, "email is required");
//
//        }
//        if (empty($password)) {
//            array_push($errors, "password is required");
//        }
//        {
//            $password = md5($password);
//            $query = "SELECT * FROM user WHERE email='$email' AND password_1='$password'";
//            $result = mysqli_query($con, $query) or die(mysqli_error($con));
//            $user = mysqli_fetch_assoc($result);
//            if ($user) {
//                $_SESSION['email'] = $email;
////            $_SESSION['role'] = $role;
//
//                $_SESSION['success'] = "logged in successfully";
//                header('Location: index.php');
//            } else {
//                echo 'Wrong Password';
//                array_push($errors, "Wrong username or password. Please try again");
//            }
//        }
//    } //in case connection does not work
//    else {
//
//        die("Connection failed: " . mysqli_connect_error());
//    }
//}





?>
