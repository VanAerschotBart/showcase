<?php
//entities/skillsEntity.php

class Skills {
    
    private $text;
        
    public function __construct($text, $type) {
        $this->text = $text;
    }
    
    public static function create($text) {
        $skills = new Skills($text);
        return $skills;
    }
    
    public funtion getText() {
        return $this->text;
    }
    
}