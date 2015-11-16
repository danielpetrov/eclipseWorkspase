<?php
require_once 'Readline.php';
require_once 'Exception.php';

$p = int ( readline ( "Please enter p: " . PHP_EOL ) );
$h = int ( readline ( "Please enter h: " . PHP_EOL ) );

define ( "BucketMaxVolume", 5 );

$S = ( float ) $p * $h;

$howManyBuckets = ceil ( $S / BucketMaxVolume );

echo "We need " . $howManyBuckets . " buckets.";

