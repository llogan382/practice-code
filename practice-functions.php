<?php
/**
 * Practice sheet for functions
 * @package
 * @category
 * 
 */
// $names = array(
//     'Mike' => 'Awesome',
//      'Chris' => 'developer',
//      'Ryan' => 'winner' 
//     );
    
// foreach (array_keys($names) as $name) {
//     echo "Hello, $name, people think you are $names"; 
// }


    //After this is created, it can be called below
    $func = 'hello';

    //both of these will evaluate to the same thing. 
    // $func();
    // $hello();
    //in variable funcitons, a function can be called using a string variable. 

    //anonymous functions cannot access anything outside of the scope, unless 
    // the word "use" is used. 
    $name = 'friend';
    $greet = function () use ( $name ) {
        echo 'Hello there, $name';
    };
    ?>