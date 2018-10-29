<?php
//entities/contactEntity.php

class Contact {
    
    private $title;
    private $text;
        
    public function __construct($title, $text) {
        $this->title = $title;
        $this->text = $text;
    }
    
    public static function create($title, $text) {
        $contact = new Contact($title, $text);
        return $contact;
    }
    
    public funtion getTitle() {
        return $this->title;
    }
    
    public funtion getText() {
        return $this->text;
    }
    
}