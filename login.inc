<form action="index.php?formId=login" method="post">


	<h1>Log In: </h1>
	<div class="textInput">
		<label for="uname"><b>Email</b></label>
		<input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>" required>
		<span class="error"> <?php echo $emailErr;?></span><br><br>

		<label for="psw"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="psw" required>
		<span class="error"> <?php echo $pswErr;?></span><br><br>

		<button type="submit">Login</button><br>
		<span class="psw"><a href="#">Forgot password?</a></span>
		
	</div>
  
  <br><br>
</form>