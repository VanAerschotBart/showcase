<?php
//entities/skillsEntity.php

class Skills {
    
    private $text;
    private $type;
        
    public function __construct($text, $type) {
        $this->text = $text;
        $this->type = $type;
    }
    
    public static function create($text) {
        $skills = new Skills($text);
        return $skills;
    }
    
    public funtion getText() {
        return $this->text;
    }
    
}