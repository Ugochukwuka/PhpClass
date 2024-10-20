<?php


   //QUESTION
   //Create a PHP Script that checks whether a given input string is both a palindrome  
   //and contains only alphanumeric characters
   //*use identical operators === !== in your if statements to validate the conditions
   //if both conditions are met output valid palindrome
   //if both conditions are not met output Invalid


    //strrev revereses a string in PHP
    $string = "racecar";

    $newstring = strrev($string);

    
    //check if the string is palindrome and If its only alphanumeric 
    if(($string === $newstring) && ctype_alnum($string)){

        echo "Valid Palindrome";

    }else {
        # code...
        echo "Invalid Palindrome";
    }
    










?>