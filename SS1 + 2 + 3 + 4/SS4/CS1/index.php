<?php
function test(){
    $x = 5; // local variable
    echo "<p>variable x inside function is: $x</p>";
}
test();
echo "<p>variable x outside function is: $x</p>";
?>