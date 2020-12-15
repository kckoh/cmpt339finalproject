<?php
    class Preview{

        private $conn, $username;

        public function __construct($conn,$username){
            $this->conn = $conn;
            $this->username = $username;
        }


        public function createVideo($entity){
            if($entity == null){
                $entity = $this->getRandomEntity();
            }
            $name =  $entity->getName();
            $id =  $entity->getId();
            $preview =  $entity->getPreview();
            $thumbnail =  $entity->getThumbnail();
            return 
            "<div class='previewContainer'>

            <img src='$thumbnail' class='previewImage' hidden>

            <video autoplay muted class='previewVideo'  >
                <source src='$preview' type='video/mp4'>
            </video>

            <div class='previewOverlay'>
                <div class='mainDetails'>
                    <h3>$name</h3>

                    <div class='buttons'>
                    <a href='watch.php?id=$id'><button >Watch Trailer</button></a>
                        
                        <button onclick='muteToggle(this)'>Mute</button>
                    </div>
                </div>

            </div>

        </div>";

        }


        // function that is called when watch button is clicked
        public function playVideo($entity){
            if($entity == null){
                $entity = $this->getRandomEntity();
            }
            $name =  $entity->getName();
            $id =  $entity->getId();
            $preview =  $entity->getPreview();
            $thumbnail =  $entity->getThumbnail();
            return 
            "<div class='previewContainer watchWrapper' >

            <div class='watchNav'>
                <h1> $name </h1>
            </div>

            <video autoplay  class='watchWrapper' controls >
                <source src='$preview' type='video/mp4'>
            </video>
        </div>";

        }



        public function getRandomEntity(){
            $query =  $this->conn->prepare("select * from movies ORDER BY RAND() LIMIT 1");
            $query->execute();
            $row =  $query->fetch(PDO::FETCH_ASSOC);
            return new Movie($this->conn,$row);
        }

        public function createMoviePreviewList($movie){
            //setting the movieid, thumbnail and name
            $id = $movie->getId();
            $thumbnail = $movie->getThumbnail();
            $name = $movie->getName();

            //get the rating number from the rating table
            $query =  $this->conn->prepare("select * from rating where movieId=:id");
            $query->bindValue(":id",$id);
            $query->execute();
            $ratingNumber;
            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                $ratingNumber = $row["rating"];
            }

            
            return "<div>
                        <a href='movie.php?id=$id'>
                            <div class='previewContainer small'>
                                <img src='$thumbnail' title='$name'>
                            </div>
                        </a>
                        <div class='movieTextColor' >$name</div>
                        <div class='ratingTextColor'><i class='fas fa-star'></i>  $ratingNumber </div>
                    </div>";
        }


        public function createMovieNewsList($news){
            //setting the movieid, thumbnail and name
            $id = $news->getId();
            $thumbnail = $news->getThumbnail();
            $newsTitle = $news->getNewsTitle();



            return "<div>
                        <div class='previewContainer small'>
                            <img src='$thumbnail' title='$newsTitle'>
                        </div>
                        <div class='movieTextColor' >$newsTitle</div>
                    </div>";
        }
        
    }
?>

