<?php
namespace Dagou\Masonry\Source;

interface SourceInterface {
    /**
     * @return string
     */
    public function getJs(): string;
}