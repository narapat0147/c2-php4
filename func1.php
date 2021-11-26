<?php
//Function

$sub = $a - $b;
$division = $a/$b;
$multp = $a*$b;

function add(){
    $a = 10;
    $b = 5;
    $add = $a + $b;
    echo "This is a Function add =". $add."<br />";
}
function sub(){
    $a = 10;
    $b = 5;
    $add = $a + $b;
    echo "This is a Function sub =". $sub."<br />";
}
function division(){
    $a = 10;
    $b = 5;
    $add = $a + $b;
    echo "This is a Function division =". $division."<br />";
}

function multp(){
    $a = 10;
    $b = 5;
    $add = $a + $b;
    echo "This is a Function mu;tp =". $multp."<br />";
}
add();
sub();
division();
multp();    

echo "Subtition = ".$sub;
echo "<br />";
echo "Division = ".$division;
echo "<br />";
echo "Multiply = ".$multp;