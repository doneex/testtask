<?php

class Image {
    protected $height;
    protected $width;
    protected $path;

    function __construct($height, $path, $width) {
        $this->height=$height;
        $this->width=$width;
        $this->path=$path;
    }

    public function getPath() {
        return $this->path;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function renderImage() {
        $renderImage = '<img src="'.$this->getPath().'" height='.$this->getHeight().' width='.$this->getWidth().' />';
        return $renderImage;
    }
}