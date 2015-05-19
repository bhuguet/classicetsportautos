<?php

class Car {
    
    var $label;
    var $imageName;
    var $cssClass;
    var $otherPictures;
    const BIG_NAME_SUFFIXE = "_b.jpg";
    const SMALL_NAME_SUFFIXE = "_s.jpg";
    
    public function __construct($imageName = "", $label, $cssClass = "") {
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
    
    public function getImage($path) {
        return $path . $this->imageName;
    }
    
    public function getResizedImage($path, $size) {
        return $this->getResizedImageForPicture($path, $size, $this->imageName);
    }
 
    public function getResizedImageForPicture($path, $size, $pictureName) {
        return "/utils/image.php/".$pictureName."?height=".$size."&width=".$size."&cropratio=1:1&image=".$path.$pictureName;
    }    
    
    public function getLabel() {
        return $this->label;
    }
    
    public function getCssClass() {
        return $this->cssClass;
    }
    
    public function setOtherPictures($otherPictures = array()) {
        $this->otherPictures = $otherPictures;
    }
    
    public function getOtherPictures() {
        return $this->otherPictures;
    }
}

?>
