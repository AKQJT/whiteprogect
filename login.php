<?php require_once('templates/top.php');
if ($_POST) {                                                              //если пользователь ввел значения ($_POST = TRUE) выполняем
$name = $_POST['name'];       // ?? почему квадратные скобки?              // создаем переменную $name cо значеним введенном в поле Логин
$pass = $_POST['pass'];                                                   // создаем переменную $pass со значением введенном в поле Pass

$query = "SELECT * FROM users WHERE login = '$name' AND pass = '$pass'";    // создаем переменную с командой, но пока не выполняется она   
$cat = mysqli_query ($dbcon, $query);                                       // создаем переменную но не выполняем
 if(!$cat){                                                                 // обращаемся к переменной $cat, выполняем если значение false, в противном случае в $cat будут записаны все строки из массивов $name', '$pass'
	 exit ('ошибка запроса');
	 }
 $user = mysqli_fetch_array($cat);

  if ($user['id']){                                                                     // ЗДЕСЬ не понимаю в каком случае будет TRUE и FALSE
      $_SESSION['id']= $user['id'];                                                     // КАКОЕ ЗНАЧЕНИЕ у ID во время выполнения программы
	      $query = "upadate users SET lastvisit = NOW() WHERE id = ".$_SESSION['id'];   // присваиваем переменной $query другое значение и теперь она будет содержать не ту строку что в начале страницы!!????
   ?> 
 
   <script>                                      //ява скрипт ссылки на выполняемый файл
     location.href="cabinet.php";                
   </script>
 <?php	                                       
    }
  else {                                       // зачем else? разве программа сама по себе не продолжит выполнение после If если условие будет не TRUE
	 echo 'не верный логин или пароль';      
  }
}
?>

<form method="post" action="login.php">                          


 <div class="form-group">
  <label for="name">Login</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="password">
  </div>  
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<?php require_once('templates/bottom.php')
?>

