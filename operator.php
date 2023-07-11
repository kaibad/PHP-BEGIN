<?php
echo "<br><br><br><br>operator";

$a=21;
$b=10;
echo "<br>sum is:",$a+$b;
echo "<br> Difference is:",$a-$b;
echo "<br>Product is:",$a-$b;
echo "<br>Quotient is:",$a/$b;
echo "<br>Remainder is:",$a%$b;

echo "<br><br>";

if($a==$b){
    echo $a, " and", $b," are equal";
}
else{
    echo  $a, " and", $b," are not equal";
}


if($a!==0 && $b!==0){
    echo "<br>true";
}
else{
echo "false";
}

$c=5;
if($c<0){
    echo "<br>negative number.";
}
elseif($c>0){
    echo "<br>positive number";
} 
else{
    echo "<br>Zero";
}

$email="hiro@gmail.com";
$password="sf15s12ss5";
 $user= $email != "" && $password !=""?"Welcome!":"Denied!";
 echo "<br>",$user; 
?>