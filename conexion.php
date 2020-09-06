

<?php

 $mysqli = new mysqli("localhost", "root", "", "roberta");


 if ($mysqli-> connect_errno) {



 	echo "Fallo al conectar a MYSQL :(" .$mysqli->connect_errno . ")" . $mysqli->connect_errno;
 }




?>