
<?php include 'include/head.php';?>
<?php include 'include/db_connection.php';
$conn = OpenCon();
$userid = 123123;
if(isset($_POST['dated'])){
  $date = date('Y-m-d', strtotime($_POST['dated']));
  echo "$date gggggg";
}else {
  $date = date('Y-m-d');
   }
?>

<body>	
  
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
			<?php include 'include/header.php';?>
			<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-6 chit-chat-layer1-left">
               <div class="work-progres">
                    <div style="margin-top: -60px" class="box">
						<div class="clock">
							<span class="hours"></span>
							<span class="minutes"></span>
						</div>
						<div class="date">
							<div id="daymonth"></div>
							<div id="year"></div>
						</div>

					</div>

					<h3 style="margin-top: -20px; font-size: 18px">Incomes</h3>
          <div>
                <h5>For :</h5> 
                <form id='monthform' action ='income.php' method='post'>
                  <input name="dated" id="date" type="date" onchange="updatemonth()" <?php echo"value='$date'";?>>

                </form>                                
          </div>
            <div class='row'>
            
            <div class='receipt-main '>
            
            <br/>
                <div>
                    <table style='width: 470px; margin-bottom: 60px' class='table table-bordered'>
<?php 


          $line =	"select *,DATE_FORMAT(date, '%e %M %Y')as fdate from `incomes_list` WHERE date = '$date' and userid =$userid;" ;  
          $result = mysqli_query($conn,$line); 
          $id_pro = mysqli_fetch_assoc($result);
          $date1 = $id_pro['date'];
          $exp_date= $id_pro['fdate'];
         
   
          echo" <h5 style='margin-bottom: 10px; text-align: left;'>$exp_date</h5>";

?>


			                    <thead>
			                        <tr>
			                            <th style='font-size: 12px; text-align: center;'>Description </th>
			                            <th style='font-size: 12px'>Amount</th>
			                        </tr>
			                    </thead>
                          <tbody>
<?php 

 $line2 =	"select * from `incomes_list` WHERE date = '$date1' and userid =$userid;" ;  
 $result2 = mysqli_query($conn,$line2); 
 while($id_pro2 = mysqli_fetch_assoc($result2)){
   $exp_cat= $id_pro2['income_category'];
   $exp = $id_pro2['incomes'];
   echo"
                             <tr>
			                            <td class='col-md-9'>$exp_cat</td>
			                            <td class='col-md-3'>RM $exp</td>
                              </tr>";}
?>

			                        <tr style='background: #689999'>
			                            <td >
			                            <p>
			                                <strong>Total Amount: </strong>
			                            </p>
										</td>
			                           
			                            <td>
<?php 
 $line3 =	"select sum(incomes) as incomes from `incomes_list` WHERE date = '$date1' and userid =$userid;" ;  
 $result3 = mysqli_query($conn,$line3); 
 $id_pro3 = mysqli_fetch_assoc($result3);
   $totalexp = $id_pro3['incomes'];
   echo"
			                            <p>
			                                <strong>RM $totalexp</strong>
                                  </p>";
?>
										</td>
			                        </tr>
			                        <tr>
			                           
			                            
			                        </tr>
			                    </tbody>
			                </table>


			            </div>
						
					
						
			        </div>    
				</div>
					

             </div>
      </div>
      <div class="col-md-6 chit-chat-layer1-rit">    	
      	  <div class="geo-chart">
					<section id="charts1" class="charts">
				<div class="wrapper-flex">
				
				   
				
				    <div class="col geo_main">
				         <h3 id="geoChartTitle">Income category Chart</h3>
				        <div id="geoChart" class="chart"> </div>

				          <script src="https://d3js.org/d3.v3.min.js"></script>
							  <link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
							  <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
							  <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
							<div id="pie-chart"></div>

				    </div>
				
				
				</div><!-- .wrapper-flex -->
				</section>				
			</div>
      </div>
     <div class="clearfix"> </div>
</div>
<!--main page chit chating end here-->
<!--main page chart start here-->




</div>
<!--inner block end here-->

</div>
</div>
<!--slider menu-->
    <?php include 'include/sidebar.php';?>

<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });



</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     

