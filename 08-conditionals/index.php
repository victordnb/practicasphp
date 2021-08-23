<?php

//conditionals:
//if, else, elseif, switch, ternary, ?, goto:
    
    
//if
$a = 27;
$b = 20;


if ($a > $b) {
    echo "a is greater than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is less than b";
}

echo "<br>";


//switch
$a = "green";

switch ($a) {
    case "red":
        echo "a is red";
        break;
    case "blue":
        echo "a is blue";
        break;
    case "green":
        echo "a is green";
        break;
    default:
        echo "a is not red, blue or green";
        break;
}

echo "<br>";

//ternary operator
$a = "blue";


echo ($a == "red") ? "a is red" : "a is not red";

//goto:
goto marca;
echo "<p>Instruction 1</p>";
echo "<p>Instruction 2</p>";
echo "<p>Instruction 3</p>";

marca: 
echo "<p>Instruction 4</p>";
echo "<p>Instruction 5</p>";
echo "<p>Instruction 6</p>";



?>