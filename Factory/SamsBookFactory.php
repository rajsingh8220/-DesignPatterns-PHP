<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 6/8/2017
 * Time: 7:10 PM
 */

//namespace factory;

class SamsBookFactory extends AbstractBookFactory {
    private $context = "Sams";
    function makePHPBook() {
        return new SamsPHPBook;
    }
    function makeMySQLBook() {
        return new SamsMySQLBook;
    }
}