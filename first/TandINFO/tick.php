<!---->
<?php
//session_start();
//$mysqli = new mysqli("localhost", "root", "", "airline");
//
//// Check connection
//if ($mysqli->connect_errno) {
//    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
//    exit();
//}
//
//$valuofseats2 =$_SESSION["valuofseats2"];
//$na ="1";
//$n= $_COOKIE["Numseats"];
//for ($i=0;$i<$_COOKIE["Numseats"] -1;$i++){
//    if(isset($_COOKIE[$na])){
//        $int = intval(preg_replace('/[^0-9]+/', '', $_COOKIE[$na++]), 10);
//        $valuofseats2[$int]=1;
//        echo $int;}
//}
//$ins="UPDATE `flight` SET `economy_seats_value` = '$valuofseats2' WHERE `flight`.`Id` = $id;";
//$mysqli->query($ins);
//if (isset($_SERVER['HTTP_COOKIE'])) {
//    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
//    foreach($cookies as $cookie) {
//        $parts = explode('=', $cookie);
//        $name = trim($parts[0]);
//        setcookie($name, '', time()-1000);
//        setcookie($name, '', time()-1000, '/');
//    }
//}
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Your Details</title>
    <link href="images/Micon.jpg"  rel="icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="creditstyle.css.css" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Credit Card Style Payment Widget A Flat Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template,
Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Webdesign" />
    <script type="application/x-javascript"> addEventListener("load"), function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //For - Mobile - Apps -->



    <style>
        .box
        {
            width:800px;
            margin:0 auto;
        }
        .active_tab1
        {
            background-color:#fff;
            color:#333;
            font-weight: 600;
        }
        .inactive_tab1
        {
            background-color: #f5f5f5;
            color: #333;
            cursor: not-allowed;
        }
        .has-error
        {
            border-color:#cc0000;
            background-color:#ffff99;
        }
    </style>
    <style>
        /*--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
--*/

        /*-- Reset Code --*/
        html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
        article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
        ol,ul{list-style:none;}
        blockquote,q{quotes:none;}
        blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
        table{border-collapse:collapse;border-spacing:0;}
        /* start editing from here */
        a{text-decoration:none;}
        .txt-rt{text-align:right;}/* text align right */
        .txt-lt{text-align:left;}/* text align left */
        .txt-center{text-align:center;}/* text align center */
        .float-rt{float:right;}/* float right */
        .float-lt{float:left;}/* float left */
        .clear{clear:both;}/* clear float */
        .pos-relative{position:relative;}/* Position Relative */
        .pos-absolute{position:absolute;}/* Position Absolute */
        .vertical-base{	vertical-align:baseline;}/* vertical align baseline */
        .vertical-top{	vertical-align:top;}/* vertical align top */
        .underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
        nav.vertical ul li{	display:block;}/* vertical menu */
        nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
        img{max-width:100%;}
        /*img[width],img[height]{width:auto;height:auto;} wordpress hack to reset the attributes (while making responsive) */
        /*-- Reset Code --*/

        /*-- Fonts --*/
        @font-face{
            font-family: 'Oxygen-Regular';
            /*src:url(../fonts/Oxygen-Regular.ttf) format('truetype');*/
        }
        @font-face{
            font-family: 'FrancoisOne';
            /*src:url(../fonts/FrancoisOne.ttf) format('truetype');*/
        }
        /*-- Fonts --*/

        /*-- Index-Page-Styling --*/
        body {
            background-image: url("images/cenima6.jpg") ;
            background-size: cover;

            font-family: 'Oxygen-Regular';
        }

        .clear {
            clear: both;
        }

        h1 {
            text-align: center;
            margin: 50px 0;
            font-size: 40px;
            color: #333;
            font-family: 'FrancoisOne';
        }

        .container {
            background-color: #277DA8;

            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            width: 500px;
            margin: 50px auto;
            border-radius: 5px;
        }
        .paymentbox {
            background: url("../images/visa.png") no-repeat 400px -5px;
            padding: 20px;
        }

        .paymentbox p {
            color: #000000;
            font-size: 20px;
            font-family: candara;
            margin-left: 5px;
            font-weight: bold;
        }


        input.name {
            width: 70%;
            padding: 10px 0;
            font-size: 18px;
            margin: 15px 0;
            border: none;
            outline: none;
            text-indent: 5px;
            color: #FFFFFF;
            background-color: rgba(80, 119, 136, 0);
        }

        input.ac {
            width: 92%;
            padding: 10px 40px 10px 0;
            font-size: 18px;
            margin: 15px 0;
            border: none;
            outline: none;
            text-indent: 5px;
            color: #FFFFFF;
            background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 475px 9px;
        }

        .exp {
            float: left;
            width: 45%;
            margin-right: 45px;
        }
        input.expire {
            width: 100%;
            margin: 15px 0 0 0;
            padding: 10px 0;
            font-size: 18px;
            border: none;
            outline: none;
            color: #FFFFFF;
            text-indent: 5px;
            background-color: rgba(80, 119, 136, 0);
        }

        .cvv {
            width: 45%;
            float: left;
        }

        input.cvvv {
            width: 100%;
            margin: 15px 0 0 0;
            padding: 10px 0;
            font-size: 18px;
            border: none;
            outline: none;
            color: #FFFFFF;
            text-indent: 5px;
            background-color: rgba(80, 119, 136, 0);
        }

        input.name:hover, input.ac:hover, input.expire:hover, input.cvvv:hover {
            outline: 1px solid #EEE;
            -webkit-transition: all 0.1s ease-in-out;
            -moz-transition: all 0.1s ease-in-out;
            -o-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
        }

        ::-webkit-input-placeholder {
            color: #FFF;
        }

        :-moz-placeholder { /* Firefox 18- */
            color: #FFF;
        }

        ::-moz-placeholder {  /* Firefox 19+ */
            color: #FFF;
        }

        :-ms-input-placeholder {
            color: #FFF;
        }

        a.pay {
            color: #EEE;
            margin: 0 0 0 65%;
            font-weight: bold;
            font-size: 20px;
        }
        a.pay:hover {
            color: #FFF;
        }

        .footer {
            text-align: center;
            margin-top: 100px;
            margin-bottom: 20px;
        }
        .footer p {
            font-family: 'Oxygen-Regular';
            color: #000;
        }
        .footer a {
            color: #000;
            text-decoration: none;
        }
        .footer a:hover {
            color: #EF4C89;
            text-decoration: underline;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }

        /*-- Index-Page-Styling --*/


        /*--- Responsinator Code ---*/

        @media screen and (max-width:1920px) {
            h1 {
                margin: 100px 0;
            }
            .container {
                width: 30%;
            }
            .paymentbox {
                background: url("../images/visa.png") no-repeat 430px -5px;
            }
            .footer {
                margin-top: 200px;
            }
        }

        @media screen and (max-width:1680px) {
            .container {
                width: 34%;
            }
        }

        @media screen and (max-width:1600px) {
            .container {
                width: 36%;
            }
            .footer {
                margin-top: 100px;
            }
        }

        @media screen and (max-width:1440px) {
            .container {
                width: 40%;
            }
        }

        @media screen and (max-width:1366px) {
            h1 {
                margin: 50px 0;
            }
            .container {
                width: 40%;
            }
            .paymentbox {
                background: url("../images/visa.png") no-repeat 400px -5px;
            }
            .footer {
                margin-top: 100px;
            }
        }

        @media screen and (max-width:1280px) {
            .container {
                width: 42.5%;
            }
        }

        @media screen and (max-width:1024px) {
            .container {
                width: 53%;
            }
        }

        @media screen and (max-width:966px) {
            .container {
                width: 56%;
            }
        }

        @media screen and (max-width:800px) {
            .container {
                width: 68%;
            }
            .paymentbox {
                background: url("../images/visa.png") no-repeat 390px -5px;
            }
        }

        @media screen and (max-width:768px) {
            h1 {
                font-size: 35px;
            }
            .container {
                width: 71%;
            }
            .paymentbox {
                background: url("../images/visa.png") no-repeat 400px -5px;
            }
        }

        @media screen and (max-width:736px) {
            .container {
                width: 75.5%;
            }
            .paymentbox p {
                font-size: 17px;
            }
            input.name, input.ac, input.expire, input.cvvv {
                padding: 8px 0;
                font-size: 16px;
                margin: 10px 0;
            }
            .footer p {
                font-size: 14px;
            }
        }

        @media screen and (max-width:667px) {
            h1 {
                font-size: 30px;
            }
            .container {
                width: 83.5%;
            }
            .paymentbox p {
                font-size: 16px;
            }
            input.name, input.expire, input.cvvv {
                padding: 8px 0;
                font-size: 16px;
                margin: 10px 0;
            }
            input.ac {
                width: 100%;
                padding: 8px 0;
                font-size: 16px;
                margin: 10px 0;
            }
        }

        @media screen and (max-width:640px) {
            .paymentbox {
                background: url("../images/visa.png") no-repeat 375px -5px;
            }
            input.ac {
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 450px 5px;
            }
        }

        @media screen and (max-width:603px) {
            h1 {
                font-size: 28px;
            }
            .container {
                width: 90%;
            }
            .paymentbox p {
                font-size: 16px;
            }
            input.name, input.ac, input.expire, input.cvvv {
                font-size: 16px;
            }
        }

        @media screen and (max-width:600px) {
            .paymentbox {
                background: url("../images/visa.png") no-repeat 380px -5px;
                padding: 20px;
            }
            input.name, input.expire, input.cvvv {
                margin: 10px 0;
            }
            input.ac {
                margin: 10px 0;
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 455px 9px;
            }
            .footer p {
                font-size: 13px;
            }
        }

        @media screen and (max-width:568px) {
            .paymentbox {
                background: url("../images/visa.png") no-repeat 350px -5px;
            }
            .paymentbox p {
                font-size: 16px;
            }
            input.ac {
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 430px 9px;
            }
            input.name, input.expire, input.cvvv {
                margin: 7px 0;
                font-size: 16px;
            }
            input.ac {
                margin: 7px 0;
                font-size: 16px;
                width: 100%;
            }
            a.pay {
                margin: 0 0 0 65%;
                font-size: 18px;
            }
        }

        @media screen and (max-width:533px) {
            h1 {
                font-size: 23px;
            }
            .container {
                width: 80%;
            }
            .paymentbox {
                background: url("../images/visa1.png") no-repeat 342px -5px;
                padding: 10px 0 10px 5px;
            }
            .paymentbox p {
                font-size: 15px;
            }
            input.name, input.expire, input.cvvv {
                margin: 7px 0;
                font-size: 15px;
            }
            input.ac {
                width: 98%;
                margin: 7px 0;
                font-size: 15px;
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 375px 5px;
            }
            .exp {
                margin-right: 20px;
            }
            a.pay {
                margin: 0 0 0 65%;
            }
        }

        @media screen and (max-width:480px) {
            .container {
                width: 90%;
            }
            .paymentbox {
                background: url("../images/visa1.png") no-repeat 347px -5px;
                padding: 10px 0 10px 5px;
            }
            input.ac {
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 375px 5px;
            }
            a.pay {
                font-weight: lighter;
            }
        }

        @media screen and (max-width:414px) {
            h1 {
                font-size: 25px;
            }
            .container {
                width: 95%;
            }
            .paymentbox {
                background: url("../images/visa1.png") no-repeat 324px -5px;
                padding: 10px 0 10px 5px;
            }
            .paymentbox p {
                font-size: 14px;
            }
            input.name, input.expire, input.cvvv {
                margin: 5px 0;
                font-size: 14px;
            }
            input.ac {
                margin: 5px 0;
                width: 98%;
                font-size: 14px;
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 350px 5px;
            }
            .exp {
                margin-right: 15px;
            }
            a.pay {
                margin: 0 0 0 55%;
            }
        }

        @media screen and (max-width:384px) {
            .paymentbox {
                background: url("../images/visa1.png") no-repeat 294px -5px;
            }
            input.ac {
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 315px 5px;
            }
        }

        @media screen and (max-width:375px) {
            h1 {
                font-size: 25px;
            }
            .container {
                width: 95%;
            }
            .paymentbox {
                background: url("../images/visa1.png") no-repeat 288px -5px;
                padding: 10px 0 10px 5px;
            }
            .paymentbox p {
                font-size: 14px;
            }
            input.name, input.expire, input.cvvv {
                margin: 5px 0;
                font-size: 14px;
            }
            input.ac {
                margin: 5px 0;
                width: 98%;
                font-size: 14px;
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 313px 5px;
            }
            .exp {
                margin-right: 15px;
            }
            a.pay {
                margin: 0 0 0 55%;
            }
        }

        @media screen and (max-width:360px) {
            .paymentbox {
                background: url("../images/visa1.png") no-repeat 272px -5px;
            }
            input.ac {
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 300px 5px;
            }
        }

        @media screen and (max-width:320px) {
            h1 {
                font-size: 23px;
                margin: 30px 0;
            }
            .container {
                width: 95%;
            }
            .paymentbox {
                background: url("../images/visa1.png") no-repeat 218px -5px;
                padding: 10px 0 10px 5px;
            }
            .paymentbox p {
                font-size: 14px;
            }
            input.name, input.expire, input.cvvv {
                margin: 5px 0;
                font-size: 14px;
            }
            input.ac {
                margin: 5px 0;
                width: 98%;
                font-size: 14px;
                background: rgba(80, 119, 136, 0) url("../images/card.png") no-repeat 249px 5px;
            }
            .exp {
                margin-right: 15px;
            }
            a.pay {
                margin: 0 0 0 50%;
                font-size: 16px;
            }
            .footer {
                margin: 50px 0 20px 0;
            }
        }

        @media screen and (max-width:240px) {
            h1 {
                font-size: 20px;
            }
            .paymentbox {
                background: url("../images/visa1.png") no-repeat 142px -50px;
                padding: 5px 0 10px 5px;
                width: 100px;
            }
            .paymentbox p {
                font-size: 13px;
            }
            input.name, input.ac, input.expire, input.cvvv {
                font-size: 13px;
            }
            input.ac {
                width: 95%;
            }
            a.pay {
                font-size: 14px;
                margin: 0 0 0 35%;
            }
        }

        /*--- Responsinator Code ---*/
    </style>
