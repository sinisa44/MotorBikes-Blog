<?php
abstract class Request{
	protected $post;
	protected $get;
	private static $input;
	public function __construct() {
		$this->post =self::InputPost();
		$this->get = self::InputGet();
	}

	public static function InputGet(){
		self::$input= filter_input_array(INPUT_GET,FILTER_SANITIZE_STRING);

		return  self::$input;
	}
	public static function InputPost(){
		self::$input=filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

		return self::$input;
	}
}