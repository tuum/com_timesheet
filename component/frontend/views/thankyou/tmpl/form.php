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

$params = JFactory::getApplication()->getParams();
$thankyou_msg=$params->get('thankyou_msg');
?>
<div class="hero-unit">
	<p><?php echo ($thankyou_msg=='' ? JText::_('COM_TIMESHEET_THANKYOU_MSG_BODY'): $thankyou_msg); ?></p>
</div>