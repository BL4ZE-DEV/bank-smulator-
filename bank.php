<?php

class Bank {
    protected $balance;
    
    public function __construct(private string $account_no ){
        $this->balance = 0;
    }
   

    function getAccount_no(){
        return $this->account_no;
    }
    function getbalance(){
        return $this->balance;
    }

   
}

class savings_account extends bank {
    private $intrest_rate;
    function __construct($account_no,$intrest_rate){
        parent::__construct($account_no);
    } 
    function addintrestrate(){
        $intrest_amount = $this->balance * $this->intrest_rate / 100;
        $this -> balance += $intrest_amount;
        echo "Intrest added: {$intrest_amount}.\n";
        echo "current balance: {$this->balance}.\n";
    }
    function deposit($amount){

        if($amount > 0){
            $this->balance += $amount;
            echo "deposited successfully.\n";
            echo "current balance: {$this->balance}.\n";
        }
        
    }

    function withdraw_savingsaccount($amount){
        if($amount <= $this->balance){
            $this->balance -= $amount;
            echo "withdrawn successfully.\n";
            echo "current balance :{$this->balance}.\n";
        }else{
            echo "insuffient fund";
        }
    }
}


$savings= new savings_account('zazu-10', 3.5);
$savings->deposit(20000);
$savings->withdraw(100,000,000);




