
<?php

session_start();

$mas ="obada";




    $mysqli = new mysqli("localhost", "root", "", "airline");

// Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

if(isset($_REQUEST['username']) and isset($_REQUEST['email'])  and isset($_REQUEST['address']) and isset($_REQUEST['birthday'])  ){



    $id = $_SESSION["id"];
    $name =$_REQUEST["username"];
    $email =$_REQUEST["email"];
    $birthdate = $_REQUEST["birthday"];
    $address = $_REQUEST["address"];




    $sql = "UPDATE `tourist` SET `name` = '$name', `email` = '$email', `birthdate` = '$birthdate', `address` = '$address' WHERE `tourist`.`id` = $id;";

    if ($mysqli->query($sql) === TRUE) {
        $_SESSION["username"]=$_REQUEST["username"];
        $_SESSION["email"]=$_REQUEST["email"];
        $_SESSION["birthdate"] = $_REQUEST["birthday"];
        $_SESSION["address"]= $_REQUEST["address"];
        $mas= " information updated ";
    } else {
        $mas=  "error";
    }

}






?>


<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="imagesss/Micon.png"  rel="icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="TWstyle.css">

    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/modernizr.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="stylel.css">
    <link href="imagesss/Micon.jpg"  rel="icon">
</head>

<body>
<header id="header" class="alt">
    <div class="logo">
        <a href="index.html">Palestine AirLine <span> </span></a>


    </div>


    <a href="#menu">Menu</a>
    <a href="search.html" class="w3-bar-item w3-button w3-right w3-hover-red w3-text-grey"><i class="fa fa-search"></i></a>

</header>

<!-- Nav -->
<nav id="menu" >

    <ul class="links">

        <li > 		<a id="username1"  href="profile.php">  <?php if(isset($_SESSION["logged_in"])    ){
                    echo $_SESSION["email"] ;
                    echo "       " ;
                    echo $_SESSION["username"];

                }?>     </a>							</li>
        }
        <!--        /*onclick="document.getElementById('id01').style.display='block'"*/-->
        <?php if( !isset($_SESSION["logged_in"])    ){
            echo ' <li style="font-weight: bold;font-size: 20px"  ><a  href="login.php" >Login  </a></li>';

        }?>
        <li><a href="index.php">Home</a></li>
        <li><a href="#"> search about ticket</a></li>
        <li><a >New trips</a></li>
        <li><a href="#one hdr">trips Soon</a></li>
        <li><a href="#reviews">Reviews</a></li>
        <li><a href="#cont">Contact Us</a></li>
        <?php if( isset($_SESSION["logged_in"])    ){
            echo ' <li><a href="logout.php">   logout</a></li>';

        }?>

    </ul>
</nav>
<div class="header">

    <h2> your information </h2>

</div>


<?php
if(isset($sql))
if ($mysqli->query($sql) === TRUE) {
    echo '<form>
<h1> information updated</h1>
</form> ';
}?>

<form  id="formlog" method="get" action="profile.php" <?php
if(isset($sql))
if ($mysqli->query($sql) === TRUE) {
 echo 'style="display: none"';
}?>>

    <?php //include('errors.php'); ?>
    <div class="input-group">

        <label>ID</label>

        <input type="text"  name="id" id="id"  value="<?php echo  $_SESSION["id"];?> " readonly>

    </div>

    <div class="input-group">

        <label>username</label>

        <input type="text" name="username" id="username"  value="<?php echo   $_SESSION["username"];?>" >

    </div>

    <div class="input-group">

        <label>email</label>

        <input type="text" name="email" id="email"  value="<?php echo   $_SESSION["email"];?> ">

    </div>

    <div class="input-group">

        <label>birthday</label>

        <input type="date" name="birthday" id="birthday" value="<?php echo     $_SESSION["birthdate"];?>" >

    </div>



    <div class="input-group">

        <label>address</label>

        <input type="text" name="address" id="address"  value="<?php echo   $_SESSION["address"];?>">

    </div>

    <div>
    <?php echo  $mas ; ?>
    </div>
    <div class="input-group">

        <button type="submit" class="btn"  style="cursor: pointer"> Save </button>

    </div>

    <p>
        <?php echo  $mas ; ?>


    </p>

</form>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>