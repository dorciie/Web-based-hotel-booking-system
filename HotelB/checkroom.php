<?php
session_start();
if (isset($_POST["checkin"]) && !empty($_POST["checkin"]) && isset($_POST["checkout"]) && !empty($_POST["checkout"])) {
	$_SESSION['checkin_date'] = date('d-m-y', strtotime($_POST['checkin']));
	$_SESSION['checkout_date'] = date('d-m-y', strtotime($_POST['checkout']));
	$_SESSION['checkin_db'] = date('y-m-d', strtotime($_POST['checkin']));
	$_SESSION['checkout_db'] = date('y-m-d', strtotime($_POST['checkout']));
	$_SESSION['datetime1'] = new DateTime($_SESSION['checkin_db']);
	$_SESSION['datetime2'] = new DateTime($_SESSION['checkout_db']);
	$_SESSION['checkin_unformat'] = $_POST["checkin"];
	$_SESSION['checkout_unformat'] = $_POST["checkout"];
	$_SESSION['interval'] = $_SESSION['datetime1']->diff($_SESSION['datetime2']);
	$_SESSION['district'] = $_POST['district'];

	$_SESSION['total_night'] = $_SESSION['interval']->format('%d');
}
if (isset($_POST["totaladults"])) {
	$_SESSION['adults'] = $_POST["totaladults"];
}

