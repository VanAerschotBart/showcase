<?php
//showcase.php

require_once("business/Service.php")

$navSvc = new NavigationService();
$aboutSvc = new AboutService();
$skillsSvc = new SkillsService();
$persSvc = new PersonalService();
$contactSvc = new ContactService();

if(isset($_GET)) {
    $lang = $_GET["language"];
    if ($lang == "EN" || $lang == "NL") {
        if ($lang = "EN") {
            $lang = 1;
        }
        else {
            $lang = 2;
        }
    }
    else {
        alert("language select issue");
    }
    
}
else {
    $lang = 1;
}

$navList = $navSvc->getNavList($lang);
$aboutList = $aboutSvc->getAboutList($lang);
$personalList = $persSvc->getPersonalList($lang);
$contactList = $contactSvc->getContactList($lang);

$skillsTitle = $skillsSvc->getSkills("title", $lang);
$skillsSubTitles = $skillsSvc->getSkills("subtitle", $lang);
$skillsLangList = $skillsSvc->getSkills("languagelist", $lang);
$skillsCodeList = $skillsSvc->getSkills("codinglist", $lang);
$skillsAcadList = $skillsSvc->getSkills("academiclist", $lang);
$skillsExtraList = $skillsSvc->getSkills("extralist", $lang);


$return_arr[] = array();

echo json_encode($return_arr);