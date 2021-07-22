 <?php
 $ans=$collection->find(['Location'=>"Borivali(E)"]);
 $tprice=0.0;
 foreach($ans as $a){
    $price=$a['price'];
    $tprice=$tprice+$price;
 }
    
  $avgprice=$tprice/4;
  $perc=$avgprice/$tprice*100;


 $ans2=$collection->find(['Location'=>"Mira road"]);
  $price2=0.0;
 foreach($ans2 as $a2){
    $price2=$price2+$a2['price'];
}
  $avgprice2=$price/4;
 $perc2=$avgprice2/$price2*100;


  $ans3=$collection->find(['Location'=>"Dahiser(W)"]);
  $price3=0.0;
 foreach($ans3 as $a3){
    $price3=$price3+$a3['price'];
 }
  $avgprice3=$price3/4;
  $perc3=$avgprice3/$price3*100;


  $ans4=$collection->find(['Location'=>"Borivali(W)"]);
  $price=0.0;
 foreach($ans4 as $a4){
    $price4=$price4+$a4['price'];
 }
  $avgprice4=$price4/4; 
 $perc4=$avgprice4/$price4*100;


$ans5=$collection->find(['Location'=>"Bhayander(E)"]);
  $price5=0.0;
 foreach($ans5 as $a5){
    $price5=$price5+$a5['price'];
 }
  $avgprice5=$price5/4; 
 $perc5=$avgprice5/$price5*100;


  $ans6=$collection->find(['Location'=>"Kandivali(E)"]);
  $price6=0.0;
 foreach($ans6 as $a6){
    $price6=$price6+$a6['price'];
 }
  $avgprice6=$price6/4; 
   $perc6=$avgprice6/$price6*100;


   $ans7=$collection->find(['Location'=>"Kandivali(W)"]);
  $price7=0.0;
 foreach($ans7 as $a7){
    $price7=$price7+$a7['price'];
 }
  $avgprice7=$price7/4; 
   $perc7=$avgprice7/$price7*100;


    $ans8=$collection->find(['Location'=>"Malad(E)"]);
  $price8=0.0;
 foreach($ans8 as $a8){
    $price8=$price8+$a8['price'];
 }
  $avgprice8=$price8/4; 
   $perc8=$avgprice8/$price8*100; 


    $ans9=$collection->find(['Location'=>"Malad(W)"]);
  $price9=0.0;
 foreach($ans9 as $a9){
    $price9=$price9+$a9['price'];
 }
  $avgprice9=$price9/4; 
   $perc9=$avgprice9/$price9*100;


 $dataPoints1 = array(
    array("label"=> "Borivali East", "y"=>/* $perc$avgprice),
    array("label"=> "mira road", "y"=>/*$perc2$avgprice2 ),
    array("label"=> "Dahiser West", "y"=>/*$perc3$avgprice3),
    array("label"=> "Borivali West", "y"=>/*$perc4 $avgprice4),
    array("label"=> "Bhayander East", "y"=>/*$perc5$avgprice5),
    array("label"=> "Kandivali East", "y"=>/*$perc6$avgprice6 ),
    array("label"=> "Kandivali West", "y"=>/*$perc7$avgprice7),
    array("label"=> "Malad East", "y"=>/*$perc8$avgprice8),
    array("label"=> "Malad West", "y"=>/*$perc9$avgprice9)
);

 $dataPoints2 = array(
    array("label"=> "Borivali East", "y"=> $perc),
    array("label"=> "mira road", "y"=>$perc2 ),
    array("label"=> "Dahiser_West", "y"=>$perc3),
    array("label"=> "Borivali_West", "y"=>$perc4 ),
    array("label"=> "Bhayander", "y"=>$perc5),
    array("label"=> "Kandivali_East", "y"=>$perc6 ),
    array("label"=> "Kandivali_West", "y"=>$perc7),
    array("label"=> "Malad_East", "y"=>$perc8),
    array("label"=> "Malad_West", "y"=>$perc9)
);
 
$dataPoints3 = array(
    array("label"=> "Borivali East", "y"=> $avgprice),
    array("label"=> "mira road", "y"=> $avgprice2),
    array("label"=> "Dahiser_West", "y"=> $avgprice3),
    array("label"=> "Borivali_West", "y"=> $avgprice4),
    array("label"=> "Bhayander", "y"=> $avgprice5),
    array("label"=> "Kandivali_East", "y"=> $avgprice6),
    array("label"=> "Kandivali_West", "y"=> $avgprice7),
    array("label"=> "Malad_East", "y"=> $avgprice8),
    array("label"=> "Malad_West", "y"=> $avgprice9)
);
 
$dataPoints4 = array(
    array("label"=> "Borivali East", "y"=> $avgprice),
    array("label"=> "mira road", "y"=> $avgprice),
    array("label"=> "Dahiser_West", "y"=> $avgprice),
    array("label"=> "Borivali_West", "y"=> $avgprice),
    array("label"=> "Bhayander", "y"=> $avgprice),
    array("label"=> "Kandivali_East", "y"=> $avgprice),
    array("label"=> "Kandivali_West", "y"=> $avgprice),
    array("label"=> "Malad_East", "y"=> $avgprice),
    array("label"=> "Malad_West", "y"=> $avgprice)
);*/
 
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
/*window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
    title: {
        text: "Price chart"
    },
    axisY:{
        suffix: "%"
    },
    toolTip: {
        shared: true,
        reversed: true
    },
    legend:{
        cursor: "pointer",
        itemclick: toggleDataSeries
    },
    data: [
        {
            type: "stackedArea100",
            name: "price",
            showInLegend: true,
            yValueFormatString: "#0.0#\"%\"",
            dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
        },
        {
            type: "stackedArea100",
            name: "old price",
            showInLegend: true,
            yValueFormatString: "#0.0#\"%\"",
            dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
        }
    ]
});
 
chart.render();
 
function toggleDataSeries(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    }
    else{
        e.dataSeries.visible = true;
    }
    chart.render();
}
}*/
</script>
</head>
<body>
<center>
<div id="chartContainer" style="height: 450px; width: 70%;"></div>
</center>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html> 