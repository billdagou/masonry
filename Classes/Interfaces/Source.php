<?php
namespace Dagou\Masonry\Interfaces;

interface Source {
    const VERSON = '4.2.2';

    /**
     * @return string
     */
    public function getJs(): string;
}