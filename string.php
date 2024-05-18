<?php 
$strings = ["Hello", "World", "PHP", "Programming"];

foreach($strings as $string){
    echo "Original String: " . $string . ", " . "Vowel Count: ". countVowel($string) . ",". "Reversed String: " . reverseWord($string) . "\n";
}



function countVowel($word){
    $vowels = array("a","e","i","o","u");
    $count = 0;

    $word = strtolower($word);
    

    for($i = 0; $i < strlen($word) ; $i++){
        if(in_array($word[$i],$vowels)){
            $count ++;
        }
    }

    return $count;
}

function reverseWord($word){
    $reverse = strrev($word);
    return $reverse;
}