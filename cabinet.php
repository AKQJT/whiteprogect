<?php
require_once('templates/top.php');    
require_once('libs/functions.php');    
    
	if($_SESSION['id']){                 
	  $query="SELECT * FROM accaunts WHERE user_id = ".$_SESSION['id'];
      $row = selectone($query);
	  ?>
	<a href="#" id="google_search" class="btn btn-block btn-success">поиск изображений</a>
	<div id ="empty1"> </div>
	  <?php
	    if ($_POST) {  
		  $phone = $_POST ['phone'];
		  $address = $_POST ['address'];
          $date_rod = $_POST ['date_rod'];
		     if ($_FILES['picture']['size'] != 0) {
		       $tmp_name=$_FILES['picture']['tmp_name'];                          // echo "<pre>";
			   $name=$_FILES['picture']['name'];                                  // print_r ($_FILES);
			   $dir=$_SERVER['DOCUMENT_ROOT'] ."/media/photos/" ;                 // echo "</pre>";
			     if(!is_dir($dir)){
			     @mkdir($dir,0777);
			     }
			         if(is_uploaded_file($tmp_name)){
				       move_uploaded_file($tmp_name,$dir.$name);
			       } else {
				 echo "ошибка загрузки файла";
			        }
			 
		    }else{
			$name = $row['avatar'];
		    }

            if ($row['id']) {
	             if ($_FILES['picture']['size'] != 0) {
	                 if(file_exists($dir.$row['avatar'])){                 //удаляет файл картинки из папки
			          @unlink($dir.$row['avatar']);
		             }
	             }
	             $query="UPDATE accaunts SET phone='$phone', address='$address', date_rod='$date_rod', update_at=NOW(), avatar='$name' WHERE user_id = ".$_SESSION['id'];
	             insert($query,'cabinet.php');
            } else {
				
		 $query = "INSERT INTO accaunts VALUES(null,
		                                      ".$_SESSION['id'].",
											 '$phone',
											 '$address',
											 '$date_rod',
 											  NOW(),
											  NOW(),
											  '$name')";
			  
		insert($query);
  }
	}  
	
?>

<form method="post" action="cabinet.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="phone">Телефон</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон" value="<?=($row['phone'])?$row['phone']:"";?>">
  </div>
  <div class="form-group">
    <label for="address">Адрес</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="address" value="<?=($row['address'])?$row['address']:"";?>">
  </div>
    <div class="form-group">
    <label for="date_rod">Дата рождения</label>
    <input type="date" class="form-control" id="date" name="date_rod" placeholder="Дата рождения" value="<?=($row['date_rod'])?$row['date_rod']:"";?>">
  </div>
  <div class="form-group">
    <label for="picture">Аватар</label>
    <input type="file" id="picture" name="picture">
    <p class="help-block">Выберите картинку до 1мб.</p>
  </div>
   <button type="submit" class="btn btn-default">Подтвердить данные</button>
</form>

<?php
}else{
		echo "Ошибка входа";
	}
require_once('templates/bottom.php');
?>
<script src = "media/js/passing.js"> </script>
	