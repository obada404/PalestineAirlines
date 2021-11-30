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
<DIV>
    <form action="chart.php">
        <label >Choose :</label>
        <select name="class" id="class">
            <option value="takeoff_from">takeoff_from</option>
            <option value="arrival_to">arrival_to</option>

        </select>

        <button type="submit"  >  genrat</button>
    </form>
</DIV>

<script>
    let myChart = document.getElementById('myChart').getContext('2d');

    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
        type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:[<?php echo $data1;  ?>],
            datasets:[{
                label:'number of flight',
                data:[<?php echo $data2 ; ?>],
                //backgroundColor:'green',
                backgroundColor:[
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)'
                ],
                borderWidth:1,
                borderColor:'#777',
                hoverBorderWidth:3,
                hoverBorderColor:'#000'
            }]
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
