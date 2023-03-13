<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use app\forms\EditUserForm;
use app\forms\ListOfUsersForm;
use app\forms\PaginationForm;
use core\Utils;
use \core\SessionUtils;
use core\Validator;




class ListOfUsersCtrl {

    private $records;
    private $form;
    private $filtr;
    private $pagination;


    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new EditUserForm();
        $this->filtr = new ListOfUsersForm();
        $this->pagination = new PaginationForm();
    }
    
    public function load() {
    

        // --> STRONICOWANIE <-- //
        
        $rows = 3; //limit rekordów na stronie
        
        $v = new Validator();
        
        //pobranie strony do wyświetlenia
        $current_page = $v->validateFromCleanURL(1, [
            'int' => true,
            'min' => 1,              
        ]);
        
//        $current_page = ParamUtils::getFromCleanURL(1); //pobranie strony do wyświetlenia
        
        if(!$v->isLastOK() || $v->isLastEmpty() ){ //jeśli nie ma strony, to wyświetl pierwszą
            $current_page = 1;
        }

        $this->pagination->offset = $rows * ($current_page - 1);  
        
        $loginFilter = $v->validateFromCleanURL(2, [
            'trim' => true,              
        ]);
        if(!$v->isLastEmpty() && $v->isLastOK()){
            $this->filtr->login = $loginFilter;
        } else {
            $this->filtr->login = ParamUtils::getFromRequest('login'); 
        }

        $search = 0;
        $search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
        if (isset($this->filtr->login) && strlen($this->filtr->login) > 0) {
            $search_params['login[~]'] = $this->filtr->login . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
            $search = 1; //flaga, że wypełniono polę wyszukiwania
        }

        $num_params = sizeof($search_params);
        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        if($search == 1){
            $this->records = App::getDB()->select("role", 
                ["[><]user_has_role" => ["role.idRoles" => "roles_idRoles"], "[><]user" => ["user_has_role.user_idUser" => "idUser"]],
                ["role.roleName", "login", "createdAt", "idRoles", "idUser_has_role", "idRoles", "idUser", "isActive", "creatAt", "deleteAt"], //kolumny do pobrania
                $where);  //sortowanie + stronicowanie   
            $this->pagination->totalFiltr =  count($this->records);
        }
        
        $where ["ORDER"] = ["login", "roleName"]; //SORTOWANIE
        $where ["LIMIT"] = [$this->pagination->offset,$rows]; //STRONICOWANIE [A,B], GDZIE A => REKORD POCZATKOWY, B => LIMIT DO WYSWIETLENIA


        $this->records = App::getDB()->select("role", 
            ["[><]user_has_role" => ["role.idRoles" => "roles_idRoles"], "[><]user" => ["user_has_role.user_idUser" => "idUser"]],
            ["role.roleName", "login", "createdAt", "idRoles", "idUser_has_role", "idRoles", "idUser", "isActive", "creatAt", "deleteAt"], //kolumny do pobrania
            $where);  //sortowanie + stronicowanie
        
        
        $this->pagination->page = $current_page; // na potrzeby przekazania do widoku (przejścia lewo/prawo)
        
        if($search != 1){
            $this->pagination->total = App::getDB()->count("user_has_role"); //total wyników wszystkich użytkowników z rolą
        } else {
            $this->pagination->total = $this->pagination->totalFiltr; //total wyników z filtrem
        }
        $this->pagination->max = ceil($this->pagination->total / $rows); //ilość stron 
        $this->pagination->offset = $rows * ($current_page - 1);  
        
    }
    
//    public function next() {
//       return $this->pagination->page + 1;
//    }
//    public function previous() {
//       return $this->pagination->page - 1;
//    }
    
    public function validateDelete() {
        $this->form->idUser = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
	return !App::getMessages()->isError();
    }
    
    public function validateAddAdmin() {
        $this->form->idUser = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
	return !App::getMessages()->isError();
    }
    public function validateRoleInactive() {
        $this->form->idUser_has_role = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
	return !App::getMessages()->isError();
    }
    
    public function action_roleInactive() {
        
        if ($this->validateRoleInactive()) {
            try {
                App::getDB()->update("user_has_role", [
                    "isActive" => 0,
                    "deleteAt" => date("Y-m-d h:i:s"),
                ], ["idUser_has_role" => $this->form->idUser_has_role]);
                Utils::addInfoMessage('Pomyślnie zablokowano rolę dla wybranego użytkownika');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        SessionUtils::storeMessages();
//        App::getRouter()->forwardTo('showAll');
        App::getRouter()->redirectTo("showAll");
    }
    
    public function action_userDelete() {
        
        if ($this->validateDelete()) {
            try {
                // usunięcie rekordu
                App::getDB()->delete("user", [
                    "idUser" => $this->form->idUser
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        SessionUtils::storeMessages();
//        App::getRouter()->forwardTo('showAll');
        App::getRouter()->redirectTo("showAll");
    }
    
    public function action_addAdmin() {
        
        if ($this->validateAddAdmin()) {
            try {
                App::getDB()->insert("user_has_role", [
                    "user_idUser" => $this->form->idUser,
                    "roles_idRoles" => 1,
                ]);
                Utils::addInfoMessage('Pomyślnie zwiększono uprawnienia');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas zwiększania uprawnień');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
        SessionUtils::storeMessages();
//        App::getRouter()->forwardTo('showAll');
        App::getRouter()->redirectTo("showAll");
    }
    public function action_showAll() {
        $this->load();
        App::getSmarty()->assign('page_title','Zarządzanie rachunkami');
        App::getSmarty()->assign('page_description','System do zarządzania rachunkami');
        App::getSmarty()->assign('page_header','Zarządzanie rachunkami');	
        App::getSmarty()->assign('view', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->assign('filtr', $this->filtr);  // pola do filtrowania
        App::getSmarty()->assign('pagination', $this->pagination);  // stronicowanie
        App::getSmarty()->assign('user', SessionUtils::loadObject('user', $keep = true));
        App::getSmarty()->display('ListView.tpl');
    }
    
    public function action_showAllTable() {
        $this->load();
        App::getSmarty()->assign('page_title','Zarządzanie rachunkami');
        App::getSmarty()->assign('page_description','System do zarządzania rachunkami');
        App::getSmarty()->assign('page_header','Zarządzanie rachunkami');	
        App::getSmarty()->assign('view', $this->records);  // lista rekordów z bazy danych
        App::getSmarty()->assign('filtr', $this->filtr);  // pola do filtrowania
        App::getSmarty()->assign('pagination', $this->pagination);  // stronicowanie
        App::getSmarty()->assign('user', SessionUtils::loadObject('user', $keep = true));
        App::getSmarty()->display('ListTableView.tpl');
    }

}
