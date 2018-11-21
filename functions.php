<?php

function hello($name) {
	echo "Hello, $name!";
}

$current_user = "Mike";
function is_mike(){
	global $current_user;
	if($current_user == "Mike"){
		echo "It is Mike!";
	} else {
		echo "It is NOT Mike";
	}
}


function check_array($arr) {
	if (is_array($arr)) {
		foreach ($arr as $name) {
			echo "\nHello, $name, how it is going!\n";
		}
	} else
	{echo "\nHello Friends!!!";}
}

hello("Diana");
echo "\n";
is_mike();
check_array(["Diana", "Oana", "Ana", "Ioana"]);

echo "\n";
echo "\n";
echo "\n";

//Default arguments!!!!!

function get_info($name, $title = 'friend') {
	echo "$name has just arrived, they are with us as a $title.";
}

get_info("Ana");
?>