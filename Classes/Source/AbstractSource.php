<?php
namespace Dagou\Masonry\Source;

use Dagou\Masonry\Interfaces\Source;

abstract class AbstractSource implements Source {
    protected const URL = '';
    protected const VERSON = '4.2.2';


    public function getJs(): string {
        return static::URL.$this->getJsBuild();
    }

    /**
     * @return string
     */
    protected function getJsBuild(): string {
        return 'masonry.pkgd.min.js';
    }
}