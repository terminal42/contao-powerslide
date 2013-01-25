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
 * Config
 */
$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_powerslide', 'hidePreviewUrl');


/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_setup']		= '{type_legend},type;{powerslide_legend},powerslide_size,powerslide_orientation,powerslide_interval,powerslide_speed,powerslide_transition,powerslide_ease,powerslide_navEvent,powerslide_buttons,powerslide_position;{protected_legend:hide},protected;{expert_legend:hide},guests,start,stop,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_preview']		= '{type_legend},type,headline;{text_legend},text;{image_legend},addImage;{link_legend:hide},powerslide_url,powerslide_target;{protected_legend:hide},protected;{expert_legend:hide},guests,start,stop,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_section']		= '{type_legend},type,headline;{image_legend},powerslide_background;{link_legend:hide},powerslide_url,powerslide_target;{protected_legend:hide},protected;{expert_legend:hide},guests,start,stop,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_news']			= '{type_legend},type,headline;{include_legend},powerslide_news;{protected_legend:hide},protected;{expert_legend:hide},guests,start,stop,cssID,space';
$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_terminate']	= '{type_legend},type;{protected_legend:hide},protected;{expert_legend:hide},guests,start,stop,cssID,space';


/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_size'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_size'],
	'exclude'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'multiple'=>true, 'size'=>2, 'maxlength'=>6, 'rgpx'=>'digit', 'tl_class'=>'w50'),
	'sql'               => "varchar(128) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_orientation'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_orientation'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('right-to-left', 'bottom-to-top', 'fade', 'randomfade'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_orientation'],
	'eval'				=> array('mandatory'=>true, 'tl_class'=>'w50'),
	'sql'               => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_transition'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_transition'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('linear', 'quad', 'cubic', 'quart', 'quint', 'pow', 'expo', 'circ', 'sine', 'back', 'bounce', 'elastic'),
	'eval'				=> array('mandatory'=>true, 'tl_class'=>'w50'),
	'sql'               => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_ease'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_ease'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options'			=> array('in', 'out', 'in:out'),
	'eval'				=> array('includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'               => "varchar(8) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_interval'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_interval'],
	'exclude'			=> true,
	'default'			=> '6000',
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>6, 'rgpx'=>'digit', 'tl_class'=>'w50'),
	'sql'               => "int(6) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_speed'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_speed'],
	'exclude'			=> true,
	'default'			=> '1000',
	'inputType'			=> 'text',
	'eval'				=> array('mandatory'=>true, 'maxlength'=>6, 'rgpx'=>'digit', 'tl_class'=>'w50'),
	'sql'               => "int(6) unsigned NOT NULL default '0'"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_navEvent'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_navEvent'],
	'exclude'			=> true,
	'default'			=> 'click',
	'inputType'			=> 'radio',
	'options'			=> array('click', 'mouseenter'),
	'reference'			=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_navEvent'],
	'eval'				=> array('mandatory'=>true, 'tl_class'=>'w50'),
	'sql'               => "varchar(16) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_buttons'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_buttons'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50'),
	'sql'               => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_position'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_position'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50'),
	'sql'               => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_background'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_background'],
	'exclude'			=> true,
	'inputType'			=> 'fileTree',
	'eval'				=> array('fieldType'=>'radio', 'files'=>true, 'filesOnly'=>true, 'extensions'=>'png,gif,jpg,jpeg', 'tl_class'=>'clr'),
	'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_url'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['MSC']['url'],
	'exclude'			=> true,
	'search'			=> true,
	'inputType'			=> 'text',
	'eval'				=> array('rgxp'=>'url', 'decodeEntities'=>true, 'maxlength'=>255, 'tl_class'=>'w50 wizard'),
	'wizard' => array
	(
		array('tl_content', 'pagePicker')
	),
	'sql'               => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_target'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['MSC']['target'],
	'exclude'			=> true,
	'inputType'			=> 'checkbox',
	'eval'				=> array('tl_class'=>'w50 m12'),
	'sql'               => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['powerslide_news'] = array
(
	'label'				=> &$GLOBALS['TL_LANG']['tl_content']['powerslide_news'],
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_content_powerslide', 'getNewsModules'),
	'eval'				=> array('mandatory'=>true, 'includeBlankOption'=>true, 'tl_class'=>'w50'),
	'sql'               => "int(10) unsigned NOT NULL default '0'"
);



class tl_content_powerslide extends Backend
{
	
	/**
	 * Hide the URL element if the preview event is "click"
	 */
	public function hidePreviewUrl($dc)
	{
		$objSetup = $this->Database->execute("SELECT * FROM tl_content WHERE type='powerslide_setup' AND pid=(SELECT pid FROM tl_content WHERE id={$dc->id})");
		
		if ($objSetup->numRows && $objSetup->powerslide_navEvent == 'click')
		{
			$GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_preview'] = str_replace('{link_legend:hide},powerslide_url,powerslide_target;', '', $GLOBALS['TL_DCA']['tl_content']['palettes']['powerslide_preview']);
		}
	}
	
	
	/**
	 * Return all news list modules
	 *
	 * @param	DataContainer
	 * @return	array
	 * @link	http://www.contao.org/callbacks.html#options_callback
	 */
	public function getNewsModules($dc)
	{
		$arrModules = array();
		$objModules = $this->Database->execute("SELECT * FROM tl_module WHERE type='newslist'");
		
		while( $objModules->next() )
		{
			$arrModules[$objModules->id] = $objModules->name;
		}
		
		return $arrModules;
	}
}

