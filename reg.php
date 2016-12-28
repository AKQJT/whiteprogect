<?php require_once('templates/top.php');
      require_once('libs/functions.php');
if ($_POST) {
$email = $_POST ['email'];
$name = $_POST ['name'];
$pass = $_POST ['pass'];
$pass2 = $_POST ['pass2'];
$error = [];                                    // для чего эта переменная?

$query = "SELECT * FROM users WHERE login = '$name'";
   $us = mysqli_query($dbcon, $query);
     if(!$us) {                 
		 exit;
     }
$already = mysqli_fetch_array ($us);
     if($already['id']){
	$error[]='пользователь с таким именем существyет';   //почему именно массив?
}

$query = "SELECT * FROM users WHERE email = '$email'"; 
   $us = mysqli_query($dbcon, $query);
     if(!$us) {
		 exit ('email занят');
     }
$already = mysqli_fetch_array ($us);
     if($already['id']){
	$error[]='пользователь с такой почтой существоет';    
}



  if($pass != $pass2) {
    $error [] = "пароль не совпадает";
  }
  
  if ($error){                    // в каких случаях выполняется, когда true и false


	  foreach($error as $one) {
		  echo "<div class = 'alert alert-danger'>";
          echo $one;
	      echo "</div>";
	  }		 

  }  else {
	  $query = "INSERT INTO users VALUES (
	            null,
	            '$email',
				'$name',
				'$pass',
				NOW(),
				NOW(),
				'unblock'
	          )";
			  
	     insert ($query,'reg.php');
     }
}
?>

<form method="post" action="reg.php">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="email">
  </div>
    <div class="form-group">
  <label for="name">Login</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="pass" placeholder="password">
  </div>  
  <div class="form-group">
    <label for="pass2">Password again</label>
    <input type="password" class="form-control" id="pass2" name="pass2" placeholder="password 2">
  </div>  
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<?php require_once('templates/bottom.php')
?>

