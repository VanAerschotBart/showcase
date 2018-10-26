<?php
//business/skillsService.php

require_once("data/skillsDao.php");

class ContactService {
    
    public function getSkillsList($type, $lang) {
        $skills = new SkillsDAO();
        $skillsList = $skills->getSkills($type, $lang);
        return $skillsList;
    }
    
}