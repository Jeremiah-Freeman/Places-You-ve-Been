<?php
    class Place
    {
        private $city_name;

        function __construct($city_name) {
            $this->city_name = $city_name;
        }

        function setCityName($new_name) {
            $this->city_name = $new_name;
        }

        function getCityName() {
            return $this->city_name;
        }

        function save()
        {
            array_push($_SESSION['places'], $this);
        }

        static function getAll()
        {
            return $_SESSION['places'];
        }
    }
?>
