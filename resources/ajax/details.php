<?php
require '../../config.php';

if (isset($_POST['postId'])){
	$postId = $_POST['postId'];
    $details =	Content::getDetails($postId);
	echo $details;
}