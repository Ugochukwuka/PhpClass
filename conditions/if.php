<?php

        // If condition executes a block of code if one condition is true

        // if(5 > 3){
        //     echo "Have a good day!";
        // }


        //using of variables to check an if condition
        // $t = 14;

        // if($t < 20){
        //     echo "Have a good day!";
        // }


        // if(5 < 4){
        //     echo "Hello";
        // }
        // echo ", my name is Linus";


        // $x = 4;
        // if($x > 4){
        //     echo "Hello";
        // }
        // echo ", my name is Linus"


        // $x = 5;
        // if(5 > 4){
        //     echo "Hello";
        // }
        
        // echo ", my name is Linus"

        // $t = 14;
        // //Equal comparison operator 
        // if($t == 14){
        //     echo "Have a good day!";
        // }

        
        //Identical operator compare two variable to check if they 
        //are identical === eg 100 is identical to 100
        // $x = 100;
        // $y = 100;

        // if($x === $y){
        //     echo "$x is identical to $y";
        // }


        //short hand if to write shorter code u can write if statements on one line
        // $a = 5;

        // $b = $a > 10 ? "Hello" : "Good Bye";

        // echo $b


        //check if a number is even or odd
        // $num = 11;
        // $result = ($num % 2 == 0) ? 'Even' : 'Odd';
          // echo $result;


          //Using Ternary operators for multiple conditions
          // Fatal error: Unparenthesized `a ? b : c ? d : e` is not supported. 
          // Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` in C:\xampp\htdocs\PhpClass\conditions\if.php on line 72

          // $score = 60;

          // $grade = ($score >= 90) ? 'A' :
          //         (($score >= 80) ? 'B' :
          //         (($score >= 70) ? 'C' :
          //         (($score >= 60) ? 'D' : 'F')));

          //     echo $grade;


          // nested if is when you have another if inside an if statement
          $a = 20;

          if($a > 10){
            echo "Above 10";
              if($a > 20){
                echo " and also above 20";
              }else {
                echo " but not above 20";
              }
          }



?>