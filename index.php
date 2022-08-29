<?php

$paragraph = 'buongiorno, questa è una demo di php in cui sustituisco una parola in modo criptato ';
var_dump($paragraph);

str_replace('Buongiorno','********', $paragraph);

