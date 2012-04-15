<?php

class CSAUtils {

    public static function getCountry() {
        $country = "fr";
        $httpHost = $_SERVER['HTTP_HOST'];

        if ("127.0.0.1:8888" == $_SERVER['HTTP_HOST']) {
            $country = "uk";
        }

        return $country;
    }

}
