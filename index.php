<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Piotr Nowak FE Dev</title>
    <link rel="stylesheet" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <script src="js/jquery.min.js"></script>
    <script type="text/JavaScript" src="./js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'> -->


</head>
<body>
  <div class="imgContainer">
    <img src="img/background.png">
    <div class="grid-container">
      <div class="row menu">
        <h6 id="quickContact"><i class="fa fa-envelope orange" aria-hidden="true"></i> contact me</h6>
      </div>

      <div class="row main">
        <div class="col-left">
          <img src="img/title.png" id="title">
        </div>
        <div class="col-center">
          <div class="preview">

            <h2 class="gray">WORK</h2><br>
            <i class="fa fa-3x fa-arrow-circle-left orange" id="prevArrow" aria-hidden="true"></i>
            <i class="fa fa-3x fa-arrow-circle-right orange" id="nextArrow" aria-hidden="true"></i>
            <br>
            <span class="active">
            <img src="img/port1.png" id="prev-1" data-id="1">
            <img src="img/port2.png" id="prev-2" data-id="2">
            <img src="img/port3.png" id="prev-3" data-id="3">
            <img src="img/port4.png" id="prev-4" data-id="4">
          </span>
          <span class="inactive">

            <img src="img/port6.png" id="prev-6" data-id="6">
            <img src="img/port5.png" id="prev-5" data-id="5">

            <img src="img/port8.png" id="prev-8" data-id="8">
            <img src="img/port7.png" id="prev-7" data-id="7">
          </span>
          </div>
        </div>
        <div class="col-right">
          <h2 class="orange">CLOSER</h2>
          <h6> here are some details about me</h6>
          <ul>
            <li><a href="https://github.com/bcpiotr" target="_blank">GitHub account <i class="fa fa-github orange" aria-hidden="true">  </i></a></li>
            <li>PIOTR.NOWAK[-at-]POST[-dot-].COM  <i class="fa fa-envelope orange" aria-hidden="true"></i></li>
            <li>Warsaw, Poland  <i class="fa fa-globe orange" aria-hidden="true"></i></li>
          </ul>
          <img src="img/hello.png" id="hello">
          <img src="img/technology.png" id="technology">
        </div>
      </div>

      <div class="row bottom">

      </div>

    </div>
  </div>

  <div class="contactWindow"><h2 class="orange">CONTACT ME</h2>
    <form method=post action="" id=contact-form>
            <div class=inner-border></div>
            <input type=text name=name id=contact-name placeholder=Name size=20/>
            <span class=error id=name-error></span> <br/>
            <input type=text name=email id=contact-email placeholder=Email size=20 />
            <span class=error id=email-error></span><br>
            <textarea name=message id=contact-message cols=35 rows=3 placeholder="Message..."></textarea><br>
            <input type=submit name=submit value=SEND id=contact-submit class="semi-dark semi-light-text"/><br>
            <span class=success id=message-success></span>
    </form>
    <i class="fa fa-2x fa-times-circle orange" aria-hidden="true" id="close"></i>
  </div>

<div id="workContainer">
  <div class="portfolio" id="work-1"><i class="fa fa-2x fa-times-circle orange" aria-hidden="true"></i>
    <img src="img/port/port1.png"><br><img src="img/tech_set1.png" class="techSet"><a href="http://google.pl" target="_blank"><img src="img/live.png" class="live"></a>
  </div>
  <div class="portfolio" id="work-2"><i class="fa fa-2x fa-times-circle orange" aria-hidden="true"></i>
    <img src="img/port/port2.png"><br><img src="img/tech_set1.png" class="techSet"><a href="http://google.pl" target="_blank"><img src="img/live.png" class="live"></a>
  </div>
  <div class="portfolio" id="work-3"><i class="fa fa-2x fa-times-circle orange" aria-hidden="true"></i>
    <img src="img/port/port3.png"><br><img src="img/tech_set1.png" class="techSet"><a href="http://google.pl" target="_blank"><img src="img/live.png" class="live"></a>
  </div>
  <div class="portfolio" id="work-4"><i class="fa fa-2x fa-times-circle orange" aria-hidden="true"></i>
    <img src="img/port/port4.png"><br><img src="img/tech_set1.png" class="techSet"><a href="http://google.pl" target="_blank"><img src="img/live.png" class="live"></a>
  </div>
  <div class="portfolio" id="work-5"><i class="fa fa-2x fa-times-circle orange" aria-hidden="true"></i>
    <img src="img/port/port5.png"><br><img src="img/tech_set1.png" class="techSet"><a href="http://google.pl" target="_blank"><img src="img/live.png" class="live"></a>
  </div>
  <div class="portfolio" id="work-6"><i class="fa fa-2x fa-times-circle orange" aria-hidden="true"></i>
    <img src="img/port/port6.png"><br><img src="img/tech_set1.png" class="techSet"><a href="http://google.pl" target="_blank"><img src="img/live.png" class="live"></a>
  </div>
  <div class="portfolio" id="work-7"><i class="fa fa-2x fa-times-circle orange" aria-hidden="true"></i>
    <img src="img/port/port7.png"><br><img src="img/tech_set1.png" class="techSet"><a href="http://google.pl" target="_blank"><img src="img/live.png" class="live"></a>
  </div>
  <div class="portfolio" id="work-8"><i class="fa fa-2x fa-times-circle orange" aria-hidden="true"></i>
    <img src="img/port/port8.png"><br><img src="img/tech_set1.png" class="techSet"><a href="http://google.pl" target="_blank"><img src="img/live.png" class="live"></a>
  </div>
<div>

  <a href="#"><img src="img/top.png" id="top"></a>
</body>
<?php
if(isset($_POST['submit'])){
    $to = "piotr.nowak@post.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Kontakt ze strony";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    }
?>

</html>
