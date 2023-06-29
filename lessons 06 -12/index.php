<?php

// Assignment 01
echo (int)(15.2 + 14.7 + (10.5 + 10.5)); // 50
echo gettype((int)(15.2 + 14.7 + (10.5 + 10.5))); // Integer

// Assignment 02
// Method One
$num = 100;
echo gettype($num);
echo "<br>";
// Method Two
echo var_dump($num);
echo "<br>";
// Method Three => Optional
echo get_debug_type($num); // PHP V8
echo "<br>";
// Assignment 03
echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

// Assignment 04
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo "<br>";
// Assignment 05

$string = <<< 'Now'

Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"

Now;
echo nl2br($string);
// Assignment 06

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

$something = "Programming";

echo <<< code
Hello \PHP\
We Love $something

code;


// Assignment 07
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo strlen("Hello PHP") / strlen("Hello PHP"); // 1
echo '<br>';
echo gettype(strlen("Hello PHP") / strlen("Hello PHP")); // Integer




// Assignment 08

$array =[

    // Frontend Array
    "frontend"=> [
        0=> "HTML",
        1=>"CSS",
        //Js Array
        "js" => [
            // Vuejs array
            "Vuejs"=>[
                2=> "v2",
                3=> "v3",
            ],
            0=> "Reactjs",
            1=> "Svelte",

        ],
        
        // Backend array
        "backend" => [
            0=> "php",
            1=> "MySql",
            2=> "Security",
        ],
        0=> "Git",
        1=> "Github",
        // Testing array
        "testing" => [
            0=> " Unit Testing",
            1=> "End To End",
            2=> "Integration",
        ],

    ],
];

echo "<pre>";
echo print_r($array);
echo "</pre>";








