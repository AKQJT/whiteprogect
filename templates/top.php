<?php 
session_start();
require_once ("config/config.php");
 if($_SESSION['id']){
	 $query="SELECT * FROM users WHERE id = ".$_SESSION['id'];
	 $auth = mysqli_query($dbcon, $query);
     $auth_user = mysqli_fetch_array($auth);	 
 }
 ?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> whitesite </title>
<meta name = "description" content = "1-2-3 предложения о сайте">                   <!Эта чать предназначена для роботов и подключения модулей и файлов>
<meta name = "keywords"    content = "ключевые,слова,выражения через запятую">
<link href = "media/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link type = "text/css"	  rel="stylesheet"  href="media/css/style.css" />
</head>

<body>
 <header class = "shapka">

<h1>Портал   о </br>Криптовалютах</h1>
<img 
  src ="media/img/logo.png"
  srcset ="media/img/logomini.png 350w, media/img/logo.png 650w" 
  sizes ="(max-width: 980px) 300px, (min-width: 980px) 600px"
  alt="icrypto">

<?php
  if ($_SESSION['id']){
?>
	 <a href = "/cabinet.php" class = 'btn btn-link my'> кабинет <?=($auth_user['login'])?$auth_user['login']:'пользователь';?> </a>
	 <a href = "/logout.php" class = 'btn btn-link my'> выход </a>
	 
<?php
  }
  else {
?>
 <a href = "/reg.php" class = 'btn btn-link my'>
 регистрация
 </a>
  <a href = "/login.php" class = 'btn btn-link my'>
 авторизация
 </a>
 <?php
  }
?> 
</header>

<nav class="topmenu">
<a href="/" > главная </a>
<a href="#" > новости </a>
<a href="#" > информация </a>
<a href="#" > курсы </a>
<a href="index.php?url=contakty" > контакты </a>
</nav>

<div id="cont">

<div class ="col-md-3 leftmenu">
<?php                                                                                                          // еще разобраться нужно, создал меню
$obj_menu=mysqli_query($dbcon, "SELECT * FROM maintexts WHERE leftmenu = '1'");                               

while($menu = mysqli_fetch_array($obj_menu))
{
	echo "<a href='index.php?url=".$menu['url']."' class='btn btn-block btn-".$menu['color']."'>";
	echo $menu ['name'];
	echo "</a>";
    
}
?>
</div>

<div class ="col-md-6">
<section>