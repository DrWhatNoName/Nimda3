<?php

class Plugin_Reverse extends Plugin {
	
	protected $triggers = array('!reverse');
	
	function isTriggered() {
		if(!isset($this->data['text'])) {
			$this->reply('Usage: !reverse <text>');
			return;
		}

		$this->reply(mb_strrev($this->data['text']));
	}
	
}

?>