<?php
require_once("includes/RandomMovieProvider.php");

//this class handles shwoing all categories, topmovies and news
    class Category{

        private $conn, $username;
        public function __construct($conn,$username){
            $this->conn = $conn;
            $this->username = $username;
        }

        //get all categories
        public function showAllCategories(){
           $query = $this->conn->prepare("select * from categories");
           $query->execute();
          
           $categories = "<div class='previewCategories'>";

            while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $categories .= $this->getCategoryHtml($row,null );
            }
            return $categories . "</div>";
        }

        private function getCategoryHtml($sqlData, $title){
            $categoryId = $sqlData["id"];
            $title = $sqlData["name"];
            //get 10 movies
            $movies = RandomMovieProvider::getRandomMovies($this->conn, $categoryId);

            if(sizeof($movies) == 0 ){
                return;
            }


            $movieHtml = "";
            $movieProvider = new Preview($this->conn, $this->username);
            foreach($movies as $movie){
                $movieHtml .= $movieProvider->createMoviePreviewList($movie);
            }

            
            return "<div class='category'>
                        <a href='#'>
                            <h3>$title</h3>
                        </a>
                        <div class='entities'>
                            $movieHtml 
                        </div>
                    </div>";
        }

        public function showTop5Movies(){
            $query = $this->conn->prepare("select * from categories");
            $query->execute();
           
            $categories = "<div class='previewCategories'>";
 
             while($row = $query->fetch(PDO::FETCH_ASSOC)) {
                 $categories .= $this->getTop5Html($row,null );
             }
             return $categories . "</div>";
         }
         
         private function getTop5Html($sqlData, $title){
             $categoryId = $sqlData["id"];
             $title = $sqlData["name"];
             //get 10 movies
             $movies = RandomMovieProvider::getTop5Movies($this->conn, $categoryId);
 
             if(sizeof($movies) == 0 ){
                 return;
             }
 
 
             $movieHtml = "";
             $movieProvider = new Preview($this->conn, $this->username);
             foreach($movies as $movie){
                 $movieHtml .= $movieProvider->createMoviePreviewList($movie);
             }
 
             
             return "<div class='category'>
                         <a href='#'>
                             <h3>$title</h3>
                         </a>
                         <div class='entities'>
                             $movieHtml 
                         </div>
                     </div>";
         }


         public function showAllNews(){
            $query = $this->conn->prepare("select * from news");
            $query->execute();
           
            $news = "<div class='previewCategories'>";
            $newsTitle;
            $thumbnail;
 
             if($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $news .= $this->getNewsHtml($row,null );
             }
 
 
             return $news . "</div>";
         }

         //get an array of news
         //loop through and get each instance of the container 
         //and add one instance of the row to the newshtml
         //return the category class with news element
         private function getNewsHtml($sqlData, $title){
            $newsId = $sqlData["id"];
            $title = $sqlData["newsTitle"];
           
            $news = RandomMovieProvider::getMovieNews($this->conn, $newsId);
 
             if(sizeof($news) == 0 ){
                 return;
             }
             $newsHtml = "";
             $newsProvider = new Preview($this->conn, $this->username);
             foreach($news as $new){
                 $newsHtml .= $newsProvider->createMovieNewsList($new);
             }
 
             return "<div class='category'>
                             <h3 class='ratingTextColor'>Feature Today</h3>
                         <div class='entities'>
                             $newsHtml 
                         </div>
                     </div>";
        }
    }
?>