<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    //properties are just variables that belong to a class
    // access modifiers: public, private, protected
    //public - can be acess from averywhere
    //private - can only be accessed from inside from the class
    //protected - can only be accessed from inside the class and by inheriting classs
  public $name;
  public $email;
  public $password;  
  public $title;

  //the constractor is called whenever an object is created from the class
  //we pass in properties to the constructor from the outside
  public function __construct($name, $email, $password)
  {
    $this -> name = $name;
    $this -> email = $email;
    $this -> password = $password;
  }
  

  //methods are functions that belog to a class
  function set_name($name){
    $this -> name = $name;
  }

  function get_name() {
    return $this -> name;
  }
}

//Instantiate a new user
$user1 = new User('Ryan', 'ryan@gmail.com', '12345');
$user2 = new User('Benjie', 'benhie@gmail.com', 'qwerty');

// echo $user1 -> email;
// echo $user2 -> name;

// $user1 = new User();
// $user2 = new User();

//Putting values to users
// $user1 -> set_name('Neil');
// $user2 -> set_name('kiboy');

// var_dump($user1);
// echo $user1 -> get_name();
// echo $user2 -> get_name();

//inheritance
class Employee extends User{
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this -> title = $title;
    }

    public function get_title() {
        return $this -> title;
    }
}

$employee1 = new Employee('Catrice', 'catrice@gmail.com', '12345', 'Manager');
echo $employee1 -> get_title();