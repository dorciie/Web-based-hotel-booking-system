<?php
    include __DIR__ . '/auth.php';
    //$result = mysqli_query($dbhandle, "SELECT district_name, state_name FROM district ORDER BY state_name");
?>
<?php
$district_name = $_SESSION['district'];
// $district_name = 'JASIN';
// echo $district_name ."<br>";

$district_id = mysqli_query($dbhandle, "SELECT district_id FROM district
                            WHERE district_name LIKE '$district_name'")->fetch_assoc()['district_id'];

// echo "district_id ".$district_id ."<br>";


$population = mysqli_query($dbhandle, "SELECT population FROM district
                           WHERE district_id LIKE '$district_id'")->fetch_assoc()['population'];
// echo "population ". $population ."<br>";


$hotel_id = mysqli_query($dbhandle, "SELECT hotel_id FROM hotel
                         WHERE district_id LIKE '$district_id'")->fetch_assoc()['hotel_id'];
// echo "hotel_id ". $hotel_id ."<br>";

$hotel_capacity = mysqli_query($dbhandle, "SELECT sum(occupancy * total_room) as ss FROM room
                                           WHERE hotel_id = $hotel_id
                                           GROUP BY hotel_id ")->fetch_assoc()['ss'];
// echo "hotel_capacity ". $hotel_capacity  ."<br>";


require 'casesData.php';
$active_cases = "";
if (array_key_exists($district_name, $district_FINAL)) {
    $active_cases = $district_FINAL[$district_name];
    // echo "active_cases ". $active_cases ."<br>";
} else {
    $active_cases = 0;
}
$risk = (($active_cases / $population) * $hotel_capacity)*100;

// echo round($risk, 2) ."%<br>";
// echo round($risk, 0) ." out of 100 people are at risk of getting COVID";

?>