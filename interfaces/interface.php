<?php

    interface PaymentInterface{
        public function payNow();
    }    

    interface LoginInterface{
        public function loginfirst();
    }    

    class Paypal implements PaymentInterface, LoginInterface{
        public function payNow(){}
        public function loginfirst(){}
        public function paymentProcess(){
            $this->loginfirst();
            $this->payNow();
        }
    }

    class BankTransfer implements PaymentInterface, LoginInterface{
        public function payNow(){}
        public function loginfirst(){}
        public function paymentProcess(){
            $this->loginfirst();
            $this->payNow();
        }
    }

    class Visa implements PaymentInterface{
        public function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }

    class Cash implements PaymentInterface{
        public function payNow(){}
        public function paymentProcess(){
            $this->payNow();
        }
    }

    class BuyProduct{
        public function pay(PaymentInterface $paymentType){
            $paymentType->paymentProcess();
        }
    }

    $paymentType = new Cash();
    $buyProduct = new BuyProduct();
    $buyProduct->pay($paymentType);

?>