</head>
<body>
<br />
<div class="container box" style="width: 600px">
    <br />
    <h2 align="center" style="color: whitesmoke">Enter Your Informations</h2><br />
<!--    --><?php //echo $message; ?>
    <form method="post" id="register_form">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">Login Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">Personal Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">Contact & Card Details</a>
            </li>
        </ul>
        <div class="tab-content" style="margin-top:16px;">
            <div class="tab-pane active" id="login_details">
                <div class="panel panel-default">
                    <div class="panel-heading">Login Details</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Enter Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" />
                            <span id="error_email" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                            <span id="error_password" class="text-danger"></span>
                        </div>
                        <br />
                        <div align="center">
                            <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-info btn-lg">Next</button>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="personal_details">
                <div class="panel panel-default">
                    <div class="panel-heading">Fill Personal Details</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Enter First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" />
                            <span id="error_first_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" />
                            <span id="error_last_name" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Gender</label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="male" checked> Male
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" value="female"> Female
                            </label>
                        </div>
                        <br />
                        <div align="center">
                            <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
                            <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-info btn-lg">Next</button>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact_details">
                <div class="panel panel-default">
                    <div class="panel-heading">Fill Contact & Card Details</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <label>Enter Address</label>
                            <textarea name="address" id="address" class="form-control"></textarea>
                            <span id="error_address" class="text-danger"></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Mobile No.</label>
                            <input type="text" name="mobile_no" id="mobile_no" class="form-control" />
                            <span id="error_mobile_no" class="text-danger"></span>
                        </div>
                        <br />

                            <div class="container" style="width: 515px;margin-right: 10px">

                                <div class="paymentbox" style="width: 500px">
                                    <p>NAME ON CARD</p>
                                    <span id="error_name_card" class="text-danger"></span>
                                    <input id="NameOnCard" name="NameOnCard" type="text" class="name" placeholder="Your Name" required="">

                                    <p>ACCOUNT NUMBER</p>
                                    <span id="error_account_no" class="text-danger"></span>
                                    <input id="accountNo" name="accountNo" type="text" class="ac" placeholder="XXXX - XXXX - XXXX - XXXX" required="">

                                    <div class="exp">
                                        <p>EXPIRATION</p>
                                        <span id="error_expir" class="text-danger"></span></div>
                                        <input id="expir" name="expir" type="text" class="expire" placeholder="MM/YY" required="">

                                    <div class="cvv">
                                        <p>CVV</p>
                                        <span id="error_cvv" class="text-danger"></span>
                                        <input id="cvv" name="cvv" type="text" class="cvvv" placeholder="XXXX" required="">

                                    </div>

                                    <div class="clear"></div>

                                </div>


                        </div>
                        <br>
                        <div align="center">
                            <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
                            <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-success btn-lg">Register</button>
                        </div>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<script>
    $(document).ready(function(){

        $('#btn_login_details').click(function(){

            var error_email = '';
            var error_password = '';
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if($.trim($('#email').val()).length == 0)
            {
                error_email = 'Email is required';
                $('#error_email').text(error_email);
                $('#email').addClass('has-error');
            }
            else
            {
                if (!filter.test($('#email').val()))
                {
                    error_email = 'Invalid Email';
                    $('#error_email').text(error_email);
                    $('#email').addClass('has-error');
                }
                else
                {
                    error_email = '';
                    $('#error_email').text(error_email);
                    $('#email').removeClass('has-error');
                }
            }

            if($.trim($('#password').val()).length == 0)
            {
                error_password = 'Password is required';
                $('#error_password').text(error_password);
                $('#password').addClass('has-error');
            }
            else
            {
                error_password = '';
                $('#error_password').text(error_password);
                $('#password').removeClass('has-error');
            }

            if(error_email != '' || error_password != '')
            {
                return false;
            }
            else
            {
                $('#list_login_details').removeClass('active active_tab1');
                $('#list_login_details').removeAttr('href data-toggle');
                $('#login_details').removeClass('active');
                $('#list_login_details').addClass('inactive_tab1');
                $('#list_personal_details').removeClass('inactive_tab1');
                $('#list_personal_details').addClass('active_tab1 active');
                $('#list_personal_details').attr('href', '#personal_details');
                $('#list_personal_details').attr('data-toggle', 'tab');
                $('#personal_details').addClass('active in');
            }
        });

        $('#previous_btn_personal_details').click(function(){
            $('#list_personal_details').removeClass('active active_tab1');
            $('#list_personal_details').removeAttr('href data-toggle');
            $('#personal_details').removeClass('active in');
            $('#list_personal_details').addClass('inactive_tab1');
            $('#list_login_details').removeClass('inactive_tab1');
            $('#list_login_details').addClass('active_tab1 active');
            $('#list_login_details').attr('href', '#login_details');
            $('#list_login_details').attr('data-toggle', 'tab');
            $('#login_details').addClass('active in');
        });

        $('#btn_personal_details').click(function(){
            var error_first_name = '';
            var error_last_name = '';

            if($.trim($('#first_name').val()).length == 0)
            {
                error_first_name = 'First Name is required';
                $('#error_first_name').text(error_first_name);
                $('#first_name').addClass('has-error');
            }
            else
            {
                error_first_name = '';
                $('#error_first_name').text(error_first_name);
                $('#first_name').removeClass('has-error');
            }

            if($.trim($('#last_name').val()).length == 0)
            {
                error_last_name = 'Last Name is required';
                $('#error_last_name').text(error_last_name);
                $('#last_name').addClass('has-error');
            }
            else
            {
                error_last_name = '';
                $('#error_last_name').text(error_last_name);
                $('#last_name').removeClass('has-error');
            }

            if(error_first_name != '' || error_last_name != '')
            {
                return false;
            }
            else
            {
                $('#list_personal_details').removeClass('active active_tab1');
                $('#list_personal_details').removeAttr('href data-toggle');
                $('#personal_details').removeClass('active');
                $('#list_personal_details').addClass('inactive_tab1');
                $('#list_contact_details').removeClass('inactive_tab1');
                $('#list_contact_details').addClass('active_tab1 active');
                $('#list_contact_details').attr('href', '#contact_details');
                $('#list_contact_details').attr('data-toggle', 'tab');
                $('#contact_details').addClass('active in');
            }
        });

        $('#previous_btn_contact_details').click(function(){
            $('#list_contact_details').removeClass('active active_tab1');
            $('#list_contact_details').removeAttr('href data-toggle');
            $('#contact_details').removeClass('active in');
            $('#list_contact_details').addClass('inactive_tab1');
            $('#list_personal_details').removeClass('inactive_tab1');
            $('#list_personal_details').addClass('active_tab1 active');
            $('#list_personal_details').attr('href', '#personal_details');
            $('#list_personal_details').attr('data-toggle', 'tab');
            $('#personal_details').addClass('active in');
        });

        $('#btn_contact_details').click(function(){
            var error_address = '';
            var error_mobile_no = '';
            var mobile_validation = /^\d{10}$/;
            var error_name_card='';
            var error_account_no='';
            var error_expir='';
            var error_cvv='';
            if($.trim($('#address').val()).length == 0)
            {
                error_address = 'Address is required';
                $('#error_address').text(error_address);
                $('#address').addClass('has-error');
            }
            else
            {
                error_address = '';
                $('#error_address').text(error_address);
                $('#address').removeClass('has-error');
            }

            if($.trim($('#mobile_no').val()).length == 0)
            {
                error_mobile_no = 'Mobile Number is required';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            }
            else
            {
                if (!mobile_validation.test($('#mobile_no').val()))
                {
                    error_mobile_no = 'Invalid Mobile Number';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').addClass('has-error');
                }
                else
                {
                    error_mobile_no = '';
                    $('#error_mobile_no').text(error_mobile_no);
                    $('#mobile_no').removeClass('has-error');
                }
            }

            if($.trim($('#NameOnCard').val()).length == 0)
            {
                error_name_card = 'Name on card is required';
                $('#error_name_card').text(error_name_card);
                $('#NameOnCard').addClass('has-error');
            }
            else
            {
                error_name_card = '';
                $('#error_name_card').text(error_address);
                $('#NameOnCard').removeClass('has-error');
            }
            if($.trim($('#accountNo').val()).length == 0)
            {
                error_account_no ='Account number is required';
                $('#error_account_no').text(error_account_no);
                $('#accountNo').addClass('has-error');
            }
            else
            {
                error_account_no= '';
                $('#error_account_no').text(error_account_no);
                $('#accountNo').removeClass('has-error');
            }

            if($.trim($('#expir').val()).length == 0)
            {
                error_expir='Expiration is required';
                $('#error_expir').text(error_expir);
                $('#expir').addClass('has-error');
            }
            else
            {
                error_expir= '';
                $('#error_expir').text(error_expir);
                $('#error_expir').removeClass('has-error');
            }
            if($.trim($('#cvv').val()).length == 0)
            {
                error_cvv='CVV is required';
                $('#error_cvv').text(error_cvv);
                $('#cvv').addClass('has-error');
            }
            else
            {
                error_cvv= '';
                $('#error_cvv').text(error_cvv);
                $('#error_cvv').removeClass('has-error');
            }
            if(error_address != '' || error_mobile_no != '' || error_name_card!=''|| error_account_no!='' ||error_expir!='' ||error_cvv!='')
            {
                return false;
            }
            else
            {
                $('#btn_contact_details').attr("disabled", "disabled");
                $(document).css('cursor', 'prgress');
                $("#register_form").submit();
            }

        });

    });
</script>
