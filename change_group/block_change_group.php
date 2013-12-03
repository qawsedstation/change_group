<?php

/**
 * Version details
 *
 * @package    block
 * @copyright  2013 George Georgiadis (http://georgiadis.ath.cx)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


class block_change_group extends block_list {
    function init() {
        $this->title = get_string('pluginname', 'block_change_group'); //set the title of block
    }
	
	
public function get_content() {



    if ($this->content !== null) {
      return $this->content;
    }
 
    $this->content=  new stdClass;
	$renderer = $this->page->get_renderer('block_change_group');  //get the renderer
	$this->content->footer= $renderer->change_group($this->config);  //set the html content 

	return $this->content; //send the ready content back
	
	
	}
  
}
