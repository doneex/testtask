<?php

require $_SERVER['DOCUMENT_ROOT'].'/app/Image/Renderer.php';

class Slider {
    protected $link;
    protected $type;
    protected $images = array();

    public function __construct($link, $type) {
        $this->link=$link;
        $this->type=$type;
        $this->parsing($this->getFile($link, $type));
    }

    protected function getFile($link, $type) {
        if ($type == 'xml') {
            $file = simplexml_load_file("$link");
        } elseif ($type == 'json') {
            $json_st = file_get_contents("$link");
            $file = json_decode($json_st);
        }
        return $file;
    }

    protected function parsing($file) {
        foreach ($file as $value) {
            $this->images[] = array('height'=>$value->height, 'path'=>$value->path, 'width'=>$value->width);
        }
    }

    protected function addImage($height, $path, $width) {
        $this->images = new Image($height, $path, $width);
        $picture = $this->images->renderImage();
        return $picture;
    }

    public function renderSlider() {
        $renderSlider = '<div class="sliderWrap">
        <div class="slider">';

        foreach ($this->images as $key => $value) {
            $renderSlider .= $this->addImage($value['height'], $value['path'], $value['width']);
        }

        $renderSlider .= '</div>
        </div>';
        echo $renderSlider;
    }
}