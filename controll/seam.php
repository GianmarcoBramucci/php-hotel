<?php include __DIR__ ."/db.php";
    $name = "";
    $description = '';
    $parking = false;
    $vote;
    $distanceToCenter;
    $teampleteCard;
    $finalTeamplete;
    foreach($hotels as $hotel) {
        $name = $hotel['name'];
        $description = $hotel['description'];
        $parking = $hotel['parking'];
        $vote = $hotel['vote'];
        $distanceToCenter = $hotel['distance_to_center'];
        if($parking){
            $parking = "<i class='fa-solid fa-check'></i>";
        }else{
            $parking = "<i class='fa-solid fa-xmark'></i>";
        }; 
        $teampleteCard= "
        <div class='col mt-3'>
            <div class='card' style='width: 18rem;'>
                <div class='card-body'>
                    <h5 class='card-title'>$name</h5>
                    <p class='card-text'>$description</p>
                    <div class='card-text'>
                        <span>Parking:$parking</span>
                        <span> Vote:$vote<i class='fa-regular fa-star'></i></span>
                        <div>Distance to center:$distanceToCenter km</i></div>
                    </div>                  
                    <a href='#' class='btn btn-primary'>PRENOTA!</a>
                </div>
            </div>  
        </div>
        ";
        $finalTeamplete = $finalTeamplete . $teampleteCard;
    }
?>
