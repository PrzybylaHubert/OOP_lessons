<?php

class UsersContr extends Users{

    public function createUser($login, $pwd) {
        $this->addUser($login, $pwd);
    }

}