<?php
require_once('templates/top.php');    
require_once('libs/functions.php');    
    
	if($_SESSION['id']){                 // не понятно в каких случаях true
	   if ($_POST) {  
	   
		 $phone = $_POST ['phone'];
		 $adress = $_POST ['adress'];
         $date_rod = $_POST ['date_rod'];
		 if ($_FILES) {
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
					
					
			 //php_info();                                 
		}
		 $query = "INSERT INTO accaunts VALUES(null,
		                                      ".$_SESSION['id'].",
											 '$phone',
											 '$adress',
											 '$date_rod',
 											  NOW(),
											  NOW(),
											  '$name')";
			  
		insert($query,'cabinet.php');
	  
	    }   
    }
	
?>

<form method="post" action="cabinet.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="phone">Телефон</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон" >
  </div>
  <div class="form-group">
    <label for="adress">Адрес</label>
    <input type="text" class="form-control" id="adress" name="adress" placeholder="Adress">
  </div>
    <div class="form-group">
    <label for="date_rod">Дата рождения</label>
    <input type="date" class="form-control" id="date" name="date_rod" placeholder="Дата рождения">
  </div>
  <div class="form-group">
    <label for="picture">Аватар</label>
    <input type="file" id="picture" name="picture">
    <p class="help-block">Выберите картинку до 1мб.</p>
  </div>
   <button type="submit" class="btn btn-default">Подтвердить данные</button>
</form>

<?php
require_once('templates/bottom.php');
?>
	