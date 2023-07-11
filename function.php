<?php
echo "<br><br><br><br>Funtion:";
function printname(){
    echo "<br>kailash badu by function.";
}
printname();

function kailash($name){
    echo"<br>my name is ".$name;
}
kailash("kailash");

function addnumber($a,$b){
    return $a+$b;
}
echo " <br>the sum is:".addnumber(2,5);

?>