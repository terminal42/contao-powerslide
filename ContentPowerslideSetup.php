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



class ContentPowerslideSetup extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_powerslide_setup';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### POWERSLIDE - SETUP ###';
			return $objTemplate->parse();
		}
		
		$objArticle = $this->Database->execute("SELECT tl_article.*, COUNT(tl_content.id) AS sections FROM tl_content LEFT JOIN tl_article ON tl_content.pid=tl_article.id WHERE tl_content.type='powerslide_section' AND tl_content.pid={$this->pid} GROUP BY tl_content.pid");
		
		$cssID = deserialize($objArticle->cssID, true);
		$GLOBALS['POWERSLIDE'][$this->pid]['id'] = $cssID[0] != '' ? $cssID[0] : $objArticle->alias;
		$GLOBALS['POWERSLIDE'][$this->pid]['previews'] = 0;
		$GLOBALS['POWERSLIDE'][$this->pid]['sections'] = 0;
		$GLOBALS['POWERSLIDE'][$this->pid]['total'] = (int)$objArticle->sections;
		
		return parent::generate();
	}
	
	
	protected function compile()
	{
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/powerslide/html/powerslide_src.js';
		$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/powerslide/html/MooSwipe_src.js';
		$GLOBALS['TL_CSS'][] = 'system/modules/powerslide/html/powerslide_src.css';
		
		$GLOBALS['POWERSLIDE'][$this->pid]['buttons'] = $this->powerslide_buttons ? true : false;
		$GLOBALS['POWERSLIDE'][$this->pid]['orientation'] = $this->powerslide_orientation;
		$GLOBALS['POWERSLIDE'][$this->pid]['interval'] = $this->powerslide_interval;
		$GLOBALS['POWERSLIDE'][$this->pid]['speed'] = $this->powerslide_speed;
		$GLOBALS['POWERSLIDE'][$this->pid]['transition'] = $this->powerslide_transition;
		$GLOBALS['POWERSLIDE'][$this->pid]['ease'] = $this->powerslide_ease;
		$GLOBALS['POWERSLIDE'][$this->pid]['navEvent'] = $this->powerslide_navEvent;
		
		$this->Template->buttons = $GLOBALS['POWERSLIDE'][$this->pid]['buttons'] ? true : false;
		
		$arrSize = deserialize($this->powerslide_size, true);
		$GLOBALS['POWERSLIDE'][$this->pid]['width'] = (int)$arrSize[0];
		$GLOBALS['POWERSLIDE'][$this->pid]['height'] = (int)$arrSize[1];
	}
}

