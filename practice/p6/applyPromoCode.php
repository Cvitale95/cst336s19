<?php
$codes = array();
$codes["Codes"] = "getFifty";
$codes["Discount"] = 50;
$promo = array();
array_push($promo,$codes);

$codes["Codes"] = "halfPrice";
$codes["Discount"] = 50;
array_push($promo,$codes);

$codes["Codes"] = "sand30";
$codes["Discount"] = 30;
array_push($promo,$codes);

$codes["Codes"] = "spring30";
$codes["Discount"] = 30;
array_push($promo,$codes);

$codes["Codes"] = "beach";
$codes["Discount"] = 20;
array_push($promo,$codes);

$codes["Codes"] = "sunny";
$codes["Discount"] = 20;
array_push($promo,$codes);

echo json_encode($promo);
?>