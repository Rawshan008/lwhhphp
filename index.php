<?php 
$year = 2018;

if($year % 4 == 0 && $year % 100 == 0 && $year % 400 ==0){
    echo "{$year} is leap Year";
}else if($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not leap year";
}else if($year % 4 == 0){
    echo "{$year} is leap year";
}else{
    echo "{$year} is not leap year";
}

echo "\n";

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is leap year";
}else{
    echo "{$year} is not leap year";
}