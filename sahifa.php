<?php
session_start();
echo $_SESSION['admin'][0];


if (isset($_SESSION['user'][0])) {
	echo $_SESSION['user'][0];
}else{
	echo "yo'q";
}



if ($_GET) {

    //bu yerda bazadan login va parolni olib kelish kodi bo'ladi
    //hozircha ixtiyoriy

    $baza_login = "admin";
    $baza_password = "12345";

	$user_id = htmlspecialchars($_GET['user_id']);
    $login = htmlspecialchars($_GET['login']);
    $password = htmlspecialchars($_GET['password']);

   $login = str_replace("OR", " ", $login);
   $login = preg_replace("/[^a-zA-Z]/", "", $login);
  // $password = preg_replace("/[^a-zA-Z0-9]/", "", $password);
 
  //kamida 1 takichik harf
  //kamida 1 ta belgi
  // kamida 1 ta raqam
   $p = "salom123";

function tekshir1($password){
	$array = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

	for ($i=0; $i < strlen($password); $i++) { 
		if (in_array($password[$i],$array)){
			return 1;
			
		}
	}
}

function tekshir2($password){
	$array = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","s","t","u","v","w","x","y","z"];

	for ($i=0; $i < strlen($password); $i++) { 
		if (in_array($password[$i],$array)){
			return 1;
			
		}
	}
}

function tekshir3($password){
	$array = ["!","~","-","_","'","?",">","/",">","<",".",",","(",")","|","[","]","{","}"]; 


	for ($i=0; $i < strlen($password); $i++) { 
		if (in_array($password[$i],$array)){
			return 1;
			
		}
	}
}


if(tekshir1($password) && tekshir2($password) && tekshir3($password)){
  echo "sen shartdan o'tding <br>";

  $_SESSION['admin'] = ["Adminsiz", "tsqwe"];


  echo '<a href="tekshir.php" target="_blank" >tekshirish </a>';

}else{
	echo "parolda katta kichik harf belgilar bo'lishi kerak <br>";
}












exit();

    if(empty($user_id)){
    	echo "sen ID yozmading <br>";
    	header("location: form.php");
    }

if ($password == $baza_password){
	echo "parol to'g'ri <br>";
	// code...
}else{
	echo "parol xato <br>";

}

if ($login == $baza_login){
	echo "login to'g'ri <br>";
	// code...
}else{
	echo "login xato <br>";
	
}

	echo "sen asosiy sahifadasan <br> user_id: $user_id <br> parol: $password <br> login: $login";

}else{
	echo "sen parol yoki loginni yozmagansan";
}

?>