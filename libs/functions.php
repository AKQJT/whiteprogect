<?php 
function insert ($query,$redirect) {
 global $dbcon;
     if(!$query) {
	   $query="";
	 }
  $cat=mysqli_query($dbcon,$query);
     if (!$cat) {
	  exit("ошибка ввода данных");
    }	
?> 
<script>
document location href='<?=$redirect?>';
</script>
<?php	  
}
 
function selectone($query){
	 global $dbcon;
	 $result = mysqli_query($dbcon, $query);
      if (!$result) {           
	   exit ('errors');
	}
$row = mysqli_fetch_array($result);
return $row;
 }