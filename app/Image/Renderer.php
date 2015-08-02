<?php

include '../app/Slider.php';

class Image {
    protected $height;
    protected $width;
    protected $path;

    function __construct($height, $width, $path) {
        $this->height=$height;
        $this->width=$width;
        $this->path=$path;
    }

    public function renderImage() {

    }
}