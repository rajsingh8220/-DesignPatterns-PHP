<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 6/9/2017
 * Time: 11:24 AM
 */

//namespace factory;

class SamsMySQLBook extends AbstractMySQLBook {
    private $author;
    private $title;
    function __construct() {
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
    }
    function getAuthor() {
        return $this->author;
    }
    function getTitle() {
        return $this->title;
    }
}
