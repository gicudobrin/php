<?php

$learn = array('Ana', 'Diana', 'Oana', 'Ramona');
var_dump($learn);
echo $learn[1];
echo "\n";
array_push($learn, 'Jean', 'Costi', 'Hary');
array_unshift($learn, 'Popa', 'Dan');
echo "You removed " . array_shift($learn);
echo implode("\n", $learn);
?>