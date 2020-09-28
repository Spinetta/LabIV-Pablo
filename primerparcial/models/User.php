<?php 

namespace models;

class User {

    private $name;
    private $user;
    private $pass;

    function __construct($a = '', $b = '', $c = '') {
        $this->name = $a;
        $this->user = $b;
        $this->pass = $c;
    }

    public function getName() {
        return $this->name;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setName($value) {
        $this->name = $value;
    }

    public function setUser($value) {
        $this->user = $value;
    }

    public function setPass($value) {
        $this->pass = $value;
    }

}

?>