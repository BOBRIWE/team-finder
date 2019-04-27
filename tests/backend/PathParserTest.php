<?php

namespace tests\backend;

use CompanyName\TeamFinder\Router\PathParser;
use PHPUnit\Framework\TestCase;

class PathParserTest extends TestCase
{
    public function test_should_parse_path_with_args()
    {
        // Given
        $path = '/news?arg1=val1&arg2=&arg3=val3';
        $etalonArgs = [
            'arg1'=>'val1',
            'arg2'=>'',
            'arg3'=>'val3'
            ];
        $etalonMainRoute = '/news';
        $etalonQuery = 'arg1=val1&arg2=&arg3=val3';

        // When
        $pathParser = new PathParser($path);

        // Then
        self::assertEquals($etalonArgs, $pathParser->getArgs());
        self::assertEquals($etalonQuery, $pathParser->getQuery());
        self::assertEquals($etalonMainRoute, $pathParser->getMainRoute());
    }

    public function test_should_parse_path_with_subpaths()
    {
        // Given
        $path = '/article/articleNumber3/oneMoreVariable';

        // When
        $pathParser = new PathParser($path);

        // Then
        self::assertEquals('/article', $pathParser->getMainRoute());
        self::assertEquals(['articleNumber3', 'oneMoreVariable'], $pathParser->getMainArgValue());
    }
}
