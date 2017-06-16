<?php
/**
 * Created by PhpStorm.
 * User: Shailesh
 * Date: 6/9/2017
 * Time: 11:56 AM
 */

function __autoload($classname) {
    $filename = $classname.".php";
    require_once $filename;
}

writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->GetPage();
writeln($page->showPage());
writeln('');

writeln('END TESTING BUILDER PATTERN');

function writeln($line_in) {
    echo $line_in."\n";
}