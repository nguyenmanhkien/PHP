<?php
function multiply($value){
    $value = $value * 20;
    return $value;
}
$retval = multiply(10);
print ("Return value is : $retval");
?>