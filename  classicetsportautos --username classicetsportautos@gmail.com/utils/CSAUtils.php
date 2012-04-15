<?php

class CSAUtils {

    public static function getCountry() {
        $country = "fr";
        $httpHost = $_SERVER['HTTP_HOST'];

        if (preg_match('/^(.*)127.0.0.1:8888(.*)/', $httpHost)) {        
            $country = "uk";
        }

        return $country;
    }

}
