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

JHtml::_('behavior.formvalidation');

if(version_compare(JVERSION, '3.0', 'ge')) {
	JHTML::_('behavior.framework');
} else {
	JHTML::_('behavior.mootools');
}

F0FTemplateUtils::addCSS('media://com_timesheet/css/backend.css');
F0FTemplateUtils::addJS('media://com_timesheet/js/timesheet.js');
?>
<form action="<?php echo JRoute::_('index.php?option=com_timesheet&layout=item&id='.(int) $this->item->timesheet_item_id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate">
	<input type="hidden" name="timesheet_item_id" id="timesheet_item_id" value="<?php echo $this->item->timesheet_item_id ?>" />
	<input type="hidden" name="option" value="com_timesheet" />
	<input type="hidden" name="view" value="item" />

	<div class="span10 form-horizontal">
	<fieldset>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#details" data-toggle="tab"><?php echo empty($this->item->timesheet_item_id) ? JText::_('COM_TIMESHEET_TITLE_DETAILS') : JText::sprintf('COM_TIMESHEET_EDIT_ITEM', $this->item->timesheet_item_id); ?></a></li>
			<li><a href="#hours" data-toggle="tab"><?php echo JText::_('COM_TIMESHEET_TITLE_HOURS');?></a></li>
			<li><a href="#comments-tab" data-toggle="tab"><?php echo JText::_('COM_TIMESHEET_TITLE_COMMENTS');?></a></li>
		</ul>
		<div class="tab-content">

			<div class="tab-pane active" id="details">
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('timesheet_category_id'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('timesheet_category_id'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('title'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('title'); ?></div>
				</div>
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('weekstart'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('weekstart'); ?></div>
				</div>
			</div>

			<div class="tab-pane" id="hours">
				<?php foreach ($this->form->getFieldset('billable_hours') as $field) : ?>
					<div class="control-group">
						<div class="control-label"><?php echo $field->label; ?></div>
						<div class="controls"><?php echo $field->input; ?></div>
					</div>
				<?php endforeach; ?>

				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('total_hours'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('total_hours'); ?></div>
				</div>
			</div>

			<div class="tab-pane" id="comments-tab">
				<div class="control-group">
					<div class="control-label"><?php echo $this->form->getLabel('comments'); ?></div>
					<div class="controls"><?php echo $this->form->getInput('comments'); ?></div>
				</div>
			</div>
		<input type="hidden" name="task" value="" />
		<?php echo JHtml::_('form.token'); ?>
		</div>
	</fieldset>

	</div>

	<!-- Begin Sidebar -->
	<div class="span2">
		<h4><?php echo JText::_('JDETAILS');?></h4>
		<hr />
		<fieldset class="form-vertical">
			<div class="control-group">
				<div class="control-label">
					<?php echo $this->form->getLabel('enabled'); ?>
				</div>
				<div class="controls">
					<?php echo $this->form->getInput('enabled'); ?>
				</div>
			</div>
		</fieldset>
	</div>
	<!-- End Sidebar -->
</form>