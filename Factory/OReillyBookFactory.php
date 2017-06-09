<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 6/8/2017
 * Time: 7:09 PM
 */

namespace factory;

class OReillyBookFactory extends AbstractBookFactory {
    private $context = "OReilly";
    function makePHPBook() {
        return new OReillyPHPBook;
    }
    function makeMySQLBook() {
        return new OReillyMySQLBook;
    }
}