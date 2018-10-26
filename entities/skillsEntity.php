<?php
//entities/skillsEntity.php

class Skills {
    
    private $text;
    private $type;
        
    public function __construct($text, $type) {
        $this->text = $text;
        $this->type = $type;
    }
    
    public static function create($text, $type) {
        $skills = new Skills($text, $type);
        return $skills;
    }
    
    public funtion getText() {
        return $this->text;
    }
    
    public funtion getType() {
        return $this->type;
    }
    
}