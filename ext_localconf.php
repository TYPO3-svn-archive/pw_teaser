<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$extConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
$actionNotToCache = '';
if ($extConfiguration['ENABLECACHE'] == '0') {
	$actionNotToCache = 'index';
}

t3lib_extMgm::configurePlugin(
	'PwTeaserTeam.' . $_EXTKEY,
	'Pi1',
	array(
		'Teaser' => 'index',
	),
	array(
		'Teaser' => $actionNotToCache,
	)
);

$rootLineFields = t3lib_div::trimExplode(
	',',
	$TYPO3_CONF_VARS['FE']['addRootLineFields'],
	TRUE
);
$rootLineFields[] = 'sorting';
$TYPO3_CONF_VARS['FE']['addRootLineFields'] = implode(',', $rootLineFields);

?>