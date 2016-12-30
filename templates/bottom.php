  
</section>
</div>

<div class ="col-md-3 rightmenu">
  <h3>Правая колонка</h3>
  <p>
  <?php 
  if($account_user['avatar']){ ?>
     <img src ="/media/photos/<?php echo $row['avatar']?>"
      close="img-circle"
<?php 
} 
    else { ?>
     <img src="/media/photos/default.png"  class = 'img-circle' />
<?php }
?>
  </p>
</div>
 </div>
<footer>
 <a href="mailto:white_belko@mail.ru"> &copy white_belko@mail.ru </a>
</footer>


</body>
</html>