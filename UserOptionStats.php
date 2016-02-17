<?php
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
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'UserOptionStats' );
	/*wfWarn(
		'Deprecated PHP entry point used for UserOptionStats extension. ' .
		'Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);*/
	return;
} else {
	die( 'This version of the UserOptionStats extension requires MediaWiki 1.25+' );
}
