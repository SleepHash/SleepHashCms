<?php
session_start();

$Database = new PDO('mysql:host=localhost;dbname=sleephashcms','root','');

if(!empty($_GET['page']) AND is_file("controleurs/$_GET[page].php") AND substr($_GET['page'],0,1)!="!"):

	include("controleurs/$_GET[page].php");

else:

	include("controleurs/index.php");

endif;
echo 'ok';
