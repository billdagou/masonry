<?php
namespace Dagou\Masonry\ViewHelpers\Uri;

use Dagou\Masonry\Source\Local;
use Dagou\Masonry\Source\SourceInterface;
use Dagou\Masonry\Utility\ExtensionUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

final class JsViewHelper extends AbstractViewHelper {
    /**
     * @return void
     */
    public function initializeArguments(): void {
        parent::initializeArguments();

        $this->registerArgument('forceLocal', 'boolean', 'Force to use local source.');
    }

    /**
     * @return string
     */
    public function render(): string {
        if ($this->arguments['forceLocal'] !== TRUE
            && is_subclass_of(($className = ExtensionUtility::getSource()), SourceInterface::class)
        ) {
            $source = GeneralUtility::makeInstance($className);
        } else {
            $source = GeneralUtility::makeInstance(Local::class);
        }

        return $source->getJs();
    }
}