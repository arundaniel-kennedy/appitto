<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/review.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <title>Review | Appitto</title>

      <script>
        //alert(sessionStorage.getItem("store"));
        (function ($) {
        $(document).ready(function(){
          $(".navbar").hide();
          $(function () {
            $(window).scroll(function () {
                    // set distance user needs to scroll before we fadeIn navbar
              if ($(this).scrollTop() >150) {
                $('.navbar').fadeIn();//fadeIn();
              } else {
                $('.navbar').fadeOut();//fadeOut();
              }
            });
          });
         });
        }(jQuery));

        function color(){
          document.getElementById('header').style.backgroundColor=sessionStorage.getItem("one");
          document.getElementById('navbar').style.backgroundColor=sessionStorage.getItem("one");
        }

      </script>

      <style>
      .hovering:hover{
        box-shadow: 2px 1px 20px black;
      }

      .curve{
        border-radius: 10px;
      }

      </style>
  </head>
  <body onload="color();">

    <nav class="navbar fixed-top text-center" id="navbar" role="navigation" style="color:white">
      <a class="btn btn-outline-light" href="../index.html">BACK</a>
      <span class="navbar-brand mb-0 h1">
        <h3 style="color:white;font-size:2.5rem;">REVIEW</h3>
      </span>
    </nav>

    <div id="header">
      <a class="btn btn-outline-light mt-2 ml-2" href="../index.html">BACK</a><br><br><br>
      <h1 class="text-center pt-5">Reviews</h1>
    </div>




    <div class="container mt-5 mb-5">

      <div class="row">


        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';">
            <img src="../static/companies/1.png" alt="" height="200" width="200">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br><br>
          <img src="../static/companies/2.png" alt="" height="100" width="80">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br><br>
          <img src="../static/companies/3.png" alt="" height="100" width="100">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br><br><br>
          <img src="../static/companies/4.png" alt="" height="50" width="150">
        </div>

      </div>

      <div class="row">

        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br><br>
          <img src="../static/companies/5.png" alt="" height="100" width="100">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br>
          <img src="../static/companies/6.png" alt="" height="150" width="200">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';">
          <img src="../static/companies/7.png" alt="" height="200" width="200">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br>
          <img src="../static/companies/8.png" alt="" height="150" width="200">
        </div>

      </div>

      <div class="row">

        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';">
          <img src="../static/companies/9.png" alt="" height="200" width="200">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';">
          <img src="../static/companies/10.png" alt="" height="200" width="200">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br><br><br />
          <img src="../static/companies/11.png" alt="" height="50" width="200">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br><br><br>
          <img src="../static/companies/12.png" alt="" height="70" width="200">
        </div>

      </div>

      <div class="row">

        <div class="col-3 text-center hovering curve" onclick="location.href='phone.html';">
          <img src="../static/companies/13.png" alt="" height="250" width="250">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br><br>
          <img src="../static/companies/14.png" alt="" height="80" width="200">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';"><br><br>
          <img src="../static/companies/15.png" alt="" height="100" width="100">
        </div>
        <div class="col-3 text-center mt-3 hovering curve" onclick="location.href='phone.html';">
          <img src="../static/companies/16.png" alt="" height="200" width="200">
        </div>

      </div>

    </div>

    <!--div class="container mt-5">
      <div class="row">
        <?php
          //for($i=1;$i<17;$i++){
            #echo "<div class=\"col-3 text-center hovering curve mb-5\" onclick=\"location.href='phone.html';\">
            #  <img src=\"../static/companies/".$i.".png\" height=\"200\" width=\"200\">
            #</div>";
          #}
        ?>
      </div>
    </div-->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
