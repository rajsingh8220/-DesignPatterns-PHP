<?php

/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 6/12/2017
 * Time: 6:19 PM
 */
abstract class AbstractPageDirector {
    abstract function __construct(AbstractPageBuilder $builder_in);
    abstract function buildPage();
    abstract function getPage();
}