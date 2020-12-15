<?php
//for securities use sosme sanitizers
    class TrimString{
        public static function trimLowerName($string){
            $string = strip_tags($string);
            $string = trim($string);
            $string = strtolower($string);
            $string = ucfirst($string);
            return $string;
        }

        public static function trimLowerUsername($string){
            $string = strip_tags($string);
            $string = trim($string);
            return $string;
        }

        public static function trimLowerPassword($string){
            $string = strip_tags($string);
            return $string;
        }
    }
?>