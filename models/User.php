<?php 
//Classe Concrete lorsqu'elle est instanciable 
//Classe Abstraire lorsqu'elle n'est pas instanciable 
//Classe final => sterile lorsqu'elle 
  //ne participe pas dans hierarchie heritage
abstract class User{
    //Atributs Instances
      protected int $id;
      protected string $login;
      protected string $password;
      protected string $role;
      
     //Methodes
     //Constructeur par defaut
     public function __construct()
     {
         
     } 
     //Getters

      /**
       * Get the value of id
       */ 
      public function getId()
      {
            return $this->id;
      }

      /**
       * Get the value of login
       */ 
      public function getLogin()
      {
            return $this->login;
      }

      /**
       * Get the value of password
       */ 
      public function getPassword()
      {
            return $this->password;
      }

      /**
       * Get the value of role
       */ 
      public function getRole()
      {
            return $this->role;
      }

      

      /**
       * Set the value of id
       *
       * @return  self
       */ 
      public function setId($id)
      {
            $this->id = $id;

            return $this;
      }

      /**
       * Set the value of login
       *
       * @return  self
       */ 
      public function setLogin($login)
      {
            $this->login = $login;

            return $this;
      }

      /**
       * Set the value of password
       *
       * @return  self
       */ 
      public function setPassword($password)
      {
            $this->password = $password;

            return $this;
      }

      /**
       * Set the value of role
       *
       * @return  self
       */ 
      public  function setRole($role)
      {
            $this->role = $role;

            return $this;
      }
}