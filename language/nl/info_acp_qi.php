<?php
/**
*
* info_acp_qi [Dutch]
*
* @package quickinstall
* @copyright (c) 2008 phpBB Limited
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Geïnstalleerd met phpBB Quickinstall versie %s</strong>',
));
