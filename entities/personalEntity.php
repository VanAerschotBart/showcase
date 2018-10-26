<?php
//entities/personalEntity.php

class Personal {
    
    private $title;
    private $text;
        
    public function __construct($title, $text) {
        $this->title = $title;
        $this->text = $text;
    }
    
    public static function create($title, $text) {
        $pers = new Personal($title, $text);
        return $pers;
    }
    
    public funtion getTitle() {
        return $this->title;
    }
    
    public funtion getText() {
        return $this->text;
    }
    
}