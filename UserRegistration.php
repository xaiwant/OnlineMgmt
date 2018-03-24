<?php
include('header.php');
?>
   <form action="SuccessfulRegistration.php" method="post"> 
      <div class="user-register-center">
         <fieldset>
            <legend><span class="glyphicon glyphicon-user"></span>Personal Information:</legend>
            <input id ="firstname" type="text" name="firstname" placeholder="First name" size="20" required autocomplete="off">
			<br>
            <input id ="middlename" type="text" name="middlename" placeholder="Middle name" size="20" required autocomplete="off">
			<br>
			<input id ="lastname" type="text" name="lastname" placeholder="Last name" size="20" required autocomplete="off">
			<br><br>
			<input id ="DatOfBirth" style="font-size: 15px" type="date" name="DatOfBirth" required>
            <br><br>
			<label>Gender:</label><br>
            <select name="blood_group">
               <option value="none">None</option>
               <option value="male">Male</option>
               <option value="female">Female</option>
               <option value="transgender">Transgender</option>
            </select>
			<br><br>
            <input id ="mob_number" type="text" name="mob_number" placeholder="7022358501" maxlength="10" size="10" required autocomplete="off">   
            <input id ="email" type="email" name="email" placeholder="jaywanttopno@yahoo.com" size="30" required autocomplete="off">
            <br><br>
            <input id ="pass1" type="password" required name="pass1" placeholder="password">	
            <input id ="pass2" type="password" required name="pass2" placeholder="Retype password">	
            <br><br><div id="message"></div><br><br>			
         </fieldset>
         <fieldset>
            <legend><span class="glyphicon glyphicon-paste"></span>Physical Information:</legend>
            <input id ="height" type="text" required name="height" maxlength="3" size="3"placeholder="height">
            <input id ="weight" type="text" required name="weight" maxlength="3" size="3" placeholder="weight">
			<br><br>
			<label>Blood Group:</label>
            <select name="blood_group">
               <option value="none">None</option>
               <option value="A">A</option>
			   <option value="A+">A+</option>
			   <option value="A-">A-</option>
               <option value="B">B</option>
			   <option value="B-">B-</option>
               <option value="AB">AB</option>
			   <option value="AB+">AB+</option>
			   <option value="AB-">AB-</option>
               <option value="O">O</option>
			   <option value="O+">O+</option>			   
			   <option value="O-">O-</option>
            </select>
			<br><br>
         </fieldset>	 
		 <button id ="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span>  Register</button>
<?php 
include('footer.php');
?>