<?php
include ('header.php');
if (empty($_SESSION))
{
?>
    <form id="login" action="" method="post">
        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div id="registrationform_name"></div>
                <fieldset>
				<legend><span class="glyphicon glyphicon-user"></span> Sign Up:</legend>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="email" class="form-control" placeholder="jay@yahoo.com"name="email" size="50" required autocomplete="off">
                    </div>					
                    <div class="form-group input-group">
					    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" name="pass1" size="50" required autocomplete="off">
                    </div>
                    <div class="col-xs-12 form-group">
                        <label> Role:</label>
                        <br>
                        <input type="radio" name="user_role" value="Patient"> Patient
                        <br>
                        <input type="radio" name="user_role" value="doctor"> Doctor
                        <br>
                    </div>
                </fieldset>
                <br>
                <div class="forgot-pass">
                    <mark><a href="ForgotPassword.php">Forgot your password?</a></mark>
                </div>
                <br>
                <br>
                <div style="text-align: center;">
                    <button id="submitButton" input type="submit" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> LogIn</button>
                </div>

            </div>
        </div>
    </form>
    <?php
}
else
{
    //echo "Hi,<b><i> ".$_SESSION['email']."</b></i>";
    //echo '<br><br>';
    //echo 'Welcome,You are on Home Page';
    
?>

        <?php
}

?>

            <?php

if (isset($_POST["pass1"]) && isset($_POST["email"]) && isset($_POST["user_role"]))
{

    $sql4 = "SELECT email from Users where pass1='" . strip_tags(md5($_POST["pass1"])) . "' AND email='" . strip_tags($_POST["email"]) . "' AND user_role='" . $_POST["user_role"] . "'";
    if (mysqli_num_rows(mysqli_query($conn, $sql4)) >= 1)
    {

        $_SESSION['email'] = strip_tags($_POST["email"]);
        $_SESSION['pass'] = strip_tags(md5($_POST["pass1"]));
        $_SESSION['user_role'] = $_POST["user_role"];
        $_SESSION['time'] = time();

        $sql6 = "SELECT * from Session where email='" . $_SESSION['email'] . "' AND pass1='" . md5($_POST["pass1"]) . "'";
        if (mysqli_num_rows(mysqli_query($conn, $sql6)) == 0)
        {

            /*insert into session table*/
            $query = "INSERT INTO Session (email, pass1, browser_detail, client_ip, logintime)VALUES ('" . strip_tags($_POST["email"]) . "','" . strip_tags(md5($_POST["pass1"])) . "','" . $_SERVER['HTTP_USER_AGENT'] . "','" . $_SERVER['REMOTE_ADDR'] . "','" . $_SESSION['time'] . "')";
            mysqli_query($conn, $query);
        }
        else
        {

            $sql7 = "UPDATE Session SET logintime='" . time() . "' ,
                               			browser_detail='" . $_SERVER['HTTP_USER_AGENT'] . "',
										client_ip='" . $_SERVER['REMOTE_ADDR'] . "' 
										WHERE email='" . $_SESSION['email'] . "' AND 
										pass1='" . $_SESSION['pass'] . "'";

            mysqli_query($conn, $sql7);
        }
?>

                <?php header("Location: SuccessfulLogin.php");
    }
    else
    {
?>
                    <div class="alert alert-warning alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> Invalid login credential. Incase you didn't remember use forgot Password !
                    </div>
                    <?php
    }
}
else
{

}
include ('footer.php');
?>
