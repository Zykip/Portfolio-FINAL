<?php

    class User {
        public $name;
        public $lastname;
        public $job;
        public $mail;
        public $phone;
        public $address;

        public function __construct($name, $lastname, $job, $mail, $phone, $address) {
            $this->name = $name;
            $this->lastname = $lastname;
            $this->job = $job;
            $this->mail = $mail;
            $this->phone = $phone;
            $this->address = $address;
        }
    }