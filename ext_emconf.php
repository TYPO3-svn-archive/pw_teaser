<?php

########################################################################
# Extension Manager/Repository config file for ext "pw_teaser".
#
# Auto generated 21-12-2010 11:05
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Professor Web Teaser',
	'description' => 'Extensions to create dynamic teasers, with data from page properties and its content elements. Professor Web Teaser based on Extbase and Fluid Template Engine.',
	'category' => 'plugin',
	'author' => 'Armin Ruediger Vieweg',
	'author_email' => 'info@professorweb.de',
	'author_company' => '',
	'shy' => '',
	'dependencies' => 'extbase,fluid',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.4.0-0.0.0',
			'extbase' => '1.3.0beta2a-0.0.0',
			'fluid' => '1.3.0beta2-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:55:{s:12:"ext_icon.gif";s:4:"c590";s:17:"ext_localconf.php";s:4:"1dc0";s:14:"ext_tables.php";s:4:"f612";s:14:"ext_tables.sql";s:4:"7e10";s:39:"Classes/Controller/TeaserController.php";s:4:"e2b5";s:32:"Classes/Domain/Model/Content.php";s:4:"0061";s:29:"Classes/Domain/Model/Page.php";s:4:"ff2f";s:31:"Classes/Domain/Model/Teaser.php";s:4:"a126";s:47:"Classes/Domain/Repository/ContentRepository.php";s:4:"876f";s:44:"Classes/Domain/Repository/PageRepository.php";s:4:"ca67";s:46:"Classes/Domain/Repository/TeaserRepository.php";s:4:"3d87";s:29:"Classes/Utilities/oelibdb.php";s:4:"b972";s:44:"Classes/ViewHelpers/GetContentViewHelper.php";s:4:"44ec";s:43:"Classes/ViewHelpers/StripTagsViewHelper.php";s:4:"f46b";s:43:"Configuration/FlexForms/flexform_teaser.xml";s:4:"4355";s:28:"Configuration/TCA/Teaser.php";s:4:"14c3";s:34:"Configuration/TypoScript/setup.txt";s:4:"76f9";s:40:"Resources/Private/Language/locallang.xml";s:4:"f699";s:77:"Resources/Private/Language/locallang_csh_tx_extteaser_domain_model_teaser.xml";s:4:"6557";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"dd67";s:49:"Resources/Private/Language/locallang_flexform.xml";s:4:"5bf2";s:38:"Resources/Private/Layouts/default.html";s:4:"4d58";s:42:"Resources/Private/Partials/formErrors.html";s:4:"f5bc";s:45:"Resources/Private/Templates/Teaser/Index.html";s:4:"478a";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:59:"Resources/Public/Icons/tx_extteaser_domain_model_teaser.gif";s:4:"905a";s:14:"doc/manual.sxw";s:4:"d379";s:20:"trunk/ext_emconf.php";s:4:"2804";s:18:"trunk/ext_icon.gif";s:4:"e922";s:23:"trunk/ext_localconf.php";s:4:"1dc0";s:20:"trunk/ext_tables.php";s:4:"cec4";s:20:"trunk/ext_tables.sql";s:4:"7e10";s:45:"trunk/Classes/Controller/TeaserController.php";s:4:"e2b5";s:38:"trunk/Classes/Domain/Model/Content.php";s:4:"0061";s:35:"trunk/Classes/Domain/Model/Page.php";s:4:"ff2f";s:37:"trunk/Classes/Domain/Model/Teaser.php";s:4:"a126";s:53:"trunk/Classes/Domain/Repository/ContentRepository.php";s:4:"876f";s:50:"trunk/Classes/Domain/Repository/PageRepository.php";s:4:"ca67";s:52:"trunk/Classes/Domain/Repository/TeaserRepository.php";s:4:"3d87";s:35:"trunk/Classes/Utilities/oelibdb.php";s:4:"b972";s:50:"trunk/Classes/ViewHelpers/GetContentViewHelper.php";s:4:"44ec";s:49:"trunk/Classes/ViewHelpers/StripTagsViewHelper.php";s:4:"f46b";s:49:"trunk/Configuration/FlexForms/flexform_teaser.xml";s:4:"4355";s:34:"trunk/Configuration/TCA/Teaser.php";s:4:"14c3";s:40:"trunk/Configuration/TypoScript/setup.txt";s:4:"76f9";s:46:"trunk/Resources/Private/Language/locallang.xml";s:4:"f699";s:83:"trunk/Resources/Private/Language/locallang_csh_tx_extteaser_domain_model_teaser.xml";s:4:"6557";s:49:"trunk/Resources/Private/Language/locallang_db.xml";s:4:"dd67";s:55:"trunk/Resources/Private/Language/locallang_flexform.xml";s:4:"5bf2";s:44:"trunk/Resources/Private/Layouts/default.html";s:4:"4d58";s:48:"trunk/Resources/Private/Partials/formErrors.html";s:4:"f5bc";s:51:"trunk/Resources/Private/Templates/Teaser/Index.html";s:4:"478a";s:41:"trunk/Resources/Public/Icons/relation.gif";s:4:"e615";s:65:"trunk/Resources/Public/Icons/tx_extteaser_domain_model_teaser.gif";s:4:"905a";s:20:"trunk/doc/manual.sxw";s:4:"d379";}',
);

?>