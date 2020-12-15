<?php
    //stores an arrary of movies
    class MovieProvider{

        private $conn, $username;

        public function __construct($conn,$username){
            $this->conn = $conn;
            $this->usernmae = $username;
        }


        public static function getSearchEntities($conn,$term){

            $sql = "select * from movies where name like concat('%', :term, '%') limit 10";
            $query = $conn->prepare($sql);
            $query->bindValue(":term",$term);
            $query->execute();
            $result = array();
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $result[] = new Movie($conn, $row);
            }
            return $result;
        }
        
    }
?>