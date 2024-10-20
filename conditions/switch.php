<?php

    //the switch statement select one of many blocks of code to be executed
    // switch(expression){

    //     case label1:
    //         //code
    //         runfun()
    //         break;
    //     case label2:
    //         //code
    //         runfun()
    //         break;
    //     case label1:
    //         //code
    //         runfun()
    //         break;
    //     default:
    //       //code
    //       runfun();

    // }

    //the expression is ran once and the value is compared with the values of case statement once it matches any the block of code of that fun runs
    $option =  if(isset($_GET['option'])) {

        
        switch($option){
            
            case 'register':
                
                echo "Red was selected";
                // break;
                
                case 'Pink';
                echo "Pink was selected not red";
                break;
                
                case 'blue':
                    echo "Blue was selected not red";
                    break;
                    
                    default:
                    echo "Your favourite color is not among Pink, Blue, Red";
                    
                }
                
            }
            else {
                echo "It is ok";
            }




?>