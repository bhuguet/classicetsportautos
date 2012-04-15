<?php

class CSAUtils {

    public static function getCountry() {
        $country = "fr";
        $httpHost = $_SERVER['HTTP_HOST'];
//        $pattern='/^(.*)127.0.0.1:8888(.*)/';
        $pattern='/^(.*)classicetsportautos.com(.*)/';
        
        if (preg_match($pattern, $httpHost)) {        
            $country = "uk";
        }

        return $country;
    }

}
