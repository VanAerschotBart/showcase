<?php
//business/contactService.php

require_once("data/contactDao.php");

class ContactService {
    
    public function getContactList($lang) {
        $contact = new ContactDAO();
        $contactList = $contact->getContact($lang);
        return $contactList;
    }
    
}