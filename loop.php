<!-- ===========for loop======== -->
<?php
echo "<br><br><br><br><br>";
for($x=0;$x<=10;$x++){
    echo $x.". Kailash Badu";
    echo"<br>";
}
echo "<br><br><br><br><br>";

for($x=0;$x<=5;$x++){
    for($y=0;$y<=$x;$y++){
        echo"*";
    }
    echo"<br>";
}
echo "<br><br><br><br><br>";

for($x=5;$x>=0;$x--){
    for($y=0;$y<=$x;$y++){
        echo"*";
    }
    echo"<br>";
}



// ============while loop======
echo "<br><br><br><br><br>";

$a=1;
while($a<=10){
    echo "<br>kailash badu by while loop";
    $a++;
}
echo "<br><br><br><br><br>";
$b=1;
do{
    echo "<br>do while loop";
    $b++;
}while($b<=10);



?>