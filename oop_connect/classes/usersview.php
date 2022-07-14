<?php

class UsersView extends Users {

    public function showUser($login){
        $results = $this->getUser($login);
        echo $results['login']." ".$results['password'];
    }

}