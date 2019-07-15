<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <?php echo "<p style=\"color:blue; font-size:20px;;\">".$error."</p>" ?>
  	<?php endforeach ?>
  </div>
<?php  endif ?>