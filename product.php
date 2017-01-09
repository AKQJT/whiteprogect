<?php 
require_once('templates/top.php');
require_once('libs/functions.php');

$query = "SELECT * FROM accaunts ORDER BY id DESC";
$cat = mysqli_query ($dbcon,$query);
     if(!$cat) {
	  exit ($query);
	 }
     while($arr=mysqli_fetch_array($cat)){
         ?>
         <div class ="col-md-6 cd-sm-4">
         <?php
         if($arr['avatar']){
	         $pic="/media/photos/".$arr['avatar'];
         }else{
	         $pic="/media/photos/default.jpg";
        }
     ?>
     <img src="<?=$pic?>" class="pica"/>
     <div class = 'address'>
     <a href ="#" class = "link" data-id="<?=$arr['id']?>">
     <?=$arr['address'];?>
 </a>
 </div>
</div> 
<?php 	 
	 } 

require_once('templates/bottom.php');
