<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2011 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2011
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'ContentPowerslideSetup'     => 'system/modules/powerslide/ContentPowerslideSetup.php',
	'ContentPowerslidePreview'   => 'system/modules/powerslide/ContentPowerslidePreview.php',
	'ContentPowerslideSection'   => 'system/modules/powerslide/ContentPowerslideSection.php',
	'ContentPowerslideNews'      => 'system/modules/powerslide/ContentPowerslideNews.php',
	'ContentPowerslideTerminate' => 'system/modules/powerslide/ContentPowerslideTerminate.php'
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_powerslide_preview'   => 'system/modules/powerslide/templates',
	'ce_powerslide_section'   => 'system/modules/powerslide/templates',
	'ce_powerslide_setup'     => 'system/modules/powerslide/templates',
	'ce_powerslide_terminate' => 'system/modules/powerslide/templates'
));

