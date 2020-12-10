<?php
    class Account{

        private $conn;
        private $errArray = array();

        public function __construct($conn){
            $this->conn = $conn;
        }

        public function register($firstName, $lastName, $username, $password1, $password2  ){
            $this->testFirstName($firstName);
            $this->testLastName($lastName);
            $this->testUsername($username);
            $this->testPassword($password1, $password2);

            if(empty($this->errArray)){
                return $this->insertAccountToDatabase($firstName, $lastName, $username, $password1);
            }
            else {
                return false;
            }

        }

        public function login($username, $password1 ){

            
            $query = $this->conn->prepare("select * from Account where username=:username and password=:password");
          
            $query->bindValue(":username",$username);
            $query->bindValue(":password",$password1); 
            
            //debugging purpose
            //var_dump( $query->errorInfo());
            $query->execute();
            //  debugging purpose
            var_dump( $query->errorInfo());
            if($query->rowCount() >= 1){
                return true;
            }
            else{
                array_push($this->errArray, Constants::$accountDoNotExist);
                return false;
            }
          
            

        }




        public function insertAccountToDatabase($firstName, $lastName, $username, $password){
            $query = $this->conn->prepare("insert into Account (firstName, lastName, username, password) 
                                            values  (:firstName, :lastName, :username, :password) ");

                                            
            $query->bindValue(":firstName",$firstName);
            $query->bindValue(":lastName",$lastName);                
            $query->bindValue(":username",$username);
            $query->bindValue(":password",$password); 
            
            //debugging purpose
            //var_dump( $query->errorInfo());
            return $query->execute();

            
        }

        public function testFirstName($firstName){
            
            if(strlen($firstName) <2 || strlen($firstName) > 40){
                array_push($this->errArray, Constants::$firstNameErrors);
            }
        }

        public function testLastName($lastName){
            
            if(strlen($lastName) <2 || strlen($lastName) > 40){
                array_push($this->errArray, Constants::$lastNameErrors);
            }
        }

        public function testUsername($username){
            
            if(strlen($username) <2 || strlen($username) > 40){
                array_push($this->errArray, Constants::$usernameErrors);
                return;
            }

            $query = $this->conn->prepare("select * from Account where username=:username");
            $query->bindValue(":username",$username);
            $query->execute();

            if($query->rowCount() != 0){
                array_push($this->errArray, Constants::$usernameAlreadyExist);
            }
        }

        public function testPassword($password1,$password2){
            if($password1 != $password2 ){
                array_push($this->errArray, Constants::$passwordNotMatched);
                
            }
            
            if(strlen($password1) <2 || strlen($password1) > 30){
                array_push($this->errArray, Constants::$passwordErrors);
                return;
            }

            $query = $this->conn->prepare("select * from Account where password=:password");
            $query->bindValue(":password",$password1);
            $query->execute();

            if($query->rowCount() != 0){
                array_push($this->errArray, Constants::$usernameAlreadyExist);
            }
        }

        public function checkError($error){
            
            if(in_array($error, $this->errArray)) {
                return $error;
            }
        }
        
    }
?>