<style type="text/css">
	
	body {
  text-align:center;
}

.box {
  background:black;
  border-radius:5px;
  display:inline-block;
  margin:6em 0 2em;
  padding:0 20px 20px;
}

.date #daymonth {
  color:white;
  font-size:12pt;

}
.date #year {
  color:white;
  font-size:12pt;
}

.clock {
  background-color:#D75B42;
  border: 0.6em solid white;
  border-radius: 100%;
  height: 4em;
  margin-top:-50%;
  position: relative;
  width: 4em;
}
.clock span {
  background: white;
  bottom: 50%;
  display: block;
  left: 50%;
  position: absolute;
  transform-origin: bottom center;
}
.clock .hours {
  height: 30%;
  width: 0.2em;
}
.clock .minutes {
  height: 45%;
  width: 0.2em;
}
</style>

<script type="text/javascript">
	
var date = new Date(),
    year = date.getFullYear(),
    month = date.getMonth(),
    day = date.getUTCDate(),
    months = [ "Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"];


setSelectBoxByText('selectmonth', months[month]);

var clockH = $(".hours");
var clockM = $(".minutes");

function time() {     
  var d = new Date(),
      s = d.getSeconds() * 6,
      m = d.getMinutes() * 6 + (s / 60),
      h = d.getHours() % 12 / 12 * 360 + (m / 12);  
    clockH.css("transform", "rotate("+h+"deg)");
    clockM.css("transform", "rotate("+m+"deg)");  
}

function setSelectBoxByText(eid, etxt) {
    var eid = document.getElementById(eid);
    for (var i = 0; i < eid.options.length; ++i) {
        if (eid.options[i].text === etxt)
            eid.options[i].selected = true;
    }
}

function setSelectBoxByValue(eid, eval) {
    document.getElementById(eid).value = eval;
}

function updatemonth(){
  
  document.getElementById("monthform").submit();
}

var clock = setInterval(time, 1000);
time();

</script>

<style type="text/css">
	* {
	margin: 0;
	padding: 0;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}




.pricing-table-title {
	text-transform: uppercase;
	font-weight: 700;
	font-size: 2.6em;
	color: #FFF;
	margin-top: 15px;
	text-align: left;
	margin-bottom: 25px;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
}

.pricing-table-title a {
	font-size: 0.6em;
}

.clearfix:after {
	content: '';
	display: block;
	height: 0;
	width: 0;
	clear: both;
}
/** ========================
 * Contenedor
 ============================*/
.pricing-wrapper {
	width: 960px;
	margin: 40px auto 0;
}

.pricing-table {
	margin: 0 10px;
	text-align: center;
	width: 400px;
	float: left;
}

.pricing-title {
	color: #FFF;
	background: #e95846;
	padding: 20px 0;
	font-size: 1em;


}

.pricing-table.recommended .pricing-title {
	background: #403e3d;
}

.pricing-table.recommended .pricing-action {
	background:#403e3d;
}

.pricing-table .price {
	background: #403e3d;
	font-size: 12px;
	color: white;
	padding: 20px 0;

}

.pricing-table .price sup {
	font-size: 2em;
	position: relative;
	left: 5px;
}

.table-list {
	background: #403e3d;
	color: #403d3a;
}

.table-list li {
	font-size: 1.4em;
	font-weight: 700;
	padding: 12px 8px;
}

.table-list li:before {
	content: "\f00c";
	font-family: 'FontAwesome';
	color: #3fab91;
	display: inline-block;
	position: relative;
	right: 5px;
	font-size: 16px;
} 

.table-list li span {
	font-weight: 400;
}

.table-list li span.unlimited {
	color: #FFF;
	background: #403e3d;
	font-size: 0.9em;
	padding: 5px 7px;
	display: inline-block;
	-webkit-border-radius: 38px;
	-moz-border-radius: 38px;
	border-radius: 38px;
}


.table-list li:nth-child(2n) {
	background: #403e3d;
}

.table-buy {
	background: #403e3d;
	padding: 15px;
	text-align: left;
	overflow: hidden;
}

.table-buy p {
	float: left;
	color: #37353a;
	font-weight: 700;
	font-size: 2.4em;
}

