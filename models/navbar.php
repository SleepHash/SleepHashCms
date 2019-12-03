<?php
function Info_Site(){
	global $Database;
	$Info_Site = array();

	$Request = $Database->query('SELECT * FROM Site_Info');

	while ($data = $Request->fetch()) {

		$Info_Site[] = $data;

	}

	return $Info_Site;
}

function Navbar_Items(){
	global $Database;
	$Navbar_Items = array();

	$Request = $Database->query('SELECT * FROM Navbar_Items');

	while ($data = $Request->fetch()) {

		$Navbar_Items[] = $data;

	}

	return $Navbar_Items;
}
