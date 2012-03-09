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



class ContentPowerslideSection extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_powerslide_section';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### POWERSLIDE - SECTION ' . ++$GLOBALS['POWERSLIDE'][$this->pid]['sections'] . ' ###';
			return $objTemplate->parse();
		}
		
		$time = time();
		if (($this->start > 0 && $this->start > $time) || ($this->stop > 0 && $this->stop < $time))
		{
			return '';
		}

		++$GLOBALS['POWERSLIDE'][$this->pid]['sections'];
		
		$strBuffer = parent::generate();
		
		// Start the powerslide container
		if ($GLOBALS['POWERSLIDE'][$this->pid]['sections'] == 1)
		{
			$strBuffer = '<div class="ce_powerslide_container" style="width:'.$GLOBALS['POWERSLIDE'][$this->pid]['width'].'px;height:'.$GLOBALS['POWERSLIDE'][$this->pid]['height'].'px">' . $strBuffer;
		}
		
		// Close the preview ul/li
		if ($GLOBALS['POWERSLIDE'][$this->pid]['sections'] == 1 && $GLOBALS['POWERSLIDE'][$this->pid]['previews'] > 0)
		{
			$strBuffer = '</div>' . $strBuffer;
		}
		
		return $strBuffer;
	}
	
	
	protected function compile()
	{
		$this->Template->first = false;
		$this->Template->last = false;
		$this->Template->closeLink = false;
		$this->Template->openLink = false;
		$this->Template->target = '';
		$this->Template->href = $this->powerslide_url;
		$this->Template->width = $GLOBALS['POWERSLIDE'][$this->pid]['width'];
		$this->Template->height = $GLOBALS['POWERSLIDE'][$this->pid]['height'];
		
		if ($GLOBALS['POWERSLIDE'][$this->pid]['sections'] == 1)
		{
			$this->Template->first = true;
		}
		else
		{
			$this->Template->closeLink = $GLOBALS['POWERSLIDE'][$this->pid]['sectionLink'] ? true : false;
		}
		
		if ($GLOBALS['POWERSLIDE'][$this->pid]['sections'] == $GLOBALS['POWERSLIDE'][$this->pid]['total'])
		{
			$this->Template->last = true;
		}
		
		if (is_file(TL_ROOT . '/' . $this->powerslide_background))
		{
			$this->Template->background = ('background-image:url(' . $this->powerslide_background . ');');
		}
		
		// Override the link target
		if ($this->powerslide_target)
		{
			global $objPage;
			$this->Template->target = ($objPage->outputFormat == 'html5') ? ' target="_blank"' : ' onclick="window.open(this.href); return false;"';
		}
		
		$GLOBALS['POWERSLIDE'][$this->pid]['sectionLink'] = $this->powerslide_url == '' ? false : true;
		$this->Template->openLink = $GLOBALS['POWERSLIDE'][$this->pid]['sectionLink'];
	}
}

