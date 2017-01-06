<?php
require_once ("config/config.php");
require_once("libs/functions.php");

$id=(int)$_POST["id"];
$query = "SELECT * FROM accaunts WHERE id =".$id;
$row=selectone($query);
echo "<h2>".$row["phone"]."</h2>";
echo "<h2>".$row["address"]."</h2>";
         if($row['avatar']){
	         $pic1="/media/photos/".$row['avatar'];
         }else{
	         $pic1="/media/photos/default.jpg";
        }
?>
     <img src="<?=$pic1?>" class="pica"/>
	 