.table-buy p sup {
	font-size: 0.5em;
	position: relative;
	left: 5px;
}

.table-buy .pricing-action {
	float: right;
	color: #FFF;
	background: #403e3d;
	padding: 10px 16px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	font-weight: 700;
	font-size: 1.4em;
	text-shadow: 0 1px 1px rgba(0,0,0,0.4);
	-webkit-transition: all 0.25s ease;
	-o-transition: all 0.25s ease;
	transition: all 0.25s ease;
}




.text-danger strong {
    		color: #9f181c;
		}
		.receipt-main {
			width: 400px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
	
			color: #333333;

		}
		.receipt-main p {
			color: #333333;


		}
		.receipt-footer h1 {
			font-size: 11px;
			
			margin: 0 !important;
		}
		.receipt-main::after {
			content: "";

			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 11px;
			
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 11px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 11px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 11px;
			
			margin: 0;

		}
		.receipt-header-mid .receipt-left h1 {
			margin: 34px 0 0;
	
			
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
	

#pie-chart {

  /*border: 1px solid gray;*/
  font: 10px sans-serif;
  height: 400px;
  text-shadow: none;
  width: 650px;
  margin-left: -70px;
  margin-top:-250px;
}
#pie-chart .total{
  font-size: 18px;
  font-weight: bold;
}
#pie-chart .units{
  fill: gray;
  font-size: 12px;
}
#pie-chart .label{
  fill: #CCC;
  font-size: 12px;
  font-weight: bold;
}
#pie-chart .value{
  font-size: 18px;
  font-weight: bold;
}

.toolTip {
    position: absolute;
    display: none;
    width: auto;
    height: auto;
    background: none repeat scroll 0 0 white;
    border: 0 none;
    border-radius: 8px 8px 8px 8px;
    box-shadow: -3px 3px 15px #888888;
    color: black;
    font: 12px sans-serif;
    padding: 5px;
    text-align: center;
}

</style>

<script type="text/javascript">
	
	var div = d3.select("body").append("div").attr("class", "toolTip");

var w = 650;
var h = 400;
var r = 150;
var ir = 75;
var textOffset = 24;
var tweenDuration = 1050;

//OBJECTS TO BE POPULATED WITH DATA LATER
var lines, valueLabels, nameLabels;
var pieData = [];    
var oldPieData = [];
var filteredPieData = [];

//D3 helper function to populate pie slice parameters from array data
var donut = d3.layout.pie().value(function(d){
  return d.itemValue;
});

//D3 helper function to create colors from an ordinal scale
var color = d3.scale.category10();

//D3 helper function to draw arcs, populates parameter "d" in path object
var arc = d3.svg.arc()
  .startAngle(function(d){ return d.startAngle; })
  .endAngle(function(d){ return d.endAngle; })
  .innerRadius(ir)
  .outerRadius(r);

///////////////////////////////////////////////////////////
// GENERATE FAKE DATA /////////////////////////////////////
///////////////////////////////////////////////////////////

