<?php
require_once ("config/config.php");
require_once("libs/functions.php");
require_once("libs/phpQuery.php");
$query="SELECT * FROM accaunts WHERE avatar=''";
echo $$query;
$cat=mysqli_query ($dbcon,$query);
 if(!$cat){
	 exit('ошибка');
	 }
 while($all=mysqli_fetch_array($cat)){
	 sleep(2);
	 $str=@str_replace(array(""),"+",$all['address']);
	 $link="http://www.google.by/search?q=$str&espv=2&rlz=1C1CHMO_ruBY727&biw=1600&bih=799&source=lnms&tbm=isch&sa=X&ved=0ahUKEwi31ZGw27rRAhXkDZoKHXdIBgIQ_AUICCgB";
	 echo $link."<br/>";
	 $hap=file_get_contents($link);
	 $document=PhpQuery::newDocument($hap);
	 $hentry=$document->find(".images_table img.eg(0)");
	 echo $hentry;
	 
	 echo $all["address"];
	 echo "<hr/>";
	 sleep(1);
 };