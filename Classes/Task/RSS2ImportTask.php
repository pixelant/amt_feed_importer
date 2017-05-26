<?php 
namespace AMT\AmtFeedImporter\Task;

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

class RSS2ImportTask extends \TYPO3\CMS\Scheduler\Task\AbstractTask {
	public $feedUid;
	
	public function execute() {
		/* @var $importJob \AMT\AmtFeedImporter\Job\RSS2ImportJob */
		$importJob = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('AMT\\AmtFeedImporter\\Job\\RSS2ImportJob');

		return $importJob->run($this->feedUid);
	}
	
	public function __toString() {
		return 'RSS2ImportTask';
	}
}