<?php
  class Account{
    public  $id;
    public  $name;
    public  $document;
    public  $email;
    public  $password;
    

    public function _constructor ($name, $document){
      $this->name = $name;
      $this->document = $document;
    }
  }
?>