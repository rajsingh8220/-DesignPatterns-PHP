<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 6/9/2017
 * Time: 11:31 AM
 */

function __autoload($classname) {
    $filename = $classname.".php";
    require_once $filename;
}



echo('BEGIN TESTING ABSTRACT FACTORY PATTERN\n');
writeln('');

echo ('testing OReillyBookFactory\n');
$bookFactoryInstance = new OReillyBookFactory;
testConcreteFactory($bookFactoryInstance);
writeln('');

writeln('testing SamsBookFactory\n');
$bookFactoryInstance = new SamsBookFactory;
testConcreteFactory($bookFactoryInstance);

writeln("END TESTING ABSTRACT FACTORY PATTERN\n");
writeln('');

function testConcreteFactory($bookFactoryInstance)
{
    $phpBookOne = $bookFactoryInstance->makePHPBook();
    writeln('first php Author: '.$phpBookOne->getAuthor());
    writeln('first php Title: '.$phpBookOne->getTitle());

    $phpBookTwo = $bookFactoryInstance->makePHPBook();
    writeln('second php Author: '.$phpBookTwo->getAuthor());
    writeln('second php Title: '.$phpBookTwo->getTitle());

    $mySqlBook = $bookFactoryInstance->makeMySQLBook();
    writeln('MySQL Author: '.$mySqlBook->getAuthor());
    writeln('MySQL Title: '.$mySqlBook->getTitle());
}

function writeln($line_in) {
    echo $line_in."\n";
}