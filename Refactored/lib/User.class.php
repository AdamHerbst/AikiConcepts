<?php

class User {

    private $username = null;
    private $password = null;
    private $email = null;
    private $title = null;
    private $desc = null;
    private $happens = null;

    //Constructor:
    public function __construct($username) {
        $this->name = $username;
        
    }

    public function setUsername($username) {
        $this->name = $username;
    }
    public function getUsername() {
        return $this->name;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    public function getTitle() {
        return $this->title;
    }

    public function setDesc($desc) {
        $this->desc = $desc;
    }
    public function getDesc() {
        return $this->desc;
    }

    public function setHappens($happens) {
        $this->happens = $happens;
    }
    public function getHappens() {
        return $this->happens;
    }


}

?>