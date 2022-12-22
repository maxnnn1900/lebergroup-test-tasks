<?php

namespace Maxnnn1900\Watermark;

class Watermark
{

    /**
     * Create file with watermark on image
     *
     * @param [string] $imageFileName       filename
     * @param [string] $watermarkFileName   filename
     * @param [string] $compositeFileName   filename without extension
     * @return void
     */
    public static function setWatermarkToImage($imageFileName, $watermarkFileName, $compositeFileName)
    {
        $image = new \Imagick();
        $image->readImage($imageFileName);

        $watermark = new \Imagick();
        $watermark->readImage($watermarkFileName);
        $watermark->evaluateImage(\Imagick::EVALUATE_DIVIDE, 2, \Imagick::CHANNEL_ALPHA);

        $x = $image->getImageWidth() / 2 - $watermark->getImageWidth() / 2;
        $y = $image->getImageHeight() / 2 - $watermark->getImageHeight() / 2;

        $image->compositeImage($watermark, \Imagick::COMPOSITE_OVER, $x, $y);

        $image->writeImage($compositeFileName . '.' . $image->getImageFormat());
    }
}
