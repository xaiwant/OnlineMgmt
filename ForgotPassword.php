<?php
  include('header.php');
if (empty($_SESSION)) {
?>
   <form action="SuccessfulPasswordChange.php" method="post"> 
      <div class="user-login-center password-change-req">
         <fieldset>
            <legend><span class="glyphicon glyphicon-briefcase"></span> Password Change</legend>
            <label> E-mail:</label><br>   
            <input type="email" name="email" placeholder="jaywanttopno@yahoo.com" size="50" required autocomplete="off">
            <br><br>
			<label>Secuirty Question:</label><br>
            <select name="secuirtyq" required>
               <option value=""></option>
               <option value="What was your childhood name?">What was your childhood name?</option>
			   <option value="Which City do you love more?">Which City do you love more?</option>
			   <option value="Favourite Sport?">Favourite Sport?</option>
               <option value="Food you cooked first time?">Food you cooked first time?</option>
			   <option value="Favourite Past time?">Favourite Past time?</option>
            </select>
			<br><br>
			<input id ="secuirtya" type="text" size="50" required name="secuirtya" placeholder="cricket">
			<br><br>			
            <label> New Password:</label><br>
            <input  id ="pass1" type="password" name="pass1"  size="50" required autocomplete="off">	
            <br><br>
            <label> Retype New Password:</label><br>
            <input  id ="pass2"  type="password" name="pass2"  size="50" required autocomplete="off">	
            <br><br><div id="message"></div><br>			
         </fieldset>
		 <br>
		 <button input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Password Change</button>
      </div>        
	 </form> 
<?php
} else {
	echo 'You are on Home Page';
}
	  include('footer.php');
?>





