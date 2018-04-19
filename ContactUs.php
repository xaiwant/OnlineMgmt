<?php
include('connection.php');
include ('header.php');
?>
<div class="col-md-8">
     <div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=NH18%2C%20Jamshedpur%2C%20Jharkhand%20831012%2C%20India+(The%20Hospital%20by%20Aaditya)&ie=UTF8&t=&z=14&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">Create Google Map</a> by <a href="https://www.mapsdirections.info/en/">Measure area on map</a></iframe></div><br />
</div>
<div class="col-md-4">

    <form id="contactus" action="" method="post">
               <fieldset>
				<legend><span class="glyphicon glyphicon-user"></span> Have a Query !</legend>
				    <div class="col-md-12 col-xs-12 form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <input name="cname" id="cname" class="form-control" type="text" placeholder="Aaditya sharma" required autocomplete="off" />
                    </div>
                    <div class="col-md-12 col-xs-12 form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span>
                        <select name="cqueryt" class="form-control" id="cqueryt" required>
                            <option value="">-- NONE --</option>
                            <option value="hr">Human resource</option>
                            <option value="it">Information Technology</option>
                            <option value="sm">Sales & Marketing</option>
                            <option value="mgmt">Management</option>
                            <option value="eq">Other enquiry</option>
                        </select>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea id="cqueryq" class="form-control" type="textarea" name="cqueryq" rows="4" cols="50" placeholder="your query goes here." required> </textarea>
                    </div>
                    <div class="col-md-12 col-xs-12 form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone-alt"></i></span>							
                        <input name="cmob_number" id="cmob_number" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-md-12 col-xs-12 form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>							
                        <input name="cemail" id="cemail" class="form-control" type="email" required autocomplete="off" />
                    </div>
                    <blockquote>Our Representative will keep in touch with you in 3 Working Days. </blockquote>					
					<mark>Your information is secured with us. we never share these information to external, for their Bussiness Profit. </mark>
					
					</fieldset>
                <br>
                <div style="text-align: center;">
                    <button id="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Submit</button>
                </div>
        </div>
    </form>

</div>
<?php
/**
 * Validating email & mobile number exist in User table
 */
if (isset($_POST["cname"]) && isset($_POST["cqueryt"]) && isset($_POST["cqueryq"]) && isset($_POST["cmob_number"]) && isset($_POST["cemail"]))
	
  {    ?>
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Your query submitted successfully.
  </div>
  
  
 <?php 
	        $query      = "INSERT INTO query (cname, cqueryt, cqueryq, cemail, cmob_number, creqtime)
						     VALUES ('" . $_POST["cname"] . "','" . $_POST["cqueryt"] . "','" . $_POST["cqueryq"] . "','" . $_POST["cemail"] . "','" . $_POST["cmob_number"] . "','" . time() . "')";
        
            mysqli_query($conn, $query);
}

include ('footer.php');
?>
