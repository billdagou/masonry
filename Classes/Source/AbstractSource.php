<?php
namespace Dagou\Masonry\Source;

abstract class AbstractSource implements SourceInterface {
    protected const string URL = '';
    protected const string VERSION = '4.2.2';

    /**
     * @return string
     */
    public function getJs(): string {
        return static::URL.$this->getBuild();
    }

    /**
     * @return string
     */
    protected function getBuild(): string {
        return 'masonry.pkgd.min.js';
    }
}