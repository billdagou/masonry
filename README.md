# TYPO3 Extension: Masonry

EXT:masonry allows you to use [Masonry](https://masonry.desandro.com/) in your extensions.

**The extension version only matches the Masonry library version, it doesn't mean anything else.**

## How to use it
You can load the library in your Fluid template easily.

    <f:asset.script identifier="masonry" src="{masonry:uri.js()}" />

To use other Masonry source, you can register it in `ext_localconf.php` or `AdditionalConfiguration.php`.

    \Dagou\Masonry\Utility\ExtensionUtility::registerSource(\Dagou\Masonry\Source\UnPkg::class);

You may want to disable the source and use the local one instead in some cases, for example saving page as PDF by [WKHtmlToPdf](https://wkhtmltopdf.org/).

    {masonry:uri.js(forceLocal: "true")}