<?php
ob_start();
//session_start();
//session_unset();
?>
<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<title>Staff Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="fonts/font.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/style.css">
<?php
session_start();
//$adminhash=md5(uniqid(rand(5), true));
//$_SESSION['hashco']=$adminhash;
if($_SESSION['useridsA'])
{
  header('Location:desk.php');
}
?>
	<style type="text/css">

   #hideMe {
    -moz-animation: cssAnimation 0s ease-in 5s forwards;
    /* Firefox */
    -webkit-animation: cssAnimation 0s ease-in 5s forwards;
    /* Safari and Chrome */
    -o-animation: cssAnimation 0s ease-in 5s forwards;
    /* Opera */
    animation: cssAnimation 0s ease-in 5s forwards;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
}
@keyframes cssAnimation {
    to {
        width:0;
        height:0;
        overflow:hidden;
    }
}
@-webkit-keyframes cssAnimation {
    to {
        width:0;
        height:0;
        visibility:hidden;
    }
}
  </style>
</head>
<body>
       <div class="wrapper">

        <div class="sct login">

            <form name="loginfrm" action="sub-signin.php" method="post">
                <h6>Staff Login</h6>
                <?php 
          {
          ?>
         
          <?php
        }
          ?>
                <input type="email" name="email" placeholder="Username" required="required">
                <input type="password" name="password" placeholder="Password" required="required">
                <input type="hidden" name="tocken" value="<?php echo $adminhash;?>">
                <div class="forgot-remember">
                        <label class="control control-checkbox">
                                Remember me
                                    <input type="checkbox" />
                                <div class="control_indicator"></div>
                            </label>
                    <div class="forgot">
                            <a href="#">Forgot Password?</a>
                    </div>
                </div>
                <input type="submit" name="send" value="Login">
               
            </form>

        </div> <!--end login-->
         <div class="sct brand">
             <div class="row">
                
                 <div class="col-12">
                     <div class="text-logo">
                         <img src="../img/sinro.png">
                     </div>
                 </div>
              
                 
             </div>
         </div>
    </div> <!--end wrapper-->













  <script  src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script  type="text/javascript" src="js/slick.min.js"></script>
	<script src="https://use.fontawesome.com/e201e7ab0c.js"></script>
    <script type="text/javascript">

        var btn = $('#button');

            $(window).scroll(function() {
              if ($(window).scrollTop() > 300) {
                btn.addClass('show');
              } else {
                btn.removeClass('show');
              }
            });

            btn.on('click', function(e) {
              e.preventDefault();
              $('html, body').animate({scrollTop:0}, '300');
            });
    </script>

 <script >
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

<script >
  $( document ).ready(function() {
var ctrlVideo = document.getElementById("video");

$('button').click(function(){
  if ($('button').hasClass("active")){

        ctrlVideo.play();

    $('button').html("Pause");
    $('button').toggleClass("active");
  } else {

        ctrlVideo.pause();

    $('button').html("play");
    $('button').toggleClass("active");
  }
});

});
</script>



</body>
</html>
