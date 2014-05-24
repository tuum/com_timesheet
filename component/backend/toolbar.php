<?php
/*
 * @package timesheet
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

// Protect from unauthorized access
defined('_JEXEC') or die();

class TimesheetToolbar extends F0FToolbar
{
	public function onItemsBrowse()
	{
		//show toolbar on front end
		$this->renderFrontendButtons = true;
		$app = JFactory::getApplication();

		$this->onBrowse();

		JToolBarHelper::divider();
		if($app->isAdmin()){
			JToolBarHelper::divider();
			JToolbarHelper::back('JTOOLBAR_BACK', 'index.php?option=com_timesheet&view=cpanels');
		}
	}

	public function onCategoriesBrowse()
	{
		$this->onBrowse();

		JToolBarHelper::divider();
		JToolbarHelper::back('JTOOLBAR_BACK', 'index.php?option=com_timesheet&view=cpanels');
	}

	public function onItemsAdd()
	{
		//show toolbar on front end
		$this->renderFrontendButtons = true;

		parent::onAdd();
	}

	public function onItemsEdit()
	{
		//show toolbar on front end
		$this->renderFrontendButtons = true;

		parent::onEdit();
	}
}