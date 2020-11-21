<?php

    // // $i1 = $_POST['name'];
    // // $i2 = $_POST['id'];
    // // $op = $_POST['op'];
    // switch($op)
    // {
    //     case "+":
    //         $output = $i1 + $i2;
    //         echo $output;
    //         break;
    //     case "-":
    //         $output = $i1 - $i2;
    //         echo $output;
    //         break;
    //     case '*':
    //         $output = $i1 * $i2;
    //         echo $output;
    //         break;
    //     case '/':
    //         $output = $i1 / $i2;
    //         echo $output;
    //         break;
    //     default:
    //     echo $output = "Not Found...Please Enter only Integers or Decimals...";
    // }



    if(isset($_POST)){
        extract($_POST);
        $operator = array('+', '-', '*','=');
        $ans = '';
        switch($action){
            case 'equal':
                $empty = '';
                if(strlen($num1)>0) {
                    $empty = substr($num1, -1);
                }
                if($num1 <> '' and !in_array($empty, $operator)){
                $ans = eval("return ($num1);");
                } else {
                    $ans = $num1;
                }
            break;
            case 'operation':
                $empty = '';
                if(strlen($num1)>0) {
                    $empty = substr($num1, -1);
                } 
                if( in_array($empty, $operator) and in_array($num, $operator) ){
                    
                        $ans = $num1;
                
                } else if($num1 == '' and in_array($num, $operator) and $num<>'.'){
                    $ans = '';
                } else {
                    $ans = $num1.$num;
                }
            break;
            default: $ans = $num1;
        }
        echo $ans;
    } 












?>