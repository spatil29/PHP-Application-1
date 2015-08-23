<!DOCTYPE html>
<?php
/**
* Data Section 2
*/
$daysOfTheWeekOpen = array(1=>"Mon",2=>"Tue",3=>"Wed",4=>"Thur",5=>"Fri");
$openingHours = array("Mon"=>9,"Tue"=>9,"Wed"=>9,"Thur"=>12,"Fri"=>9);
$closingHours = array("Mon"=>5,"Tue"=>5,"Wed"=>5,"Thur"=>4.30,"Fri"=>4.30);
$applicationType=array(1=>"Large",2=>"Small",3=>"Mobile Phone");
$droppOffday=array(1=>"Mon",2=>"Tue",3=>"Wed",4=>"Fri");//Days where store is open for more than 6h.This is calculated by taking difference between opening and closing hours.
//drop off timings 
$diffMon=$closingHours["Mon"]-3;
$diffTue=$closingHours["Tue"]-3;
$diffWed=$closingHours["Wed"]-3;
$diffFri=$closingHours["Fri"]-3;
$pm="pm";
$hyphen="-";
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
		color: black;
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
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="quote.php">Quote</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <h3 class="muted">Reliable Repair</h3>
      </div>

      <hr>

      <div class="row-fluid marketing">
		<h1>Reliable Repair</h1>
		<h4>Details about store timings are shown below</h4>
        <div class="span6">
		<?php
	//This code is to display calender for current month		
		$month= date("m");
		$date= date("d");     // Finds today's date
		$year= date("y");     // Finds today's year
		$noOfDays= date('t',mktime(0,0,0,$month,1,$year)); // calculate number of days in a month
		$currentMonth=date('M',mktime(0,0,0,$month,1,$year)); // Month is calculated to display at the top of the calendar
		$currentYear=date('Y',mktime(0,0,0,$month,1,$year)); // Year is calculated to display at the top of the calendar
		$j=date('w',mktime(0,0,0,$month,1,$year)); // This will calculate the week day of the first day of the month
		for($k=1; $k<=$j; $k++){ // Start date
			$adj="<td></td>";
			}
	// displaying table for calender
		echo " <table border='0.2' align=center><tr><td>";
		echo "<table align=center border='1'><td align=center colspan=7><b>$currentMonth $currentYear</b></td></tr>
			<tr>";
			//showing name of the days of the week
			echo "<td width=50><b>Sun</b></td>
				<td><b>Mon</b></td>
				<td><b>Tue</b></td>
				<td><b>Wed</b></td>
				<td><b>Thur</b></td>
				<td><b>Fri</b></td>
				<td width=50><b>Sat</b></td>
				</tr><tr>";
		 
	for($i=1;$i<=$noOfDays;$i++){
	// This will display the date inside the calendar cell 
	echo $adj."<td>$i<br>"; 
			$adj='';
			$j++;

	// When 1st week completes start 2nd week on next row		
	if($j==7){ 
			echo "</tr><tr>";
			$j=0;
	}
	//Showing the opening hours on the highlighted days.	
	if($j==2 || $j==3 ||$j==4){
		echo "9am-5pm";
	}elseif($j==5){
		echo "12pm-4.5pm";
	}elseif($j==6){
		echo "9am-4.5pm";
	}
}	
	echo "</tr></table></td></td></tr></table>";
?>
        </div>
      </div>
	   <div class="row-fluid">
		<h2>Quote</h2>
		<h4><p class="lead">Calculate your quote below</p></h4>
		<form  action="#" method="POST"> 
		<?php
		//section 7 - Calculate the quote
		echo "<b>Day:</b>"; // Combo box containing open days longer than 6 hours
		echo "<select>";
		echo "<option value='1'>".$daysOfTheWeekOpen["1"]."</option>";
		echo "<option value='2'>".$daysOfTheWeekOpen["2"]."</option>";
		echo "<option value='3'>".$daysOfTheWeekOpen["3"]."</option>";
		echo "<option value='5'>".$daysOfTheWeekOpen["5"]."</option>";
		echo "</select><br>";
		
		echo "<b>Application type:</b>"; // Combo box for application type
		echo "<select>";
		echo "<option value='1'>".$applicationType["1"]."</option>";
		echo "<option value='2'>".$applicationType["2"]."</option>";
		echo "<option value='3'>".$applicationType["3"]."</option>";
		echo "</select><br>";
		
		echo "<b>Drop Off day:</b>"; // Combo box containing all days where the store is open more than 6 hours
		echo "<select>";
		echo "<option value='1'>".$droppOffday["1"].$hyphen.$diffMon.$pm."</option>";
		echo "<option value='2'>".$droppOffday["2"].$hyphen.$diffTue.$pm."</option>";
		echo "<option value='3'>".$droppOffday["3"].$hyphen.$diffWed.$pm."</option>";
		echo "<option value='4'>".$droppOffday["4"].$hyphen.$diffFri.$pm."</option>";
		echo "</select><br>";
		
		echo "<b>Pick up day:</b>"; // Combo box containing all days the store is open
		echo "<select>";
		echo "<option value='1'>".$daysOfTheWeekOpen["1"]."</option>";
		echo "<option value='2'>".$daysOfTheWeekOpen["2"]."</option>";
		echo "<option value='3'>".$daysOfTheWeekOpen["3"]."</option>";
		echo "<option value='4'>".$daysOfTheWeekOpen["4"]."</option>";
		echo "<option value='5'>".$daysOfTheWeekOpen["5"]."</option>";
		echo "</select><br><br>";
		
		?>
		<input type="submit" value="Submit"> <!--Only Submit the form-->
		</form>
		
		</div>
   </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
