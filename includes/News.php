<?php
    //simple news model
    class News{

        private $conn, $input;

        public function __construct($conn,$input){
            $this->conn = $conn;
            
            if(is_array($input)){
                $this->input = $input;
            }

            else {
                $query =  $this->conn->prepare("select * from news where id=:id");
                $query->bindValue(":id", $input);
                $query->execute();
                //returns the array indexed by column name
                $this->input =  $query->fetch(PDO::FETCH_ASSOC);
            }
        }

        //getter 
        public function getId(){
            return $this->input["id"];
        }

        public function getNewsTitle(){
            return $this->input["newsTitle"];
        }

        public function getThumbnail(){
            return $this->input["thumbnail"];
        }

        
    }
?>