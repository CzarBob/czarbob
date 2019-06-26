<!DOCTYPE html>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Czar Zambrano</title>
  <link rel="stylesheet" href="css/style.css">
  <!--<link rel="stylesheet" type=¨text/css¨ href="js/images.js">-->
</head>
<body>
  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Czar Zambrano
      </span>
    </div>
  </div>

  <section class="section section-light">
    <h2>IT'S ALL ABOUT ME!</h2>
    <p>
      I am an IT Professional with experience in levels of PHP, SQL and Delphi Programming. Also have experience in Customer and Client support, Client relations, Black box testing and System Implementation. Have valuable experience is sales (SAP Products). Supportive and enthusiastic team player dedicated to streamlining processes.  
    </p>

     <span class = "fade">
      <img class = "img" src="img/php logo.png"></img>
      <img class = "img" src="img/sqllogo.png"></img>
      <img class = "img" src="img/delphilogo.png"></img>
      <img class = "img" src="img/clientsupportlogo.png"></img>
      <img class = "img" src="img/htmllogo.png"></img>
      <img class = "img" src="img/csslogo.png"></img>
      <img class = "img" src="img/sapb1logo.png"></img>
     
    </span>
  </section>

  <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        <q>Dum spiro spero</q>
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>HOBBIES AND INTERESTS</h2>
    <p>
      I am an enthusiastic person. I enjoy a lot of things, may it be a physical or not-so-physical type of activity. I enjoy surfing the net and try to discover new things, such as reading posts in Quora.com. I am an avid Bastketball fan (Lakers 4 Life!), that is why I am mostly updated in latest news about basketball. I am also fond of watching tv shows like Game of Thrones, Walking Dead and many more. I also watching anime and read manga. I like socializing with people and I enjoy talking to people. During my free time, I usually play mobile games such as Mobile Legends and PUBGM.
    </p>

     <span class = "fade">
      <img class = "img" src="img/ball.png"></img>
      <img class = "img" src="img/lakerslogo.png"></img>
      <img class = "img" src="img/quoralogo.png"></img>
      <img class = "img" src="img/gottargaryen.png"></img>
      <img class = "img" src="img/oplogo.png"></img>
      <img class = "img" src="img/mllogo.png"></img>
      <img class = "img" src="img/pubgmlogo.png"></img>
    </span>
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        <q>Quam bene vivas refert non quam diu</q>
      </span>
    </div>
  </div>

  <section class="section section-dark">
    <h2>CONNECT WITH ME!</h2>
    <p>
        Don't hesitate to connect with me through my social media accounts. I would love to be able to hear from you someday!
    </p>



     <span class = "fade">
      <img class = "img" src="img/facebook.png"></img>
      <img class = "img" src="img/instagram.png"></img>
      <img class = "img" src="img/twitter.png"></img>
      <img class = "img" src="img/skype.png"></img>
      <img class = "img" src="img/quora.png"></img>
      <img class = "img" src="img/spotify.png"></img>
      <img class = "img" src="img/linkedin.png"></img>
    </span>

  </section>



  <div class="pimg1">
    <div class="ptext">
      <span class="border">
        Czar Zambrano
      </span>
    </div>
  </div>




<script type="text/javascript">
  $(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fade").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});

</script>


</body>
</html>
