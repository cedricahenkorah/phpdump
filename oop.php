<?php
/* ---- object oriented programming ---- */

/*
from PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consits of classes that can hold 'properties' and 'methods'. Objects can be created from classes.
*/

class User {
    // properties are attributes that belong to a class

    // access modifiers; public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes

    public $name;
    public $email;
    public $password;

    // constructor - a method that runs when an object is created
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // method - function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// instatiate a user object
$user1 = new User('nana', 'nana@mail.com', 'pass123');
$user2 = new User('ced', 'ced@mail.com', 'pass456');

// $user1->set_name('nana');
// $user2->set_name('ced');

// $user1->name = 'nana';

// var_dump($user2);
// echo $user1->name;

// echo $user1->get_name();
// echo $user2->get_name();

echo $user1->email;
echo $user2->name;

// inheritance
class Employee extends User {
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('admin', 'admin@mail.com', '12345', 'Manager');

echo $employee1->get_title();