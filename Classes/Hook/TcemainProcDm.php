<?php 
namespace AMT\AmtFeedImporter\Hook;

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

class TcemainProcDm {
	/**
	 * @param string $status status of operation on current TCA object
	 * @param string $table table name
	 * @param integer $id id of current object
	 * @param array $fieldArray reference to array with data provided by the user
	 * @param \TYPO3\CMS\Core\DataHandling\DataHandler $reference reference to data handler object
	 * @return void
	 */
	public function processDatamap_postProcessFieldArray($status, $table, $id, &$fieldArray, &$reference) {
		if ($table === 'tx_news_domain_model_news' && $status === 'update') {
			$oldNews = \TYPO3\CMS\Backend\Utility\BackendUtility::getRecord($table, $id);
			
			$extConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['amt_feed_importer']);
			
			$fieldsList = array_map('trim', explode(',', $extConfiguration['editedFieldsList']));
			
			foreach ($fieldsList as $field) {
				if (isset($fieldArray[$field]) && $fieldArray[$field] !== $oldNews[$field]) {
					$data = array();
					
					$data[$table][$id]['amt_feedimporter_was_edited'] = 1;
					
					$dataHandler = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\DataHandling\DataHandler::class);
					$dataHandler->start($data, array());
					$dataHandler->process_datamap();
				}
			}
		}
	}
}