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

class Feed extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {
	/**
	 * @var string
	 */
	protected $name;
	
	/**
	 * Feed types - RSS2, Atom, etc. (only RSS2 and Atom available in version 1.1+)
	 * 
	 * @var int
	 */
	protected $type;
	
	/**
	 * @var string
	 */
	protected $feedUrl;
	
	/**
	 * @var int
	 */
	protected $targetFolder;
	
	/**
	 * News type from extension "news" - property used to choose type for imported news
	 * 
	 * @var string
	 */
	protected $newsType;
	
	/**
	 * @var boolean
	 */
	protected $overrideEditedNews;
	
	/**
	 * @var boolean
	 */
	protected $hideImportedNews;
	
	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\Category>
	 * @lazy
	 */
	protected $categories = NULL;
	
	/**
	 * @var string
	 */
	protected $author;
	
	/**
	 * @var string
	 */
	protected $authorEmail;
	
	/**
	 * @var string
	 */
	protected $customMapping;

    /**
     * @var boolean
     */
    protected $socialFeed;
	
	/**
	 * sys language for imported news
	 * 
	 * @var int
	 */
	protected $newsLanguage;
	
	public function  __construct() {
		$this->initializeObject();
	}
	
	public function initializeObject() {
		$this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}
	
	/**
	 * Get feed name
	 * 
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Set feed name
	 * 
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * Get feed type
	 * 
	 * @return int
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 * Set feed type
	 * 
	 * @param int $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}
	
	/**
	 * Get feed URL
	 * 
	 * @return string
	 */
	public function getFeedUrl() {
		return $this->feedUrl;
	}
	
	/**
	 * Set feed URL
	 * 
	 * @param string $feedUrl
	 * @return void
	 */
	public function setFeedUrl($feedUrl) {
		$this->feedUrl = $feedUrl;
	}
	
	/**
	 * Get target folder for imported news 
	 * 
	 * @return int
	 */
	public function getTargetFolder() {
		return $this->targetFolder;
	}
	
	/**
	 * Set target folder for imported news
	 * 
	 * @param int $targetFolder
	 * @return void
	 */
	public function setTargetFolder($targetFolder) {
		$this->targetFolder = $targetFolder;
	}
	
	/**
	 * Get news type
	 * 
	 * @return string
	 */
	public function getNewsType() {
		return $this->newsType;
	}
	
	/**
	 * Set news type
	 * 
	 * @param string $newsType
	 * @return void
	 */
	public function setNewsType($newsType) {
		$this->newsType = $newsType;
	}
	
	/**
	 * Check if news could be overriden after edit in BE
	 * 
	 * @return boolean
	 */
	public function getOverrideEditedNews() {
		return (boolean) $this->overrideEditedNews;
	}
	
	/**
	 * Set override edited news property
	 * 
	 * @param mixed $overrideEditedNews
	 * @return void
	 */
	public function setOverrideEditedNews($overrideEditedNews) {
		$this->overrideEditedNews = (boolean) $overrideEditedNews;
	}
	
	/**
	 * Check if news should be hidden after import
	 * 
	 * @return boolean
	 */
	public function getHideImportedNews() {
		return (boolean) $this->hideImportedNews;
	}
	
	/**
	 * Set hide imported news property
	 * 
	 * @param mixed $hideImportedNews
	 * @return void
	 */
	public function setHideImportedNews($hideImportedNews) {
		$this->hideImportedNews = (boolean) $hideImportedNews;
	}
	
	/**
	 * Get categories list
	 * 
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\Category>
	 */
	public function getCategories() {
		return $this->categories;
	}
	
	/**
	 * Set categories list
	 * 
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GeorgRinger\News\Domain\Model\Category> $categories
	 * @return void
	 */
	public function setCategories($categories) {
		$this->categories = $categories;
	}
	
	/**
	 * Add category to the list
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\Category $category
	 * @return void
	 */
	public function addCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $category) {
		$this->categories->attach($category);
	}
	
	/**
	 * Remove category from the list
	 *  
	 * @param \TYPO3\CMS\Extbase\Domain\Model\Category $category
	 * @return void
	 */
	public function removeCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $category) {
		$this->categories->remove($category);
	}
	
	/**
	 * Get default author name
	 * 
	 * @return string
	 */
	public function getAuthor() {
		return $this->author;
	}
	
	/**
	 * Set default author name
	 * 
	 * @param string $author
	 * @return void
	 */
	public function setAuthor($author) {
		$this->author = $author;
	}
	
	/**
	 * Get default author email
	 * 
	 * @return string
	 */
	public function getAuthorEmail() {
		return $this->authorEmail;
	}
	
	/**
	 * Set default author email
	 * 
	 * @param string $authorEmail
	 * @return void
	 */
	public function setAuthorEmail($authorEmail) {
		$this->authorEmail = $authorEmail;
	}
	
	/**
	 * Get news language
	 * 
	 * @return int
	 */
	public function getNewsLanguage() {
		return $this->newsLanguage;
	}
	
	/**
	 * Set news language
	 * 
	 * @param int $newsLanguage
	 * @return void
	 */
	public function setNewsLanguage($newsLanguage) {
		$this->newsLanguage = $newsLanguage;
	}
	
	/**
	 * @return string
	 */
	public function getCustomMapping() {
		return $this->customMapping;
	}
	
	/**
	 * @param string $customMapping
	 * @return void
	 */
	public function setCustomMapping($customMapping) {
		$this->customMapping = $customMapping;
	}

    /**
     * @param boolean $socialFeed
     * @return void
     */
    public function setSocialFeed($socialFeed) {
        $this->socialFeed = $socialFeed;
    }

    /**
     * @return boolean
     */
    public function getSocialFeed() {
        return $this->socialFeed;
    }
}