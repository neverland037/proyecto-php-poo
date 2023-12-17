<?php

class Database{
	public static function connect(){
		$db = new mysqli('159.89.38.223', 'root', 'TheBeast@037dio', 'ventas');
		$db->query("SET NAMES 'utf8'");
		return $db;
	}
}

