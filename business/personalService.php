<?php
//business/personalService.php

require_once("data/personalDao.php");

class PersonalService {
    
    public function getPersonalList($lang) {
        $pers = new PersonalDAO();
        $persList = $pers->getPersonal($lang);
        return $persList;
    }
    
}