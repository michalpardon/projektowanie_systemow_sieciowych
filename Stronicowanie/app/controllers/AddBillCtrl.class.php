<?php

namespace app\controllers;

use core\App;
use core\ParamUtils;
use app\forms\AddBillForm;
use core\Utils;
use \core\SessionUtils;
use core\Validator;





class AddBillCtrl {

    private $billNames;
    private $billType;
    private $billState;
    private $billsList;
    private $idUsersList;
    private $form;


    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new AddBillForm();
    }

    public function showBills(){
        //weryfikacja, czy oplacone - sprawdzam, czy dla każdego rachunku 'isPaid' != 0

        $tempTable = App::getDB()->select("bill",
            ["[><]bill_name" => ["bill_name_idName" => "idName"],
                "[><]bill_type" => ["bill_type_idType" => "idType"],
                "[><]user_has_bill" => ["idBill" => "bill_idBill"],
                "[><]user" => ["user_has_bill.user_idUser" => "idUser"],
                "[><]bill_state" => ["bill_state_idBill_state" => "idBill_state"]],
            ["bill_idBill", "isPaid"] //kolumny do pobrania
            ); 

        foreach($tempTable as $record){
            
            //sprawdzam ile rachunków o danym id 
            $billsTotal = App::getDB()->count("user_has_bill",
                    ["bill_idBill" => $record["bill_idBill"]]
            );
            //ilu użytkowników z tym rachunkiem opłaciło go
            $isPaid = App::getDB()->count("user_has_bill",
                    ["bill_idBill" => $record["bill_idBill"],
                    "isPaid" => 1]
            ); 
           
            if($billsTotal == $isPaid){
                
                App::getDB()->update("bill",
                ["bill_state_idBill_state" => 2],
                ["idBill" => $record["bill_idBill"]]
                ); 
                
            }
        }
        
        
        
        //wyświetlam po ew. aktualizacji 
        
        $this->billsList = App::getDB()->select("bill",
            ["[><]bill_name" => ["bill_name_idName" => "idName"],
                "[><]bill_type" => ["bill_type_idType" => "idType"],
                "[><]bill_state" => ["bill_state_idBill_state" => "idBill_state"]],
            ["amount", "month", "name","state", "type", "who", "idBill"], //kolumny do pobrania
            ["ORDER" => ["month" => "DESC"]]);
        
        
        
    }
    
    
    public function action_showAddBill() {
        
        $this->generateView();
    }
    

    
    public function validateAddBill() {
        
        $v = new Validator();
        
        $this->form->login = ParamUtils::getFromRequest('login'); //pobierany z widoku (zalogowany user/admin) ukryty 
        
        if($v->validateFromRequest('bill_name_idName',[
            'trim' => true,
            'required' => true,
            'required_message' => 'Wybierz nazwę rachunku'])){
            
            $this->form->bill_name_idName = ParamUtils::getFromRequest('bill_name_idName');
            
            if($this->form->bill_name_idName == 5 || $this->form->bill_name_idName == 6){
                $this->billType = 1;
            } else {
                $this->billType = 2;
            }
            
        }
        if($v->validateFromRequest('amount',[
            'trim' => true,
            'numeric' => true,
            'required' => true,
            'validator_message' => 'Wprowadzona kwota nie jest liczbą lub jest mniejsza od 0,01 zł',
            'min' => 0.01,
            'required_message' => 'Wprowadź kwotę rachunku'])){
            
            $this->form->amount = ParamUtils::getFromRequest('amount');

        }
        if($v->validateFromRequest('month',[
            'date_format' => 'Y-m-d',
            'validator_message' => 'Zły format daty',
            'required' => true,
            'required_message' => 'Wprowadź datę wpłynięcia rachunku'])){
            
            $date = date("Y-m-d");
            
            $checkdate = explode("-", ParamUtils::getFromRequest('month'));
            if(!empty($checkdate[0]) && !empty($checkdate[1]) && !empty($checkdate[2])){
                $years = $checkdate[0];
                $months = $checkdate[1];
                $days = $checkdate[2];

                if(checkdate($months,$days,$years)){
                    if(ParamUtils::getFromRequest('month') <= $date){
                        $this->form->month = ParamUtils::getFromRequest('month');
                    } else {
                        Utils::addErrorMessage('Wskazana data jest z przyszłości...');
                    }
                } else {
                    Utils::addErrorMessage('Złe wartości w dacie.');
                }
                        } else {
                Utils::addInfomessage('Braki w dacie');
            }
        }

        if (!(isset($this->form->bill_name_idName) && isset($this->form->amount) && isset($this->form->month)))
            return false;

	return !App::getMessages()->isError();
    }

    
    public function action_addBill() {
        
        if ($this->validateAddBill()) {
            try {
                App::getDB()->insert("bill",[
                        "bill_name_idName" => $this->form->bill_name_idName,
                        "amount" => $this->form->amount,
                        "month" => $this->form->month,
                        "bill_type_idType" => $this->billType,
                        "bill_state_idBill_state" => 1,
                        "who" => $this->form->login
                ]);
                Utils::addInfoMessage('Dodano rachunek');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas dodawania rachunku');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
//        SessionUtils::storeMessages();
        App::getRouter()->forwardTo('showAddBill');
    }
    
    public function getBillNames() {
        $this->billNames = App::getDB()->select("bill_name",[
                        "idName",
                        "name"
                ]);
    }
    
    public function assignBill(){
        $this->idUsersList = App::getDB()->select("user",[
                        "idUser"
                ]);
        foreach($this->idUsersList as $user){
            foreach($this->billsList as $bill){
                //najpierw sprawdzam, czy nie został już przypisany taki rachunek - unikanie duplikatów
                //dodatkowo, czy rachunek nie został już w całości opłacony
                if(!App::getDB()->has("user_has_bill",[
                        "user_idUser" => $user["idUser"],
                        "bill_idBill" => $bill["idBill"],
                    ]) && App::getDB()->has("bill",[
                        "bill_state_idBill_state" => 1,
                        "idBill" => $bill["idBill"],
                    ])){
                    //pobranie kwoty rachunku i wyliczenie kwot dla użytkowników
                        $amount = App::getDB()->get("bill",
                                    ["[><]bill_name" => ["bill_name_idName" => "idName"],
                                        "[><]bill_type" => ["bill_type_idType" => "idType"],
                                        "[><]bill_state" => ["bill_state_idBill_state" => "idBill_state"]],
                                    ["amount", "idBill"], //kolumny do pobrania
                                    ["idBill" => $bill["idBill"]]);
                        
                        $users = App::getDB()->count("user"); //zliczam użytkowników
                        
                        App::getDB()->insert("user_has_bill",[
                                    "user_idUser" => $user["idUser"],
                                    "bill_idBill" => $bill["idBill"],
                                    "participation" => ($amount["amount"] / $users)]); //udział = wartość rachunku/liczba użytkowników
                        
                    }
            }
        }
    }
    

    
    public function generateView() {
        $this->getBillNames();
        $this->showBills();
        $this->assignBill();
        App::getSmarty()->assign('billNames', $this->billNames);
        App::getSmarty()->assign('billsList', $this->billsList);
        App::getSmarty()->assign('user', SessionUtils::loadObject('user', $keep = true));
        App::getSmarty()->assign('page_title','Zarządzanie rachunkami');
        App::getSmarty()->assign('page_description','System do zarządzania rachunkami');
        App::getSmarty()->assign('page_header','Zarządzanie rachunkami');	
        App::getSmarty()->display('AddBillView.tpl');
    }

}
