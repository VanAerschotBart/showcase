<?php
//entities/navigationEntity.php

class Navigation {
    
    private $text;
        
    public function __construct($text) {
        $this->text = $text;
    }
    
    public static function create($text) {
        $nav = new Navigation($text);
        return $nav;
    }
    
    public funtion getText() {
        return $this->text;
    }
}