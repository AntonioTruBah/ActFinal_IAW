<?php
use equation\modelo\EquationDegree2;
$receivedData = file_get_contents('php://input');
$decodedData = json_decode($receivedData,true);

require "../vendor/autoload.php";

$equationDegree2 = new EquationDegree2($decodedData['a'], $decodedData['b'], $decodedData['c']);

$html = "<tr><th>x</th><th>y</th></tr>";
for ($i=0; $i < 11; $i++){
    $result = $equationDegree2->calculate($i);
    $html = "<tr><td>".$i."</td><td>".$result."</td></tr>";
    echo $html;
}