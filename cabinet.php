<?php
require_once('templates/top.php');
 if($_SESSION['id']){
?>

<form method="post" action="cabinet.php">
  <div class="form-group">
    <label for="phone">Телефон</label>
    <input type="text" class="form-control" id="phone" name="phone" placeholder="Телефон">
  </div>
  <div class="form-group">
    <label for="adress">Адрес</label>
    <input type="text" class="form-control" id="adress" name="adress" placeholder="Adress">
  </div>
    <div class="form-group">
    <label for="date">Дата рождения</label>
    <input type="date" class="form-control" id="date" name="date_rod" placeholder="Дата рождения">
  </div>
  <div class="form-group">
    <label for="avatar">Аватар</label>
    <input type="file" id="avatar">
    <p class="help-block">Выберите картинку до 1мб.</p>
  </div>
   <button type="submit" class="btn btn-default">Подтвердить данные</button>
</form>

<?php
 }
 else {
	 echo "ошибка входа";
 } 
 
require_once('templates/bottom.php');
?>
