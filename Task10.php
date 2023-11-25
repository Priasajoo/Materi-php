<?php
function gradeCalculation($grade){
    if($grade >= 90){
        return "A+";
    }
    else if($grade >= 80){
        return "A";
    }
    else if($grade >= 70){
        return "B";
    }
    else if($grade >= 60){
        return "C";
    }
    else if($grade >= 50){
        return "D";
    }
    else{
        return "E";
    }
}

// testing
$grade = 85;
$result = gradeCalculation($grade);
echo "Grade: $grade = $result";
?>