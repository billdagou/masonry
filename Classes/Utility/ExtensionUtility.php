<?php
namespace Dagou\Masonry\Utility;

final class ExtensionUtility {
    /**
     * @param string $sourceClassName
     *
     * @return void
     */
    public static function registerSource(string $sourceClassName): void {
        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['masonry']['Source'] = $sourceClassName;
    }

    /**
     * @return string
     * @internal
     */
    public static function getSource(): string {
        return $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['masonry']['Source'] ?? '';
    }
}