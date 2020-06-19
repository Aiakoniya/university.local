<?php


class Database {
    public $link;

    public function Database($host, $user, $pass, $database){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;
    }

    public function connect(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->database);
        if ($this->link->connect_errno){
            return null;
        } else {
            return $this->link;
        }
    }
}