<?php
include ('header.php');
include ('Connection.php');
$conn = mysqli_connect($dbhost, $username, $password, $dbname);
$sql7 = "SELECT * from Users where pass1='" . $_SESSION["pass"] . "' AND email='" . $_SESSION["email"] . "' AND user_role='" . $_SESSION["user_role"] . "'";
if (mysqli_num_rows(mysqli_query($conn, $sql7)) >= 1)
{
    $user = mysqli_fetch_row(mysqli_query($conn, $sql7));
?>	
<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
   <p class=" text-info">Updated: <?php echo date("M d,Y, h:i a", $user[16]); ?> </p>
</div>
<form action="ProfileEditSave.php?id=<?php echo $user[1] ?>" enctype="multipart/form-data" method="post">
   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
      <div class="panel panel-info">
         <div class="panel-heading">
            <h3 class="panel-title"><?php echo $user[2] . ' ' . $user[4] ?></h3>
         </div>
         <div class="panel-body">
            <div class="row">
               <div class="col-md-3 col-lg-3 " align="center"> 
               </div>
               <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                     <tbody>
                        <tr>
                           <td>First Name</td>
                           <td><input id ="firstname" type="text" name="firstname" value ="<?php echo $user[2]; ?>" size="20" required autocomplete="off"></td>
                        </tr>
                        <tr>
                           <td>Middle Name</td>
                           <td><input id ="middlename" type="text" name="middlename" value ="<?php echo $user[3]; ?>" size="20" required autocomplete="off"></td>
                        </tr>
                        <tr>
                           <td>Last Name</td>
                           <td><input id ="lastname" type="text" name="lastname" value ="<?php echo $user[4]; ?>" size="20" required autocomplete="off"></td>
                        </tr>
                        <tr>
                           <td>Date of Birth</td>
                           <td><input id ="DatOfBirth" style="font-size: 15px" type="date" name="DatOfBirth" value ="<?php echo $user[5]; ?>"required></td>
                        </tr>
                        <tr>
                           <td>Gender</td>
                           <td>
                              <select id= "gender" name="gender" required>
                                 <option value="male">Male</option>
                                 <option value="female">Female</option>
                                 <option value="transgender">Transgender</option>
                              </select>
                           </td>
                        </tr>
                        <tr>
                           <td>Country</td>
                           <td>
						   <select id= "country" name="country" required>
							   <option value="Afghanistan">Afghanistan</option>
								<option value="Albania">Albania</option>
								<option value="Algeria">Algeria</option>
								<option value="American Samoa">American Samoa</option>
								<option value="Andorra">Andorra</option>
								<option value="Angola">Angola</option>
								<option value="Anguilla">Anguilla</option>
								<option value="Antartica">Antarctica</option>
								<option value="Antigua and Barbuda">Antigua and Barbuda</option>
								<option value="Argentina">Argentina</option>
								<option value="Armenia">Armenia</option>
								<option value="Aruba">Aruba</option>
								<option value="Australia">Australia</option>
								<option value="Austria">Austria</option>
								<option value="Azerbaijan">Azerbaijan</option>
								<option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain</option>
								<option value="Bangladesh">Bangladesh</option>
								<option value="Barbados">Barbados</option>
								<option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium</option>
								<option value="Belize">Belize</option>
								<option value="Benin">Benin</option>
								<option value="Bermuda">Bermuda</option>
								<option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
								<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
								<option value="Botswana">Botswana</option>
								<option value="Bouvet Island">Bouvet Island</option>
								<option value="Brazil">Brazil</option>
								<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
								<option value="Brunei Darussalam">Brunei Darussalam</option>
								<option value="Bulgaria">Bulgaria</option>
								<option value="Burkina Faso">Burkina Faso</option>
								<option value="Burundi">Burundi</option>
								<option value="Cambodia">Cambodia</option>
								<option value="Cameroon">Cameroon</option>
								<option value="Canada">Canada</option>
								<option value="Cape Verde">Cape Verde</option>
								<option value="Cayman Islands">Cayman Islands</option>
								<option value="Central African Republic">Central African Republic</option>
								<option value="Chad">Chad</option>
								<option value="Chile">Chile</option>
								<option value="China">China</option>
								<option value="Christmas Island">Christmas Island</option>
								<option value="Cocos Islands">Cocos (Keeling) Islands</option>
								<option value="Colombia">Colombia</option>
								<option value="Comoros">Comoros</option>
								<option value="Congo">Congo</option>
								<option value="Congo">Congo, the Democratic Republic of the</option>
								<option value="Cook Islands">Cook Islands</option>
								<option value="Costa Rica">Costa Rica</option>
								<option value="Cota D'Ivoire">Cote d'Ivoire</option>
								<option value="Croatia">Croatia (Hrvatska)</option>
								<option value="Cuba">Cuba</option>
								<option value="Cyprus">Cyprus</option>
								<option value="Czech Republic">Czech Republic</option>
								<option value="Denmark">Denmark</option>
								<option value="Djibouti">Djibouti</option>
								<option value="Dominica">Dominica</option>
								<option value="Dominican Republic">Dominican Republic</option>
								<option value="East Timor">East Timor</option>
								<option value="Ecuador">Ecuador</option>
								<option value="Egypt">Egypt</option>
								<option value="El Salvador">El Salvador</option>
								<option value="Equatorial Guinea">Equatorial Guinea</option>
								<option value="Eritrea">Eritrea</option>
								<option value="Estonia">Estonia</option>
								<option value="Ethiopia">Ethiopia</option>
								<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
								<option value="Faroe Islands">Faroe Islands</option>
								<option value="Fiji">Fiji</option>
								<option value="Finland">Finland</option>
								<option value="France">France</option>
								<option value="France Metropolitan">France, Metropolitan</option>
								<option value="French Guiana">French Guiana</option>
								<option value="French Polynesia">French Polynesia</option>
								<option value="French Southern Territories">French Southern Territories</option>
								<option value="Gabon">Gabon</option>
								<option value="Gambia">Gambia</option>
								<option value="Georgia">Georgia</option>
								<option value="Germany">Germany</option>
								<option value="Ghana">Ghana</option>
								<option value="Gibraltar">Gibraltar</option>
								<option value="Greece">Greece</option>
								<option value="Greenland">Greenland</option>
								<option value="Grenada">Grenada</option>
								<option value="Guadeloupe">Guadeloupe</option>
								<option value="Guam">Guam</option>
								<option value="Guatemala">Guatemala</option>
								<option value="Guinea">Guinea</option>
								<option value="Guinea-Bissau">Guinea-Bissau</option>
								<option value="Guyana">Guyana</option>
								<option value="Haiti">Haiti</option>
								<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
								<option value="Holy See">Holy See (Vatican City State)</option>
								<option value="Honduras">Honduras</option>
								<option value="Hong Kong">Hong Kong</option>
								<option value="Hungary">Hungary</option>
								<option value="Iceland">Iceland</option>
								<option value="India">India</option>
								<option value="Indonesia">Indonesia</option>
								<option value="Iran">Iran (Islamic Republic of)</option>
								<option value="Iraq">Iraq</option>
								<option value="Ireland">Ireland</option>
								<option value="Israel">Israel</option>
								<option value="Italy">Italy</option>
								<option value="Jamaica">Jamaica</option>
								<option value="Japan">Japan</option>
								<option value="Jordan">Jordan</option>
								<option value="Kazakhstan">Kazakhstan</option>
								<option value="Kenya">Kenya</option>
								<option value="Kiribati">Kiribati</option>
								<option value="Korea">Korea, Republic of</option>
								<option value="Kuwait">Kuwait</option>
								<option value="Kyrgyzstan">Kyrgyzstan</option>
								<option value="Lao">Lao People's Democratic Republic</option>
								<option value="Latvia">Latvia</option>
								<option value="Lebanon" selected>Lebanon</option>
								<option value="Lesotho">Lesotho</option>
								<option value="Liberia">Liberia</option>
								<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
								<option value="Liechtenstein">Liechtenstein</option>
								<option value="Lithuania">Lithuania</option>
								<option value="Luxembourg">Luxembourg</option>
								<option value="Macau">Macau</option>
								<option value="Madagascar">Madagascar</option>
								<option value="Malawi">Malawi</option>
								<option value="Malaysia">Malaysia</option>
								<option value="Maldives">Maldives</option>
								<option value="Mali">Mali</option>
								<option value="Malta">Malta</option>
								<option value="Marshall Islands">Marshall Islands</option>
								<option value="Martinique">Martinique</option>
								<option value="Mauritania">Mauritania</option>
								<option value="Mauritius">Mauritius</option>
								<option value="Mayotte">Mayotte</option>
								<option value="Mexico">Mexico</option>
								<option value="Moldova">Moldova, Republic of</option>
								<option value="Monaco">Monaco</option>
								<option value="Mongolia">Mongolia</option>
								<option value="Montserrat">Montserrat</option>
								<option value="Morocco">Morocco</option>
								<option value="Mozambique">Mozambique</option>
								<option value="Myanmar">Myanmar</option>
								<option value="Namibia">Namibia</option>
								<option value="Nauru">Nauru</option>
								<option value="Nepal">Nepal</option>
								<option value="Netherlands">Netherlands</option>
								<option value="Netherlands Antilles">Netherlands Antilles</option>
								<option value="New Caledonia">New Caledonia</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Nicaragua">Nicaragua</option>
								<option value="Niger">Niger</option>
								<option value="Nigeria">Nigeria</option>
								<option value="Niue">Niue</option>
								<option value="Norfolk Island">Norfolk Island</option>
								<option value="Northern Mariana Islands">Northern Mariana Islands</option>
								<option value="Norway">Norway</option>
								<option value="Oman">Oman</option>
								<option value="Pakistan">Pakistan</option>
								<option value="Palau">Palau</option>
								<option value="Panama">Panama</option>
								<option value="Papua New Guinea">Papua New Guinea</option>
								<option value="Paraguay">Paraguay</option>
								<option value="Peru">Peru</option>
								<option value="Philippines">Philippines</option>
								<option value="Pitcairn">Pitcairn</option>
								<option value="Poland">Poland</option>
								<option value="Portugal">Portugal</option>
								<option value="Puerto Rico">Puerto Rico</option>
								<option value="Qatar">Qatar</option>
								<option value="Reunion">Reunion</option>
								<option value="Romania">Romania</option>
								<option value="Russia">Russian Federation</option>
								<option value="Rwanda">Rwanda</option>										
								<option value="Samoa">Samoa</option>
								<option value="San Marino">San Marino</option>
								<option value="Saudi Arabia">Saudi Arabia</option>
								<option value="Senegal">Senegal</option>
								<option value="Seychelles">Seychelles</option>
								<option value="Sierra">Sierra Leone</option>
								<option value="Singapore">Singapore</option>
								<option value="Slovakia">Slovakia (Slovak Republic)</option>
								<option value="Slovenia">Slovenia</option>
								<option value="Solomon Islands">Solomon Islands</option>
								<option value="Somalia">Somalia</option>
								<option value="South Africa">South Africa</option>
								<option value="Span">Spain</option>
								<option value="SriLanka">Sri Lanka</option>
								<option value="St. Helena">St. Helena</option>
								<option value="Sudan">Sudan</option>
								<option value="Suriname">Suriname</option>
								<option value="Swaziland">Swaziland</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="Syria">Syrian Arab Republic</option>
								<option value="Taiwan">Taiwan, Province of China</option>
								<option value="Tajikistan">Tajikistan</option>
								<option value="Tanzania">Tanzania, United Republic of</option>
								<option value="Thailand">Thailand</option>
								<option value="Togo">Togo</option>
								<option value="Tokelau">Tokelau</option>
								<option value="Tonga">Tonga</option>
								<option value="Trinidad and Tobago">Trinidad and Tobago</option>
								<option value="Tunisia">Tunisia</option>
								<option value="Turkey">Turkey</option>
								<option value="Turkmenistan">Turkmenistan</option>
								<option value="Turks and Caicos">Turks and Caicos Islands</option>
								<option value="Tuvalu">Tuvalu</option>
								<option value="Uganda">Uganda</option>
								<option value="Ukraine">Ukraine</option>
								<option value="United Arab Emirates">United Arab Emirates</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States">United States</option>							
								<option value="Uruguay">Uruguay</option>
								<option value="Uzbekistan">Uzbekistan</option>
								<option value="Vanuatu">Vanuatu</option>
								<option value="Venezuela">Venezuela</option>
								<option value="Vietnam">Viet Nam</option>
								<option value="Western Sahara">Western Sahara</option>
								<option value="Yemen">Yemen</option>
								<option value="Yugoslavia">Yugoslavia</option>
								<option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
							</td>
						</select>   
                        </tr>
                        <tr>
                           <td>City</td>
                           <td><input id ="city" type="text" name="city" value ="<?php echo $user[19]; ?>" size="20" required autocomplete="off"></td>
                        </tr>
                        <tr>
                           <td>Email</td>
                           <td><input id ="email" type="email" name="email" size="30" value ="<?php echo $user[8] ?>" required autocomplete="off"></a></td>
                        </tr>
                        <tr>
                           <td>File upload:</td>
                           <td><input id ="profile-image" type="file" name="profile-image" value="<?php echo $user[23]; ?>"></td>
                        </tr>
						</br>
						<br><br><div id="message"></div><br><br>
                        <tr>
                           <td>Phone Number</td>
                           <td><input id ="landline" type="text" name="landline" value ="<?php echo $user[22] ?>" maxlength="10" size="10" required autocomplete="off"> (Landline)<br><br><input id ="mob_number" type="text" name="mob_number" value ="<?php echo $user[7] ?>" maxlength="10" size="10" required autocomplete="off">    (Mobile)</td>
                        </tr>
                        <tr>
                           <td>height</td>
                           <td><input id ="height" type="text" required name="height" value ="<?php echo $user[13] ?>" maxlength="3" size="3"></td>
                        </tr>
                        <tr>
                           <td>weight</td>
                           <td><input id ="weight" type="text" required name="weight" value ="<?php echo $user[14] ?>" maxlength="3" size="3"></td>
                        </tr>
                        <tr>
						<?php if ($user[11] == 'doctor')
    { ?>
                           <td>Department:</td>
                           <td>
                              <select id= "department" name="department" required>
                                 <option value="cardiac-surgery">Cardiac Surgery</option>
                                 <option value="cardiology">Cardiology</option>
                                 <option value="dermatology">Dermatology</option>
                                 <option value="dietetics">Dietetics</option>
                                 <option value="e-n-t">E.N.T.</option>
                                 <option value="gastroenterology-hepatology">Gastroenterology &amp; Hepatology</option>                                
                                 <option value="internal-medicine">Internal Medicine</option>
                                 <option value="maxillofacial-surgery">Maxillofacial Surgery</option>
                                 <option value="nephrology">Nephrology</option>
                                 <option value="neuro-surgery">Neuro Surgery</option>
                                 <option value="obstetrics-gynaecology">Obstetrics &amp; Gynaecology</option>
                                 <option value="ophthalmology">Ophthalmology</option>
                                 <option value="institute-of-orthopaedics">Orthopaedics</option>
                                 <option value="paediatrics">Paediatrics</option>
                                 <option value="physiotherapy-department">Physiotherapy Department</option>
                                 <option value="psychiatry">Psychiatry</option> 
                                 <option value="urology">Urology</option>
                              </select>
                           </td>						   
						<?php
    } ?>   
                        </tr>
                        <tr>
                           <td>Blood Group:</td>
                           <td>
                              <select id= "blood_group" name="blood_group" required>
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
                           </td>
                        </tr>
                        <tr>
                           <td>Secuirty question:</td>
                           <td>
                              <select id="secuirtyq" name="secuirtyq" required>
                                 <option value="What was your childhood name?">What was your childhood name?</option>
                                 <option value="Which City do you love more?">Which City do you love more?</option>
                                 <option value="Favourite Sport?">Favourite Sport?</option>
                                 <option value="Food you cooked first time?">Food you cooked first time?</option>
                                 <option value="Favourite Past time?">Favourite Past time?</option>
                              </select>
                           </td>
                        </tr>
                        <tr>
                           <td>Answer:</td>
                           <td><input id ="secuirtya" type="text" value="<?php echo $user[18] ?>" required name="secuirtya"></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <button id ="submitButton" input type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>  Update</button>		
         </div>
         <div class="panel-footer">
            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
            <span class="pull-right">
            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>          
            </span>
         </div>
      </div>
   </div>
</form>
<?php
}
//include('footer.php');

?>
<?php
$default_secuirtyq = $user[17];
$default_gender = $user[6];
$default_blood_group = $user[12];
$default_department = $user[22];
$default_country = $user[20];
?>
   
<script type='text/javascript'>
   $(document).ready(function(){
        $("#secuirtyq option:contains(" + '<?php echo $default_secuirtyq ?>' + ")").attr('selected', 'selected');
	    $("#gender option:contains(" + '<?php echo $default_gender ?>' + ")").attr('selected', 'selected');
        $("#blood_group option:contains(" + '<?php echo $default_blood_group ?>' + ")").attr('selected', 'selected');
        $("#department option:contains(" + '<?php echo $default_department ?>' + ")").attr('selected', 'selected');
        $("#country option:contains(" + '<?php echo $default_country ?>' + ")").attr('selected', 'selected');
   });
   
   
</script>
