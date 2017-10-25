<?php
class Slider
{
	public static function getslider(){
		$query = Connection::getInstance()->conn->query("SELECT * FROM slider");

		$sliderContent = array();

		while($sliderObj = $query->fetch(PDO::FETCH_OBJ)){
			$sliderContent[] =$sliderObj;
		}
		return $sliderContent;
	}
}