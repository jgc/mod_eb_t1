<?php
/**
 * @package     Joomla.Site
 * @subpackage com_eb_tb1
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Weblinks Component Category Tree
 *
 * @static
 * @package     Joomla.Site
 * @subpackage com_eb_tb1
 * @since       1.6
 */
class WeblinksCategories extends JCategories
{
	public function __construct($options = array())
	{
		$options['table'] = '#__eb_tb1';
		$options['extension'] = 'com_weblinks';
		parent::__construct($options);
	}
}
