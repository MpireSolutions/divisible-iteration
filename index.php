<?php
    // Loops through 1 to 100
    for($i=1; $i<=100; $i++){
    // checking to see if number is completely divisible by 3 as well as by 5
        if( $i%3 == 0 && $i%5 == 0){
            echo 'Research_Square</br>';
        }
    // checking to see if number is completely divisible 5
        elseif ( $i%5 == 0 ){
            echo 'Square</br>';
        } 
    // checking to see if number is completely divisible 3
        elseif ( $i%3 == 0  ){
            echo 'Research</br>';
        } 
    // if all above conditions fails
        else {
            echo $i . '</br>';
        }
    }
?>