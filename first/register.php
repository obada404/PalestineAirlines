<?php //include('Server.php')

$mas ="";
if(isset($_REQUEST['password']) && isset($_REQUEST['password2']))
if($_REQUEST['password'] == $_REQUEST['password2']) {

    if (isset($_REQUEST)) {
        @$mysqli = new mysqli("localhost", "root", "", "airline");

// Check connection
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        }

    }
    $name =$_REQUEST['username'];
    $email =$_REQUEST['email'];
    $birthdate = $_REQUEST['birthdate'];
    $password= $_REQUEST['password'];
    $address = $_REQUEST['address'];

if( $name&&$email&&$birthdate&&$password&&$address) {

    $sql = "INSERT INTO tourist ( name, email, password, birthdate, address) VALUES ('$name','$email', '$password', '$birthdate','$address ')";

    if ($mysqli->query($sql) === TRUE) {
        $mas= "New record created successfully";
        $_SESSION["logged_in"] = true;
        $_SESSION["email"] = $email;
        $result = $mysqli->query("SELECT * FROM tourist WHERE email = '".$email."' AND  password = '".$password."'");
        $row = $result->fetch_assoc();

        $_SESSION["id"] = $row["id"];
        $_SESSION["username"] = $row["name"];
        $_SESSION["birthdate"] = $row["birthdate"];
        $_SESSION["address"] = $row["address"];

        header("Location: index.php");
    } else {
        $mas= "Error: " .  "<br>" . $mysqli->error;
    }
}
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sign Up</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords">
    <link href="imagesss/Micon.jpg"  rel="icon">
    <!-- //Meta tag Keywords -->
    <link rel="stylesheet" href="assets/css/register.css" type="text/css" media="all" /><!-- Style-CSS -->
</head>
<body>

<!-- /form-26-section -->
<section class="form-26-1">
    <div class="form-26-mian">
        <div class="layer"style="background-image: url(5.jpg);background-size: cover" >
            <div class="wrapper">
                <div class="form-inner-cont">
                    <div class="forms-26-info">
                        <h2 style="font-family: 'Times New Roman'">Sign Up</h2>
                        <p>                                                                    </p>
                    </div>
                    <div class="form-right-inf">
                        <form action="#" method="post" class="signin-form"  style="background-color: #6A67CE">
                            <div class="forms-gds">
                                <div  class="form-input">
                                    <input style="font-family: 'Times New Roman'" type="text" name="username" placeholder="Name" required />
                                </div>
                                <div  class="form-input">
                                    <input style="font-family: 'Times New Roman'" type="email" name="email" placeholder="Email" required />
                                                                   </div>
                                <div  class="form-input">
                                    <input style="font-family: 'Times New Roman'" type="date" name="birthdate"  required />

                                </div>
                                <div  class="form-input">
                                    <input style="font-family: 'Times New Roman'" type="text" name="address" placeholder="address"   required />

                                </div>
                                <div  class="form-input">
                                    <input style="font-family: 'Times New Roman'" type="password" name="password" placeholder="Password" required />
                                </div>
                                <div  class="form-input">
                                    <input style="font-family: 'Times New Roman'" type="password" name="password2" placeholder="Confirm Password" required />
                                </div>
                                <div class="form-input"><button class="btn" style="font-family: 'Times New Roman'">Sign up</button></div>
                            </div>
                            <h6 style="text-shadow: 2px 2px 2px black;font-family: 'Times New Roman'" class="already">Already have an account? <a href="login.html"><span style="font-family: 'Times New Roman'">Login Here<span></span></span></a></h6>
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
<!---->
<!--<!DOCTYPE html>-->
<!---->
<!--<html>-->
<!---->
<!--<head>-->
<!---->
<!--    <title>Sign Up</title>-->
<!---->
<!--    <link rel="stylesheet" type="text/css" href="stylel.css">-->
<!--    <link href="imagesss/Micon.jpg"  rel="icon">-->
<!---->
<!--</head>-->
<!---->
<!--<body>-->
<!---->
<!--<div class="header">-->
<!---->
<!--    <h2>Sign Up</h2>-->
<!---->
<!--</div>-->
<!---->
<!---->
<!---->
<!--<form method="post" action="register.php">-->
<!--w-->
<!--    --><?php ////include('errors.php'); ?>
<!---->
<!--    <div class="input-group">-->
<!---->
<!--        <label>username</label>-->
<!---->
<!--        <input  required  type="text" name="username" >-->
<!---->
<!--    </div>-->
<!--    <div class="input-group">-->
<!---->
<!--        <label>Email</label>-->
<!---->
<!--        <input required type="email" name="email" >-->
<!---->
<!--    </div>-->
<!--    <div class="input-group">-->
<!---->
<!--        <label>birthdate</label>-->
<!---->
<!--        <input required type="date" name="birthdate" >-->
<!---->
<!--    </div>-->
<!--    <div class="input-group">-->
<!---->
<!--        <label>address</label>-->
<!---->
<!--        <input required type="text" name="address" >-->
<!---->
<!--    </div>-->
<!--    <div class="input-group">-->
<!---->
<!--        <label>Password</label>-->
<!---->
<!--        <input required type="password" id="password" name="password">-->
<!---->
<!--    </div>-->
<!---->
<!--    <div class="input-group">-->
<!---->
<!--        <label>Confirm password</label>-->
<!---->
<!--        <input required type="password" id="password2" name="password2">-->
<!---->
<!--    </div>-->
<!--    <div>-->
<!--        --><?php
//        if(isset($_REQUEST['password']) && isset($_REQUEST['password2'])){
//            if($_REQUEST['password'] != $_REQUEST['password2']) {
//                echo  "password not conform ";
//
//            }}  echo  $mas;?>
<!--    </div>-->
<!---->
<!---->
<!---->
<!--    <div class="input-group">-->
<!---->
<!--        <button type="submit" class="btn" name="reg_user" style="cursor: pointer">Sign Up</button>-->
<!---->
<!--    </div>-->
<!---->
<!--    <p>-->
<!---->
<!--        Already a member? <a href="login.php">Sign in</a>-->
<!---->
<!--    </p>-->
<!---->
<!--</form>-->
<!---->
<!--</body>-->
<!---->
<!--</html>-->
