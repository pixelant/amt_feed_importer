<?php 
namespace AMT\AmtFeedImporter\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Krzysztof Kasprzyca <k.kasprzyca@amtsolution.pl>, AMT Solution
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class News extends \GeorgRinger\News\Domain\Model\News {
	/**
	 * @var string
	 */
	protected $amtFeedimporterGuid;
	
	/**
	 * @var boolean
	 */
	protected $amtFeedimporterWasEdited;
	
	/**
	 * Get news guid
	 * 
	 * @return string
	 */
	public function getAmtFeedimporterGuid() {
		return $this->amtFeedimporterGuid;
	}
	
	/**
	 * Set news guid
	 * 
	 * @param string $amtFeedimporterGuid
	 * @return void
	 */
	public function setAmtFeedimporterGuid($amtFeedimporterGuid) {
		$this->amtFeedimporterGuid = $amtFeedimporterGuid;
	}
	
	/**
	 * Check if news was edited
	 * 
	 * @return boolean
	 */
	public function getAmtFeedimporterWasEdited() {
		return (boolean) $this->amtFeedimporterWasEdited;
	}
	
	/**
	 * Set news was edited
	 * 
	 * @param boolean $amtFeedimporterWasEdited
	 * @return void
	 */
	public function setAmtFeedimporterWasEdited($amtFeedimporterWasEdited) {
		$this->amtFeedimporterWasEdited = (boolean) $amtFeedimporterWasEdited;
	}
}