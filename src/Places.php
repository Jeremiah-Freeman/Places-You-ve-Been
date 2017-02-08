<?php
    class Place

    {
            private $city;
            private $length;

            function __construct($city,$length)
            {
                $this->city = $city;
                $this->length = $length;
            }

            function setLength($new_length)
            {
                $this->length =  (string) $new_length;
            }


            function getLength()
            {
                return $this->length;
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
