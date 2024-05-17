<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function count_vowels($string) {

    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    $count = 0;

    $chars = str_split($string);

    foreach ($chars as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }

    return $count;
}
function vowelChecker($words){

    foreach($words as $word){
        echo "Original String: ".$word.", Vowel Count: ".count_vowels($word)." Reversed String: ".strrev($word)."\n";
    }
}

vowelChecker($strings);
