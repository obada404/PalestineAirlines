<?php
session_start();
//if( !isset($_SESSION["logged_in"])    ) {
//    header("Location: ..\login.php");
//}


@$mysqli = new mysqli("localhost", "root", "", "airline");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
$class=$_REQUEST["class"];
$id = $_REQUEST["idf"];

$sql = "SELECT * FROM flight WHERE Id=$id";
$result = $mysqli->query($sql);
$result=$result->fetch_assoc();
$takeoff_from =$result["takeoff_from_city"];
$arrival_to =$result["arrival_to_city"];
$takeoff_time=$result["takeoff_time"];
$duration=$result["Duration"];
$_COOKIE["class"]=$class;
$_COOKIE["id"]=$id ;
$csn=$result[$class.'_seats'];
$valuofseats=$result[$class.'_seats_value'];
$valuofseats2=$valuofseats;
$_SESSION["valuofseats2"]=$result[$class.'_seats_value'];
$pri= result[$class.'_seats_price'];
echo  $pri;
$userid= $_SESSION["id"];
$username= $_SESSION["username"];
$numofse= $_REQUEST["number_of_seats"];
//$sql = "INSERT INTO `ticket` ( `takeoff_from`, `arrival_to`, `takeoff_time`, `duration`, `price`, `class`, `type`, `Seats`, `Tourist_id`, `flight_id`) VALUES ( '$takeoff_from', '$arrival_to', '$takeoff_time', '$duration', '$price', '$class', '$type', '$Seats', '$userid', '$id ')";
$na ="1";


//if(isset($_COOKIE["Numseats"])and isset($_COOKIE["class"])  and isset($_COOKIE["id"])){
    $lastclass= $_COOKIE["class"];
    $id2=$_COOKIE["id"];
$n= $_COOKIE["Numseats"];
for ($i=0;$i<$_COOKIE["Numseats"] -1;$i++){
if(isset($_COOKIE[$na])){
    $int = intval(preg_replace('/[^0-9]+/', '', $_COOKIE[$na++]), 10);
    $valuofseats2[$int]=1;
   }
}
$ins="UPDATE `flight` SET `.$lastclass._value` = '$valuofseats2' WHERE `flight`.`Id` = $id2;";
$mysqli->query($ins);
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>plan Seat Selection</title>
    <!-- Meta-Tags -->
    <link href="images/Micon.jpg"  rel="icon">
<link href="css/styleee.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Movie Seat Selection a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->

    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!-- //fonts -->
</head>

<body onload="onLoaderFunc()">
    <h1>Plan Seat Selection</h1>
    <div class="container">

        <div class="w3ls-reg">
            <!-- input fields -->
            <div class="inputForm">
                <h2 style="color: white;text-shadow: 1px 2px 4px black">fill the required details below and select your seats</h2>
                <div class="mr_agilemain">
                    <div class="agileits-left">
                        <label> Name
                            <span>*</span>
                        </label>
                        <input type="text" id="Username" required value="<?php echo$username; ?>">
                    </div>
                    <div class="agileits-right">
                        <label> Number of Seats
                            <span>*</span>
                        </label>
                        <input type="number" id="Numseats" required min="1" value="<?php echo$numofse; ?>">
                    </div>
                </div>
                <button onclick="takeData()">Start Selecting</button>
            </div>
            <!-- //input fields -->
            <!-- seat availabilty list -->
            <ul class="seat_w3ls">
                <li class="smallBox greenBox">Selected Seat</li>

                <li class="smallBox redBox">Reserved Seat</li>

                <li class="smallBox emptyBox">Empty Seat</li>
            </ul>
            <!-- seat availabilty list -->
            <!-- seat layout -->
            <div class="seatStructure txt-center" style="overflow-x:auto;">

                <?php
                $cha ='A';
               echo '<table id="seatsBlock">
                    <p id="notification"></p>
                    <tr>
                        <td></td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td></td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                        <td>11</td>
                        <td>12</td>
                    </tr>';
