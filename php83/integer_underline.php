<?php
/**
 * As of PHP 7.4.0, integer literals may contain underscores (_) between digits, for better readability of literals.
 * These underscores are removed by PHP's scanner.
 */
$num = 123_456_789;
var_dump($num);