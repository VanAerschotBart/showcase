<?php
//data/navigationDAO.php

require_once("DBConfig.php");
require_once("entities/navigationDAO.php");

class navigationDAO {
    
    public function getNav($lang) {
        
        $query = "SELECT text FROM navigation WHERE language = :lang";
        
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        
        $stmt = $dbh->prepare($query);
        $stmt->execute([':lang' => $lang]);
        
        $nav = null;
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $nav = entities/navigationEntity::create(
                $row["text"]
            );
        }
        
        return $nav;
        
    }
    
}