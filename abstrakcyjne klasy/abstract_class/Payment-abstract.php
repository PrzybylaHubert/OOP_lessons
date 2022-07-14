<?php

abstract class visa{
    public function visaPayment(){
        return "payment";
    }
    
    abstract public function getPayment();
}

?>