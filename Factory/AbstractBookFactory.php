<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 6/8/2017
 * Time: 7:09 PM
 */

namespace factory;

abstract class AbstractBookFactory {
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}