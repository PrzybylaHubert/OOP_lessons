<?php

class Users extends connect{

    protected function getUser($login){
        $sql = "select * from `users` where `login` like ?";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$login]);

        $result = $stmt->fetch();
        return $result;
    }

    protected function addUser($login, $pwd){
        $sql = "insert into `users`(`login`, `password`) values (?, ?)";
        $stmt = $this->connection()->prepare($sql);
        $stmt->execute([$login, $pwd]);
    }
}