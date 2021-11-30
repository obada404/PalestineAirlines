<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "airline") or die($mysqli->error);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
$query=('SELECT * FROM `flight`') ;
if(isset($_REQUEST["cuntry"])){
$cun =$_REQUEST["cuntry"];

//    $query=("SELECT * FROM `flight` WHERE `arrival_to_city`= $cun") ;

}



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
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
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
            <div class="clearfix"> </div>
            <div class="resp-tabs-container">
                <div class="tab-1 resp-tab-content roundtrip">
                    <form action="search.php" method="post">
                        <div class="from">
                            <h3>From</h3>
                            <input type="text" name="cityFrom" class="city1" placeholder="Type Departure "  required  >
                        </div>
                        <div class="to">
                            <h3>To</h3>
                            <input type="text" name="to_city" class="city2" placeholder="Type Destination " required <?php  if(isset($_REQUEST["cuntry"])){echo 'value="'.$cun.'" readonly';  } ?> >
                        </div>
                        <div class="clear"></div>
                        <div class="date">
                            <div class="depart">
                                <h3>Depart</h3>
                                <input  id="datepickerq" name="dateof" type="date"   required="">
                                <span class="checkbox1">
<!--										<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>-->
									</span>
                            </div>
<!--                            <div class="return">-->
<!--                                <h3>Return</h3>-->
<!--                              <input  id="datepicker1q" name="datear" type="date" type="text" >-->
<!--                               <span class="checkbox1">-->
<!--										<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>-->
<!--									</span>-->
<!--                            </div>-->
                            <div class="clear"></div>
                        </div>
<!--                        <div class="class">-->
<!--                            <h3>Class</h3>-->
<!--                            <select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">-->
<!--                                <option value="null">Economy</option>-->
<!--                                <option value="null">Business</option>-->
<!--                                <option value="null">First class</option>-->
<!--                            </select>-->
<!---->
<!--                        </div>-->
                        <div class="clear"></div>
<!--                        <div class="numofppl">-->
<!--                            <div class="adults">-->
<!--                                <h3>Adult:(12+ yrs)</h3>-->
<!--                                <div class="quantity">-->
<!--                                    <div class="quantity-select">-->
<!--                                        <div class="entry value-minus">&nbsp;</div>-->
<!--                                        <div class="entry value"><span>1</span></div>-->
<!--                                        <div class="entry value-plus active">&nbsp;</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="child">-->
<!--                                <h3>Child:(2-11 yrs)</h3>-->
<!--                                <div class="quantity">-->
<!--                                    <div class="quantity-select">-->
<!--                                        <div class="entry value-minus">&nbsp;</div>-->
<!--                                        <div class="entry value"><span>1</span></div>-->
<!--                                        <div class="entry value-plus active">&nbsp;</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="clear"></div>-->
<!--                        </div>-->
                        <div class="clear"></div>
                        <input type="submit" value="Search Flights">
                    </form>
                </div>
                <div class="tab-1 resp-tab-content oneway">
                    <form action="search.php" method="post">
                        <div class="from">
                            <h3>From</h3>
                            <input type="text" name="cityFrom" class="city1" placeholder="Type Departure City"  required>
                        </div>
                        <div class="to">
                            <h3>To</h3>
                            <input type="text" name="to_city" class="city2" placeholder="Type Destination City" required >
                        </div>
                        <div class="clear"></div>
                        <div class="date">
                            <div class="depart">
                                <h3>Depart</h3>
                                <input  id="datepickerq" name="dateof" type="date"   required="">
                                <span class="checkbox1">
<!--										<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>-->
									</span>
                            </div>
<!--                            <div class="return">-->
<!--                                <h3>Return</h3>-->
<!--                                <input  id="datepicker1q" name="Text" type="date" type="text" >-->
<!--                                <span class="checkbox1">-->
<!--										<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Flexible with date</label>-->
<!--									</span>-->
<!--                            </div>-->
                            <div class="clear"></div>
                        </div>
                        <!--                        <div class="class">-->
                        <!--                            <h3>Class</h3>-->
                        <!--                            <select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">-->
                        <!--                                <option value="null">Economy</option>-->
                        <!--                                <option value="null">Business</option>-->
                        <!--                                <option value="null">First class</option>-->
                        <!--                            </select>-->
                        <!---->
                        <!--                        </div>-->
                        <div class="clear"></div>
                        <!--                        <div class="numofppl">-->
                        <!--                            <div class="adults">-->
                        <!--                                <h3>Adult:(12+ yrs)</h3>-->
                        <!--                                <div class="quantity">-->
                        <!--                                    <div class="quantity-select">-->
                        <!--                                        <div class="entry value-minus">&nbsp;</div>-->
                        <!--                                        <div class="entry value"><span>1</span></div>-->
                        <!--                                        <div class="entry value-plus active">&nbsp;</div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="child">-->
                        <!--                                <h3>Child:(2-11 yrs)</h3>-->
                        <!--                                <div class="quantity">-->
                        <!--                                    <div class="quantity-select">-->
                        <!--                                        <div class="entry value-minus">&nbsp;</div>-->
                        <!--                                        <div class="entry value"><span>1</span></div>-->
                        <!--                                        <div class="entry value-plus active">&nbsp;</div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                            <div class="clear"></div>-->
                        <!--                        </div>-->
                        <div class="clear"></div>
                        <input type="submit" value="Search Flights">
                    </form>

                </div>


               <?php
               $con =" ";
               $con2 =" ";


               echo ' <form action="search2.php"><table  class="styled-table" border="1" cellspacing="2" cellpadding="2" style=" color: #062c33; border: solid ;"> 
      <tr> 
          <td>  <font face="Arial">Id</font> </td> 
          <td> <font face="Arial">takeoff city</font> </td> 
          <td> <font face="Arial">arrival city</font> </td> 
           <td> <font face="Arial">takeoff time</font> </td> 
          <td> <font face="Arial">Duration</font> </td> 
         
      </tr>';

               function contains($s,$su){
                   if(strpos($s,$su ) or $s== $su)
                       return 1;
                           else
                               return  0;


               }

               $co1= 1;
               $co2= 1;
               $co3= 1;
               $co4= true;
               $co5= true;

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Id"];
        $field2name = $row["takeoff_from_city"];
        $field3name = $row["arrival_to_city"];
        $field6name = $row["takeoff_time"];
        $field7name = $row["Duration"];





        if(isset($_REQUEST["cityFrom"])){

            $con=$_REQUEST["cityFrom"];
            $co1=contains($field2name,$con );
        }


        if(isset($_REQUEST["to_city"])){
            $con2=$_REQUEST["to_city"];
          $co2=  contains($field3name,$con2 );}
            if(isset($_REQUEST["dateof"])){
                $con3=$_REQUEST["dateof"];
                $co3=  $field6name==$con3 ? 1:0 ;
}
        if(isset($_REQUEST["datear"])){
            $con3=$_REQUEST["datear"];
            $co3=  $field6name==$con3 ? 1:0 ;
        }
        try {
            if($co1  and $co2  and $co3) {



                echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td> </td>
                    <td><button type="submit" value="'.$field1name.'" name="idf"  > buy </button></td> 
              </tr>';
            }

        }catch (Exception $e){

        }


}
    $result->free();
                    echo '</table>
 </form>';}
?>






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

