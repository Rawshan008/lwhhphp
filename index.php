<?php 
// Tanary Operator

$n = 10;
if($n>10){
    echo "$n is grather than 10";
}elseif(10==$n){
    echo "$n is equal to 10";
}else{
    echo "$n is less than 10";
}
echo "\n";

$number = ($n>10)? "$n is grather than 10": ((10 < $n)? "$n is equal to 10" :"$n is less than 10");
echo $number;

echo "\n";

if(0 == $n){
    echo "$n is equeal to 0";
}elseif($n%2==0){
    echo "$n is an Even Number";
}else{
    echo "$n is a Odd Number";
}

echo "\n";

$result = (0==$n)?"$n is equeal to 0": (($n%2==0) ?"$n is an Even Number": "$n is a Odd Number");
echo $result;
