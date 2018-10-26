<?php
//showcase.php

require_once("business/Service.php")

$langSvc = new LanguageService();

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

$navigationText = $langSvc->getText('navigation', $lang);

$aboutTitle = $langSvc->getTitle('about', $lang);
$aboutText = $langSvc->getText('about', $lang);
$aboutButton = $langSvc->getButton('about', $lang);

$skillsTitle = $langSvc->getTitle('skills', $lang);

$personalTitle = $langSvc->getTitle('personal', $lang);
$personalText = $langSvc->getText('personal', $lang);

//$subTitles = $langSvc->get;



$return_arr[] = array("navigation"("text"=>$navigationText), "about"("title"=>$aboutTitle, "text"=>$aboutText, "button"=>$aboutButton), "skills"("title"=>$skillsTitle), "personal"("title"=>$personalTitle, "text"=>$personalText));

echo json_encode($return_arr);