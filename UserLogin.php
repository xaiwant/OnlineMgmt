<?php
  include('header.php');
if (empty($_SESSION)) {
?>
   <form action="SuccessfulLogin.php" method="post"> 
      <div class="user-login-center">
         <fieldset>
            <legend><span class="glyphicon glyphicon-lock"></span>User LogIn</legend>
            <label> E-mail:</label><br>   
            <input type="email" name="email" placeholder="jaywanttopno@yahoo.com" size="50" required autocomplete="off">
            <br><br>
            <label> Password:</label><br>
            <input type="password" name="pass1"  size="50" required autocomplete="off">	
            <br><br>			
         </fieldset>
		 <br>
		 <div class="forgot-pass">
		 <a href="ForgotPassword.php">Forgot your password?</a>
		 </div>
		 <br><br>
		 <button input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> LogIn</button>
      </div>        
	 </form> 
<?php
} else {
	echo 'You are on Home Page';
}
	  include('footer.php');
?>

