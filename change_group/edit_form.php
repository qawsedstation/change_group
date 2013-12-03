<?php
 /**
 * Version details
 *
 * @package    block
 * @copyright  2013 George Georgiadis (http://georgiadis.ath.cx)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_change_group_edit_form extends block_edit_form {
 
    protected function specific_definition($mform) {
 
        // Section header title according to language file.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
 
        // A sample string variable with a default value.
        $mform->addElement('text', 'config_email','Email');
        $mform->setDefault('config_email', 'your email');
        $mform->setType('config_text', PARAM_MULTILANG);        
 
    }
}