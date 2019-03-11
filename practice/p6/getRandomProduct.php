<?php
$beach = array();
$beach["product"] = "Microfiber Beach Towel";
$beach["price"] = 40;
$beach["qty"] = 2;

$flip = array();
array_push($flip,$beach);


$beach["product"] = "Flip-flop Sandals";
$beach["price"] = 30;
$beach["qty"] = 5;


array_push($flip,$beach);

$beach["product"] = "Sunscreen 80SPF";
$beach["price"] = 25;
$beach["qty"] = 3;

array_push($flip,$beach);

$beach["product"] = "Platic Flying Disc";
$beach["price"] = 15;
$beach["qty"] = 4;

array_push($flip,$beach);

$beach["product"] = "Beach Umbrella";
$beach["price"] = 75;
$beach["qty"] = 1;


array_push($flip,$beach);
echo json_encode($flip[rand(0,4)]);
?>