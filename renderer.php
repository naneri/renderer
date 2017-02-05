<?php

require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'gd'));

$a = shell_exec('phantomjs page_image.js http://zabor.kg');

// to finally create image instances
$image = $manager->make(trim($a))->save('kana.png');

echo 'done';
exit;