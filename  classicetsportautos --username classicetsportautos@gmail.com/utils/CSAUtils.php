<?php

class CSAUtils {

    public static function getCountry() {
        $country = "fr";
        $httpHost = $_SERVER['HTTP_HOST'];
        $patternLocal='/^(.*)127.0.0.1:8888(.*)/';
        $patternEN='/^(.*)classicetsportautos.com(.*)/';
        
        if (preg_match($patternEN, $httpHost) || preg_match($patternLocal, $httpHost)) {        
            $country = "en";
        }

        return $country;
    }

}
