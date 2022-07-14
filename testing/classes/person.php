<?php
    class person{
        private $name;
        public $age;
        const siemas = 'constant';
        public static $drinkingAge = 21;

        public function setName($newName){
            $this->name = $newName;
        }

        public function showName(){
            return $this->name;
        }

        public static function changeDrinkingAge(int $newAge){
            self::$drinkingAge = $newAge;
        }


    }
?>