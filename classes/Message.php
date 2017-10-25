<?php


class Message{
	public static function setMessage($type,$text)
	{
		if($type == 'error'){
			$_SESSION['error'] = $text;
		}else{
			$_SESSION['success'] = $text;
		}
	}
	public static function display()
	{
		if(isset($_SESSION['error'])){
			echo '<div class="alert alert-danger text-center">' .$_SESSION['error']. '</div>';
			unset($_SESSION['error']);
		}
		if (isset($_SESSION['success'])) {
			echo '<div class="alert alert-success text-center">' .$_SESSION['success']. '</div>';
			unset($_SESSION['success']);
		}
	}
}