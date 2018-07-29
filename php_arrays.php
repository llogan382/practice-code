<?php
//lopps are available. 

if(($a==$b) == FALSE){
    echo('values are not equal');
}
if($a<>$b){
    echo('values are not equal');//this does the same thing. 
}
if($a != $b){
    echo('values are not equal');//$a = 5 and $b ='5' 
}
if($a !== $b){
    echo('values are not identical.');//$a and $b must be the same type
}
if(0){
    echo('true'); //0 evaluates to true
}

//echo an array can be helpful with the imploade funciton. 
$learn[] = 'some witty string'; //this will add the string to the end of the array
//a new key value is created for this new element in the array. 

//array_shift and array_pop Shift will remove the first item from the array, pop
//will remove the last item from the array. 

//unset will remove the key and value from an array. Keys are not updated. 

//array_values is like refreshing array keys. 