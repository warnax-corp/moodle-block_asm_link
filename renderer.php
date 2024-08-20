<?php

class block_asm_link_renderer extends plugin_renderer_base {

	public function asm_link() {
		$content = html_writer::start_tag('form', array('action'=>'https://moodle-cloud.ealps.shinshu-u.ac.jp/help/login/index.php', 'method'=>'post', 'target'=>'_blank'));
		$content .= html_writer::start_tag('div', array('style'=>'text-align: center;'));
		$content .= html_writer::start_tag('button', array('class'=>'btn btn-success'));
		$content .= html_writer::tag('span', '', array('class'=>'icon-white icon-info-sign'));
		$content .= ' eALPSヘルプ';
		$content .= html_writer::end_tag('button');
		$content .= html_writer::end_tag('div');
		$content .= html_writer::empty_tag('input', array('type'=>'hidden', 'name'=>'username', 'value'=>'guest'));
		$content .= html_writer::empty_tag('input', array('type'=>'hidden', 'name'=>'password', 'value'=>'guest'));
		$content .= html_writer::end_tag('form');
		return $content;
	}

}
