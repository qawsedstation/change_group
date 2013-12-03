<?php
/**
 * Version details
 *
 * @package    block
 * @copyright  2013 George Georgiadis (http://georgiadis.ath.cx)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_change_group_renderer extends plugin_renderer_base {

  public function change_group($config) {
  global $DB,$USER,$PAGE;
 
  	if (! empty($config->email))
	{
          $email=$config->email;	//get the email of teacher 
	}
	else
	{
	 $email="please give an email from config";
	}
  
  $html='';
if($USER->id!=0 && !is_siteadmin()) //if is not a guest and admin
{

$groups_members = $DB->get_record('groups_members', array('userid'=>$USER->id )); //gets the group member information


 if($DB->record_exists('groups',array('id'=>$groups_members->groupid))) //if user is not in group
 {

$group= $DB->get_record('groups', array('id'=>$groups_members->groupid));
$html.=get_string('yourgroupis', 'block_change_group')."<b>".$group->name."</b>";

$html.="<br>".get_string('inorderto', 'block_change_group');
$html.="<a href='mailto:".$email."?subject=".get_string('hiiam', 'block_change_group')." ".$USER->username." ".get_string('andineed', 'block_change_group')."&body=".get_string('mygroup', 'block_change_group')." ".$group->name."'><br>".get_string('click', 'block_change_group')."</a> <br>".get_string('explain', 'block_change_group');
    

 }
}
return $html;
}

}
