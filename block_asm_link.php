<?php

class block_asm_link extends block_base {

	function init() {
		$this->title = get_string('pluginname', 'block_asm_link');
		//$this->version = 2012120700;
	}

	function applicable_formats() {
		return array('all' => true);
	}

/*
	function specialization() {
		$this->title = isset($this->config->title) ? format_string($this->config->title) : format_string(get_string('newhtmlblock', 'block_html'));
	}
*/

	function instance_allow_multiple() {
		return true;
	}

	function get_content() {

		global $CFG;
		//var_dump($CFG);

		if ($this->content !== NULL) {
			return $this->content;
		}
		
		$renderer = $this->page->get_renderer('block_asm_link');

		$this->content = new stdClass;
		$this->content->text = $renderer->asm_link();
		/* $this->content->footer = 'まだ作ってる最中'; */

		return $this->content;
	}

}// Here's the closing curly bracket for the class definition
// and here's the closing PHP tag from the section above.
?>