$cont =0;
                    for ($i=0;$i<($csn/12)+1;$i++) {
                        echo ' <tr>
                        <td>'.$cha.'</td>';
                        for($j=0;$j<12;$j++){
                     if($cont !=$csn)  {
                         if($j == 5)
                             echo ' <td class="seatGap"></td>';
                      echo  '<td>
                            <input type="checkbox" class="seats" 
                            value="'.$cont.','.$cha.''.$j.'"';
                      if($valuofseats[$cont]==1)echo 'style="display: none"  ';echo '>
                        </td>';
                         $cont++;    }
                       }
                  echo ' </tr>';

$cha++ ;
}
echo '</table>';



                ?>

                <div class="screen">
                    <h2 class="wthree" style="color: white">Screen this way</h2>
                </div>
                <button onclick="updateTextArea()">Confirm Selection</button>
            </div>
            <!-- //seat layout -->
            <!-- details after booking displayed here -->

            <div class="displayerBoxes txt-center" style="overflow-x:auto;">
                <table class="Displaytable w3ls-table" width="100%">
                    <tr>
                        <th>Name</th>
                        <th>Number of Seats</th>
                        <th>Seats</th>
                        <th>price </th>
                    </tr>
                    <tr>
                        <td>
                            <textarea id="nameDisplay"></textarea>

                        </td>
                        <td>
                            <textarea id="NumberDisplay"></textarea>
                        </td>
                        <td>
                            <textarea id="seatsDisplay">
                            </textarea>
                        </td>
                        <td>
                            <textarea id="price" ><?php echo $pri;?> </textarea>
                        </td>
                    </tr>
                </table>
                <br>
            </div>

            <a  href="tick.php" style="font-size: 25px;border-radius: 15px;padding: 10px;margin-left: 42%;background-color: #E91E63;color: white;border: #E91E63;background-color: #E91E63" >Next</a>
            <!-- //details after booking displayed here -->

        </div>
    </div>
    <div class="copy-wthree">

    </div>
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- script for seat selection -->
    <script>
        function onLoaderFunc() {
            $(".seatStructure *").prop("disabled", true);
            $(".displayerBoxes *").prop("disabled", true);
        }

        function takeData() {

            if (($("#Username").val().length == 0) || ($("#Numseats").val().length == 0)) {
                alert("Please Enter your Name and Number of Seats");
            } else {

                $(".inputForm *").prop("disabled", true);
                $(".seatStructure *").prop("disabled", false);
                document.getElementById("notification").innerHTML =
                    "<b style='margin-bottom:0px;background:#E91E63;letter-spacing:1px;color: white'>Please Select your<?php echo $class?> Seats NOW!</b>";
            }
        }
        function createCookie(name, value, days) {
            var expires;
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            }
            else {
                expires = "";
            }
            document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
        }

        function updateTextArea() {

            if ($("input:checked ").length == ($("#Numseats").val())) {
                $(".seatStructure *").prop("disabled", true);

                var allNameVals = [];
                var allNumberVals = [];
                var allSeatsVals = [];
                $na= "1";
                //Storing in Array
                allNameVals.push($("#Username").val());
                allNumberVals.push($("#Numseats").val());
                $('#seatsBlock :checked').each(function () {
                    allSeatsVals.push($(this).val());

                    createCookie($na++, $(this).val().substring(0,2), "10");
                });
                createCookie("Numseats", $na, "10");
                //Displaying
                $('#nameDisplay').val(allNameVals);
                $('#NumberDisplay').val(allNumberVals);
                $('#seatsDisplay').val(allSeatsVals);
            } else {
                alert("Please select " + ($("#Numseats").val()) + " seats")
            }
        }


        function myFunction() {
            alert($("input:checked").length);
        }

        /*
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
        */


        $(":checkbox").click(function () {
            if ($("input:checked and (not read-only) ").length == ($("#Numseats").val())) {
                $(":checkbox").prop('disabled', true);
                $(':checked').prop('disabled', false);
            } else {
                $(":checkbox").prop('disabled', false);
            }
        });
    </script>
    <!-- //script for seat selection -->

</body>

</html>
