
<!-- <section class="container-fluid footer">
    <p><a href="#" target="_blank" title=""> Pharmacy Management System</a></p>
  </section>
 -->
	<script  src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script  type="text/javascript" src="js/slick.min.js"></script>
  <script  type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script  type="text/javascript" src="js/canvasjs.min.js"></script>
	<script src="https://use.fontawesome.com/e201e7ab0c.js"></script>
   <script type="text/javascript">
      $(document).ready( function () {
          $('#myTable').DataTable({
        "order": []
    });
      } );
   </script>
   <script type="text/javascript">
      $(document).ready( function () {
          $('#myTables').DataTable({
        "order": []
    });
      } );
   </script>
  
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