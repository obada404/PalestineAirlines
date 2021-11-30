<?php
session_start();



@$mysqli = new mysqli("localhost", "root", "", "airline");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$id = $_REQUEST["idf"];
$sql = "SELECT * FROM flight WHERE Id=$id";
//$result = $mysqli->query($sql);
//$result=$result->fetch_assoc();


?>



<!DOCTYPE html>
<html>
<head>

    <title>search</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

    .styled-table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: sans-serif;
        min-width: 400px;
        box-shadow: 0 0 20px rgba(255, 255, 255, 255);
    }

    .styled-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }
</style>
</head>
<body>
a
<h1>Flight Ticket Booking</h1>
<div class="main-agileinfo">
    <div class="sap_tabs">
        <div id="horizontalTab">
            <ul class="resp-tabs-list">
<!--                <li class="resp-tab-item"><span>Round Trip</span></li>-->

                <li class="resp-tab-item"><span>One way</span></li>

            </ul>
<div>
    <?php


    echo ' <form action="TandINFO/infot.php"><table  class="styled-table" border="1" cellspacing="2" cellpadding="2" style=" color: #062c33; border: solid ;"> 
      <tr> 
          <td>  <font face="Arial">Id</font> </td> 
          <td> <font face="Arial">takeoff city</font> </td> 
          <td> <font face="Arial">arrival city</font> </td> 
           <td> <font face="Arial">takeoff time</font> </td> 
          <td> <font face="Arial">Duration</font> </td> 
         
      </tr>';


    if ($result = $mysqli->query($sql)) {
        while ($row = $result->fetch_assoc()) {
            $field1name = $row["Id"];
            $field2name = $row["takeoff_from_city"];
            $field3name = $row["arrival_to_city"];
            $field6name = $row["takeoff_time"];
            $field7name = $row["Duration"];









                    echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                
              </tr>';




        }
        $result->free();
        echo '</table>
 </form>';}
    ?>
</div>
            <div class="clearfix"> </div>
            <div class="resp-tabs-container">
                <div class="tab-1 resp-tab-content roundtrip">
                    <form action="TandINFO/infot.php" method="post">


                        <div class="class">
                            <h3>Class</h3>
                            <select id="w3_country1" onchange="change_country(this.value)" class="frm-field required" name="class">
                                <option value="economy">Economy</option>
                                <option value="business">Business</option>
                                <option value="firstClass">First class</option>
                            </select>

                        </div>
                        <div class="numofppl">
                            <div class="adults">
                                <h3> number of seats</h3>
                                <div class="quantity">
                                    <div class="quantity-select">

                                        <input type="number"  value="1" class="entry value" style="width: 70px ;height: 30px" name="number_of_seats">

                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="clear"></div>
                        <button type="submit" value="<?php echo  $id?>" name="idf">  go to set</button>
                    </form>
                </div>









            </div>

        </div>

    </div>

</div>

<div class="footer-w3l">

</div>
<!--script for portfolio-->
<script src="js/jquery.min.js"> </script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container

        });
    });
</script>
<!--//script for portfolio-->
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
    });
</script>
<!-- //Calendar -->
<!--quantity-->
<script>
    $('.value-plus').on('click', function(){
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function(){
        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
        if(newVal>=1) divUpd.text(newVal);
    });
</script>
<!--//quantity-->
<!--load more-->
<script>
    $(document).ready(function () {
        size_li = $("#myList li").size();
        x=1;
        $('#myList li:lt('+x+')').show();
        $('#loadMore').click(function () {
            x= (x+1 <= size_li) ? x+1 : size_li;
            $('#myList li:lt('+x+')').show();
        });
        $('#showLess').click(function () {
            x=(x-1<0) ? 1 : x-1;
            $('#myList li').not(':lt('+x+')').hide();
        });
    });
</script>
<!-- //load-more -->



</body>
</html>

