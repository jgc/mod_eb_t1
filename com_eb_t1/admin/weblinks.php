<?php
/**
 * @package     Joomla.Administrator
 * @subpackage com_eb_tb1
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

if (!JFactory::getUser()->authorise('core.manage', 'com_weblinks'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$controller	= JControllerLegacy::getInstance('Weblinks');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
