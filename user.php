<?php
// File: User.php
class User {
    private $firstname;
    private $lastname;
    private $phone;
    private $address;

    public function __construct($fname, $lname, $phone, $addr) {
        $this->firstname = htmlspecialchars($fname);
        $this->lastname = htmlspecialchars($lname);
        $this->phone = htmlspecialchars($phone);
        $this->address = htmlspecialchars($addr);
    }

    public function getGreeting() {
        return "Hi, my name is " . $this->firstname . " " . $this->lastname;
    }

    public function getPhone() {
        return "Phone Number: " . $this->phone;
    }

    public function getAddress() {
        return "Address: " . $this->address;
    }
}
?>