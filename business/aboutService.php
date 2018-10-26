<?php
//business/aboutService.php

require_once("data/aboutDao.php");

class AboutService {
    
    public function getAboutList($lang) {
        $about = new AboutDAO();
        $aboutList = $about->getAbout($lang);
        return $aboutList;
    }
    
}