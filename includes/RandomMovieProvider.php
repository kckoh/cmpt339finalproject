<?php

// Randommovieprovider 
//purpose: returns an array of movies with specific categoryid
//only contains queries
//input: the conn and the categoryid
//output: an array of movies
    class RandomMovieProvider{
        public static function getRandomMovies($conn, $categoryId){
            
            //get all movies sql query and inner join 
            $sql = "select * from movies  ";

            if($categoryId != null){
                $sql .= "where categoryId =:categoryId ";
            }

            //get 5 random movies
            $sql .= "order by rand() limit 5";

            //binding
           $query = $conn->prepare($sql);
           if($categoryId != null){
            $query->bindValue(":categoryId", $categoryId);
        }
        
           $query->execute();
           $result = array();


            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                //adding to the result array
                $result[] = new Movie($conn, $row);
            }

            return $result; 

        }

        //get all the necessary data
        //put those data in the movie model
        // store an array of movie models
        //return the array
        public static function getTop5Movies($conn, $categoryId){
            
            //get all movies sql query and inner join 
            $sql = "select * from movies m inner join rating r on m.id= r.movieId ";

            if($categoryId != null){
                $sql .= "where m.categoryId =:categoryId ";
            }

            //get 5 random movies
            $sql .= "order by r.rating desc limit 5";

            //binding
           $query = $conn->prepare($sql);
           if($categoryId != null){
            $query->bindValue(":categoryId", $categoryId);
        }
        
           $query->execute();
           $result = array();


            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                //adding to the result array
                $result[] = new Movie($conn, $row);
            }

            return $result; 

        }


        //get all the necessary data
        //put those data in the movie model
        // store an array of movie models
        //return the array
        public static function getMovieNews($conn){
            
            //get all news sql query and inner join 
            $sql = "select * from news ";

            //binding
           $query = $conn->prepare($sql);

           $query->execute();
           $result = array();

            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $result[] = new News($conn, $row);
            }


            return $result;

        }


    }
?>

