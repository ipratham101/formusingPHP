<?php

$str1 = "hi this is pratham ahuja";
echo $str1 . " hey"; //. is used for concatination

echo "<br>";

$count = strlen($str1);
echo "the length of the string is: " . $count;

echo "<br>";
echo "the number of the words in the string str1: " . str_word_count($str1);
echo "<br>";
echo "reversed is: " . strrev($str1);
echo "<br>";
echo "the search of the word pratham in the string $str1 is: " . strpos($str1, "pratham");
echo "<br>";
echo "the replaced word in the string str1 is: " . str_replace("pratham", "ahuja", $str1);
?>
