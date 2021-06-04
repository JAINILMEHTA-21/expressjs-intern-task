<?php
//associative array
//key=value
$a[0] = 11;
$a['d'] = "device";
$a['php'] = "web developer";
$a[2] = "two";
//type 2
4a = array(
    0 => 10,
    "d" => "device",
    "php" => "web developer",
    2 => "two",
)
// print value
echo "d for ",$a['d'];
foreach ($a as $value) {
    echo "<br/>value is $value";
}
foreach ($a as $key => $value) {
    echo "<br/>key is <b>$key</b> and value is <b>$value</b>";
}
// debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";