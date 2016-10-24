<?php 

/**
 * break end the execution of the structure
 * for, foreach, while, do-while or switch in course
 */

$legos = ['Technic', 'Bionicle', 'DC Comics', 'Star Wars'];

// foreach ($legos as $position => $lego) {
//   echo "We have lego of {$lego} in the position {$position}.\n";
//   break;
//   echo "This not executed";
// }

/**
 * continue used iteration and continue 
 * for, foreach, while, do-while or switch in course
 */

// for ($i=0; $i < 50 ; $i++) { 
//   if ($i % 2 == 0) {
//     continue;
//   }
//   echo "I have the number {$i} is odd.\n";
// }

foreach ($legos as $position => $lego) {
  if ($lego == 'DC Comics') {
    echo "Not print DC Comics, but I dont have.\n";
    continue;
  }
  echo "I have a Lego of {$lego}.\n";
}
