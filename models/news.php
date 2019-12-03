<?php
function Afficher_News(){
	global $Database;
	$News = array();

	$Request = $Database->query('SELECT * FROM news');

	while ($data = $Request->fetch()) {

		$News[] = $data;

	}

	return $News;
}