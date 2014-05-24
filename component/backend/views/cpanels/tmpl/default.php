<?php
/*
 * @package Timesheet
 * @copyright Copyright (c)2014 Tamlyn Software
 * @license GNU General Public License version 2 or later
 * @link http://www.tamlynsoftware.com
 *
 *	  Timesheet is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 2 of the License, or
 *    (at your option) any later version.
 *
 *    Timesheet is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with Timesheet.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

defined('_JEXEC') or die();

if(version_compare(JVERSION, '3.0', 'ge')) {
	JHTML::_('behavior.framework');
} else {
	JHTML::_('behavior.mootools');
}

$params = JComponentHelper::getParams('com_timesheet');
//$downloadid = $params->get('downloadid');

$lang = JFactory::getLanguage();
$icons_root = JURI::base().'media/com_timesheet/images/';

$groups = array('basic','tools','update');

F0FTemplateUtils::addCSS('media://com_timesheet/css/backend.css');

?>

<div id="cpanel" class="row-fluid">
	<div class="span11">

		<div class=icon>
			<a href="index.php?option=com_timesheet&view=categories">
				<div class="timesheet-icon-category"> </div>
				<span><?php echo JText::_('COM_TIMESHEET_TITLE_CATEGORIES'); ?></span>
			</a>
		</div>

		<div class=icon>
			<a href="index.php?option=com_timesheet&view=items">
				<div class="timesheet-icon-item"> </div>
				<span><?php echo JText::_('COM_TIMESHEET_TITLE_ITEMS'); ?></span>
			</a>
		</div>

	</div>
</div>

<div class="ak_clr"></div>

<div class="row-fluid footer">
<div class="span12">
	<p style="font-size: small" class="well">Copyright &copy;<?php echo date('Y');?> Tamlyn Software. All Rights Reserved.
	</p>
</div>
</div>