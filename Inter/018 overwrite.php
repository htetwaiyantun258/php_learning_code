<?php


class quality{
   public $video = "youtube";

   public function qualityChange($video){
       switch ($video) {
           case 'youtube':
               echo "Youtube Video quality is 1444k";
               break;
           
           default:
                echo "Facebook video quality is 140k";
               break;
       }
   }

}

class fbVideoQuality extends quality{
    public function qualityChange($video){
        switch ($video) {
            case 'facebook':
                echo "Facebook Video quality is 1444k";
                break;
            
            default:
                 echo "youtube video quality is 144";
                break;
        }
    }
 
}

$fbquality = new fbVideoQuality();
$fbquality->qualityChange("facebook");