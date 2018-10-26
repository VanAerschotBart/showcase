<?php
//business/navigationService.php

require_once("data/navigationDao.php");

class NavigationService {
    
    public function getNavList($lang) {
        $nav = new NavigationDAO();
        $navList = $nav->getNav($lang);
        return $navList;
    }
    
}