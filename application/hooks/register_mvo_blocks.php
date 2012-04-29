<?php defined('SYSPATH') or die('No direct script access.');
class twitter_block {

	public function __construct()
	{
		$block = array(
			"classname" => "twitter_block",
			"name" => "Twitter #velocrash",
			"description" => "Shows Twitter search results"
		);

		blocks::register($block);
	}

	public function block()
	{
		$content = new View('blocks/twitter');

		echo $content;
	}
}

new twitter_block;

