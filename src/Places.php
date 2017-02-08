<?php
    class Place
    {
            private $city;

            function __construct($city)
            {
                $this->city = $city;
            }

            function setCity($new_city)
            {
                $this->city = (string) $new_city;
            }

            function getCity()
            {
                return $this->city;
            }

            function save()
            {
                array_push($_SESSION['list_of_cities'], $this);
            }

            static function getAll()
            {
                return $_SESSION['list_of_cities'];
            }

            static function deleteAll()
            {
                $_SESSION['list_of_cities'] = array();
            }
    }

?>









?>
