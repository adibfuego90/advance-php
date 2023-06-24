<?php

/* PHP support oop after PHP5  must be written in class name in uppercase */
// properties are attributes that belong to the class 
/* Access modifiers : public , private , protected 
public : can be access from anywhere ;
private : can only be access from inside the class;
protected : can only access from inside the class and by inheriting classes 
*/

class User {
  public $name;
  public $email;
  public $password;

}

// create user 
$user1= new User();
$user1 ->name="Adib";
$user1 ->email="adiburraman11@gmail.com";
var_dump($user1);

?>