<?php
    //get results from searchEntities and return the html with style
    class SearchResultsProvider{

        private $conn, $username;

        public function __construct($conn,$username){
            $this->conn = $conn;
            $this->usernmae = $username;
        }


        public function getResults($inputText){
            $movies = MovieProvider::getSearchEntities($this->conn, $inputText);
            $html = "<div class='previewCategories noScroll'> ";
            $html .= $this->getResultsHtml($movies);
            return $html . "</div>";
        }


        
        private function getResultsHtml($movies){
            
            if(sizeof($movies) == 0 ){
                return;
            }
            
            
            $movieHtml = "";
            $movieProvider = new Preview($this->conn, $this->username);
            foreach($movies as $movie){
                $movieHtml .= $movieProvider->createMoviePreviewList($movie);
            }

            return "<div class='category'>
                        <div class='entities'>
                            $movieHtml 
                        </div>
                    </div>";
        }
    }
?>