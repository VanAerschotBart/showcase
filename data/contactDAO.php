<?php
//data/contactDAO.php

require_once("DBConfig.php");
require_once("entities/contactEntity.php");

class contactDAO {
    
    public function getContact($lang) {
        
        $query = "SELECT title, text FROM contact WHERE language = :lang";
        
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        
        $stmt = $dbh->prepare($query);
        $stmt->execute([':lang' => $lang]);
        
        $contact = null;
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $nav = entities/contactEntity::create(
                $row["title"],
                $row["text"]
            );
        }
        
        return $contact;
        
    }
    
}