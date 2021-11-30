<?php
/* Database connection settings */

$mysqli = new mysqli("localhost", "root", "", "airline") or die($mysqli->error);

$data1 = '';
$data2 = '';
//
////query to get data from the table
//$sql = "SELECT * FROM `tourist` ";
//$result = mysqli_query($mysqli, $sql);
//
////loop through the returned data
//while ($row = mysqli_fetch_array($result)) {
//
//    $data1 = $data1 . '"'. $row['birthdate'].'",';
//    $data2 = $data2 . '"'. $row[''] .'",';
//}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>My Chart.js Chart</title>
</head>
<body>

<DIV>
    <form action="chart2.php"  style=" text-align: center">
        <label >Choose :</label>
        <select name="class" id="class" style="height: 50px;width: 150px">
            <option value="takeoff_from" >takeoff_from</option>
            <option value="arrival_to">arrival_to</option>

        </select>

        <button type="submit" style="height: 50px;width: 150px;padding: 10px"  >  genrat</button>
    </form>
</DIV>
<div class="container">
    <canvas id="myChart"></canvas>
</div>
<div>
    <?php
    $takeof='';
    $count= 0;
    if(isset($_REQUEST["class"])){
        $class =$_REQUEST["class"];
        foreach($mysqli->query('SELECT '.$class.',COUNT(*)
    FROM ticket
    GROUP BY  '.$class.'') as $row) {

            $data1 = $data1 . '"'. $row["$class"] .'",';
            $data2 = $data2 . '"'.    $row['COUNT(*)'] .'",';



        }

        $data1 = trim($data1,",");
        $data2 = trim($data2,",");


    }
    ?>

</div>


<script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
        type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{

                labels: [<?php echo $data1;  ?>],
                datasets: [
                    {
                        fill: true,
                        backgroundColor: [
                            'black',
                            'green',
                            'blue'],
                        data: [<?php echo $data2 ; ?>],
// Notice the borderColor
                        borderColor:	['black', 'black'],
                        borderWidth: [2,2]
                    }
                ]
        },
        options:{
            title:{
                display:true,
                text:'flight in city',
                fontSize:25
            },
            legend:{
                display:true,
                position:'right',
                labels:{
                    fontColor:'#000'
                }
            },
            layout:{
                padding:{
                    left:50,
                    right:0,
                    bottom:0,
                    top:0
                }
            },
            tooltips:{
                enabled:true
            }
        }
    });
</script>
</body>
</html>
