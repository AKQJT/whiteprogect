<?php 
function insert ($query,$redirect='cabinet.php') {
 global $dbcon;
     if(!$query) {
	   $query="";
	 }
  $cat=mysqli_query($dbcon,$query);
     if (!$cat) {
	  exit($query);
    }	
?> 
<script>
document.location.href='<?=$redirect?>';
</script>
<?php	  
}
 
function selectone($query){
	 global $dbcon;
	 $result = mysqli_query($dbcon, $query);
      if (!$result) {           
	   exit ($query);
	}
$row = mysqli_fetch_array($result);
return $row;
 }
 
 
