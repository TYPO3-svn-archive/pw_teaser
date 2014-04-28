<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$extConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
$actionNotToCache = array();
if ($extConfiguration['ENABLECACHE'] == '0') {
	$actionNotToCache = array(
		'Teaser' => 'index',
	);
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Teaser' => 'index',
	),
	$actionNotToCache
);

//$rootLineFields = t3lib_div::trimExplode(
//	',',
//	$TYPO3_CONF_VARS['FE']['addRootLineFields'],
//	TRUE
//);
//$rootLineFields[] = 'sorting';
//$TYPO3_CONF_VARS['FE']['addRootLineFields'] = implode(',', $rootLineFields);

?>