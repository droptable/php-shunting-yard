<?php

require 'parser.php';

use rr\shunt\Parser;
use rr\shunt\Context;

// einfach
$trm = '3 + 4 * 2 / ( 1 - 5 ) ^ 2 ^ 3';
print Parser::parse($trm); // 3.0001220703125

print "\n";

// mit eigenen konstanten und funktionen
$ctx = new Context;
$ctx->def('abs'); // wrapper
$ctx->def('foo', 5);
$ctx->def('bar', function($a, $b) { return $a * $b; });

$trm = '3 + bar(4, 2) / (abs(-1) - foo) ^ 2 ^ 3';
print Parser::parse($trm, $ctx); // 3.0001220703125