if (isset($_POST["totalchildrens"])) {
	$_SESSION['childrens'] = $_POST["totalchildrens"];
}
?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="reservation hotel for malaysia">
<meta name="zulkarnain" content="gambohnetwork.com.my">
<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
<link rel="stylesheet" href="scss/foundation.css">
<link rel="stylesheet" href="scss/style.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace">
<meta class="foundation-mq-xxlarge">
<meta class="foundation-mq-xlarge">
<meta class="foundation-mq-large">
<meta class="foundation-mq-medium">
<meta class="foundation-mq-small">
<style>
	@import url(https://fonts.googleapis.com/css?family=Montserrat);
* {
	box-sizing: border-box;
}
body {
  /* background: #dddddd; */
  font-family: 'Montserrat', sans-serif;
  background-image: url('https://textures.world/wp-content/uploads/2018/10/10-Smooth-Concrete-Background-Texture-copy.jpg');
  /* background-position: center;
  background-size: cover;
  background-repeat: no-repeat; */
  

}

/* Start Navigation Bar */

.navbar {
  background-color: #25283D;
  color: #ffffff;
  border-radius: 4px;
  width: 100vw;
  max-width: 820px;
  margin: 20px auto 0;
}

.navbar .menu {
  display: flex;
  position: relative;
}

@media (max-width: 820px) {
  .navbar .menu {
    display: block;
    position: relative;
  }
}

.navbar .menu li {
  flex: 1;
  display: flex;
  text-align: center;
  transition: background-color 0.5s ease;
}

.navbar .menu a {
  flex: 1;
  justify-content: center;
  display: inline-flex;
  color: #ffffff;
  text-decoration: none;
  padding: 10px;
  position: relative;
}

.navbar .menu a > .fa {
  font-weight: bold;
  margin-left: 8px;
}

.navbar .menu li:hover {
  background-color: #4dc193;
}

.navbar .menu li:hover .container {
  display: flex;
}

@media (max-width: 820px) {
  .navbar .menu li:hover .container {
    display: none;
  }
  
  .fa-angle-down {
    display: none;
  }
}

/* End Navigation Bar */

</style>


<meta class="foundation-mq-topbar">
</head>

<body class="fontbody">
<!-- Start Navigation Bar -->
<nav class="navbar">
  <ul class="menu">
    <li>
      <a href="index.php">Hotel Booking Page</a>
    </li>
    <li>
      <a href="contactus.php">Contact</a>
    </li>
    <ul>
</nav>
<!-- End Navigation Bar -->

	<div class="row foo" style="margin:30px auto 30px auto;">
		<div class="large-12 columns">
			<div class="large-3 columns centerdiv">
				<a href="sessiondestroy.php" class="button round blackblur fontslabo">1</a>
				<p class="fontblack">Please select Date</p>
			</div>
			<div class="large-3 columns centerdiv">
				<a href="#" class="button round fontslabo" style="background-color:#2ecc71;">2</a>
				<p class="fontblack">Select Room</p>
			</div>
			<div class="large-3 columns centerdiv">
				<a href="#" class="button round blackblur fontslabo">3</a>
				<p class="fontblack">Guest Details</p>
			</div>
			<div class="large-3 columns centerdiv">
				<a href="#" class="button round blackblur fontslabo">4</a>
				<p class="fontblack">Reservation Complete</p>
			</div>
		</div>

	</div>
	</div>

	<div class="row">
		<div class="large-4 columns blackblur fontcolor" style="margin-left:-10px; padding:10px;">

			<div class="large-12 columns ">
				<p><b>Your Reservation</b></p>
				<hr class="line">
				<form action="sessiondestroy.php" method="post">
					<div class="row">
						<div class="large-12 columns">
							<div class="row">

								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey">Check In
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="">: <?php echo $_SESSION['checkin_date']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey">Check Out
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="">: <?php echo $_SESSION['checkout_date']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey">Adults
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="">: <?php echo $_SESSION['adults']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey">Childrens
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="">: <?php echo $_SESSION['childrens']; ?>
									</span>

								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey" style="font-size:13.2px;">No. of Night Stay(s)
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="">: <?php echo  $_SESSION['total_night']; ?>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="large-6 columns" style="max-width:100%;">
									<span class="fontgrey" style="font-size:13.2px;">District
									</span>
								</div>

								<div class="large-4 columns" style="max-width:100%;">
									<span class="">: <?php echo  $_SESSION['district']; ?>
									</span>
								</div>
							</div>

						</div>
					</div>

					</br>
					<?php require 'casesData.php'; 
				$cases_by_district = null;
				

				if(isset($district_FINAL[$_SESSION['district']])){
					$cases_by_district = $district_FINAL[$_SESSION['district']];
				}

				$colour = "";
				$zone = "";
				if($cases_by_district < 1 || $cases_by_district == null){
					$colour = "#278511";
					$zone = "Green Zone";
				}
				elseif($cases_by_district < 21){
					$colour = "#FDDA0D";
					$zone = "Yellow Zone";	
				}
				elseif($cases_by_district < 41){
					$colour = "#ff9800";
					$zone = "Orange Zone";
				}
				else{
					$colour = "#f44336";
					$zone = "Red Zone";
				}

				?>
					<div class="card" style="border-radius: 10px; background-color:<?php echo $colour ?>">
					 	<div class="card-body" style="padding: 20px; text-align:center; font-size:30px;">
						 <?php echo $zone ?>
					 	</div>
					</div>

					<?php require 'riskStatus.php';
					$_SESSION['hotel_id'] = $hotel_id;
					// echo $hotel_id;
					echo "<br>";
					echo round($risk, 2) ."%<br>";
					echo round($risk, 0) ." out of 100 people are at risk of getting COVID";
					?>
					
				

				
					<div class="row">
						<div class="large-12 columns">
							<br><button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%; border-radius: 10px;">Edit Reservation</button>
						</div>
					</div>
				</form>
			</div>
			<div class="large-12 columns" id="roomselected" style="display:none;">
				<hr>
				<br><label for="submit-form" class="book button small fontslabo" style="background-color:#2ecc71; width:100%; height:45px; !important; border-radius: 10px;">Proceed To Book</label>
				<!--button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;" >Proceed Booking</button-->

			</div>



		</div>
		<div class="large-8 columns blackblur fontcolor" style="padding:10px">

			<div class="large-12 columns">
				<?php
				include __DIR__ . '/auth.php';
				// check available room
				$datestart =  date('y-m-d', strtotime($_SESSION['checkin_unformat']));
				$dateend =  date('y-m-d', strtotime($_SESSION['checkout_unformat']));

				$result = mysqli_query($dbhandle, "SELECT r.room_id, (r.total_room-br.total) as availableroom from room as r LEFT JOIN ( 
				
										SELECT roombook.room_id, sum(roombook.totalroombook) as total from roombook where roombook.booking_id IN 
											(
												SELECT b.booking_id as bookingID from booking as b 
												where 
												(b.checkin_date between '" . $datestart . "' AND '" . $dateend . "') 
												OR 
												(b.checkout_date between '" . $dateend . "' AND '" . $datestart . "')
												
												
											)
										
										group by roombook.room_id
										)
										as br
					 
					 ON r.room_id = br.room_id WHERE r.hotel_id = " . $hotel_id );
				echo mysqli_error($dbhandle);
				if (mysqli_num_rows($result) > 0) {
					echo "<p><b>Choose Your Room</b></p><hr class=\"line\">";
					print "				<form action=\"guestform.php\" method=\"post\">\n";


					while ($row = mysqli_fetch_array($result)) {


						if ($row['availableroom'] != null && $row['availableroom'] > 0) {
							$sub_result = mysqli_query($dbhandle, "select room.* from room where room.room_id = " . $row['room_id'] . " ");
							if (mysqli_num_rows($sub_result) > 0) {

								while ($sub_row = mysqli_fetch_array($sub_result)) {


									print "					<p><h4>" . $sub_row['room_name'] . "</h4></p>\n";
									print "					<div class=\"row\">\n";
									print "					\n";
									print "						<div class=\"large-4 columns\">\n";
									print "							<img src=\"" . $sub_row['imgpath'] . "\"></img>\n";
									print "						</div>\n";
									print "						<div class=\"large-4 columns\">\n";
									print "						<p><span class=\"fontgrey\">Occupancy : </span> " . $sub_row['occupancy'] . "<br>\n";
									print "						<span class=\"fontgrey\">Size : </span> " . $sub_row['size'] . "\n";
									print "						<br><span class=\"fontgrey\">View : </span> " . $sub_row['view'] . "</p>\n";
									print "\n";
									print "						</div>\n";
									print "						<div class=\"large-4 columns\">\n";
									print "						<p ><span class=\"fontgrey\">Rate : MYR </span><span style=\"font-size:24px;\">" . $sub_row['rate'] . "</span><span class=\"fontgrey\">/ night</span><br>\n";
									print "						<span style=\"text-align:right;\">" . $row['availableroom'] . " room available</span>\n";
									print "						</p>\n";
									print "							<div class=\"row\">\n";
									print "								<div class=\"large-11 columns\">\n";
									print "									<label class=\"fontcolor\">\n";
									print "										<select  class=\"no_of_room\" name=\"qtyroom" . $sub_row['room_id'] . "\" id=\"room" . $sub_row['room_id'] . "\" onChange=\"selection(" . $sub_row['room_id'] . ")\"  style=\"width:100%; color:black; height:45px;\" ;\">\n";
									print "											<option  value=\"0\">0</option>\n";
									$i = 1;
									while ($i <= $row['availableroom']) {
										print "											<option value=\"" . $i . "\">" . $i . "</option>\n";
										$i += 1;
									}
									print "										</select>\n";
									print "									</label>\n";
									print "								</div>\n";
									print "								<div class=\"large-1 columns\">\n";
									print "<input type=hidden name=\"selectedroom" . $sub_row['room_id'] . "\"  id=\"selectedroom" . $sub_row['room_id'] . "\" value=\"" . $sub_row['room_id'] . "\">";
									print "<input type=hidden name=\"room_name" . $sub_row['room_id'] . "\" id=\"room_name" . $sub_row['room_id'] . "\" value=\"" . $sub_row['room_name'] . "\">";
									print "								</div>\n";
									print "							</div>\n";
									print "						</div>\n";
									print "						\n";
									print "					</div>\n";
									print "					\n";
									print "				<hr>";
								}
							}
						} elseif ($row['availableroom'] == null) {
							$sub_result2 = mysqli_query($dbhandle, "select room.* from room where room.room_id = " . $row['room_id'] . " ");
							if (mysqli_num_rows($sub_result2) > 0) {
								while ($sub_row2 = mysqli_fetch_array($sub_result2)) {

									print "					<p><h4>" . $sub_row2['room_name'] . "</h4></p>\n";
									print "					<div class=\"row\">\n";
									print "					\n";
									print "						<div class=\"large-4 columns\">\n";
									print "							<img src=\"" . $sub_row2['imgpath'] . "\"></img>\n";
									print "						</div>\n";
									print "						<div class=\"large-4 columns\">\n";
									print "						<p><span class=\"fontgrey\">Occupancy : </span> " . $sub_row2['occupancy'] . "<br>\n";
									print "						<span class=\"fontgrey\">Size : </span> " . $sub_row2['size'] . "\n";
									print "						<br><span class=\"fontgrey\">View : </span> " . $sub_row2['view'] . "</p>\n";
									print "\n";
									print "						</div>\n";
									print "						<div class=\"large-4 columns\">\n";
									print "						<p ><span class=\"fontgrey\">Rate : MYR </span><span style=\"font-size:24px;\">" . $sub_row2['rate'] . "</span><span class=\"fontgrey\">/ night</span><br>\n";
									print "						<span style=\"text-align:right;\">" . $sub_row2['total_room'] . " room available</span>\n";
									print "						</p>\n";
									print "							<div class=\"row\">\n";
									print "								<div class=\"large-11 columns\">\n";
									print "									<label class=\"fontcolor\">\n";
									print "										<select  class=\"no_of_room\" name=\"qtyroom" . $sub_row2['room_id'] . "\"  id=\"room" . $sub_row2['room_id'] . "\" onChange=\"selection(" . $sub_row2['room_id'] . ")\" style=\"width:100%; color:black; height:45px;\" >\n";
									print "											<option value=\"0\">0</option>\n";
									$i = 1;
									while ($i <= $sub_row2['total_room']) {
										print "											<option value=\"" . $i . "\">" . $i . "</option>\n";
										$i += 1;
									}
									print "										</select>\n";
									print "									</label>\n";
									print "								</div>\n";
									print "								<div class=\"large-1 columns\">\n";
									print "<input type=hidden name=\"selectedroom" . $sub_row2['room_id'] . "\" value=\"" . $sub_row2['room_id'] . "\">";
									print "<input type=hidden name=\"room_name" . $sub_row2['room_id'] . "\" value=\"" . $sub_row2['room_name'] . "\">";
									//print "				<button type=\"submit\"  class=\"book button small\" style=\"background-color:#2ecc71; width:100%; height:45px; !important;\" >Book</button>\n";	
									print "								</div>\n";
									print "							</div>\n";
									print "						</div>\n";
									print "						\n";
									print "					</div>\n";
									print "					\n";
									print "				<hr>";
								}
							}
						}
					}
				} else {
					echo "<p><b>No room available</b></p><hr>";
				}
				print "<button type=\"submit\" id=\"submit-form\" class=\"hidden\" style=\"display:none\">Book</button>\n";
				print "	</form>";

				?>
				
			</div>



		</div>

	</div>
	<script>
		function selection(id) {
			var e = document.getElementById('roomselected').style.display = 'block';

		}
	</script>
</body>

</html>