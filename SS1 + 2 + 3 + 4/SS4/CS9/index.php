<?php
$x1 = 25;
$y1 = 10;
function myTest(){
    global $x1, $y1;
    $y1 = $x1 + $y1;
}
myTest();
echo $y1;
?>