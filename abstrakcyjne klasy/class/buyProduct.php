<?php

class buyProduct extends visa{
    public function getPayment(){
        return $this->visaPayment();
    }
}

?>