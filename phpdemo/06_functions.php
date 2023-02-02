<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform 
  a specific task.
  We can pass values into functions to change their behavior. 
  Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/
// $y = 12;
// function registerUser() 
// {
//     global $y;
//     echo "$y <br>";
//     $x = 10;
//     echo 'User has been registered!';
//     $y = $y + 10;
// }

// //Running a function
// echo $y;
// echo $x;
// registerUser();
// echo $y;

// function registerUser($email)
// {
//     echo $email . 'registered';
// } 

// // Running a function
// registerUser('Andres');

// function add($num1, $num2)
// {
//     return $num1 + $num2;
// }

// $sum = add(99,99);
// echo $sum;

// function add($num1 = 11, $num2 = 12)
// {
//     return $num1 + $num2;
// }

// $sum = add();
// echo $sum;

//Arrow function
$multiply = fn($num1, $num2) => $num1 * $num2;

echo $multiply(90,90);