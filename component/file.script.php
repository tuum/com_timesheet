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
defined('_JEXEC') or die();

// Load FOF if not already loaded
if (!defined('F0F_INCLUDED'))
{
	$paths = array(
			(defined('JPATH_LIBRARIES') ? JPATH_LIBRARIES : JPATH_ROOT . '/libraries') . '/f0f/include.php',
			__DIR__ . '/fof/include.php',
	);

	foreach ($paths as $filePath)
	{
		if (!defined('F0F_INCLUDED') && file_exists($filePath))
		{
			@include_once $filePath;
		}
	}
}

// Pre-load the installer script class from our own copy of FOF
if (!class_exists('F0FUtilsInstallscript', false))
{
	@include_once __DIR__ . '/fof/utils/installscript/installscript.php';
}

// Pre-load the database schema installer class from our own copy of FOF
if (!class_exists('F0FDatabaseInstaller', false))
{
	@include_once __DIR__ . '/fof/database/installer.php';
}

// Pre-load the update utility class from our own copy of FOF
if (!class_exists('F0FUtilsUpdate', false))
{
	@include_once __DIR__ . '/fof/utils/update/update.php';
}

class Com_TimesheetInstallerScript extends F0FUtilsInstallscript
{
	/**
	 * The title of the component (printed on installation and uninstallation messages)
	 *
	 * @var string
	 */
	protected $componentTitle = 'Timesheet';

	/**
	 * The component's name
	 *
	 * @var   string
	 */
	protected $componentName = 'com_timesheet';

	/**
	 * Renders the post-installation message
	 */
	private function _renderPostInstallation($status, $fofInstallationStatus, $strapperInstallationStatus, $parent)
	{
		?>
		<img src="../media/com_timesheet/images/timesheet-48.png" width="48" height="48" alt="Timesheet" align="right"/>

		<h2>Welcome to Timesheet!</h2>

		<?php
		parent::renderPostInstallation($status, $fofInstallationStatus, $strapperInstallationStatus, $parent);
		?>

			<?php
		}
}