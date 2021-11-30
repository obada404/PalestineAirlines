



<!DOCTYPE html>

<html>


<head>
    <title>Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords">

    <!-- //Meta tag Keywords -->
    <link rel="stylesheet" href="assets/css/login.css" type="text/css" media="all" /><!-- Style-CSS -->
    <link href="imagesss/Micon.jpg"  rel="icon">
</head>
<body>
<?php
//include('Server.php')
session_start();


    @$mysqli = new mysqli("localhost", "root", "", "airline");

// Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    if( isset($_REQUEST['email'])&& isset($_REQUEST['password'])){
        $email =$_REQUEST['email'];
        $password= $_REQUEST['password'];


        $result1 = $mysqli->query("SELECT email, password FROM tourist WHERE email = '".$email."' AND  password = '".$password."'");

        if(($result1)->num_rows > 0 )
        {
            $_SESSION["logged_in"] = true;
            $_SESSION["email"] = $email;
            $result = $mysqli->query("SELECT * FROM tourist WHERE email = '".$email."' AND  password = '".$password."'");
            $row = $result->fetch_assoc();

            $_SESSION["id"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["birthdate"] = $row["birthdate"];
            $_SESSION["address"] = $row["address"];

            header("Location: index.php");
        }
        else
        {
            echo 'The username or password are incorrect!';
        }

    }



?>
<!-- /form-26-section -->
<section class="form-26">
    <div class="form-26-mian">
        <div class="layer" style="background-image: url(image.jpg);background-size: cover">
            <div class="wrapper">
                <div class="form-inner-cont">
                    <div class="forms-26-info">
                        <h2 style="font-family: 'Times New Roman'">Login</h2>
                        <p>                                                          </p>
                    </div>
                    <div class="form-right-inf">
                        <form  method="get" class="signin-form">
                            <div class="forms-gds">
                                <div  class="form-input">
                                    <input style="font-family: 'Times New Roman'" type="email" name="email" placeholder="Email" required />
                                </div>
                                <div  class="form-input">
                                    <input style="font-family: 'Times New Roman'" type="password" name="password" placeholder="Password" required />
                                </div>
                                <div class="form-input"> <button type="submit" class="btn" name="login_user" style="cursor: pointer">Login</button></div>
                            </div>
                            <h6 style="text-shadow: 2px 2px 2px black;font-family: 'Times New Roman'" class="already"> Dont have an account? <a href="register.html"><span style="font-family: 'Times New Roman'">Sign Up Here<span></span></span></a></h6>
                        </form>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- //form-26-section -->
</body>
</html>





























<!--<head>-->
<!---->
<!--    <title>Login</title>-->
<!---->
<!--    <link rel="stylesheet" type="text/css" href="stylel.css">-->
<!--    <link href="imagesss/Micon.jpg"  rel="icon">-->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--<div class="header">-->
<!---->
<!--    <h2>Login</h2>-->
<!---->
<!--</div>-->
<!---->
<!---->
<!---->
<!--<form  id="formlog" method="post" action="login.php">-->
<!---->
<!--    --><?php ////include('errors.php'); ?>
<!---->
<!--    <div class="input-group">-->
<!---->
<!--        <label>username</label>-->
<!---->
<!--        <input type="text" name="email" id="email" >-->
<!---->
<!--    </div>-->
<!---->
<!---->
<!---->
<!---->
<!--    <div class="input-group">-->
<!---->
<!--        <label>Password</label>-->
<!---->
<!--        <input type="password" name="password" id="password">-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="input-group">-->
<!---->
<!--        <button type="submit" class="btn" name="login_user" style="cursor: pointer">Login</button>-->
<!---->
<!--    </div>-->
<!---->
<!--    <p>-->
<!---->
<!--        Not yet a member? <a href="register.php">Sign up</a>-->
<!---->
<!--    </p>-->
<!---->
<!--</form>-->
<!---->
<!--</body>-->
<!---->
<!--</html>-->