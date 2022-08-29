<?php

$word = $_GET['badword'];


$paragraph = 'buongiorno, questa è una demo di php in cui sustituisco una parola in modo criptato ';
$my_replace_paragraph = str_replace($word , '***', $paragraph);
echo $paragraph;
echo  strlen($paragraph);

echo $my_replace_paragraph;
echo strlen($my_replace_paragraph);


