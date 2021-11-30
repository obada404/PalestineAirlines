
<?php
//
//  session_start();
//
//
////if user is not logged in
//
//  if (!isset($_SESSION['username'])) {
//
//   $_SESSION['msg'] = "You must log in first";
//
//   header('location: login.php');
//
//  }
//
//
//
//  if (isset($_GET['logout'])) {
//
//   session_destroy();
//
//   unset($_SESSION['username']);
//
//
//   header("location: login.php");
//
//  }
//
//

session_start();
?>



<!DOCTYPE HTML>

<html>
<head>

    <title>Palestine AirLine</title>
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
    <style>




        .topnav {
            overflow: hidden;
            /*background-color: #e9e9e9;*/
        }

        .topnav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: white;
        }

        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }

        .topnav .search-container {
            float: right;
            color: white;
        }

        .topnav input[type=text] {
            padding: 6px;
            margin-top: 8px;
            font-size: 17px;
            border: none;
            color: white;
        }

        .topnav .search-container button {
            float: right;
            padding: 6px 10px;
            margin-top: 8px;
            margin-right: 16px;
            background: #ddd;
            font-size: 17px;
            border: none;
            cursor: pointer;

        }

        .topnav .search-container button:hover {
            background: #ccc;
        }

        @media screen and (max-width: 600px) {
            .topnav .search-container {
                float: none;
            }
            .topnav a, .topnav input[type=text], .topnav .search-container button {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }
            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
    </style>

    <style type="text/css">

        * {
            margin: 0;
            padding: 0;
        }
        /*body {*/
        /*	background:linear-gradient(45deg,#34495e 0%,#eeeeee 100% );*/
        /*}*/
        .fly-in-text {
            list-style: none;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
        .fly-in-text li {
            display: inline-block;
            /*margin-right: 2px;*/
            font-family: Cookie;
            font-weight: 300;
            font-size: 4em;
            color: #fff;
            opacity: 1;
            transition: all 2.5s ease;
        }
        .fly-in-text li:last-child {
            margin-right: 0;
        }
        .fly-in-text.hidden li {
            opacity: 0;
        }
        .fly-in-text.hidden li:nth-child(1) { transform: translateX(-200px) translateY(-200px); }
        .fly-in-text.hidden li:nth-child(2) { transform: translateX(20px) translateY(100px); }
        .fly-in-text.hidden li:nth-child(3) { transform: translateX(-150px) translateY(-80px); }
        .fly-in-text.hidden li:nth-child(4) { transform: translateX(10px) translateY(-200px); }
        .fly-in-text.hidden li:nth-child(5) { transform: translateX(-300px) translateY(200px); }
        .fly-in-text.hidden li:nth-child(6) { transform: translateX(20px) translateY(-20px); }
        .fly-in-text.hidden li:nth-child(7) { transform: translateX(30px) translateY(200px); }



        body {margin:0px; padding: 0px; background:url()}
        nav {
            background-color: #34495e;
            height: 80px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index:99;
            box-shadow:0px 2px 4px #34495e;

        }
        .wrapper {
            padding: 0px 10px;
            max-width: 1100px;
            text-align: center;
            margin:30px auto;
            height: 700px;
        }
        .parent {
            /*width: 300px;*/
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            margin: 20px;
            height: 380px;
            border: 4px solid #fff;
            /*v */
            position: relative;
            /*float: left;*/
            display: inline-block;
            cursor: pointer;
            box-shadow: 0px 0px 10px #999999;
        }
        .child {
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
            height: 100%;
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            transition: all .5s;
        }

        /* different images */
        /*.bg-one {background-image: url(la.jpg);}*/
        /*.bg-two {background-image: url(london.jpg);}*/
        .bg-one {background-image: url(imagesss/Mirage.jpg);}
        .bg-two {background-image: url(imagesss/joker.jpg);}
        .bg-three {background-image: url(imagesss/interstellar.jpg);}
        .bg-four {background-image: url(imagesss/aqua.jpg);}

        .bg-five {background-image: url(imagesss/jay.jpg);}
        .bg-six {background-image: url(imagesss/motherless.jpg);}
        .bg-seven {background-image: url(imagesss/voyage.jpg);}
        .bg-eight {background-image: url(imagesss/starwars.jpg);}

        .bg-nine {background-image: url(imagesss/irishman.jpg);}
        .bg-tin {background-image: url(imagesss/fast.jpg);}
        .bg-elvn {background-image: url(imagesss/lion.jpg);}
        .bg-twlv {background-image: url(imagesss/aladdin.jpg);}

        .bg-thirt {background-image: url(imagesss/maleficent.jpg);}
        .bg-fourt {background-image: url(imagesss/darkKnight.jpg);}
        .bg-fift {background-image: url(imagesss/fivefeet.jpg);}
        .bg-sixt {background-image: url(imagesss/johnw.jpg);}
        .bg-sevent {background-image: url(imagesss/toy.jpg);}
        .bg-eightt {background-image: url(imagesss/avengersendgame.jpg);}


        span {
            display: none;
            font-size: 35px;
            color: #ffffff !important;
            font-family: sans-serif;
            text-align: center;
            margin: auto;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            height: 50px;
            cursor: pointer;
        }
        .parent:hover .child, .parent:focus .child {
            transform: scale(1.1);
        }
        .parent:hover .child:before, .parent:focus .child:before {
            display: block;
        }
        .parent:hover span, .parent:focus span {
            display: block;
        }
        .child:before {
            content: "";
            display: none;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(52,73,94,0.75);
            border-top-right-radius: 20px;
            border-bottom-left-radius: 20px;
        }
    </style>

</head>
<body>

<!-- Header -->
<header id="header" class="alt">
    <div class="logo">
        <a href="index.html">Palestine AirLine <span>Cinema</span></a>


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
        <li><a href="index.html">Home</a></li>
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




<!-- Banner -->
<section class="banner full">
    <article>
        <img src="imagesss/wer.jpg" alt="" />
        <div class="inner">
            <header>
                <p style="align-content: center;font-size: 20px" >Excellent aviation services </p>

            </header>
        </div>
    </article>
    <article>
        <img src="imagesss/ve.jpg" alt="" />
        <div class="inner">
            <header>

                <p style="align-content: center;font-size: 20px" >Welcome our customers to the best tourist sites </p>

            </header>
        </div>
    </article>
    <article>
        <img src="imagesss/spider.jpg"  alt="" />
        <div class="inner">
            <header>

                <p style="align-content: center;font-size: 20px" >For a more enjoyable tourist trip, you only have to book a trip with us </p>

            </header>
        </div>
    </article>
    <article>
        <img src="imagesss/ali.jpg"   alt="" />
        <div class="inner">
            <header>
                <p style="align-content: center;font-size: 20px" >Now: I get five-star service only from Palestine Airline </p>

            </header>
        </div>
    </article>
    <article>
        <img src="imagesss/inv.jpg"  alt="" />
        <div class="inner">
            <header>

                <p style="align-content: center;font-size: 20px" >We have distinguished services that allow you to travel with ease </p>

            </header>
        </div>
    </article>
</section>




<section id="one hdr" class="wrapper style2" style="padding-left: 50px;height: 630px"data-aos="flip-up">
    <div class="inner">

        <section style="float: left;margin-left:0px;margin-right: 120px">
            <header data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine" style="font-size: 30px;margin-top: 10px" ><B style="
							color:#34495e;font-family: Courier New, monospace;text-shadow:4px 1px 4px #999999">Now trial</B></header>
            <form action="search.php">
            <section style="width:410px;height: 250px">
                <section style="width: 180px; height: 250px;margin:10px;margin-right: 20px; float: left"data-aos="flip-left">
                    <div class="parent right" style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-one">
							<span >
								<h1 style="color: white;font-family: Courier New, monospace">Madrid</h1>
	                            <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "  value="Madrid" type="submit" name="cuntry"> <a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=CSojqRLdbec" style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>


							</span>
                        </div>
                    </div>
                </section>

                <section style="width: 180px; height: 250px;float: left;margin: 10px" data-aos="flip-right">
                    <div class="parent right"  style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-two">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace">Rome</h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee  "><a href="https://www.youtube.com/watch?v=cUVa5vfRdrc"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" value="Rome" type="submit" name="cuntry" style="color: white;box-shadow: 0 0 8px #eeeeee "><a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>
            </section>

            <section style="width: 410px;height: 250px">
                <section style="width: 180px; height: 250px;float: left;margin: 10px;margin-right: 20px"  data-aos="flip-left">
                    <div class="parent right" style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-three">
								<span>
								<h1 style="color: white;font-family: Courier New, monospace">Jerusalem</h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee  "><a href="https://www.youtube.com/watch?v=cUVa5vfRdrc"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" value="Jerusalem" type="submit" name="cuntry" style="color: white;box-shadow: 0 0 8px #eeeeee "><a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>

                <section style="width: 180px; height: 250px;float: left;margin: 10px" data-aos="flip-right">
                    <div class="parent right" style="width: 200px;height: 250px"onclick="">
                        <div class="child bg-four">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace" >Cairo</h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=NdUIzOWAOqc"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Cairo" type="submit" name="cuntry"><a  style="color: white"  ><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>
            </section>
        </section >

        <section style="float: left">
            <header data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine" style="font-size: 30px;padding-top: 10px" ><B style="color:#34495e;font-family: Courier New, monospace;text-shadow:4px 1px 4px #999999"class="line anim-typewriter"> Flight Coming Soon</B></header>

            <section style="width:410px;height: 250px ">
                <section style="width: 180px; height: 250px;margin:10px;margin-right: 20px; float: left"data-aos="flip-left">
                    <div class="parent right" style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-five">
							<span >
								<h1 style="color: white;font-family: Courier New, monospace">Washington</h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=WJfQ2jypolMstyle="><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Washington" type="submit" name="cuntry" ><a style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>

                <section style="width: 180px; height: 250px;float: left;margin: 10px" data-aos="flip-right">
                    <div class="parent right"  style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-six">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace;font-size: 25px">Brussels</h1>
								<button class="button button2 button9" style="color: white ;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=_Xdy3xR8u-w"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Brussels" type="submit" name="cuntry" ><a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>
            </section>

            <section style="width: 410px;height: 250px">
                <section style="width: 180px; height: 250px;float: left;margin: 10px;margin-right: 20px" data-aos="flip-left">
                    <div class="parent right" style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-seven">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace">Riyadh <br></h1>
								<button class="button button2 button9" style="color: white ;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=iD-76p_U7RQ"style="color: white"><p style=" font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Riyadh" type="submit" name="cuntry" ><a style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>

                <section style="width: 180px; height: 250px;float: left;margin: 10px" data-aos="flip-right">
                    <div class="parent right" style="width: 200px;height: 250px"onclick="">
                        <div class="child bg-eight">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace" >Amman</h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=1T9V6qHizo8"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Amman" name="cuntry"  type="submit"><a style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </div>

</section>
<!-- Two -->
<section  class="wrapper style3" style="padding-top: 150px;padding-bottom: 150px;height: 400px;max-width: 2000px">
    <div class="inner">
        <header class="align-center"data-aos="fade-right">
            <p>Travel to your favorite countries and experience new sensations you have never felt before</p>
            <h2 style="font-weight: 300;line-height: 1.5;margin: 0 0 1rem 0;font-size: 1.75rem" data-aos="fade-left">Feel a Whole New World !</h2>
        </header>
    </div>
</section>

<!-- Three -->


<section id="three" class="wrapper style2" style="height: 640px;width: 1000px"data-aos="flip-up">
    <div class="inner">
        <header style="font-size: 30px;padding-top: 10px" data-aos="fade-left"><B style="color:#34495e;font-family:Courier New, monospace;text-shadow:4px 1px 4px #999999"data-aos="fade-left">Most of the countries request tourism</B></header>

        <section style="float: left;margin-left:50px;margin-right: 10px">
            <section style="width:410px;height: 250px ">
                <section style="width: 180px; height: 250px;margin:10px;margin-right: 20px; float: left"data-aos="flip-left">
                    <div class="parent right" style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-nine">
							<span >

								<h1 style="color: white;font-family: Courier New, monospace;font-size: 25px">Ankara</h1>
								<button class="button button2 button9" style="color: white ;box-shadow: 0 0 8px #eeeeee"><a href="https://www.youtube.com/watch?v=qZrKXrAPscU"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Ankara" type="submit" name="cuntry" ><astyle="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>

                <section style="width: 180px; height: 250px;float: left;margin: 10px" data-aos="flip-right">
                    <div class="parent right"  style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-tin">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace ;font-size: 20px" >India</h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=I5LIEtUvkzo"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="New Delhi" type="submit" name="cuntry"><a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>
            </section>

            <section style="width: 410px;height: 250px">
                <section style="width: 180px; height: 250px;float: left;margin: 10px;margin-right: 20px"  data-aos="flip-left">
                    <div class="parent right" style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-elvn">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace;font-size: 20px">Beijing<br></h1>

								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=0-AIsNobAHg" style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Beijing" type="submit" name="cuntry"><a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>

                <section style="width: 180px; height: 250px;float: left;margin: 10px" data-aos="flip-right">
                    <div class="parent right" style="width: 200px;height: 250px"onclick="">
                        <div class="child bg-twlv">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace">Seoul</h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=UTB5NKOychw" style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Seoul" type="submit" name="cuntry"><a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>
            </section>
        </section >

        <section style="float: left">
            <section style="width:410px;height: 250px ">
                <section style="width: 180px; height: 250px;margin:10px;margin-right: 20px; float: left"data-aos="flip-left">
                    <div class="parent right" style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-thirt">
							<span >
								<h1 style="color: white;font-family: Courier New, monospace;font-size: 25px">London</h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=4Rs2P0p8lCY"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="London" type="submit" name="cuntry"><a style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>

                <section style="width: 180px; height: 250px;float: left;margin: 10px" data-aos="flip-right">
                    <div class="parent right"  style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-fourt">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace;font-size: 20px">Ottawa<br></h1>
								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=TJ9SmmkmZPU"style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "  value="Ottawa" type="submit" name="cuntry"><a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>
            </section>

            <section style="width: 410px;height: 250px">
                <section style="width: 180px; height: 250px;float: left;margin: 10px;margin-right: 20px" data-aos="flip-left">
                    <div class="parent right" style="width: 200px;height: 250px" onclick="">
                        <div class="child bg-fift">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace;font-size: 20px">Mexico <br></h1>

								<button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee "><a href="https://www.youtube.com/watch?v=q-fj3K15oYU" style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
                                <button class="button button2 button9" style="color: white;box-shadow: 0 0 8px #eeeeee " value="Mexico" type="submit" name="cuntry"><a  style="color: white"><p style="font-size: 9px">Get Tickets</p></a></button>
							</span>
                        </div>
                    </div>
                </section>

                <section style="width: 180px; height: 250px;float: left;margin: 10px" data-aos="flip-right">
                    <div class="parent right" style="width: 200px;height: 250px"onclick="">
                        <div class="child bg-sevent">
							<span>
								<h1 style="color: white;font-family: Courier New, monospace;font-size: 25px" >Buenos Aires</h1>
								<button class="button button2 button9" style="color: white ;box-shadow: 0 0 8px #eeeeee"><a href="https://www.youtube.com/watch?v=qTcRu2VcQKQ" style="color: white"><p style="font-size: 9px">Sightseeing</p></a></button>
								<button class="button button2 button9" style="color: white ;box-shadow: 0 0 8px #eeeeee" value="Buenos Aires" type="submit" name="cuntry"><a  style="color: white"><p style="font-size: 9px">get Tekit</p></a></button>
							</span>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </div>
</section>
</form>

<div id="reviews" class="section wb parallaxie" style="background: url('imagesss/cenima6.jpg');background-repeat: no-repeat;background-size: cover">
    <div class="container">
        <div class="section-title text-center">
            <h3 style="font-family: Courier New, monospace;text-shadow:0px 0px 4px white;font-weight: bold"data-aos="fade-left">Reviews</h3>
            <p data-aos="fade-right">We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
        </div><!-- end title -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="testi-carousel owl-carousel owl-theme">

                    <div class="testimonial clearfix">
                        <figure class="testimonial_img">
                            <img src="uploads/testi_01.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="desc">
                            <h3 data-aos="fade-right"
                                data-aos-offset="300"
                                data-aos-easing="ease-in-sine"><i class="fa fa-quote-left"></i> Wonderful Place!</h3>
                            <p data-aos="fade-left"
                               data-aos-offset="300"
                               data-aos-easing="ease-in-sine">I felt so comfort while watching ma favorate movie, the whole place is stunning.</p>
                        </div>
                        <div class="testi-meta">
                            <h4>sara abadi</h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <figure class="testimonial_img">
                            <img src="uploads/testi_02.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Awesome Show!</h3>
                            <p>The way you present the tourist places encouraged me to travel</p>
                        </div>
                        <div class="testi-meta">
                            <h4>Jacques Philips</h4>
                        </div>
                        <!-- end testi-meta -->
                    </div>
                    <!-- end testimonial -->

                    <div class="testimonial clearfix">
                        <figure class="testimonial_img">
                            <img src="uploads/testi_03.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="desc">
                            <h3><i class="fa fa-quote-left"></i> Great Team!</h3>
                            <p>The people who work there are so kind and they've done there gob very well.</p>
                        </div>
                        <div class="testi-meta">
                            <h4>Venanda Mercy</h4>
                        </div>
                        <!-- end testi-meta -->
                    </div><!-- end te
							stimonial -->
                </div><!-- end carousel -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<section id="cont"  class="wrapper style2 aos-init aos-animate" style="height: 400px;width: 800px" data-aos="flip-up">
    <div class="inner">
        <header style="font-size: 30px;padding-top: 10px" data-aos="fade-left"><B style="color:#34495e;font-family:Courier New, monospace;text-shadow:4px 1px 4px #999999"data-aos="fade-left">Contact Us</B></header>
        <p data-aos="fade-right">If you have any constructive comment or even any criticism, PLEASE tell us!</p>

        <div class="content-w3ls agileits w3 wthree w3-agile w3-agileits agileinfo agile">
            <form action="#" method="post" class="form-agileits">
						<pre>
						<input style="font-family: 'Times New Roman'" type="text" id="username" name="username" placeholder="USER NAME" title="Please enter your First Name" required="" data-aos="fade-left"> <input style="font-family: 'Times New Roman'" type="email" id="email" name="email" placeholder="MAIL@EXAMPLE.COM" title="Please enter a Valid Email Address" required=""data-aos="fade-right"> <textarea style="font-family: 'Times New Roman'" id="message" name="message" placeholder="YOUR MESSAGE" title="Please enter Your Comments"data-aos="fade-left"></textarea>
<input style="box-shadow: 0 0 8px #3C3D41;color: white;background: #3C3D41;font-size: 20px;border-radius: 20px;font-family: Courier New, monospace" type="submit" class="sign-in" value="Submit">
						</pre>
            </form>
        </div>

    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div style="width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
    <div class="copyright">
        &copy; Untitled. All rights reserved.
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
<script
        src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">

    $(function() {

        setTimeout(function() {
            $('.fly-in-text').removeClass('hidden');
        }, 500);

    })();

</script>

<!-- ALL JS FILES -->
<script src="js/all.js"></script>
<!-- Camera Slider -->
<!--		<script src="js/jquery.mobile.customized.min.js"></script>-->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/parallaxie.js"></script>
<script src="js/headline.js"></script>
<script src="js/jquery.appear.min.js"></script>
<script src="js/skill.bars.jquery.js"></script>
<!--		<script src="js/responsiveslides.min.js"></script>-->
<!-- Contact form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.fatNav.min.js"></script>
<!--		<script src="js/main.js"></script>-->
<script src="js/custom.js"></script>
<script src="js/headline.js"></script>
<script src="js/hoverdir.js"></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/map.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/portfolio.js"></script>
<script src="js/retina.js"></script>
<script src="js/scroll.js"></script>


</body>
</html>