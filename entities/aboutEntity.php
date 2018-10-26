<?php
//entities/aboutEntity.php

class About {
    
    private $title;
    private $text;
    private $button;
        
    public function __construct($title, $text, $button) {
        $this->title = $title;
        $this->text = $text;
        $this->button = $button;
    }
    
    public static function create($title, $text, $button) {
        $about = new About($title, $text, $button);
        return $about;
    }
    
    public funtion getTitle() {
        return $this->title;
    }
    
    public funtion getText() {
        return $this->text;
    }
    
    public funtion getButton() {
        return $this->button;
    }
    
}