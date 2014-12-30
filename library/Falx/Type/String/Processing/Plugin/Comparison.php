<?php

namespace Falx\Type\String\Processing\Plugin;

use Falx\Type\String;
use Falx\Type\String\Processing\PluginInterface;

/**
 * Comparison plugin interface
 * @author Dan Homorodean <dan.homorodean@gmail.com>
 */
interface Comparison extends PluginInterface {

    /**
     * compareTo return values
     */
    const COMPARE_EQUAL = 0;
    const COMPARE_BIGGER = 1;
    const COMPARE_SMALLER = -1;

    function equals(String $first, String $second);

    function equalsIgnoringCase(String $first, String $second);

    function compareTo(String $first, String $second);
}
