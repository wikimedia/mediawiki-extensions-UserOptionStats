<?php
if ( !defined( 'MEDIAWIKI' ) ) die();

/**
 * An useless extension for making pie charts of user options usage.
 * Requirements: PHPlot and FCFontFinder (for i18n fonts, optional).
 * FCFontFinder can be found with extension Translate at utils/Font.php.
 * Also need to install fonts for all languages!
 *
 * PHPlot needs to be in $wgAutoloadClasses:
 * $wgAutoloadClasses['PHPlot'] = '/path/to/phplot/phplot.php'
 *
 * Request params:
 * - pietitle 'Title of the chart'
 * - width 'Width of the image' 200..1000
 * - height 'Height of the image' 200..1000
 * - shading 'Shading of the pie' 0..1000
 *
 * @file
 * @ingroup Extensions
 *
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

$wgExtensionCredits['specialpage'][] = array(
	'path'           => __FILE__,
	'name'           => 'User Option Statistics',
	'version'        => '1.3',
	'author'         => 'Niklas Laxström',
	'descriptionmsg' => 'useroptionstats-desc',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:UserOptionStats',
);

$dir = __DIR__;
$wgAutoloadClasses['SpecialUserOptionStats'] = "$dir/SpecialUserOptionStats.php";
$wgExtensionMessagesFiles['UserOptionStats'] = "$dir/UserOptionStats.i18n.php";
$wgExtensionMessagesFiles['UserOptionStatsAlias'] = "$dir/UserOptionStats.alias.php";
$wgSpecialPages['UserOptionStats'] = 'SpecialUserOptionStats';
$wgSpecialPageGroups['UserOptionStats'] = 'wiki';
