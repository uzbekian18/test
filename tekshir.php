<?php
session_start();

echo $_SESSION['admin'][0];

if (isset($_SESSION['user'][0])) {
	echo $_SESSION['user'][0];
}else{
	echo "yo'q";
}


session_destroy();

//echo $_SESSION['admin'][0];

time();


//setcookie("user", "farxod", time()+10);
//echo "cookie yaratildi";
?>