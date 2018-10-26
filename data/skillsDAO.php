<?php
//data/skillsDAO.php

require_once("DBConfig.php");
require_once("entities/skillsDAO.php");

class skillsDAO {
    
    public function getSkills($type, $lang) {
        
        $query = "SELECT text FROM skills WHERE type = :title AND language = :lang";
        
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        
        $stmt = $dbh->prepare($query);
        $stmt->execute([':type' => $type, ':lang' => $lang]);
        
        $skills = null;
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $nav = entities/skillsEntity::create(
                $row["text"]
            );
        }
        
        return $skills;
        
    }
    
}