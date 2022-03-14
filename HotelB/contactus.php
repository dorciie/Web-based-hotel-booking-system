<?php 
session_start();
$hotel_id = $_SESSION['hotel_id'];
// echo $hotel_id;
?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="reservation hotel for malaysia">
<meta name="zulkarnain" content="gambohnetwork.com.my">
<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
<link rel="stylesheet" href="contactus.css">
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

<body>
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
<?php
          include __DIR__ . '/auth.php';
          $result = mysqli_query($dbhandle, "select * from hotel where hotel_id = '".$hotel_id."'");
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
          ?>
  <div>
  <div class="contactCard">
    <!-- <div class="container"> -->
      <div class="nameContainer">
        <div class="line">
          <h20><?php echo $row['hotel_name']; ?></h20>
        </div>
      </div>
      <div class="infoContainer">
        <div class="line">
          <div class="icon">
            <svg class="icon-home" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M 12 2 A 1 1 0 0 0 11.289062 2.296875 L 1.203125 11.097656 A 0.5 0.5 0 0 0 1 11.5 A 0.5 0.5 0 0 0 1.5 12 L 4 12 L 4 20 C 4 20.552 4.448 21 5 21 L 9 21 C 9.552 21 10 20.552 10 20 L 10 14 L 14 14 L 14 20 C 14 20.552 14.448 21 15 21 L 19 21 C 19.552 21 20 20.552 20 20 L 20 12 L 22.5 12 A 0.5 0.5 0 0 0 23 11.5 A 0.5 0.5 0 0 0 22.796875 11.097656 L 12.716797 2.3027344 A 1 1 0 0 0 12.710938 2.296875 A 1 1 0 0 0 12 2 z"></path>
            </svg>
          </div>
          <p><?php echo $row['address']; ?></p>
        </div>
        <div class="line">
          <div class="icon">
            <svg class="icon-phone" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"/>
            </svg>
          </div>
          <p><?php echo $row['contact_num']; ?></p>
        </div>
      </div>
    <!-- </div> -->
  </div>  
            </div>
  <?php
            }
          } else {
            echo "0 results";
          }
          ?>
</body>

</html>