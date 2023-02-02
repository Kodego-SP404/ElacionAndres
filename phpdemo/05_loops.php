<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for ($x = 0; $x <= 10; $x++) {
//   echo "Number: $x <br>";
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
initial value
  while (condition) {
  // code to be executed
  // Increment
  }
*/

// $x = 1;

// while ($x <= 5){
//     echo "Number $x <br>";
//     $x++;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
// $x = 0;

// do {
//   echo "The number is: $x <br>";
//   $x++;
// } while ($x <= 5);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// $posts = ['first Post', 'second Post', 'thirsd Post'];
// for ($x = 0; $x < count($posts); $x++);{
//     echo "$posts[$x] <br>";
// }
// echo "<br>";
// foreach($posts as $post) {
//     echo "$post <br>";
// }

//Associative Array
// $person = [
//         'first_name' => 'Andres',
//         'last_name' => 'Elacion',
//         'email' => 'andreielacion5@gmail.com'
//     ];

//     //Get key
// foreach ($person as $key => $val){
//     echo "$key - $val <br>";
// }