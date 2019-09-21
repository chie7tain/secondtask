
<?php
//database connection and co
require_once 'connect.php';

//form validation
if (isset($_POST['submit'])) {
	$fullname = filter_input(INPUT_POST, 'fullname');
    $username = filter_input(INPUT_POST, 'username');
    $user_mail = filter_input(INPUT_POST, 'user_mail');
    $user_password = filter_input(INPUT_POST, 'user_password');
    $retype_password = filter_input(INPUT_POST, 'retype_password');

    if ($user_password != $retype_password) {
        echo "<script language='javascript'>".'alert("Passwords Does Not Match")'.'</script>';
    } else {
        if ($fullname == "" || $username == "" || $user_mail == "" || $user_password == "" || $retype_password == "") {
            echo "<script language='javascript'>".'alert("Input All Data.")'.'</script>';
        } else {
            $reg_password = md5($user_password);
            $reg_query = "INSERT INTO users (fullname, username, email, password)
                                                VALUES ('{$fullname}', '{$username}', '{$user_mail}', '{$reg_password}')";
            $reg_result = mysqli_query($link, $reg_query);

            if ($reg_result) {
                header('location:login.php');
            } else {
                echo "<script language='javascript'>".'alert("We Could Not Register You. Check Back.")'.'</script>';
            }
        }
    }
}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
        <script src="https://kit.fontawesome.com/52f2afaff9.js" crossorigin="anonymous"></script>
        <!-- <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script> -->
    </head>
    <body>
        <nav>
            <div class="nav-container">
                <div>
                    <h2 class="logo"><a href="index.html"></a>Avengers</h2>
                </div>
                <ul >
                    <!-- <button class="nav-btn">X</button> -->
                    <li ><a href="index.html" class="nav-links">Home</a></li>
                    <li><a class="nav-links" href="signup.php">Sign Up</a></li>
                    <li><a class="nav-links" href="login.php">Login</a></li>
                    <li><a class="nav-links" href="about.html">About us</a></li>
                </ul>
            </div>
            </nav>
        <form method="post">
            <fieldset>
                <!-- <legend>Register</legend> -->
                <div class="login-form-container">
                    <div class="heading-container">
                        <h1 class="heading">SIGNUP</h1>
                    </div>
                    <!-- for username -->
                    <div  class="username-container inputField-container">
                        <label for="username">Fullname</label>
                        <i class="far fa-user"></i>
                        <input type="text" name="fullname" class="input-field" placeholder="John Wick">

                        <label for="username">Username</label>
                        <i class="material-icons">fingerprint</i><input type="text" placeholder="username" id="username" class="input-field" name="username">

                            <label for="user-email">Email:</label>
                            <span class="icon-input">
                                <!-- <i class="far fa-user fas-sm"></i> -->
                                <i class="material-icons md-dark">email</i>
                            </span> <input id="user-email" class="input-field" type="email" name="user_mail" placeholder="example@mail.com">
                        </div>
                        <!-- for password -->
                        <div class="password-container inputField-container">
                            <label for="password">Password:</label>
                            <i class="material-icons md-dark">lock</i> <input id="password" class="input-field" type="password" name="user_password" placeholder="type your password">
                        </div>
                        <!--  -->
                        <div class="password-container inputField-container">
                                <label for="retype-password">Retype Password:</label>
                                <i class="material-icons md-dark">lock</i> <input id="retype-password" class="input-field" type="password" name="retype_password" placeholder="retype your password">
                            </div>
                            <!--  -->
                        <div class="button-container">
                            <button type="submit" value="login" name="submit" class="btn">Register</button>
                        </div>
                        <!-- <h4>or login using:</h4> -->
                        <!-- links to social handles -->
                        <!-- <i class="fab fa-facebook"></i> -->
                        </div>     
            </fieldset>
        </form>
        <!-- <script src="style.js"></script> -->
    </body>
</html>