<?php require_once ("config/config.php"); ?>

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