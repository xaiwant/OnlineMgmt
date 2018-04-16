<?php
include ('header.php');
if (empty($_SESSION))
{
?>
    <form action="SuccessfulRegistration.php" method="post">
        <div class="row">
            <div id="registrationform_id">
                <div id="registrationform_name">Sign Up</div>
                <fieldset>
                    <legend><span class="glyphicon glyphicon-user"></span> Personal Information:</legend>

                    <div class="col-xs-6 form-group">
                        <label>First name *</label>
                        <input id="firstname" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Middle name *</label>
                        <input id="middlename" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Last name *</label>
                        <input id="lastname" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Email *</label>
                        <input id="email" class="form-control" type="email" required autocomplete="off" />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Mobile *</label>
                        <input id="mob_number" class="form-control" type="text" required autocomplete="off" />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Password *</label>
                        <input id="pass1" class="form-control" type="password" required autocomplete="off" />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Confirm password *</label>
                        <input id="pass2" class="form-control" type="password" required autocomplete="off" />
                    </div>
                    <div class="col-xs-12 form-group">
                        <mark>
                            <br>
                            <div id="message"></div>
                            <br>
                        </mark>
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>DOB *</label>
                        <input id="DatOfBirth" class="form-control" type="date" required />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Gender *</label>
                        <select class="form-control" id="gender" required>
                            <option value="">- None -</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="transgender">Transgender</option>
                        </select>
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Who are You? *</label>
                        <select class="form-control" id="who-are-you" required>
                            <option value="">- None -</option>
                            <option value="patient">Patient</option>
                            <option value="doctor">Doctor</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <legend><span class="glyphicon glyphicon-paste"></span> Physical Information:</legend>

                    <div class="col-xs-6 form-group">
                        <label>height *</label>
                        <input id="height" class="form-control" type="text" required />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>weight *</label>
                        <input id="weight" class="form-control" type="text" required />
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Blood Group: *</label>
                        <select class="form-control" id="blood_group" required>
                            <option value="">- None -</option>
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
                    </div>
                </fieldset>

                <fieldset>
                    <legend><span class="glyphicon glyphicon-lock"></span> Secuirty question:</legend>
                    <div class="col-xs-6 form-group">
                        <label>Question *</label>
                        <select class="form-control" id="secuirtyq" required>
                            <option value="">- None -</option>
                            <option value="What was your childhood name?">What was your childhood name?</option>
                            <option value="Which City do you love more?">Which City do you love more?</option>
                            <option value="Favourite Sport?">Favourite Sport?</option>
                            <option value="Food you cooked first time?">Food you cooked first time?</option>
                            <option value="Favourite Past time?">Favourite Past time?</option>
                        </select>
                    </div>
                    <div class="col-xs-6 form-group">
                        <label>Answer *</label>
                        <input id="secuirtya" class="form-control" type="text" required autocomplete="off" />
                    </div>
                </fieldset>
                <div style="text-align: center;">
                    <input id="submitButton" type="submit" class="btn btn-info glyphicon glyphicon-log-in" value="Register">
                </div>

            </div>
        </div>
    </form>
    <?php
}
else
{
    header('Refresh: 1; URL=UserLogin.php');
}
//include('footer.php');

?>
