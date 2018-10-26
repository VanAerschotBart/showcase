<?php
//data/aboutDAO.php

require_once("DBConfig.php");
require_once("entities/aboutEntity.php");

class aboutDAO {
    
    public function getAbout($lang) {
        
        $query = "SELECT title, text, button FROM about WHERE language = :lang";
        
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        
        $stmt = $dbh->prepare($query);
        $stmt->execute([':lang' => $lang]);
        
        $about = null;
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $nav = entities/aboutEntity::create(
                $row["title"],
                $row["text"],
                $row["button"]
            );
        }
        
        return $about;
        
    }
    
}