var data = [
  <?php 
 $line4 =	"select * from `incomes_list` WHERE date = '$date1' and userid =$userid;" ;  
 $result4 = mysqli_query($conn,$line4); 
 while($id_pro4 = mysqli_fetch_assoc($result4)){
  $expcat4 = $id_pro4['income_category'];
   $exp4 = $id_pro4['incomes'];
   echo"
 {
    'itemLabel':'$expcat4',
    'itemValue':$exp4
 },";}
 ?>
];

///////////////////////////////////////////////////////////
// CREATE VIS & GROUPS ////////////////////////////////////
///////////////////////////////////////////////////////////

var vis = d3.select("#pie-chart").append("svg:svg")
  .attr("width", w)
  .attr("height", h);

//GROUP FOR ARCS/PATHS
var arc_group = vis.append("svg:g")
  .attr("class", "arc")
  .attr("transform", "translate(" + (w/2) + "," + (h/2) + ")");

//GROUP FOR LABELS
var label_group = vis.append("svg:g")
  .attr("class", "label_group")
  .attr("transform", "translate(" + (w/2) + "," + (h/2) + ")");

//GROUP FOR CENTER TEXT  
var center_group = vis.append("svg:g")
  .attr("class", "center_group")
  .attr("transform", "translate(" + (w/2) + "," + (h/2) + ")");

//PLACEHOLDER GRAY CIRCLE
// var paths = arc_group.append("svg:circle")
//     .attr("fill", "#EFEFEF")
//     .attr("r", r);

///////////////////////////////////////////////////////////
// CENTER TEXT ////////////////////////////////////////////
///////////////////////////////////////////////////////////

//WHITE CIRCLE BEHIND LABELS
var whiteCircle = center_group.append("svg:circle")
  .attr("fill", "white")
  .attr("r", ir);

///////////////////////////////////////////////////////////
// STREAKER CONNECTION ////////////////////////////////////
///////////////////////////////////////////////////////////

// to run each time data is generated
function update(data) {

  oldPieData = filteredPieData;
  pieData = donut(data);

  var sliceProportion = 0; //size of this slice
  filteredPieData = pieData.filter(filterData);
  function filterData(element, index, array) {
    element.name = data[index].itemLabel;
    element.value = data[index].itemValue;
    sliceProportion += element.value;
    return (element.value > 0);
  }

    //DRAW ARC PATHS
    paths = arc_group.selectAll("path").data(filteredPieData);
    paths.enter().append("svg:path")
      .attr("stroke", "white")
      .attr("stroke-width", 0.5)
      .attr("fill", function(d, i) { return color(i); })
      .transition()
        .duration(tweenDuration)
        .attrTween("d", pieTween);
    paths
      .transition()
        .duration(tweenDuration)
        .attrTween("d", pieTween);
    paths.exit()
      .transition()
        .duration(tweenDuration)
        .attrTween("d", removePieTween)
      .remove();

  paths.on("mousemove", function(d){
    div.style("left", d3.event.pageX+10+"px");
    div.style("top", d3.event.pageY-25+"px");
    div.style("display", "inline-block");
    div.html((d.data.itemLabel)+"<br>"+(d.data.itemValue));
  });

paths.on("mouseout", function(d){
    div.style("display", "none");
});


    //DRAW TICK MARK LINES FOR LABELS
    lines = label_group.selectAll("line").data(filteredPieData);
    lines.enter().append("svg:line")
      .attr("x1", 0)
      .attr("x2", 0)
      .attr("y1", -r-3)
      .attr("y2", -r-15)
      .attr("stroke", "gray")
      .attr("transform", function(d) {
        return "rotate(" + (d.startAngle+d.endAngle)/2 * (180/Math.PI) + ")";
      });
    lines.transition()
      .duration(tweenDuration)
      .attr("transform", function(d) {
        return "rotate(" + (d.startAngle+d.endAngle)/2 * (180/Math.PI) + ")";
      });
    lines.exit().remove();

    //DRAW LABELS WITH PERCENTAGE VALUES
    valueLabels = label_group.selectAll("text.value").data(filteredPieData)
      .attr("dy", function(d){
        if ((d.startAngle+d.endAngle)/2 > Math.PI/2 && (d.startAngle+d.endAngle)/2 < Math.PI*1.5 ) {
          return 5;
        } else {
          return -7;
        }
      })
      .attr("text-anchor", function(d){
        if ( (d.startAngle+d.endAngle)/2 < Math.PI ){
          return "beginning";
        } else {
          return "end";
        }
      })
      .text(function(d){
        var percentage = (d.value/sliceProportion)*100;
        return percentage.toFixed(1) + "%";
      });

    valueLabels.enter().append("svg:text")
      .attr("class", "value")
      .attr("transform", function(d) {
        return "translate(" + Math.cos(((d.startAngle+d.endAngle - Math.PI)/2)) * (r+textOffset) + "," + Math.sin((d.startAngle+d.endAngle - Math.PI)/2) * (r+textOffset) + ")";
      })
      .attr("dy", function(d){
        if ((d.startAngle+d.endAngle)/2 > Math.PI/2 && (d.startAngle+d.endAngle)/2 < Math.PI*1.5 ) {
          return 5;
        } else {
          return -7;
        }
      })
      .attr("text-anchor", function(d){
        if ( (d.startAngle+d.endAngle)/2 < Math.PI ){
          return "beginning";
        } else {
          return "end";
        }
      }).text(function(d){
        var percentage = (d.value/sliceProportion)*100;
        return percentage.toFixed(1) + "%";
      });

    valueLabels.transition().duration(tweenDuration).attrTween("transform", textTween);

    valueLabels.exit().remove();


    //DRAW LABELS WITH ENTITY NAMES
    nameLabels = label_group.selectAll("text.units").data(filteredPieData)
      .attr("dy", function(d){
        if ((d.startAngle+d.endAngle)/2 > Math.PI/2 && (d.startAngle+d.endAngle)/2 < Math.PI*1.5 ) {
          return 17;
        } else {
          return 5;
        }
      })
      .attr("text-anchor", function(d){
        if ((d.startAngle+d.endAngle)/2 < Math.PI ) {
          return "beginning";
        } else {
          return "end";
        }
      }).text(function(d){
        return d.name;
      });

    nameLabels.enter().append("svg:text")
      .attr("class", "units")
      .attr("transform", function(d) {
        return "translate(" + Math.cos(((d.startAngle+d.endAngle - Math.PI)/2)) * (r+textOffset) + "," + Math.sin((d.startAngle+d.endAngle - Math.PI)/2) * (r+textOffset) + ")";
      })
      .attr("dy", function(d){
        if ((d.startAngle+d.endAngle)/2 > Math.PI/2 && (d.startAngle+d.endAngle)/2 < Math.PI*1.5 ) {
          return 17;
        } else {
          return 5;
        }
      })
      .attr("text-anchor", function(d){
        if ((d.startAngle+d.endAngle)/2 < Math.PI ) {
          return "beginning";
        } else {
          return "end";
        }
      }).text(function(d){
        return d.name;
      });

    nameLabels.transition().duration(tweenDuration).attrTween("transform", textTween);

    nameLabels.exit().remove();
    
}

///////////////////////////////////////////////////////////
// FUNCTIONS //////////////////////////////////////////////
///////////////////////////////////////////////////////////

// Interpolate the arcs in data space.
function pieTween(d, i) {
  var s0;
  var e0;
  if(oldPieData[i]){
    s0 = oldPieData[i].startAngle;
    e0 = oldPieData[i].endAngle;
  } else if (!(oldPieData[i]) && oldPieData[i-1]) {
    s0 = oldPieData[i-1].endAngle;
    e0 = oldPieData[i-1].endAngle;
  } else if(!(oldPieData[i-1]) && oldPieData.length > 0){
    s0 = oldPieData[oldPieData.length-1].endAngle;
    e0 = oldPieData[oldPieData.length-1].endAngle;
  } else {
    s0 = 0;
    e0 = 0;
  }
  var i = d3.interpolate({startAngle: s0, endAngle: e0}, {startAngle: d.startAngle, endAngle: d.endAngle});
  return function(t) {
    var b = i(t);
    return arc(b);
  };
}

function removePieTween(d, i) {
  s0 = 2 * Math.PI;
  e0 = 2 * Math.PI;
  var i = d3.interpolate({startAngle: d.startAngle, endAngle: d.endAngle}, {startAngle: s0, endAngle: e0});
  return function(t) {
    var b = i(t);
    return arc(b);
  };
}

function textTween(d, i) {
  var a;
  if(oldPieData[i]){
    a = (oldPieData[i].startAngle + oldPieData[i].endAngle - Math.PI)/2;
  } else if (!(oldPieData[i]) && oldPieData[i-1]) {
    a = (oldPieData[i-1].startAngle + oldPieData[i-1].endAngle - Math.PI)/2;
  } else if(!(oldPieData[i-1]) && oldPieData.length > 0) {
    a = (oldPieData[oldPieData.length-1].startAngle + oldPieData[oldPieData.length-1].endAngle - Math.PI)/2;
  } else {
    a = 0;
  }
  var b = (d.startAngle + d.endAngle - Math.PI)/2;

  var fn = d3.interpolateNumber(a, b);
  return function(t) {
    var val = fn(t);
    return "translate(" + Math.cos(val) * (r+textOffset) + "," + Math.sin(val) * (r+textOffset) + ")";
  };
}

update(data);
</script>