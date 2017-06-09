<?php
/**
 * Created by PhpStorm.
 * User: Sunny
 * Date: 6/9/2017
 * Time: 11:31 AM
 */
//namespace factory;

// we've writen this code where we need
function __autoload($classname) {
    $filename = $classname.".php";
    include_once($filename);
}



writeln('BEGIN TESTING ABSTRACT FACTORY PATTERN');
writeln('');

writeln('testing OReillyBookFactory');
$bookFactoryInstance = new OReillyBookFactory;
testConcreteFactory($bookFactoryInstance);
writeln('');

writeln('testing SamsBookFactory');
$bookFactoryInstance = new SamsBookFactory;
testConcreteFactory($bookFactoryInstance);

writeln("END TESTING ABSTRACT FACTORY PATTERN");
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
    echo $line_in."<br/>";
}