<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 6/9/2017
 * Time: 11:23 AM
 */

namespace factory;

class OReillyMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;
    function __construct() {
        $this->author = 'George Reese, Randy Jay Yarger, and Tim King';
        $this->title = 'Managing and Using MySQL';
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}