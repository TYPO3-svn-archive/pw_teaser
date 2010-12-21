<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Armin Ruediger Vieweg <info@professorweb.de>
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
 * This class strips html and php code out of a string
 *
 * @author     Armin Rüdiger Vieweg <info@professorweb.de>
 * @copyright  2010 Copyright belongs to the respective authors
 * @license    http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_PwTeaser_ViewHelpers_StripTagsViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {
	/**
	 * Strips html and php code out of a string
	 *
	 * @param string $string The string which will be stripped
	 *
	 * @return string the stripped string
	 */
	public function render($string = NULL) {
		if ($string === NULL) {
			$string = html_entity_decode($this->renderChildren());
			if ($string === NULL) {
				return '';
			}
		}
		return strip_tags($string);
	}
}
?>