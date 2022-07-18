<?php
function static_variable(){
    static $X = 10;
    $Y = 20;
    $X++;
    $Y++;
    echo "static: ".$X."<br>";
    echo "non-static: ".$Y."<br>";
}
static_variable();
static_variable();
?>