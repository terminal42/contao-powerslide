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



class ContentPowerslideTerminate extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_powerslide_terminate';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### POWERSLIDE - TERMINATE ###';
			return $objTemplate->parse();
		}
		
		return parent::generate();
	}
	
	
	protected function compile()
	{
		$this->Template->previews = $GLOBALS['POWERSLIDE'][$this->pid]['previews'] > 0 ? true : false;
		$this->Template->articleId = $GLOBALS['POWERSLIDE'][$this->pid]['id'];
		$this->Template->buttons = $GLOBALS['POWERSLIDE'][$this->pid]['buttons'];
		$this->Template->transition = $GLOBALS['POWERSLIDE'][$this->pid]['transition'] . ($GLOBALS['POWERSLIDE'][$this->pid]['ease'] ? (':'.$GLOBALS['POWERSLIDE'][$this->pid]['ease']) : '');
		$this->Template->interval = $GLOBALS['POWERSLIDE'][$this->pid]['interval'];
		$this->Template->speed = $GLOBALS['POWERSLIDE'][$this->pid]['speed'];
		
		switch( $GLOBALS['POWERSLIDE'][$this->pid]['orientation'] )
		{
			case 'none':
				$this->Template->orientation = 'none';
				$this->Template->fade = 'false';
				break;
				
			case 'bottom-to-top':
				$this->Template->orientation = 'vertical';
				$this->Template->fade = $GLOBALS['POWERSLIDE'][$this->pid]['fade'] ? 'true' : 'false';
				break;
				
			case 'right-to-left':
			default:
				$this->Template->orientation = 'horizontal';
				$this->Template->fade = $GLOBALS['POWERSLIDE'][$this->pid]['powerslide_fade'] ? 'true' : 'false';
				break;
		}
	}
}

