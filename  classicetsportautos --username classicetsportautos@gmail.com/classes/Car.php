<?php

class Car {
    
    var $label;
    var $imageName;
    var $cssClass;
    const BIG_NAME_SUFFIXE = "_b.jpg";
    const SMALL_NAME_SUFFIXE = "_s.jpg";
    
    public function __construct($imageName, $label, $cssClass) {
        $this->label = $label;
        $this->imageName = $imageName;
        $this->cssClass = $cssClass;
    }

    public function getImageNameBig($path) {
        return $path . $this->imageName . self::BIG_NAME_SUFFIXE;
    }

    public function getImageNameSmall($path) {
        return $path . $this->imageName . self::SMALL_NAME_SUFFIXE;
    }
    
    public function getLabel() {
        return $this->label;
    }
    
    public function getCssClass() {
        return $this->cssClass;
    }
}

?>
