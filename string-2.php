<?php 

$text = "Hello my name is Milen and I am learning PHP.";
$wordCount = str_word_count($text);
echo $wordCount;

echo "\n";

$text2 = "Hello <user>";



echo str_replace('<user>','mile',$text2); //replace Text