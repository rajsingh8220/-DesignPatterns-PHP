<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 6/9/2017
 * Time: 11:22 AM
 */

namespace factory;

abstract class AbstractBook {
    abstract function getAuthor();
    abstract function getTitle();
}