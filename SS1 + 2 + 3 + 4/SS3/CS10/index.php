<?php
    class Color{
        function color(){
            $color_name = "green";
            echo "color is: ".$color_name;
        }
        function changeColor(){
            $color_name = "Red";
            echo "<br>updated color is: ".$color_name;
        }
    }
    $objColor = new Color();
    $objColor -> color();
    $objColor -> changeColor();