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



class ContentPowerslidePreview extends ContentText
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_powerslide_preview';
	
	
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');
			$objTemplate->wildcard = '### POWERSLIDE PREVIEW ' . ++$GLOBALS['POWERSLIDE'][$this->pid]['previews'] . ' ###';
			$objTemplate->title = $this->headline;
			return $objTemplate->parse();
		}
		
		$time = time();
		if (($this->start > 0 && $this->start > $time) || ($this->stop > 0 && $this->stop < $time))
		{
			return '';
		}
		
		++$GLOBALS['POWERSLIDE'][$this->pid]['previews'];
		
		$strBuffer = parent::generate();

		// Start the preview container
		if ($GLOBALS['POWERSLIDE'][$this->pid]['previews'] == 1)
		{
			$strBuffer = '<div class="ce_powerslide_previews">' . $strBuffer;
		}
		
		return $strBuffer;
	}
	
	
	protected function compile()
	{
		parent::compile();
		
		if ($GLOBALS['POWERSLIDE'][$this->pid]['previews'] == 1)
		{
			$cssId = $this->cssID;
			$cssId[1] = trim($cssId[1] . ' first');
			$this->cssID = $cssId;
		}
		
		if ($GLOBALS['POWERSLIDE'][$this->pid]['previews'] == $GLOBALS['POWERSLIDE'][$this->pid]['total'])
		{
			$cssId = $this->cssID;
			$cssId[1] = trim($cssId[1] . ' last');
			$this->cssID = $cssId;
		}
		
		$this->Template->openLink = false;
		$this->Template->powerslide_target = '';
		
		// Preview link is only allowed if the preview event is on mouseover
		if ($GLOBALS['POWERSLIDE'][$this->pid]['navEvent'] == 'mouseenter' && $this->powerslide_url != '')
		{
			$this->Template->openLink = true;
			
			// Override the link target
			if ($this->powerslide_target)
			{
				global $objPage;
				$this->Template->powerslide_target = ($objPage->outputFormat == 'html5') ? ' target="_blank"' : ' onclick="window.open(this.href); return false;"';
			}
		}
	}
}

