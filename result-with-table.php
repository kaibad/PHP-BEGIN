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

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "";
    echo "<br>";
    echo "<br>";    
    echo "<table>"; 
    echo "<th>Data in Table</th>"; 
    echo "<tr>"; 
    echo "<td>Student Name : $full_name</td>"; 
    echo "</tr>"; 

    echo "<tr >"; 
    echo "<td>Age:$age</td>"; 
    echo "<td>Gender :$gender</td>"; 
    echo "</tr>";

    echo "<tr>"; 
    echo "<td>Class:$class</td>"; 
    echo "<td>total marks obtained :$roll_no</td>"; 
    echo "</tr>";

    echo "<tr>"; 
    // echo "<th>Marks and</th>"; 
    echo "<td>Total Marks :$total</td>"; 
    echo "<td>Percentage :$percentage %</td>";    
    echo "</th>";
    
    echo "<tr>";     
    echo "<td>Division :$division</td>"; 
    echo "<td>Remarks :$remarks</td>"; 
    echo "</tr>";

    
    echo "</table>"; 


    }
result($full_name,$class,$roll_no,$age,$gender,$statistics,$discrete_structure,$maths_ii,$oop,$microprocessor);

?>
<style>
    table{
        width:50%;
       text-align:center;
       border:2px solid #000;
       background:rgba(0,0,0,0.2);

    }
    th{
        text-align:center;
    }
    tr{
        /* background:#d55327; */
        font-size:25px;
        
    }
    tr:first-child{
        width:100%;
        border:;

    }
    td{
        border:1px solid #000;

    }
</style>

