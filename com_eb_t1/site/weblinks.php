<?php
/**
 * @package     Joomla.Site
 * @subpackage com_eb_tb1
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once JPATH_COMPONENT.'/helpers/route.php';

$controller	= JControllerLegacy::getInstance('Weblinks');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
