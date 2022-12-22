<?php
require 'vendor/autoload.php';

use Maxnnn1900\Watermark\Watermark;

Watermark::setWatermarkToImage('image.jpg', 'watermark.png', 'image-watermark');
Watermark::setWatermarkToImage('image.png', 'watermark.png', 'image-watermark');
