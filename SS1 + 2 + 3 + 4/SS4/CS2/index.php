<?php
$x = 5; // global scope
function test(){
    // using x in this function will generate an error
    echo "Following line shows an error since the variable x is declared out side.";
    echo "<p>Variable x inside function is: $x error</p>";
}
echo "<br>";
test();
echo "<p>Variable x outside function is: $x </p>";
?>
