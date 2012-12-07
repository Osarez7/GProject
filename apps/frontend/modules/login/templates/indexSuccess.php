<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

 <?php if ($sf_user->hasFlash('error')): ?>
                    <div class="flash_error"><?php echo $sf_user->getFlash('error') ?></div>
                <?php endif; ?>



 <form action="<?php echo url_for('login/index')?>" method="post">

          <?php echo $form['user']->renderLabel()  ?>:
          <?php echo $form['user']->renderError()  ?>
          <?php echo $form['user'] ?>


            <?php echo $form['password']->renderLabel()  ?>:
           <p><a href="#">¿Olvidó su  contraseña?</a>
          <?php echo $form['password']->renderError()  ?>
            
          <?php echo $form['password'] ?>
        

          

 <!-- 
		
		<label for="name">Username:</label>
		
		<input type="name">
		
		<label for="username">Password:</label>
		
		<p><a href="#">Forgot your password?</a>
		
		<input type="password">
		 -->
		
                 <div id="lower">
		  <input type="checkbox"><label class="check" for="checkbox">Recordame</label>
		  <input class="button" type="submit" value="Ingresar" name="login">
		</div>
		

 </form>


