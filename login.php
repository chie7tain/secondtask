
<?php
//database connection
require_once 'connect.php';

//start session
session_start();

//login
if (isset($_POST['submit'])) {
    $user_mail = filter_input(INPUT_POST, 'user_mail');
    $user_password = filter_input(INPUT_POST, 'user_password');
    $password_hash = md5($user_password);

    //confirm existence
    $check = "SELECT * from users where email = '$user_mail' and password = '$password_hash' LIMIT 1";
    $result = mysqli_query($link, $check);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        //$_SESSION['firstname'] = $user['firstname'];
        ($edit) ? header("location:dashboard.php") : header("location:dashboard.php");
    } else {
        echo "<script language='javascript'>".'alert("Incorrect Data Combination.")'.'</script>';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
        <title>Avengers</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
        <script src="https://kit.fontawesome.com/52f2afaff9.js" crossorigin="anonymous"></script>
        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
            crossorigin="anonymous"></script>
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
        <form method="POST">
            <fieldset>
            <div class="login-form-container">
                    <div class="heading-container">
                        <h1 class="heading">LOGIN</h1>
                    </div>
                    <!-- for email -->
                    <div  class="username-container inputField-container">
                            <label for="username">Email:</label>
                            <span class="icon-input">
                                <!-- <i class="far fa-user fas-sm"></i> -->
                                <i class="material-icons md-dark">email</i>
                            </span> <input id="username" class="input-field"  type="email" name="user_mail" placeholder="example@mail.com">
                        </div>
                        <!-- for password -->
                        <div class="password-container inputField-container">
                            <label for="password">Password:</label>
                            <i class="material-icons md-dark">lock</i> <input id="password" class="input-field" type="password" name="user_password" placeholder="type your password">
                        </div>
                        <a href="#"><h4>forgot password?</h4></a>
                        <div class="button-container">
                            <button type="submit" value="login" class="btn" name="submit">LOGIN</button>
                        </div>
                        <!-- <h4>or login using:</h4> -->
                        <!-- links to social handles -->
                        <!-- <i class="fab fa-facebook"></i> -->
                        <!-- <h4>or sign Up Using</h4> -->
                        <h4><a href="signUp.html">SIGN UP</a></h4>
                        </div>            
            </fieldset>
        </form> 
        <script src="style.js"></script>     
    </body>
</html>