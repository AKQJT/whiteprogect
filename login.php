<?php require_once('templates/top.php');
if ($_POST) {
$name = $_POST['name'];
$pass = $_POST['pass'];

$query = "SELECT * FROM users WHERE login = '$name' AND pass = '$pass'";
$cat = mysqli_query ($dbcon, $query);
 if(!$cat){
	 exit ('ошибка запроса');
	 }
 $user = mysqli_fetch_array($cat);

  if ($user['id']){
      $_SESSION['id']= $user['id'];
	      $query = "upadate users SET lastvisit = NOW() WHERE id = ".$_SESSION['id'];
   ?> 
 
   <script>
     location.href="cabinet.php";
   </script>
 <?php	
    }
  else {
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

