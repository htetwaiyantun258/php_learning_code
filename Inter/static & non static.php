<?php

class Animal{
    public static function eat(){
        echo "I'm eating.";
    }
    public function doing(){
        self::eat();
    }
}

Animal::eat();