<?php
//data/personalDAO.php

require_once("DBConfig.php");
require_once("entities/personalEntity.php");

class personalDAO {
    
    public function getPersonal($lang) {
        
        $query = "SELECT title, text FROM personal WHERE language = :lang";
        
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        
        $stmt = $dbh->prepare($query);
        $stmt->execute([':lang' => $lang]);
        
        $pers = null;
        
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $nav = entities/personalEntity::create(
                $row["title"],
                $row["text"]
            );
        }
        
        return $pers;
        
    }
    
}