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
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_setup']		= '{type_legend},type;{config_legend},powerslide_orientation,powerslide_fade,powerslide_interval,powerslide_speed,powerslide_transition,powerslide_ease,powerslide_buttons;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_preview']		= '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_section']		= '{type_legend},type;{image_legend},powerslide_background;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_terminate']	= '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_orientation'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_orientation'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('right-to-left', 'bottom-to-top', 'none'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_orientation'],
	'eval'				=> array('mandatory'=>true, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_fade'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_fade'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50 m12'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_transition'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_transition'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('linear', 'quad', 'cubic', 'quart', 'quint', 'pow', 'expo', 'circ', 'sine', 'back', 'bounce', 'elastic'),
	'eval'				=> array('mandatory'=>true, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_ease'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_ease'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('in', 'out', 'in:out'),
	'eval'				=> array('includeBlankOption'=>true, 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_interval'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_interval'],
	'exclude'			=> true,
	'default'			=> '6000',
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>6, 'rgpx'=>'digit', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_speed'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_speed'],
	'exclude'			=> true,
	'default'			=> '1000',
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>6, 'rgpx'=>'digit', 'tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_buttons'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_buttons'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50'),
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_background'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_background'],
	'exclude'			=> true,
	'inputType'			=> 'fileTree',
	'eval'				=> array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'png,gif,jpg,jpeg', 'tl_class'=>'clr'),
);

