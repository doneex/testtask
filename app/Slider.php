<?php

class Slider {
    protected $link;
    protected $type;
    protected $imgs = [];

    public function __construct($link, $type) {
        $this->link=$link;
        $this->type=$type;
    }

    protected function parsXml() {

    }

    protected function parsJson() {

    }



    public function renderSlider() {
        echo '<div class="sliderWrap" style="height: ; width: ;">
        <div class="slider">

        </div>
    </div>';
    }
}