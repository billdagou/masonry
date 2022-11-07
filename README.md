# TYPO3 Extension: Masonry

EXT:masonry allows you to use [Masonry](https://masonry.desandro.com/) in your extensions.

**The extension version only matches Masonry library version, doesn't mean anything else.**

## How to use it
You can load the `JS` library in your Fluid template.

	<masonry:js />

You can also load your own library.

    <masonry:js src="..." />

For more options please refer to &lt;f:asset.script&gt;.

To use other Masonry source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\Masonry\Utility\ExtensionUtility::registerSource(\Vendor\Extension\Source::class);

You may want to disable the other source and use the local one instead in some cases, for example saving page as PDF by [WKHtmlToPdf](https://wkhtmltopdf.org/).

    <masonry:js disableSource="true" />