<?php

class Rute {


public function __construct($param)
{
	if(isset($param)){
		require 'layout/'.$param.'.php';
	}else{
		require 'layout/content.php';
	}

	//require 'layout/'.$page.'.php';

}
}