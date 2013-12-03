<?php

/**
 * Version details
 *
 * @package    block
 * @copyright  2013 George Georgiadis (http://georgiadis.ath.cx)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
$capabilities = array(

    'block/change_group:addinstance' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,

        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ),

        'clonepermissionsfrom' => 'moodle/site:manageblocks'
    ),
);