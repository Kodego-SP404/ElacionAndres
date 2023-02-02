<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to (assignment operator)
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
//age = 20, check if eligible to vote

// $age = 17;

// if($age >= 18) {
//     echo "You are old enough to vote";
// } else {
//     echo "Sorry, you are not eligible to vote!";
// }


// 1 - 12 morning; 13 - 17 afternoon; 18 evening
// $t = date('H');
// echo $t;

// if ($t <= 12) {
//     echo "Have a great morning";
// } elseif ($t <= 17) {
//     echo "Have a great afternoon";
// } else {
//     echo "Have a great evening";
// }

$posts = ['First'];

// if (!empty($posts[0])){
//    echo $posts[0];
// } else {
//     echo "There are no posts";
// }


// ternary operator is a shorthand if statement

// $firstPost = !empty($posts) ? $posts[0] : 'No posts';
// echo $firstPost

//Switch statement
$favcolor = "";

switch ($favcolor){
    case 'red':
        echo 'Your favorite color is red!';
        break;
    case 'green':
        echo 'Your favorite color is green!';
        break;
    case 'blue':
        echo 'Your favorite color is blue!';
        break;
    default:
        echo "Your favorite color is nerither red, green nor blue ";
}












?>