<!DOCTYPE html>
<?php
/**
* Data Section 1
*/
$daysOfTheWeekOpen = array(1=>"Mon",2=>"Tue",3=>"Wed",4=>"Thur",5=>"Fri");
$openingHours = array("Mon"=>9,"Tue"=>9,"Wed"=>9,"Thur"=>12,"Fri"=>9);
$closingHours = array("Mon"=>5,"Tue"=>5,"Wed"=>5,"Thur"=>4.30,"Fri"=>4.30);
//multidimensional array for daysOfTheWeekOpen,openingHours,closingHours
$scheduleTiming= array(array(1=>"Mon",2=>"Tue",3=>"Wed",4=>"Thur",5=>"Fri"),
						array("Mon"=>9,"Tue"=>9,"Wed"=>9,"Thur"=>12,"Fri"=>9),
						array("Mon"=>5,"Tue"=>5,"Wed"=>5,"Thur"=>4.30,"Fri"=>4.30),
					);
$day="Day";
$openingTime="Opening Time";
$lastDroppOffTime="Last DropOff Time";
$am="am-";
$pm="pm";
$message="No drop off is allowed";
//drop off timings 
$diffMon=$closingHours["Mon"]-3;
$diffTue=$closingHours["Tue"]-3;
$diffWed=$closingHours["Wed"]-3;
$diffFri=$closingHours["Fri"]-3;
//company address
$companyAddress="1717 N Larrabee St,Chicago,IL 60614-5621";

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Reliable Repair</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing messages */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
		background: url(img/sue.jpg);
		color:  black;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>

    <div class="container-narrow">

      <div class="masthead">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="quote.php">Quote</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Reliable Repair</h3>
      </div>

      <hr>
	   <div class="jumbotron">
		<h1>Chicago's No#1 Appliance Repair</h1>
        <p class="lead">We offer repairs of many household appliances. We charge customers by the hour to repair electronic equipment such as toasters, blu-ray players and televisions.</p>
        <a class="btn btn-large btn-success" href="quote.php">Request a quote today!</a>
		</div>
	<hr>

      <div class="row-fluid marketing">
		<h1>Reliable Repair</h1>
		<p class="lead">Please find below details about store timings.</p>
        <div >
		<?php
		//section 1
		 echo"<table border='1'>";
		 // prints 1st row
		 echo "<tr><td>$day</td><td>$openingTime</td><td>$lastDroppOffTime</td></tr>";
		 // prints 2nd row
		echo"<tr><td>".$scheduleTiming[0]["1"]."</td>"."<td>".$scheduleTiming[1]["Mon"]."$am".$scheduleTiming[2]["Mon"]."$pm"."</td>"."<td>".$diffMon."$pm"."</td></tr>";
		//prints 3rd row
		echo"<tr><td>".$scheduleTiming[0]["2"]."</td>"."<td>".$scheduleTiming[1]["Tue"]."$am".$scheduleTiming[2]["Tue"]."$pm"."</td>"."<td>".$diffTue."$pm"."</td></tr>"; 
		// prints 4th row
		echo"<tr><td>".$scheduleTiming[0]["3"]."</td>"."<td>".$scheduleTiming[1]["Wed"]."$am".$scheduleTiming[2]["Wed"]."$pm"."</td>"."<td>".$diffWed."$pm"."</td></tr>"; 
		// prints 5th row
		echo"<tr><td>".$scheduleTiming[0]["4"]."</td>"."<td>".$scheduleTiming[1]["Thur"]."$pm"."-".$scheduleTiming[2]["Thur"]."$pm"."</td>"."<td>"."$message"."</td></tr>"; 
		// prints 6th row
		echo"<tr><td>".$scheduleTiming[0]["5"]."</td>"."<td>".$scheduleTiming[1]["Fri"]."$am".$scheduleTiming[2]["Fri"]."$pm"."</td>"."<td>".$diffFri."$pm"."</td></tr>"; 
		echo "</table>";
		?>
   </div>

       <div class="span6">
        <?php
		//section 2
		?>
		</div>
      </div>

	  <div class="row-fluid">
	  <h2>Contact information</h2>
	  <h3>Company Address</h3>
		<?php 
		//section 3
		//prints company address
		echo $companyAddress; 
		echo PHP_EOL;
		?>
	  </div>
		
	<div class="row-fluid">
		<?php 
		//section 4
		?>
	  </div>
      <div class="footer">
	  <p class="lead">To get direction,Please visit below link</p>
    
        <?php
		//section 5
		// Website to find directions to the location
		echo '<a href="https://www.google.co.in/maps">Click here</a>'; 
		?>
      </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
