<?php

// =========data===========
$full_name="Darshana Padal";
$class="second sem";
$roll_no=28986;
$age=20;
$gender="male";
$statistics=99;
$discrete_structure=98;
$maths_ii=99;
$oop=95;
$microprocessor=97;
// ==========function to get total marks=========
function get_total_marks($statistics,$discrete_structure,$maths_ii,$oop,$microprocessor){
    return $statistics+$discrete_structure+$maths_ii+$oop+$microprocessor;
}
// ============function to get pecentage=======
function get_percentage($total){
    return $total/5;
}
// =============function to get division===========
function get_division($obtained_percentage){
    switch($obtained_percentage){
        case($obtained_percentage>=90):
            return "superrr distinction";
            break;
        case($obtained_percentage>=80 && $obtained_percentage<90):
            return " distinction";
            break;
        case($obtained_percentage>=60 && $obtained_percentage<80):
            return "first dividion";
            break;  
        case($obtained_percentage>=50 && $obtained_percentage<60):
            return "second division";
            break; 
        case($obtained_percentage>=50 && $obtained_percentage<60):
            return "Third Division";
            break; 
        case ($obtained_percentage<45);
            return "No Division";
            break;        
              
    }
}
// =======function to get remarks==========
function get_remarks($statistics,$discrete_structure,$maths_ii,$oop,$microprocessor){
    if($statistics<24 || $oop<24||$maths_ii<24||$microprocessor<24|$discrete_structure<24){
        return "Fail";
    }else{
        return "Pass";
    }
}
// =========main function==========

function result($full_name,$class,$roll_no,$age,$gender,$statistics,$discrete_structure,$maths_ii,$oop,$microprocessor){
    
    $total=get_total_marks($statistics,$discrete_structure,$maths_ii,$oop,$microprocessor);
    $percentage=get_percentage($total);
    $division=get_division($percentage);
    $remarks=get_remarks($statistics,$discrete_structure,$maths_ii,$oop,$microprocessor);
    echo"Student Name:-".$full_name;
    echo "<br>"; 
    echo 'Class:'.$class;
    echo "<br>";
    echo "total marks obtained : ".$total; 
    // echo "<br>Percentage:".$percentage;
    echo ($remarks=="Fail")?"<br>Percentage : --":"<br>Percentage : ".$percentage;
    // echo ("<br>Division:".$division);
    echo ($remarks=='Fail')?"<br>Division : N.G.": "<br>Division : ".$division;
    echo ("<br>Rmarks : ".$remarks);


}
result($full_name,$class,$roll_no,$age,$gender,$statistics,$discrete_structure,$maths_ii,$oop,$microprocessor);

?>

