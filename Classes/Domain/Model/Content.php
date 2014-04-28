<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011-2014 Armin Ruediger Vieweg <armin@v.ieweg.de>
*                Tim Klein-Hitpass <tim.klein-hitpass@diemedialen.de>
*                Kai Ratzeburg <kai.ratzeburg@diemedialen.de>
*
*  THIS IS A BACKPORT FOR TYPO3 4.x OF VERSION 3.1.1
*
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
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

/**
 * the page model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_PwTeaser_Domain_Model_Content extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * ctype
	 * @var string
	 */
	protected $ctype;

	/**
	 * colPos
	 * @var integer
	 */
	protected $colPos;

	/**
	 * header
	 * @var string
	 */
	protected $header;

	/**
	 * bodytext
	 * @var string
	 */
	protected $bodytext;

	/**
	 * image
	 * It may contain multiple images, but TYPO3 called this field just "image"
	 *
	 * @var string
	 */
	protected $image;

//	/**
//	 * Categories
//	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\Category>
//	 */
//	protected $categories;

	/**
	 * Complete row (from database) of this content element
	 * @var array
	 */
	protected $_contentRow = NULL;

	/**
	 * Constructor
	 */
	public function __construct() {
	}

	/**
	 * Setter for image(s)
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Getter for images
	 *
	 * @return string
	 */
	public function getImage() {
		return $this->image;
	}

//	/**
//	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
//	 * @return void
//	 */
//	public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
//		$this->image->attach($image);
//	}
//
//	/**
//	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
//	 * @return void
//	 */
//	public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
//		$this->image->detach($image);
//	}

	/**
	 * Returns image files as array (with all attributes)
	 *
	 * @return array
	 */
	public function getImageFiles() {
		$defaultDirectory = 'uploads/pics/';
		$images = t3lib_div::trimExplode(',', $this->image, TRUE);

		foreach ($images as $key => $imgage) {
			$images[$key] = $defaultDirectory . $imgage;
		}

		return $images;
	}

	/**
	 * Setter for bodytext
	 *
	 * @param string $bodytext bodytext
	 * @return void
	 */
	public function setBodytext($bodytext) {
		$this->bodytext = $bodytext;
	}

	/**
	 * Getter for bodytext
	 *
	 * @return string bodytext
	 */
	public function getBodytext() {
		return $this->bodytext;
	}

	/**
	 * Setter for ctype
	 *
	 * @param string $ctype ctype
	 * @return void
	 */
	public function setCtype($ctype) {
		$this->ctype = $ctype;
	}

	/**
	 * Getter for ctype
	 *
	 * @return string ctype
	 */
	public function getCtype() {
		return $this->ctype;
	}

	/**
	 * Setter for colPos
	 *
	 * @param integer $colPos colPos
	 * @return void
	 */
	public function setColPos($colPos) {
		$this->colPos = $colPos;
	}

	/**
	 * Getter for colPos
	 *
	 * @return integer colPos
	 */
	public function getColPos() {
		return $this->colPos;
	}

	/**
	 * Setter for header
	 *
	 * @param string $header header
	 * @return void
	 */
	public function setHeader($header) {
		$this->header = $header;
	}

	/**
	 * Getter for header
	 *
	 * @return string header
	 */
	public function getHeader() {
		return $this->header;
	}

//	/**
//	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage
//	 */
//	public function getCategories() {
//		return $this->categories;
//	}
//
//	/**
//	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories
//	 * @return void
//	 */
//	public function setCategories($categories) {
//		$this->categories = $categories;
//	}
//
//	/**
//	 * @param \TYPO3\CMS\Extbase\Domain\Model\Category $category
//	 * @return void
//	 */
//	public function addCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $category) {
//		$this->categories->attach($category);
//	}
//
//	/**
//	 * @param \TYPO3\CMS\Extbase\Domain\Model\Category $category
//	 * @return void
//	 */
//	public function removeCategory(\TYPO3\CMS\Extbase\Domain\Model\Category $category) {
//		$this->categories->detach($category);
//	}

	/**
	 * Checks for attribute in _contentRow
	 *
	 * @param string $name Name of unknown method
	 * @param array arguments Arguments of call
	 *
	 * @return mixed
	 */
	public function __call($name, $arguments) {
		if (substr(strtolower($name), 0, 3) == 'get' && strlen($name) > 3) {
			$attributeName = lcfirst(substr($name, 3));

			if (empty($this->_contentRow)) {
				/** @var \TYPO3\CMS\Frontend\Page\PageRepository $pageSelect */
				$pageSelect = $GLOBALS['TSFE']->sys_page;
				$contentRow = $pageSelect->getRawRecord('tt_content', $this->getUid());
				foreach ($contentRow as $key => $value) {
					$this->_contentRow[t3lib_div::underscoredToLowerCamelCase($key)] = $value;
				}
			}
			if (isset($this->_contentRow[$attributeName])) {
				return $this->_contentRow[$attributeName];
			}
		}
	}

	/**
	 * @return array
	 */
	public function getContentRow() {
		return $this->_contentRow;
	}
}
?>