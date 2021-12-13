<?php

class Account {
    public $id;
    public $name;
    public $ducument;
    public $mail;
    public $password;

    public function __constructor($name, 
            $document) {
        $this->name = $name;
        $this->document = $document;
    }
}